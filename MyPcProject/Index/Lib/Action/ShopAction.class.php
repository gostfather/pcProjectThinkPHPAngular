<?php
// 本类由系统自动生成，仅供测试用途
class ShopACtion extends Action {
    public function ShoppingCart(){
    	/*$uid = session('uid');
		if(empty($uid)){
			//登录页面
			header("localhost://Index/login")
		}else{*/
			$Shop = D("Shop");
			$data = D("Shop") -> getList();
			$this -> assign("list" , $data);
	    	$this -> display("ShoppingCart");
//		}
	}
	public function getList(){
		$Shop = D("Shop");
		$data = D("Shop") -> getList();
		$this ->ajaxReturn($data);
	}
	//点击点加到购物车的按钮
	public function addToShop(){
		$classify=I("classify")
		$Shop = D("Shop");
		$res = D("Shop") -> addToShop($classify);
		$this ->ajaxReturn($res);
	}
	//点击增加商品数量
	public function  addItem(){
		$classify=I("classify")
		$Shop = D("Shop");
		$res = D("Shop") -> addItem($classify);
		$this ->ajaxReturn($res);
	}
	//减少商品数量
	public function reduceItem(){
		$classify=I("classify")
		$Shop = D("Shop");
		$res = D("Shop") -> reduceItem($classify);
		$this ->ajaxReturn($res);
	}
	//删除商品
	public function deleteItem(){
		$classify=I("classify")
		$Shop = D("Shop");
		$res = D("Shop") -> deleteItem($classify);
		$this ->ajaxReturn($res);
	}
}