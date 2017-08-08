<?php
	class CateAction extends Action {

	public function cate_1074(){
		$Cate = D("Cate");
		$res = $Cate -> getList(0,4);
		$this -> assign("data",json_encode($res));
		$this -> display("cate-1074");
	}
	public function cate_1075(){
		$this->display("cate-1075");
	}
	
	
	
	
	public function getList(){
		$Cate = D("Cate");
		$page =I("page");
		if(empty($page)){
			$page = 0 ;
		}
		$res = $Cate -> getList($page,4);
		$this -> ajaxReturn($res);
	}
	
}
?>