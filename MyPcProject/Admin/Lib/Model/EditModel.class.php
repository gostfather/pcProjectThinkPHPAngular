<?php
	class EditModel extends Model {
		public function getOne($classify){
			$images = M("images");
			$res = $images -> where("classify='".$classify."'") -> select() ;
			for($i = 0 ; $i <count($res) ; $i ++){
				$message["id"][] = $res[$i]["id"];
				$message["imgurl"][] = $res[$i]["imgurl"];
			}
			$message["title"] = $res[0]["title"];
			$message["info"] = $res[0]["info"];
			$message["color"] = $res[0]["color"];
			$message["marketPrice"] = $res[0]["marketPrice"];
			$message["StorePrice"] = $res[0]["StorePrice"];
			$message["stock"] = $res[0]["stock"];
			$message["classify"] = $res[0]["classify"];
			$message["addtime"] = date("Y-m-d h:i:sa",$res[0]["addtime"]);
			if($res){
				$return["status"] = 1 ;
				$return["info"] = $message ;
			}else{
				$return["status"] = 2 ;
				$return["info"] = "数据库暂无此商品" ;
			}
			return $return;
		}	
		public function subChange($data){
			$find["classify"] = $data["classify"];
			unset($data["classify"]);
			$images = M("images");
			$res = $images -> where($find) -> data($data) -> save() ;
			if($res){
				$return["status"] = 1 ;
				$return["info"] = "修改成功" ;
			}else{
				$return["status"] = 2 ;
				$return["info"] = "修改失败" ;
			}
			return $return;
		}	
	
		public function upload($data){
			$images = M("images");
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
		
		public function del($data){
			$images = M("images");
			$res = $images -> where($data) -> delete();
			if($res){
				$info["info"]="删除成功";
				$info["status"]=1;
			}else{
				$info["info"]="删除失败";
				$info["status"]=2;
			}
			return($info);
		}
	
}
?>