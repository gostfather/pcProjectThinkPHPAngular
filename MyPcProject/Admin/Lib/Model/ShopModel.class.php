<?php
	class ShopModel extends Model {
		public function upload($data){
			
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
		
		public function simpleList(){
			$images = M("images");
			$res = $images -> order("addtime DESC") -> select();
			if($res){
				$return["status"] = 1 ;
				$return["info"] = "查询成功";
				$return["res"]=$res;
			}else{
				$return["status"] = 2 ;
				$return["info"] = "系统错误";
			}
			return $return;
		}
	
	
	
	
	
}
?>