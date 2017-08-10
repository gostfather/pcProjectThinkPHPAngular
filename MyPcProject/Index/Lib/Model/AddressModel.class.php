<?php
	class AddressModel extends Model {
		//获取地址
		public function getAddress(){
			$data["uid"] = session("uid");
			$address = M("useraddress");
			$res = $address -> where($data) -> order("addtime DESC") -> select();
			if($res){
				$return["info"] = "返回地址信息" ;
				$return["status"] = 1 ;
				$return["data"] = $res ;
			} else {
				$return["info"] = "没有地址信息" ;
				$return["status"] = 2 ;
			}
			return $return ;
		}
		//获取默认的地址
		public function getDefault(){
			$data["uid"] = session("uid");
			$data["is_default"] = 1;
			$address = M("useraddress");
			$res = $address -> where($data) -> find();
			if($res){
				$return["info"] = "返回默认地址信息" ;
				$return["status"] = 1 ;
				$return["data"] = $res ;
			} else {
				$return["info"] = "没有默认地址" ;
				$return["status"] = 2 ;
			}
			return $return ;
		}
		//上传用户地址
		public function addAddress($data){
			//data 里面有 姓名 区域 详细地址 电话  需要添加uid time
			$data["addtime"] = time();
			$data["addtime"] = session("uid");
			$address = M("useraddress");
			$res = $address -> data($data) -> add();
			//返回id
			if($res){
				$return["info"] = "写入成功" ;
				$return["status"] = 1 ;
				$return["id"] = $res ;
			} else {
				$return["info"] = "写入失败" ;
				$return["status"] = 2 ;
			}
			return $return ;
		}
		//修改地址信息
		public function updataAddress($data){
			$address = M("useraddress");
			$addtime["addtime"] = time();
			$res = $address -> where($data) -> data($addtime) -> save();
			if($res){
				$return["info"] = "修改成功";
				$return["status"] = 1 ;
			}else{
				$return["info"] = "修改失败";
				$return["status"] = 2 ;
			}
			return $return ;
		}
		//删除地址信息
		public function deleteAddress($data){
			$address = M("useraddress");
			$res = $address -> where($data) -> delete();
			if($res){
				$return["info"] = "删除成功";
				$return["status"] = 1 ;
			}else{
				$return["info"] = "删除失败";
				$return["status"] = 2 ;
			}
			return $return ;
		}		
}
?>