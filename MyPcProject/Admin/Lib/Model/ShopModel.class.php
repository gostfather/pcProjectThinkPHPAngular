<?php
	class ShopModel extends Model {
		function upload($data){
			
			$images = M("images");
			$data["addtime"] = time();
			$res = $images -> data($data) -> add();
			if($res){
				$info["info"]="上传成功";
				$info["status"]=1;
			}else{
				$info["info"]="上传失败";
				$info["status"]=2;
			}
			return($info);
			
		}

	
	
	
	
	
}
?>