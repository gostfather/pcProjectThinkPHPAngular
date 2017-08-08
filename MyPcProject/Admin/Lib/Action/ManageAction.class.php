<?php
class ManageAction extends Action {
    public function manage(){
    	$manage = D("Manage");
		$res = $manage -> getList(0,4);
		$this -> assign("data" , json_encode($res));
    	$this -> display("manage");
	}
	
	public function getList(){
		$manage = D("Manage");
		$page =I("page");
		if(empty($page)){
			$page = 0 ;
		}
		$res = $manage -> getList($page,4);
		$this -> ajaxReturn($res);
	}
	
	
}