<?php
	class CateModel extends Model {
		public function getList($page,$everPage){
			$images = M("images");
			$res = $images -> order("addtime DESC") -> group("classify") -> limit($page*$everPage,$everPage) -> select() ;
			for($i = 0 ;$i < count($res) ; $i++){
//				$arr = Array();
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$res[$i]["imgurl"] = $arr;
			}
			$totlePage = $this -> getPages($everPage);
			$return["info"] = $res;
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