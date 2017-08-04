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
		}elseif ($act==="login" && $op==="logout"){
			unset($_SESSION['username']);
			unset($_SESSION['uid']);
			$this->display("index");
		}elseif ($str[0] === "member" && empty($_SESSION["username"]) ){
			$this->display("login");
		}else{
    		$this->display("index");
		}
	}
	public function valentine(){
		$this -> display("valentine");
	}
	//用户登录
	public function loginUser(){
		$Index = D("Index");
		$str = file_get_contents("php://input");
		$sureData = json_decode($str,true);
		//实例化模型
		$res = $Index->loginUser($sureData);
		$this -> ajaxReturn($res);
	}


	//用户注册
	public function upUser(){
		$Index = D("Index");
		$str = file_get_contents("php://input");
		$sureData = json_decode($str,true);
		//实例化模型
		$res = $Index->checkUpUser($sureData);
		$this -> ajaxReturn($res);
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