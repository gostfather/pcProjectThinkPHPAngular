<?php
	class IndexModel extends Model {
		public function checkUpUser($data){
			//检查用户是否存在
			$user = M("users");
			$res = $user -> where("username='".$data["username"]."'") -> find();
			if($res){
				$return["info"] = "用户名已经存在";
				$return["status"] = 2;
			}else{
				//用户可以注册
				$data["addtime"] = date("Y-m-h",time());
				$data["pwd"] = md5((int)$data["pwd"]);
				$resUser =  $user -> data($data) -> add();
//				echo $user -> getLastSql();
				if($resUser){
					$return["info"] = "用户注册成功";
					$return["status"] = 1;
				}else{
					$return["info"] = "用户注册失败";
					$return["status"] = 3;
				}
				
			}
			return $return;
		}

	
	
	
	
	
}
?>