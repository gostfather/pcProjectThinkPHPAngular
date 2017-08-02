<?php
	class IndexModel extends Model {
		function checkUsers($data){
			
			$users = M("users");
			$res = $users -> where($data) -> find();
			if($res){
				$info["info"]="用户名密码正确";
				$info["status"]=1;
				session("AdminName",$data["name"]); 
			}else{
				$info["info"]="用户名或密码错误";
				$info["status"]=2;
			}
			return($info);
		}

	
	
	
	
	
}
?>