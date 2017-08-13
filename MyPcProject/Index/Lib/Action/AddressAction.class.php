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
	public function updataAddress(){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Address = D("Address");
		$res = $Address -> updataAddress($data);
		$this ->ajaxReturn($res);
	}
	//删除地址信息
	public function deleteAddress(){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Address = D("Address");
		$res = $Address -> deleteAddress($data);
		$this ->ajaxReturn($res);
	}
	public function _empty(){
		header('HTTP/1.1 404 Not Found');//如果访问不存在可以直接返回404，例如http://www.laotouwang.com/sdasdf
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
	}
}