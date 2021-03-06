<?php
class OrderModel extends Model {
	//上传订单信息
	public function uptoOrder($data){
		$order = M("order");
		$obj["addressid"] = $data["addressid"] ;
		$obj["deliverytime"] = $data["deliverytime"] ;
		$obj["message"] = htmlspecialchars($data["message"]) ;
		//添加uid addtime 订单号
		$obj["uid"] = session("uid");
		$obj["addtime"] = time();
		$obj["ordernumber"] = (string)mt_rand(100, 999).(string)$obj["uid"].(string)time();
		$add = $order -> data($obj) -> add();
		if($add){
			$upLoadShops = $this -> dealid($data["shopids"],$obj["ordernumber"]);
			if($upLoadShops){
				$return["info"] = "添加订单信息成功，更新购物车成功" ;
				$return["status"] = 1;
			} else{
				$return["info"] = "添加订单信息成功，更新购物车失败" ;
				$return["status"] = 2;
			}
		}else{
			$return["info"] = "添加订单信息失败" ;
			$return["status"] = 3;
		}
		//使用同一个订单号   在购物车商品id后添加订单号表示存在于订单之中
		//处理传过来的购物车商品id;
		
		return $return;
	}
	//处理传过来的购物车商品id的函数
	public function dealid($data,$ordernumber){
		$return = true ;
		for($I = 0 ; $I < count($data) ; $I++){
			$shop = M("shop");
			$where["id"] = $data[$I];
			$order["is_order"] = $ordernumber ;
			$find = $shop -> where($where) -> data($order) -> save();
			if(!$find){
				$return = false ;
			}
		}
		return $return;
	}
	//删除信息
	public function deleteInfo($data){
		$order = M("order");
		$arr["ordernumber"] = $data ;
		$arr["uid"] = session("uid");
		$new["is_delete"] = 0 ;
		$res = $order -> where($arr) -> save($new);
		if($res){
			$return["info"] = "删除成功" ;
			$return["status"] = 1;
		} else{
			$return["info"] = "删除失败" ;
			$return["status"] = 2;
		}
		return $return;
	
	}
	//获取订单列表
	public function getItem(){
		$order = M("order");
		$shop = M("shop");
		$images = M("images");
		$arr["uid"] = session("uid");
		$arr["is_delete"] = 1 ;
		$res = $order -> where($arr) -> select();
		$message = array();
		if($res){
			for($i = 0 ; $i <count($res) ; $i ++){
				$message[$i]["ordernumber"] = $res[$i]["ordernumber"];
				$message[$i]["addtime"] = date("Y-m-d H:i:s" , $res[$i]["addtime"]);
				$message[$i]["is_pay"] = $res[$i]["is_pay"];
				$message[$i]["is_receive"] = $res[$i]["is_receive"];
				$message[$i]["is_cancel"] = $res[$i]["is_cancel"];
				$message[$i]["totalmoney"] = 0 ;
				//区订单表中的 订单号   添加时间  是否付款  是否收货
//				$message[$i]["shops"] = $res[$i]["ordernumber"];
				$isOrder["is_order"] = $message[$i]["ordernumber"];
				$shoplist = $shop -> where($isOrder) -> select();
				//通过ordernumber 去找购物车中的信息
				if($shoplist){
					for($k = 0 ; $k < count($shoplist) ; $k++){
						$count = $shoplist[$k]["count"];
						//拿到商品数量
						$classify["classify"] = $shoplist[$k]["classify"];
						//拿到classify 去商品表找一条 图片 单价和title
						$oneImage = $images -> where($classify) -> find();
						$message[$i]["shops"][$k]["classify"] = $classify["classify"];
						$message[$i]["shops"][$k]["imgurl"] =  $oneImage["imgurl"];
						$message[$i]["shops"][$k]["title"] =  $oneImage["title"];
						$message[$i]["shops"][$k]["StorePrice"] =  $oneImage["StorePrice"];
						$message[$i]["shops"][$k]["count"] =  $count;
						$message[$i]["totalmoney"] += $count * $oneImage["StorePrice"] ;
					}
					$return["info"] = "查询成功" ;
					$return["status"] = 1;
					$return["data"] = $message;
				}else{
					$return["info"] = "查询失败，获取购物车信息失败" ;
					$return["status"] = 3;
					break ;
				}
			}
		}else{
			$return["info"] = "查询失败，没用订单" ;
			$return["status"] = 2;
		}

		return $return;
	
	}
	//最新的那一条
	public function getOneItem(){
		$order = M("order");
		$shop = M("shop");
		$images = M("images");
		$arr["uid"] = session("uid");
		$arr["is_delete"] = 1 ;
		// 该用户未删除的按时间排序，最新的一条订单
		$res = $order -> where($arr) -> order("addtime DESC") -> find();
		$message = array();
		if($res){
			$message["ordernumber"] = $res["ordernumber"];
			$message["addtime"] = date("Y-m-d H:i:s" , $res["addtime"]);
			$message["is_pay"] = $res["is_pay"];
			$message["is_receive"] = $res["is_receive"];
			$message["is_cancel"] = $res["is_cancel"];
			//区订单表中的 订单号   添加时间  是否付款  是否收货
//				$message[$i]["shops"] = $res[$i]["ordernumber"];
			$isOrder["is_order"] = $message["ordernumber"];
			$shoplist = $shop -> where($isOrder) -> select();
			//通过ordernumber 去找购物车中的信息
			if($shoplist){
				for($k = 0 ; $k < count($shoplist) ; $k++){
					$count = $shoplist[$k]["count"];
					//拿到商品数量
					$classify["classify"] = $shoplist[$k]["classify"];
					//拿到classify 去商品表找一条 图片 单价和title
					$oneImage = $images -> where($classify) -> find();
					$message[$i]["shops"][$k]["classify"] = $classify["classify"];
					$message[$i]["shops"][$k]["imgurl"] =  $oneImage["imgurl"];
					$message[$i]["shops"][$k]["title"] =  $oneImage["title"];
					$message[$i]["shops"][$k]["StorePrice"] =  $oneImage["StorePrice"];
					$message[$i]["shops"][$k]["count"] =  $count;
					$message["totalmoney"] += $count * $oneImage["StorePrice"] ;
				}
				$return["info"] = "查询成功" ;
				$return["status"] = 1;
				$return["data"] = $message;
			}else{
				$return["info"] = "查询失败，获取购物车信息失败" ;
				$return["status"] = 3;
			}
		}else{
			$return["info"] = "查询失败，没用订单" ;
			$return["status"] = 2;
		}
		return $return;
	}

