<?php
// 本类由系统自动生成，仅供测试用途
class ArticleAction extends Action {
    public function index(){
    	//获取参数
    	$act = I('get.article');
    	$this->display("article-".$act);
	}
	public function _empty(){
		header('HTTP/1.1 404 Not Found');//如果访问不存在可以直接返回404，例如http://www.laotouwang.com/sdasdf
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
	}
}