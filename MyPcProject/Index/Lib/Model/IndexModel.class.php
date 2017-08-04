<?php
	class IndexModel extends Model {
		public function checkUpUser($data){
			//检查用户是否存在
			$user = M("Users");
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
		
		public function loginUser($data){
			//检查能否登录
			$user = M("Users");
			$data["pwd"] = md5((int)$data["pwd"]);
			$res = $user -> where($data) -> find();
			if($res){
				//存session
				session("uid",$res["id"]); 
				session("username",$res["username"]); 
				$return["id"]=$res["id"];
				$return["username"]=$res["username"];
				$return["status"]=1;
				$return["info"]="登陆成功";
			}else{
				$return["status"]=2;
				$return["info"]="用户不存在";
			}
			return $return;
		}

	
	
	
	
	
}
?>