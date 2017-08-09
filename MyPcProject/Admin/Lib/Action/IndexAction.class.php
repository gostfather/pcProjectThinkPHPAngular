<?php
class IndexAction extends Action {
    public function index(){
    	$this->display("index");
	}
	public function checkUsers(){
    	$str = file_get_contents("php://input");
		$sureData = json_decode($str,true);
		$data["name"] = $sureData["username"];
		$data["pwd"] = $sureData["pwd"];
		$users = D("Index");
		$res = $users -> checkUsers($data);
		$this -> ajaxReturn($res);
	}
	
}