<?php
	class OrderModel extends Model {
		//上传订单信息
		public function uptoOrder($data){
			$order = M("order");
			$obj["addressid"] = $data["addressid"] ;
			$obj["deliverytime"] = $data["deliverytime"] ;
			$obj["bbs"] = $data["bbs"] ;
			//添加uid addtime 订单号
			$obj["uid"] = session("uid");
			$obj["addtime"] = time();
			$obj["ordernumber"] = (string)mt_rand(100, 999).(string)$data["uid"].(string)time();
			
			//处理传过来的购物车商品id;
			/*$shopid = $this -> dealid($data["shopid"]);
			$res = true ;
			for($i = 0 ; $i < count($shopid) ; $i ++){
				//使用同一个订单号 添加多条订单信息保存不一样的购物车商品id
				$obj["shopid"] = $shopid[$i] ;
				$add = $order -> data($obj) -> add();
				if(!$add){
					$res = false ;
					//如果添加失败了就返回添加失败并删除数据
					$order -> where($obj["ordernumber"]) -> delete();
				}
			}*/
			
			if($res){
				$return["info"] = "添加成功" ;
				$return["status"] = 1;
			} else{
				$return["info"] = "添加失败" ;
				$return["status"] = 2;
			}
			return $return;
		}
		//处理传过来的购物车商品id的函数
		/*public function dealid($data){
			
			return arr;
		}*/
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