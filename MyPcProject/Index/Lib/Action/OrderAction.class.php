<?php
class OrderACtion extends Action {
	//进入订单页面
	public function order(){
		$uid = session('uid');
		if(empty($uid)){
			header("location:../Index/index?act=login&op=index");
		}
		$this -> display("order");
	}
 	//订单信息
	public function uptoOrder(){
		//需要 地址id 配送时间 购物车商品id 留言
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Order = D("Order");
		/*$data["addressid"] = 7 ;
		$data["deliverytime"] = "2017-08-07";
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
}