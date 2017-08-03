<?php
class ShopAction extends Action {
    public function index(){
    	if(empty($_SESSION["AdminName"])){
    		header("location:index.php/Index/index");
    	}
    	$this->display("index");
	}
	public function upload(){
		$data = file_get_contents("php://input");
		print_r($data);
		print_r($_FILES);
//  	$this->ajaxReturn($_POST);
	}

}