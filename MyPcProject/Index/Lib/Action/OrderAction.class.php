<?php
class OrderACtion extends Action {
 	//订单信息
	public function uptoOrder(){
		//需要 地址id 配送时间 购物车商品id 留言
		$str = file_get_contents("php://input");
		$data = json_decode($str,true);
		$Order = D("Order");
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