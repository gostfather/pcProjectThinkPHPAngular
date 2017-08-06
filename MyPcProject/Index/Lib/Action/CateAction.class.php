<?php
	class CateAction extends Action {

	public function cate_1074(){
		$this->display("cate-1074");
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
		$res = $Cate -> getList($page,3);
		$this -> ajaxReturn($res);
	}
	
}
?>