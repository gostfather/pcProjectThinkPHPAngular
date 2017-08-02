<?php

class IndexAction extends Action {
    public function index(){
    	$act = I('get.act');
		$op = I('get.op');
		$str = explode('_',$act); 
		if($act==="login" && $op==="register"){
			$this->display("register");
		}elseif ($act==="login" && $op==="index"){
			$this->display("login");
		}elseif ($str[0] === "member" && empty($_SESSION["username"]) ){
			$this->display("login");
		}else{
    		$this->display("index");
		}
	}



	// 验证
	public function verify(){
        import("ORG.Util.Image");
        Image::buildImageVerify();
    }
   	public function check() {

        $this -> ajaxReturn($_SESSION["verify"]);
    }
	/*public function checkUsers(){
		if(session(uid)&&session(username))
	}*/
}