	public function willComment(){
		$order = M("order");
		$comment = M("comment");
		$shop = M("shop");
		$images = M("images");
		$arr["uid"] = session("uid");
		$arr["is_delete"] = 1 ;
		$arr["is_pay"] = 1 ;
		$arr["is_receive"] = 1 ;
		$arr["is_cancel"] = 0 ;
		$res = $order -> where($arr) -> select();
		$message = array();
		if($res){
			for($i = 0 ; $i <count($res) ; $i ++){
				$message[$i]["ordernumber"] = $res[$i]["ordernumber"];
				$message[$i]["addtime"] = date("Y-m-d H:i:s" , $res[$i]["addtime"]);
				$message[$i]["is_pay"] = $res[$i]["is_pay"];
				$message[$i]["is_receive"] = $res[$i]["is_receive"];
				$message[$i]["is_cancel"] = $res[$i]["is_cancel"];
				$message[$i]["totalmoney"] = 0 ;
				//区订单表中的 订单号   添加时间  是否付款  是否收货
//				$message[$i]["shops"] = $res[$i]["ordernumber"];
				$isOrder["is_order"] = $message[$i]["ordernumber"];
				$shoplist = $shop -> where($isOrder) -> select();
				//通过ordernumber 去找购物车中的信息
				if($shoplist){
					for($k = 0 ; $k < count($shoplist) ; $k++){
						$count = $shoplist[$k]["count"];
						//拿到商品数量
						$classify["classify"] = $shoplist[$k]["classify"];
						//拿到classify 去商品表找一条 图片 单价和title
						$findComment["uid"] = session("uid");
						$findComment["classify"] = $classify["classify"];
						$isComment = $comment -> where($findComment) -> find();
						//已经评论的就不能再评论了
						if(!$isComment){
							$oneImage = $images -> where($classify) -> find();
							$message[$i]["shops"][$k]["classify"] = $classify["classify"];
							$message[$i]["shops"][$k]["imgurl"] =  $oneImage["imgurl"];
							$message[$i]["shops"][$k]["title"] =  $oneImage["title"];
							$message[$i]["shops"][$k]["StorePrice"] =  $oneImage["StorePrice"];
							$message[$i]["shops"][$k]["count"] =  $count;
							$message[$i]["totalmoney"] += $count * $oneImage["StorePrice"] ;
						}	
					}
					$return["info"] = "查询成功" ;
					$return["status"] = 1;
					$return["data"] = $message;
				}else{
					$return["info"] = "查询失败，获取购物车信息失败" ;
					$return["status"] = 3;
					break ;
				}
			}
		}else{
			$return["info"] = "查询失败，没有订单" ;
			$return["status"] = 2;
		}

		return $return;
	
	}
	public function subComment($data){
		$comment["uid"] = session("uid");
		$comment["classify"] = $data["classify"];
		$comment["comment"] = htmlspecialchars($data["comment"]);
		$comment["grade"] = $data["star"];
		$com = M("comment");
		$res = $com -> data($comment) -> add();
		if($res){
			$return["info"] = "评论成功";
			$return["status"] = 1 ;
		}else{
			$return["info"] = "评论失败";
			$return["status"] = 2 ;
		}
		return $return; 
	}
	//订单付款
	public function toPay($data){
		$comment["ordernumber"] = $data["ordernumber"];
		$pay["is_pay"] = 1 ;
		$order = M("order");
		$res = $order -> where($comment) -> data($pay) -> save();
		$str = $order ->getLastSql();
		// var_dump($str);die;
		if($res){
			$return["info"] = "付款成功";
			$return["status"] = 1 ;
		}else{
			$return["info"] = "付款失败";
			$return["status"] = 2 ;
		}
		return $return; 
	}

}
?>