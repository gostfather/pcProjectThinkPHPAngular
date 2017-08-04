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
		$res = $Cate -> getList();
		$this -> ajaxReturn($res);
	}
	
}
?>