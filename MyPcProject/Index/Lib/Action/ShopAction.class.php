<?php
// 本类由系统自动生成，仅供测试用途
class ShopACtion extends Action {
    public function ShoppingCart(){
    		$classify = session("classify");
		if( !empty($classify) ){
			//添加一条数据
			$Shop = D("Shop");
			$res = $Shop -> addToShop($classify);
			$this -> assign("addOne" , $res);
			//直接显示到前面是否添加成功
			unset($_SESSION['classify']);
		}
			$Shop = D("Shop");
			$data = $Shop -> getList();
			$this -> assign("list" , $data);
	    	$this -> display("ShoppingCart");
//		}
	}
	public function getList(){
		$Shop = D("Shop");
		$data = $Shop -> getList();
		$this ->ajaxReturn($data);
	}
	//点击点加到购物车的按钮
	public function addToShop(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> addToShop($classify);
		$this ->ajaxReturn($res);
	}
	//点击增加商品数量
	public function  addItem(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> addItem($classify);
		$this ->ajaxReturn($res);
	}
	//减少商品数量
	public function reduceItem(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> reduceItem($classify);
		$this ->ajaxReturn($res);
	}
	//删除商品
	public function deleteItem(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> deleteItem($classify);
		$this ->ajaxReturn($res);
	}
}