<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>春舞枝</title>
	<meta name="keywords" content="春舞枝"/>
	<meta name="description" content="春舞枝"/>
	<style>
		.nc-appbar-tabs a.compare{display:none!important;}
		.ncc-table-style tbody tr.item_disabled td{
			background:none repeat scroll 0 0 #F9F9F9;height:30px;padding:10px 0;text-align:center;
		}

	</style>
	<!-- 省级联动 -->
	<style>
		._citys { width: 450px; display: inline-block; border: 2px solid #eee; padding: 5px; position: relative; background: #fbf8ee; }
		._citys span { color: #56b4f8; height: 15px; width: 15px; line-height: 15px; text-align: center; border-radius: 3px; position: absolute; right: 10px; top: 10px; border: 1px solid #56b4f8; cursor: pointer; }
		._citys0 { width: 100%; height: 34px; display: inline-block; border-bottom: 2px solid #56b4f8; padding: 0; margin: 0; }
		._citys0 li { display: inline-block; line-height: 34px; font-size: 15px; color: #888; width: 80px; text-align: center; cursor: pointer; }
		.citySel { background-color: #56b4f8; color: #fff !important; }
		._citys1 { width: 100%; display: inline-block; padding: 10px 0; }
		._citys1 a { width: 83px; height: 35px; display: inline-block; background-color: rgba(86, 180, 248, 0.35); color: #666; margin-left: 6px; margin-top: 3px; line-height: 35px; text-align: center; cursor: pointer; font-size: 13px; overflow: hidden; }
		._citys1 a:hover { color: #fff; background-color: #56b4f8; }
		.AreaS { background-color: #56b4f8 !important; color: #fff !important; }
		</style>
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_cart.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jq.min.js"></script>
		<script src="__ROOT__/Index/Common/js/Popt.js"></script>
		<script src="__ROOT__/Index/Common/js/cityJson.js"></script>
		<script src="__ROOT__/Index/Common/js/citySet.js"></script>
</head>
<body ng-app="shopApp" ng-controller="shopController" ng-cloak>
	<!-- 1 -->
		<div class="public-top-layout w">
		<div class="topbar wrapper">
			<div class="user-entry">
				<?php if(!empty($_SESSION['username'])): ?>您好&nbsp;<?php echo (session('username')); ?>，欢迎来到
					<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=logout">退出</a>]</span> 
				<?php else: ?>您好，欢迎来到
					<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=index">登录</a>]</span> <span>[<a href="__APP__/Index?act=login&op=register">注册</a>]</span><?php endif; ?>
			</div>
			<div class="quick-menu">
				<dl>
					<dt>
						<a href="" target="_blank" title="商户中心">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</a>
					</dt>
				</dl>
				<dl>
					<dt>
						<a href="__APP__/Order/order">我的订单</a>
						<i></i>
					</dt>
					<dd>
						<ul>
							<li><a href="">待付款订单</a></li>
							<li><a href="">待确认收货</a></li>
							<li><a href="">待评价交易</a></li>
						</ul>
					</dd>	
				</dl>
				<dl>
					<dt>
						<a href="">我的收藏</a>
						<i></i>
					</dt>
					<dd>
						<ul>
							<li><a href="">商品收藏</a></li>
							<li><a href="">店铺收藏</a></li>
						</ul>
					</dd>	
				</dl>
				<dl>
					<dt>
						<a href="">客服服务</a>
						<i></i>
					</dt>
					<dd>
						<ul>
							<li><a href="">帮助中心</a></li>
							<li><a href="">售后服务</a></li>
							<li><a href="">客服中心</a></li>
						</ul>
					</dd>	
				</dl>
				<dl class="weixin">
					<dt>
						关注我们
						<i></i>
					</dt>
					<dd>
						<h4>
							扫描二维码
							<br>
							关注商城微信号	
						</h4>
						<img src="__ROOT__/Index/Common/images/QRcode.jpg" alt="">
					</dd>
				</dl>
			</div>
		</div>

	<!-- 1.1 -->
	<header class="ncc-head-layout">
		<div class="site-logo">
			<a href="__APP__/Index/index">
				<img src="__ROOT__/Index/Common/images/logo.png" alt="">
			</a>
		</div>
		<ul class="ncc-flow">
			<li>
				<i class="step1"></i>
				<p>我的购物车</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
			<li>
				<i class="step2"></i>
				<p>填写核对购物信息</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
			<li>
				<i class="step3"></i>
				<p>支付提交</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
			<li>
				<i class="step4"></i>
				<p>订单完成</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
		</ul>
	</header>
	<div class="ncc-wrapper">
		<form>
			<div class="ncc-main">
				<div class="ncc-title">
					<h3>填写核对购物信息</h3>
					<h5>请仔细核对填写收货、发票等信息，以确保物流快递及时准确投递。</h5>
				</div>


				<!-- 收货人信息模块 -->
				<!-- 1.有信息，2.没信息 -->
				<div class="ncc-receipt-info" ng-class="{true:'',false:'current_box'}[IsRevise]">
					<div class="ncc-receipt-info-title">
						<!-- 共有 -->
						<h3>收货人信息</h3>
						<!-- 1.有信息 的时候显示 ng-show2 -->
						<a ng-show="IsRevise" ng-click="update()">[修改]</a>
					</div>
					<div class="ncc-candidate-items">
						<ul>
							<!--  有信息 -->
							<!-- 收货人信息 -->
							<!-- 这里需要一个ng-show1 -->
							<!-- 有修改按钮的时候 一定会显示， 修改按钮消失，也一定会消失 -->
							<li ng-show="IsRevise">
								<span class="true-name">{{defaultAddress.username}}</span>
								<span class="address">{{defaultAddress.area}}</span>
								<span class="address">{{defaultAddress.address}}</span>
								<span class="phone">{{defaultAddress.phone}}</span>
								<span ng-if="defaultAddress.tel">{{defaultAddress.tel}}</span>
							</li>	
							<!-- 点击[修改]显示信息列表 添加 类名 -->
							<!-- 点击[修改按钮]（消失） 显示收货人列表  和[修改]按钮值相反-->
							<li ng-repeat="(k,v) in receiveAddress" class="receive_add address_item ncc-selected-item" ng-show="!IsRevise">
								<input type="radio" name="isSelect" class="radio" ng-click="ck()" ng-value="v.id">
								<label for="">
									<span class="true-name">{{v.username}}</span>
									<span class="address">{{v.area}}</span>
									<span class="address">{{v.address}}</span>
									<span class="phone">{{v.phone}}</span>
									<span ng-if="v.tel">{{v.tel}}</span>
								</label>
								<a href="" class="del">删除</a>
							</li>
							<!-- 和循环的li同一个控件 ng-show2 和[修改]按钮相反 -->
							<li class="receive_add addr_item" ng-show="!IsRevise">
								<input type="radio" name="isSelect" ng-checked="IsFill" ng-click="ck(true)" value="newadd">
								<label for="">使用新地址</label>
								<a href="" class="del">使用自提服务</a>
							</li>
							<!-- 控件 由选择[点击使用新地址]控制 -->
							<li ng-show="IsFill">
								<div>
									<div class="ncc-form-default">
										<form action="">
											<dl>
												<dt>
													<i class="required">*</i>
													收货人姓名
												</dt>
												<dd>
													<input type="text" class="text w150" maxlength="20" ng-model="consignee">
													<p class="hint">最多20个字符</p>
												</dd>

											</dl>
											<dl>
												<dt>
													<i class="required">*</i>
													所在地区
												</dt>
												<dd>
													<div>
														<input type="button" ng-model="area" id="select" value="{{area}}">
													</div>
												</dd>
											</dl>
											<dl>
												<dt>
													<i class="required">*</i>
													详细地址:
												</dt>
												<dd>
													<input type="text" class="text w500" maxlength="100" ng-model="address">
													<p class="hint">请填写真实地址，不需要重复填写所在地区</p>
												</dd>
											</dl>
											<dl>
												<dt>
													<i class="required">*</i>
													手机号码:
												</dt>
												<dd>
													<input type="text" class="text w80" maxlength="11" ng-model="cellphone">
	  												 &nbsp;(或) 固定电话:&nbsp; 
	  												<input type="text" class="text w100" maxlength="20" ng-model="tel">
												</dd>
											</dl>
										</form>
									</div>
								</div>
							</li>
						</ul>
						<!-- 和点击[修改]按钮同一个控件 值相反 -->
						<div class="hr16" ng-show="!IsRevise">
							<a href="" class="ncc-btn ncc-btn-red" ng-click="submit()">
								保存收货人信息
							</a>
						</div>
					</div>
				</div>
				<div class="ncc-receipt-info">
					<div class="ncc-receipt-info-title">
						<h3>支付方式</h3>
					</div>
					<div class="ncc-candidate-items">
						<ul>
							<li>在线支付</li>
						</ul>
					</div>
				</div>
				<div class="ncc-receipt-info">
					<div class="ncc-receipt-info-title">
						<h3>发票信息</h3>
						<a href="">[修改]</a>
					</div>
					<div class="ncc-candidate-items">
						<ul>
							<li>不需要发票</li>
						</ul>
					</div>
				</div>
				<div class="ncc-receipt-info">
					<div class="ncc-receipt-info-title">
						<h3>鲜花束配送时间</h3>
					</div>
					<div class="ncc-candidate-items">
						<ul>
							<li style="float: left;">
								<input type="text" value="2017-08-07" style="width: 150px" readonly>
								<input type="datetime">
							</li>
							<li style="float: left;">
								<div class="margin-right: 10px;">
									<select name="" id="">
										<option>09:00</option>
										<option>10:00</option>
										<option>11:00</option>
										<option>12:00</option>
										<option selected="">13:00</option>
										<option>14:00</option>
										<option>15:00</option>
										<option>16:00</option>
										<option>17:00</option>
										<option>18:00</option>
									</select>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="ncc-receipt-info">
					<div class="ncc-receipt-info-title">
						<h3>商品清单</h3>
						<a href="__APP__/Shop/shoppingCart">返回购物车</a>
					</div>
					<table class="ncc-table-style">
						<thead>
							<tr>
								<th class="w20"></th>
								<th></th>
								<th>商品</th>
								<th class="w120">单价（元）</th>
								<th class="w120">数量</th>
								<th class="w120">小计（元）</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th colspan="20">
									<strong>
										店铺：
										<a href="">春舞枝旗舰店</a>
									</strong>
									<span></span>
								</th>
							</tr>
							<tr class="shop-list" ng-repeat="(k,v) in item">
								<td>
									<input type="hidden">
								</td>
								<td class="w60">
									<a href="" class="ncc-goods-thumb">
										<img ng-src="__ROOT__/{{v.imgurl}}" alt="">
									</a>
								</td>
								<td class="tl">
									<dl class="ncc-goods-info">
										<dt>
											<a href="">{{v.title}}</a>
										</dt>
									</dl>	
								</td>
								<td class="w120">
									<em>{{v.StorePrice | number:2}}</em>
								</td>
								<td class="w60">
									{{v.count}}
								</td>
								<td class="w120">
									<em>{{v.count * v.StorePrice | number:2}}</em>
								</td>
							</tr>
							<tr>
								<td class="w10"></td>
								<td class="tl" colspan="2">买家留言：
									<textarea ng-model="message" class="ncc-msg-textarea" placeholder="选填：对本次交易的说明（建议填写已经和商家达成一致的说明）" maxlength="150"></textarea>
								</td>
								<td class="tl" colspan="10">
									<div class="ncc-form-default"></div>
								</td>
							</tr>
							<tr>
								<td class="tr" colspan="20">
									<div class="ncc-store-account">
										<dl class="freight">
											<dt>运费：</dt>
											<dd>
												<em>0.00</em>
											</dd>
										</dl>
										<dl>
											<dt>商品金额：</dt>
											<dd>
												<em>{{total | number: 2}}</em>
											</dd>
										</dl>
										<dl class="total">
											<dt>本店合计：</dt>
											<dd>
												<em>{{total | number: 2}}</em>
											</dd>
										</dl>
									</div>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="20">
									<div class="ncc-all-account">
										订单总金额：
										<em>{{total | number: 2}}</em>
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="ncc-bottom">
					<a href="" class="ncc-btn ncc-btn-acidblue fr">
						提交订单
					</a>
				</div>
			</div>
		</form>
	</div>


	<div id="faq">
		<div class="faq-wrapper"></div>
	</div>
	<!-- footer -->
	<div id="footer" class="wrapper">
		<p>
			<a href="__APP__/Index/index">
				首页
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=24">
				招聘英才
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=25">
				合作及洽谈
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=23">
				联系我们
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=22">
				关于我们
			</a> | 
			<a href="/shop/index.php?act=link">
				友情链接
			</a>
		</p>
		Copyright 2015 闽ICP备12008006号-1
		<br>
	</div>
</body>
<script>
	console.log(<?php echo ($address); ?>);
	var _default = <?php echo ($default); ?>;
	console.log(_default);
	var receive = <?php echo ($address); ?>;
	$(".ncc-flow li").eq(1).addClass("current");
	angular.module("shopApp",[]).controller("shopController",function ($scope,$http) {
		// 是否显示填写资料
		$scope.IsFill = true;
		// 是否显示修改收货人信息按钮
		$scope.IsRevise = false;
		// 点击使用新地址
		$scope.IsAdd = false;
/************************************************/ 
		// 接收收货人信息
		if (receive.status == 1) { // 有信息
			// 默认收货人信息
			$scope.defaultAddress = _default.data;
			// 接收收货人信息列表
			$scope.receiveAddress = receive.data;
			// 隐藏填写资料
			$scope.IsFill = false;
			// 显示[修改]按钮
			$scope.IsRevise = true;
		}else{
				// 没有信息
				$scope.receiveAddress = [];
				// 显示填写资料
			}
		$scope.message = "";
		$scope.item = <?php echo ($data); ?>;
		$scope.total = 0;
		for (var i = 0; i < $scope.item.length; i++) {
			$scope.total += $scope.item[i].StorePrice * $scope.item[i].count;
		}


		// 收货人信息
		$scope.consignee = "";   // 姓名
		$scope.area = "点击选择城市";	  // 区
		$scope.address = ""; // 详细地址
		$scope.cellphone = ""; // 手机号号码
		$scope.tel = "";	//固话

		$scope.sub = function () {
			var IsCellphone = false, IsTel = false, IsArea = false,
				IsAddress = false, IsConsignee = false;
			// 是否填写收货人姓名
			if ($scope.consignee.replace(/\s/g,"").length == 0) {
		    	console.log("请填写收货人姓名");
		    } else {
		    	IsConsignee = true;
		    }
		    // 验证所在地区是否都选中
		    var arr = $("#select").val().split("-");
		    if (arr.length !== 3) {
		    	console.log("所在地区未选全");
		    } else {
		    	$scope.area = $("#select").val();
		    	IsArea = true;
		    }
		    // 是否填写详细地址
		    if ($scope.address.replace(/\s/g,"").length == 0) {
		    	console.log("请填写详细地址");
		    } else {
		    	IsAddress = true;
		    	console.log($scope.address);
		    }
			// 简单验证手机号是否有误
			if(!(/^1[0-9]{10}$/.test($scope.cellphone))){ 
		        console.log("手机号码填写错误");
		    } else {
		    	IsCellphone = true;
		    }
		    // 简单验证固话是否有误
		    if (!(/^[0-9]*$/.test($scope.tel))) {
		    	console.log("固定电话填写错误");
		    } else {
		    	IsTel = true;
		    }
		    if (IsArea && IsTel && IsCellphone && IsAddress) {
		    	console.log("信息全部正确");
				// 添加入数据库
				$http({
		           method: "POST",
		           url: "__APP__/Address/addAddress",
		           headers: {
		           		"Content-type" : "application/x-www-form-urlencoded",
		           },
		           data:{
		           		username : $scope.consignee,
		           		area : $scope.area,
		           		address : $scope.address,
		           		phone : $scope.cellphone,
		           		tel : $scope.tel,
		           }
		        }).success(function (data) {
		       		if (data.status == 1) {
		       			// 添加新收货人信息成功
		       			$scope.receiveAddress = data.data;
		       			// 默认收货人信息
			       		$scope.defaultAddress = data.default;
			       		console.log(data);
		       			$scope.IsRevise = true;
		       			$scope.IsFill = false;
		       		}else if (data.status == 2) {
		       			// 添加新收货人信息失败
		       		}
		        }).error(function (err) {
		       		console.log(err);
		        })
		    }
		}
		$scope.ck = function (isadd) {
			if (isadd) {
				$scope.IsFill = true;
			}else{
				$scope.IsFill = false;
			}
		}
		$scope.update = function () {
			$scope.IsRevise = false;
		}
		$scope.submit = function () {
			if ($("input[type='radio']:checked").val() == "newadd") {
				//返还新添加信息
				$scope.sub();
			} else { //返还id
				if (_default.data.id == $("input[type='radio']:checked").val()) {
					// 没有变化 不需要更改数据库
					$scope.IsRevise = true;
				}else{
					// 更改了默认地址
					$http({
			           method: "POST",
			           url: "__APP__/Address/updataAddress",
			           headers: {
			           		"Content-type" : "application/x-www-form-urlencoded",
			           },
			           data:{
			           		id: Number($("input[type='radio']:checked").val()),
			           }
			        }).success(function (data) {
			       		if (data.status == 1) { // 更新成功
			       			// 更换默认收货人信息
			       			_default.data = data.default;
			       			$scope.defaultAddress = _default.data;
			       			// 收起current_box
			       			$scope.IsRevise = true;
			       		}else if (data.status == 2) {
			       			// 更新失败
			       		}
			        }).error(function (err) {
			       		console.log(err);
			        })
				}
			}
		}
	});
	// 省级联动
	$("#select").click(function (e) {
	SelCity(this,e);
	});
</script>

</html>