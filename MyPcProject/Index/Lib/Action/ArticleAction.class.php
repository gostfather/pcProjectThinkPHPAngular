<?php
// 本类由系统自动生成，仅供测试用途
class ArticleAction extends Action {
    public function index(){
    	//获取参数
    	$act = I('get.article');
    	$this->display("article-".$act);
	}
}