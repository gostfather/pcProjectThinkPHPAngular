<?php
	class ShopModel extends Model {
		
		public function getList(){
			$uid = session("uid");
			$shop = M("shop");
			$img = M("images");
			$res = $shop -> where("uid=".$uid) -> select();
			for($i= 0 ; $i < count($res) ; $i++){
				$data[] = $this -> getImages($res[$i]["classify"]);
			}
			if($res){
				$return["info"] = "查询成功";
				$return["status"] = 1;
				$return["data"] = $data;
			}else{
				$return["info"] = "购物车暂无数据";
				$return["status"] = 2;
			}
			return $return;
		}
		
		public function getImages($classify){
			$shop = M("shop");
			$img = M("images");
			$img = $shop -> where("classify='".$classify."'") -> find();
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
				$data["count"] = 1;
				$shop = M("shop");
	//			$find = $shop ->
				$res = $shop -> data($data) -> add();
				if($res){
					$return["info"] = "添加成功";
					$return["status"] = 1;
				}else{
					$return["info"] = "添加失败";
					$return["status"] = 2;
				}
			}
			return $return;
		}
		//点击增加商品数量
		public function addItem($classify){
			$data["uid"] = session("uid");
			$data["classify"] = $classify;
			$shop = M("shop");
			$find = $shop -> where($data) -> find();
			$find["count"] = $find["count"]+1;
			$res = $shop -> where($data) -> data($find) -> save();
			if($res){
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
			$data["classify"] = $classify;
			$shop = M("shop");
			$find = $shop -> where($data) -> find();
			$find["count"] = $find["count"]-1;
			$res = $shop -> where($data) -> data($find) -> save();
			if($res){
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
			$data["classify"] = $classify;
			$shop = M("shop");
			$res = $shop -> where($data) -> delete();

			if($res){
				$return["info"] = "删除成功";
				$return["status"] = 1;
			}else{
				$return["info"] = "删除失败";
				$return["status"] = 2;
			}
			return $return;
		}

	
	
	
	
	
}
?>