<?php
class ItemModel extends Model {
	public function getList($data){
		$images = M("images");
		$data = $images -> where("classify='".$data."'") -> select();
		for($k=0 ; $k < count($data) ; $k++){
			 $arr[$k] = $data[$k]["imgurl"];
		}
		$data[0]["imgurl"] = $arr;
		$return["info"] = $data[0];
		$return["status"] = 1;
		return $return;
	}
	
	public function recommend(){
		$images = M("images");
		$data = $images -> group("classify") -> order("addtime DESC") -> limit(0,5) -> select(); 
		$return["data"] = $data;
		$return["status"] = 1;
		return $return;
	}


}
?>