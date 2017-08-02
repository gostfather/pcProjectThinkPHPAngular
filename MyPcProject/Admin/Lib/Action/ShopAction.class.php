<?php
class ShopAction extends Action {
    public function index(){
    	if(empty($_SESSION["AdminName"])){
    		header("location:index.php/Index/index");
    	}
    	$this->display("index");
	}

}