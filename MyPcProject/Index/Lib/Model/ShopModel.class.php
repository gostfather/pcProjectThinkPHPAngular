<?php
class ShopModel extends Model {
	public function getList(){
		$uid = session("uid");
		$shop = M("shop");
		$img = M("images");
		$see["uid"] = $uid ;
		$see["is_delete"] = 1 ;
		$see["is_order"] = "" ;
		$res = $shop -> where($see) -> order("addtime DESC") -> select();
		for($i= 0 ; $i < count($res) ; $i++){
			$data = $this -> getImages($res[$i]["classify"]);
			$data["id"] = $res[$i]["id"];
			$data["count"] = $res[$i]["count"];
			$arr[]=$data;
			
		}
		if($res){
			$return["info"] = "查询成功";
			$return["status"] = 1;
			$return["data"] = $arr;
		}else{
			$return["info"] = "购物车暂无数据";
			$return["status"] = 2;
		}
		return $return;
	}
	public function getSubtotal(){
		$shop = M("shop");
		$img = M("images");
		$uid = session("uid");
		$see["uid"] = $uid ;
		$see["is_delete"] = 1 ;
		$see["is_order"] = "" ;
		$res = $shop -> where($see) -> order("addtime DESC") -> select();
		if($res){
			$subtotal = 0 ;
			$number = count($res) ;
			for($i= 0 ; $i < $number ; $i++){
				$data = $this -> getImages($res[$i]["classify"]);
				//拿到单价
				$StorePrice = $data["StorePrice"];
				$count = $res[$i]["count"];
				$subtotal += (int)$count * (int)$StorePrice ;
			}
			$return["status"]=1;
			$return["info"] = "查询成功";
			$return["number"] = $number;
			$return["subtotal"] = $subtotal;
		}else{
			//系统出错
			$return["status"]=2;
			$return["info"] = "查询失败";
		}
		return $return;
	}
	public function getImages($classify){
		$shop = M("shop");
		$img = M("images");
		$img = $img -> where("classify='".$classify."'") -> find();
		return $img;
	}
	//添加到购物车
	public function addToShop($classify){
		$data["addtime"] = time();
		$data["uid"] = session("uid");
		if(empty(session("uid"))){
			$return["info"] = "请登录";
			$return["status"] = 3;
			session("classify",$classify);
		}else{
			$data["classify"] = $classify;
			$data["count"] = 1 ;
			$shop = M("shop");
			$find = $shop -> where("classify='".$classify."' AND is_order=''") -> find();
			if($find){
				$return["info"] = "购物车已经存在此商品";
				$return["status"] = 4;
			}else{
				$res = $shop -> data($data) -> add();
				if($res){
					$return["info"] = "添加成功";
					$return["status"] = 1;
				}else{
					$return["info"] = "添加失败";
					$return["status"] = 2;
				}
			}
		}
		return $return;
	}
	//点击增加商品数量
	public function addItem($classify){
		$data["uid"] = session("uid");
		$data["id"] = $classify;
		$data["is_delete"] = 1 ;
		$data["is_order"] = "" ;
		$shop = M("shop");
		$find = $shop -> where($data) -> find();
		$find["count"] = $find["count"]+1;
		$res = $shop -> where($data) -> data($find) -> save();
		if($res){
			$return["count"] = $find["count"];
			$return["info"] = "更新成功";
			$return["status"] = 1;
		}else{
			$return["info"] = "更新失败";
			$return["status"] = 2;
		}
		return $return;
	}
	//减少商品数量
	public function reduceItem($classify){
		$data["uid"] = session("uid");
		$data["id"] = $classify;
		$data["is_delete"] = 1 ;
		$data["is_order"] = "" ;
		$shop = M("shop");
		$find = $shop -> where($data) -> find();
		if($find["count"] <= 1 ){
			$find["count"] = 1;
		}else{
			$find["count"] = $find["count"]-1;
		}
		$res = $shop -> where($data) -> data($find) -> save();
		if($res){
			$return["count"] = $find["count"];
			$return["info"] = "更新成功";
			$return["status"] = 1;
		}else{
			$return["info"] = "更新失败";
			$return["status"] = 2;
		}
		return $return;
	}
	//删除商品
	public function deleteItem($classify){
		$data["uid"] = session("uid");
		$data["id"] = $classify;
		$shop = M("shop");
		$find["is_delete"] = 0 ;
		$data["is_order"] = "" ;
		$res = $shop -> where($data) -> data($find) -> save();
		if($res){
			$return["info"] = "删除成功";
			$return["status"] = 1;
		}else{
			$return["info"] = "删除失败";
			$return["status"] = 2;
		}
		return $return;
	}
	
	public function getShop($arr){
		$uid = session("uid");
		$shop = M("shop");
		$img = M("images");
		$see["uid"] = $uid;
		$see["is_delete"] = 1;
		$see["is_order"] = "";
		$message = [];
		for($i = 0 ; $i < count($arr) ; $i ++){
			$see["id"] = (int)$arr[$i] ;
			$res = $shop -> where($see) -> find();
			$data = $this -> getImages($res["classify"]);
			$message[$i]["id"] = $res["id"];
			$message[$i]["count"] = $res["count"];
			$message[$i]["title"] = $data["title"];
			$message[$i]["imgurl"] = $data["imgurl"];
			$message[$i]["StorePrice"] = $data["StorePrice"];
		}
		if($res){
			$return["info"] = "查询成功";
			$return["status"] = 1;
			$return["data"] = $message;
		}else{
			$return["info"] = "购物车暂无数据";
			$return["status"] = 2;
		}
		return $return;
		
	}
	
}
?>