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
	public function addToShop($classify,$count){
		if($count){
			$number = $count;
		}else{
			$number = 1;
		}
		$data["addtime"] = time();
		$data["uid"] = session("uid");
		if(empty(session("uid"))){
			$return["info"] = "请登录";
			$return["status"] = 3;
			session("classify",$classify);
		}else{
			$findData["classify"] = $classify;
			$findData["uid"] = session("uid") ;
			$findData["is_order"] = "" ;
			$findData["is_delete"] = 1 ;
			$shop = M("shop");
			$find = $shop -> where($findData) -> find();
			if($find){
				//2.1  是否假删    假删
				$where["uid"] = session("uid");
				$where["classify"] = $classify;
				$where["is_order"] = "";
				$where["is_delete"] = 0;
				$find = $shop -> where($where) -> find();
				if($find){
					$idDelete["is_delete"] = 1;
					$idDelete["count"] = $number;
					$hasDelete = $shop -> where($where) -> data($idDelete) -> save();
					if($hasDelete){
						$return["id"] = $find["id"];
						$return["info"] = "添加成功";
						$return["status"] = 1;
					}else{
						$return["info"] = "添加失败2.1";
						$return["status"] = 2;
					}
				}else{
					//2.2  不是假删  商品数量加1
					$where["is_delete"] = 1;
					$rockery = $shop -> where($where) -> find();
					if($count){
						$rockeryCount["count"] = $count;
						$addShop = $shop -> where($where) -> data($rockeryCount) -> save();
						$return["id"] = $rockery["id"];
						$return["info"] = "添加成功";
						$return["status"] = 1;
					}else{
						$rockeryCount["count"] = $rockery["count"]+1;
						$addShop = $shop -> where($where) -> data($rockeryCount) -> save();
						$return["id"] = $rockery["id"];
						$return["info"] = "添加成功";
						$return["status"] = 1;
					}

					/*if($addShop){
						
					}else{
						$return["data"] = $str;
						$return["info"] = "添加失败2.2";
						$return["status"] = 2;
					}*/
				}
			}else{
				$data["classify"] = $classify;
				$data["count"] = $number ;
				$res = $shop -> data($data) -> add();
				if($res){
					$resFind = $shop -> where($data) -> find();
					$return["id"] = $resFind["id"];
					$return["info"] = "添加成功";
					$return["status"] = 1;
				}else{
					$return["info"] = "添加失败1.2";
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