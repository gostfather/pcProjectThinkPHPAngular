<?php

class IndexAction extends Action {
    public function index(){
    	$act = I('get.act');
		$op = I('get.op');
		$str = explode('_',$act); 
		if($act==="login" && $op==="register"){
			$this->display("register");
		}elseif ($str[0] === "member" && empty($_SESSION["username"]) ){
			$this->display("login");
		}else{
    		$this->display("index");
		}
	}



	
	/*public function checkUsers(){
		if(session(uid)&&session(username))
	}*/
}