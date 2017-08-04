<?php
	class CateModel extends Model {
		public function getList(){
			$images = M("images");
			$res = $images -> order("addtime DESC") -> group("classify") -> select() ;
			for($i = 0 ;$i < count($res) ; $i++){
//				$arr = Array();
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$res[$i]["imgurl"] = $arr;
			}
			$return["info"] = $res;
			$return["status"] = 1;
			return $return;
		}	
	
	
	
	
}
?>