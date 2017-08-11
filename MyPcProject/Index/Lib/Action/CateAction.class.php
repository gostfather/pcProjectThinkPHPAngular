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
	
}
?>