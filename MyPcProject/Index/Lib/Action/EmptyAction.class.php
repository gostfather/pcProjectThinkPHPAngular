<?php
class EmptyAction extends Action{
    function _empty(){ 
        header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码 
        $this->display("Public:404"); 
    } 
	 function index(){
        header("HTTP/1.0 404 Not Found");
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
    }
} 
?>