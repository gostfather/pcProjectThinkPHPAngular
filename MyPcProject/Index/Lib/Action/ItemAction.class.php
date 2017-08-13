<?php
class ItemAction extends Action {
	public function item(){
		$classify = I("item");
		$Item = D("Item");
		$res = $Item -> getList($classify);
		$this -> assign("classify",json_encode($res));
		$this->display("item");
	}
	
	public function _empty(){
		header('HTTP/1.1 404 Not Found');//如果访问不存在可以直接返回404，例如http://www.laotouwang.com/sdasdf
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
	}
}
?>