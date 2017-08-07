<?php
	class AddressModel extends Model {
		//获取地址
		public function getAddress(){
			$data["uid"] = session("uid");
			$address = M("useraddress");
			$res = $address -> where($data) -> select();
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
		//上传用户地址
		public function uptoAddress($data){
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
	
	
	
	
}
?>