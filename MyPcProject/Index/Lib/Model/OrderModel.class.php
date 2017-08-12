<?php
class OrderModel extends Model {
	//上传订单信息
	public function uptoOrder($data){
		$order = M("order");
		$obj["addressid"] = $data["addressid"] ;
		$obj["deliverytime"] = $data["deliverytime"] ;
		$obj["message"] = $data["message"] ;
		//添加uid addtime 订单号
		$obj["uid"] = session("uid");
		$obj["addtime"] = time();
		$obj["ordernumber"] = (string)mt_rand(100, 999).(string)$obj["uid"].(string)time();
		$add = $order -> data($obj) -> add();
		if($add){
			$upLoadShops = $this -> dealid($data["shopids"],$obj["ordernumber"]);
			if($upLoadShops){
				$return["info"] = "添加订单信息成功，更新购物车成功" ;
				$return["status"] = 1;
			} else{
				$return["info"] = "添加订单信息成功，更新购物车失败" ;
				$return["status"] = 2;
			}
		}else{
			$return["info"] = "添加订单信息失败" ;
			$return["status"] = 3;
		}
		//使用同一个订单号   在购物车商品id后添加订单号表示存在于订单之中
		//处理传过来的购物车商品id;
		
		return $return;
	}
	//处理传过来的购物车商品id的函数
	public function dealid($data,$ordernumber){
		$return = true ;
		for($I = 0 ; $I < count($data) ; $I++){
			$shop = M("shop");
			$where["id"] = $data[$I];
			$order["is_order"] = $ordernumber ;
			$find = $shop -> where($where) -> data($order) -> save();
			if(!$find){
				$return = false ;
			}
		}
		return $return;
	}
	//删除信息
	public function deleteInfo($data){
		$order = M("order");
		$arr["ordernumber"] = $data ;
		$arr["uid"] = session("uid");
		$new["is_delete"] = 0 ;
		$res = $order -> where($arr) -> save($new);
		if($res){
			$return["info"] = "删除成功" ;
			$return["status"] = 1;
		} else{
			$return["info"] = "删除失败" ;
			$return["status"] = 2;
		}
		return $return;
	
	}
	public function getItem(){
		$order = M("order");
		$arr["uid"] = session("uid");
		$arr["is_delete"] = 1 ;
		$res = $order -> where($arr) -> select();
		if($res){
			$return["info"] = "查询成功" ;
			$return["status"] = 1;
			$return["data"] = $res;
		} else{
			$return["info"] = "查询失败" ;
			$return["status"] = 2;
		}
		return $return;
	
	}

}
?>