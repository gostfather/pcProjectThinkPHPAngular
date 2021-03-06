<?php
	class ManageModel extends Model {
		public function getList($page,$everPage,$keyWord){
			if (!empty($keyWord)){
				$where["classify"] = array('like',"$keyWord%");
				$where["info"] = array('like',"%$keyWord%");
				$where['_logic'] = 'OR';
			}
			$images = M("images");
			$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> limit($page*$everPage,$everPage) -> select() ;
			for($i = 0 ;$i < count($res) ; $i++){
//				$arr = Array();
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$res[$i]["imgurl"] = $arr;
				$res[$i]["addtime"] = date("Y-m-d h:i:sa",$res[$i]["addtime"]);
			}
			if ($res){
				$totlePage = $this -> getPages($everPage);
				$return["info"] = $res;
				$return["status"] = 1;
				$return["pages"] = $totlePage;
			}else{
				$return["info"] = "找不到信息";
				$return["status"] = 2;
			}
			
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