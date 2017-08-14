<?php
class OrderACtion extends Action {
	//进入订单页面
	public function order(){
		$uid = session('uid');
		if(empty($uid)){
			header("location:../Index/index?act=login&op=index");
		}
		$Order = D("Order");
		$getOrder = $Order -> getItem();
		$this -> assign("orderList",json_encode($getOrder));
		$this -> display("order");
	}
 	//订单信息
	public function uptoOrder(){
		//需要 地址id 配送时间 购物车商品id 留言
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Order = D("Order");
		/*$data["addressid"] = 7 ;
		$data["deliverytime"] = "2017-08-07 17:00";
		$data["message"] = "asdfasdfasdfasdfasdf7";
		$data["shopids"] = [26,28];*/
		$res = $Order -> uptoOrder($data);
		$this->ajaxReturn($res);
	}
	public function deleteOrder(){
		$ordernumber = I("ordernumber");
		$Order = D("Order");
		$res = $Order -> deleteOrder($ordernumber);
		$this->ajaxReturn($res);
	}
	//进入评论页
	public function comment(){
		$uid = session('uid');
		if(empty($uid)){
			header("location:../Index/index?act=login&op=index");
		}
		$Order = D("Order");
		$willComment = $Order -> willComment();
		$this -> assign("willComment",json_encode($willComment));
		$this -> display("comment") ;
	}
	
	public function subComment(){
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Order = D("Order");
		$res = $Order -> subComment($data);
		$this->ajaxReturn($res);
	}
	
	public function _empty(){
		header('HTTP/1.1 404 Not Found');//如果访问不存在可以直接返回404，例如http://www.laotouwang.com/sdasdf
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
	}
}