<?php

class IndexAction extends Action {
    public function index(){
    	$act = I('get.act');
		$op = I('get.op');
		if($act==="login" && $op==="register"){
			$this->display("register");
		}else{
    		$this->display("index");
		}
	}



	
	/*public function checkUsers(){
		if(session(uid)&&session(username))
	}*/
}