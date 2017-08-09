<?php

class AddressAction extends Action {
	//得到用户信息
	public function getAddress(){
		$Address = D("Address");
		$res = $Address -> getAddress();
		$this ->ajaxReturn($res);
	}
   	//用户信息上传
	public function addAddress(){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Address = D("Address");
		$res = $Address -> addAddress($data);
		$this ->ajaxReturn($res);
	}
	//修改地址信息
	public function updataAddress($data){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Address = D("Address");
		$res = $Address -> updataAddress($data);
		$this ->ajaxReturn($res);
	}
	//删除地址信息
	public function deleteAddress($data){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Address = D("Address");
		$res = $Address -> deleteAddress($data);
		$this ->ajaxReturn($res);
	}
}