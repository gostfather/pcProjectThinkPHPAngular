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
			$uid = session('uid');
			$classify = session('classify');
			if( $uid && $classify ){
				header("location:../Shop/ShoppingCart");
			}
			$res1 = $this -> getList([""],0,5);
			$res2 = $this -> getList(["玫瑰"],0,8);
			$res3 = $this -> getList(["长辈","百合"],0,8);
			$res4 = $this -> getList(["礼物",""],1,8);
			$this -> assign("newarr",json_encode($res1));
			$this -> assign("floor1",json_encode($res2));
			$this -> assign("floor2",json_encode($res3));
			$this -> assign("floor3",json_encode($res4));
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
	public function getList($keyWord,$page,$number){
		$search = D("Search");
		$res = $search -> IndexKeyWord($keyWord,$page,$number);
		return $res ;
	}	
}