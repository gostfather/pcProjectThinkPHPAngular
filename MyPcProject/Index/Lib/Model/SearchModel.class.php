<?php
class SearchModel extends Model {
	public function searchKeyWord($keyWord,$page,$everyPage){
		$images = M("images");
		$where['info'] = array('like',"%$keyWord%");
		$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> select() ;
		$totlePage =  ceil( count($res) / $everyPage ) ;
		
		$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> limit($page*$everyPage,$everyPage) -> select();
		if($res){
			for($i = 0 ;$i < count($res) ; $i++){
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$res[$i]["imgurl"] = $arr;
			}
			$return["info"]= "成功查询";
			$return["status"] = 1 ;
			$return["data"] = $res;
			$return["pages"] = $totlePage;
		}else{
			$return["info"]= "暂无此商品" ;
			$return["status"] = 2 ;
		}
		
		return $return;	
	}
	
	public function CateKeyWord($keyWord,$page,$everyPage){
		$images = M("images");
		for($I = 0 ; $I < count($keyWord);$I++){
			$where['info'] = array('like',"%".$keyWord[$I]."%");
		}
		$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> select() ;
		$totlePage =  ceil( count($res) / $everyPage ) ;
		
		$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> limit($page*$everyPage,$everyPage) -> select();
		if($res){
			for($i = 0 ;$i < count($res) ; $i++){
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$res[$i]["imgurl"] = $arr;
			}
			$return["info"]= "成功查询";
			$return["status"] = 1 ;
			$return["data"] = $res;
			$return["pages"] = $totlePage;
		}else{
			$return["info"]= "暂无此商品" ;
			$return["status"] = 2 ;
		}
		
		return $return;	
	}
	
	public function IndexKeyWord($keyWord,$page,$everyPage){
		$images = M("images");
		for($I = 0 ; $I < count($keyWord);$I++){
			$where['info'] = array('like',"%".$keyWord[$I]."%");
		}
		$where['_logic'] = "OR";
		$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> select() ;
		$totlePage =  ceil( count($res) / $everyPage ) ;
		
		$res = $images -> where($where) -> order("addtime DESC") -> group("classify") -> limit($page*$everyPage,$everyPage) -> select();
		if($res){
			for($i = 0 ;$i < count($res) ; $i++){
				$data = $images -> where("classify='".$res[$i]["classify"]."'") -> select();
				for($k=0 ; $k < count($data) ; $k++){
					 $arr[$k] = $data[$k]["imgurl"];
				}
				$res[$i]["imgurl"] = $arr;
			}
			$return["info"]= "成功查询";
			$return["status"] = 1 ;
			$return["data"] = $res;
			$return["pages"] = $totlePage;
		}else{
			$return["info"]= "暂无此商品" ;
			$return["status"] = 2 ;
		}
		
		return $return;	
	}
}
?>