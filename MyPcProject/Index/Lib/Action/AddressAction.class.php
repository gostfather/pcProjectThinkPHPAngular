<?php

class AddressAction extends Action {
	//得到用户信息
	public function getAddress(){
		$Address = D("Address");
		$res = $Address -> getAddress();
		$this ->ajaxReturn($res);
	}
   	//用户信息上传
	public function uptoAddress(){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Address = D("Address");
		$res = $Address -> uptoAddress($data);
		$this ->ajaxReturn($res);
	}
}