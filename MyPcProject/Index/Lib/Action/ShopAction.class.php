<?php
// 本类由系统自动生成，仅供测试用途
class ShopACtion extends Action {
    public function ShoppingCart(){
    	if( empty(session('uid')) ){
			header("location:../Index/index?act=login&op=index");
		}
		$classify = session("classify");
		if( !empty($classify) ){
			//添加一条数据
			$Shop = D("Shop");
			$res = $Shop -> addToShop($classify);
			$this -> assign("addOne" , $res);
			//直接显示到前面是否添加成功
			unset($_SESSION['classify']);
		}
		//登陆状态的添加购物车可以直接跳转
		$Shop = D("Shop");
		$list = $Shop -> getList();
		$this -> assign("list" , json_encode($list));
    	$this -> display("shoppingCart");
	}
	public function ShoppingCheck() {
		$this -> display("shoppingCheck");
	}
	//获取购物车小计
	public function subtotal(){
		$Shop = D("Shop");
		$res = $Shop -> getSubtotal();
		$this ->ajaxReturn($res);
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

	//传到订单页面
	public function gotoCheck(){
		$ArrPOST = array();
		if(I("get.id")){
			$ArrPOST[] = (int)I("id");
		}else{
			if(empty($_POST["arr"])){
				header("location:../Shop/ShoppingCart");
			}else{
				$ArrPOST = $_POST["arr"];
			}
		}
		if(empty(session('uid'))){
			header("location:../Index/index?act=login&op=index");
		}
		$Address = D("Address");
		$getAddress = $Address -> getAddress();
		$this -> assign("address" ,json_encode($getAddress));
		//返回地址信息
		$default = $Address -> getDefault();
		$this -> assign("default" ,json_encode($default));
		//返回默认的地址
		$Shop = D("Shop");
		$res = $Shop -> getShop($ArrPOST);
		$return = json_encode($res["data"]);
		/*
		* Author: doudou
		*/ 
		// 返回发票信息
		$this -> assign("data",$return);
		//返回购物车信息
		$this -> display("shoppingCheck");
	}
	
	//从商品详情跳转到订单页
	public function itemToCheck(){
		if(empty(session('uid'))){
			$return["status"]= 5 ;
			$return["info"] = "用户未登录" ;
		}else{
			$str = file_get_contents("php://input");
			$data = json_decode($str,true);
			$Shop = D("Shop");
			$res = $Shop -> addToShop($data["classify"],$data["count"]);
			$return = $res;
		}
		$this -> ajaxReturn($return);
	}
	// 确认信息成功，跳转到支付页面
	public function toSubmit() {
		//查询订单信息
		$order = D("Order");
		$res = $order -> getOneItem();
		// echo "<pre>";
		// var_dump($res);
		$this -> assign("data",json_encode($res));
		$this -> display("shoppingSubmit");
	}

	public function _empty(){
		header('HTTP/1.1 404 Not Found');//如果访问不存在可以直接返回404，例如http://www.laotouwang.com/sdasdf
		$this->display('Empty:index');//如果想设计404的模板，要把这个注释去掉，然后建立一个Empty下index.html模板。
	}
	
}