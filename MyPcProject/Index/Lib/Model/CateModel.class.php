<?php
	class CateModel extends Model {
		public function getList($page,$everPage){
			$images = M("images");
			$res = $images -> order("addtime DESC") -> group("classify") -> limit($page*$everPage,$everPage) -> select() ;
			$message = [] ;
			for($i = 0 ;$i < count($res) ; $i++){
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				$arr = array();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$message[$i]["classify"] = $res[$i]["classify"] ;
				$message[$i]["title"] = $res[$i]["title"] ;
				$message[$i]["info"] = $res[$i]["info"] ;
				$message[$i]["color"] = $res[$i]["color"] ;
				$message[$i]["marketPrice"] = $res[$i]["marketPrice"] ;
				$message[$i]["StorePrice"] = $res[$i]["StorePrice"] ;
				$message[$i]["stock"] = $res[$i]["stock"] ;
				$message[$i]["imgurl"] = $arr;
			}
			$totlePage = $this -> getPages($everPage);
			$return["info"] = $message;
			$return["status"] = 1;
			$return["pages"] = $totlePage;
			return $return;
		}	
		//获取总条数
		public function getPages($everPage){
			$images = M("images");
			$res = $images -> order("addtime DESC") -> group("classify") -> select() ;
			return ceil(count($res)/$everPage);
		}
	
}
?>