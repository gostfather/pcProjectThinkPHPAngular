<?php
	class IndexModel extends Model {
		public function checkUpUser($data){
			//检查用户是否存在
			$user = M("users");
			$res = $users ->where($data["username"]) -> find();
			if($res){
				$return["info"] = "用户名已经存在";
				$return["status"] = 2;
			}else{
				//用户可以注册
				$return["info"] = "用户注册成功";
				$return["status"] = 1;
			}
			return $return;
		}

	
	
	
	
	
}
?>