<?php
	class CateAction extends Action {

	public function cate_1074(){
		$Cate = D("Cate");
		$res = $Cate -> getList(0,12);
		$this -> assign("data" , json_encode($res));
		$this->display("cate-1074");
	}
	public function cate_1075(){
		$this->display("cate-1075");
	}
	
	public function CateKeyWord() {
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$keyWord = $data["arr"];
		$page = $data["page"];
		if(empty($page)){
			$page = 0 ;
		}
		$search = D("Search");
		$res = $search -> CateKeyWord($keyWord,$page,12);
		$this -> ajaxReturn($res);
	}
	
	
	public function getList(){
		$Cate = D("Cate");
		$page =I("page");
		if(empty($page)){
			$page = 0 ;
		}
		$res = $Cate -> getList($page,12);
		$this -> ajaxReturn($res);
	}
	public function priceSort(){
		$Cate = D("Cate");
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$page =I("page");
		if(empty($page)){
			$page = 0 ;
			//true 就是按倒叙排列
			if($data["desc"]){
				$ascend = "DESC";
			}else{
				$ascend = "unDESC";
			}
		}
		$res = $Cate -> getList($page,12,$ascend);
		$this -> ajaxReturn($res);
	}
	
	public function _empty(){
		header('HTTP/1.1 404 Not Found');//如果访问不存在可以直接返回404，例如http://www.laotouwang.com/sdasdf
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
	}
	
}
?>