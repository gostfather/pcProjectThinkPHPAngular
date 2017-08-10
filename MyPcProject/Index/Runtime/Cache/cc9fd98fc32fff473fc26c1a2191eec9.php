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
	<style>
		.ncc-table-style tbody tr.item_disabled td {
			background:none repeat scroll 0 0 #F9F9F9;
			height:30px;
			padding:10px 0;
			text-align:center;
		}
	</style>
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
						<a href="">我的订单</a>
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
				<!-- 收货人信息 -->
				<div class="ncc-receipt-info" ng-class="{true:'current_box',false:''}[IsFill]">
					<div class="ncc-receipt-info-title">
						<h3>收货人信息</h3>
						<a ng-show="!IsRe" ng-click="update()">[修改]</a>
					</div>
					<!-- 填写收货人信息 -->
					<div ng-show="IsFill" class="ncc-candidate-items">
						<ul>
							<li class="receive_add addr_item">
								<input type="radio">
								<label for="">使用新地址</label>
								<label for=""><a class="del" href="" target="_blank">使用自提服务站</a></label>
							</li>
							<li>
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
						<div class="hr16">
							<a ng-click="sub()" class="ncc-btn ncc-btn-red">保存收货人信息</a>
						</div>
					</div>
					<!-- 默认收货人信息 -->
					<div ng-show="!IsRe" class="ncc-candidate-items">
						<ul>
							<!-- 收货人信息 -->
							<li>
								<span class="true-name">第三方</span>
								<span class="address">fhieofhioef</span>
								<span class="address">fhieofhioefvcdrvserers</span>
								<span class="phone">11111</span>
							</li>	
						</ul>
					</div>
					<!-- 点击修改按钮展示所有地址信息 -->
					<div ng-show="IsRe"  class="ncc-candidate-items">
						<ul>
							<!-- 循环 -->
							<li ng-repeat="(k,v) in receiveAddress" class="receive_add address_item ncc-selected-item">
								<input type="radio" class="radio">
								<label for="">
									<span class="true-name">第三方</span>
									<span class="address">fhieofhioef</span>
									<span class="address">fhieofhioefvcdrvserers</span>
								</label>
								<a href="" class="del">删除</a>
							</li>
							<li class="receive_add addr_item">
								<input type="radio"  ng-checked="IsAdd" ng-click="ck(IsAdd)" >
								<label for="">使用新地址</label>
								<a href="" class="del">使用自提服务</a>
							</li>
							<li ng-show="IsAdd">
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
													<input type="button" ng-model="area" id="select1" value="{{area}}">
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
							</li>
						</ul>
						<div class="hr16">
							<a href="" class="ncc-btn ncc-btn-red">
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
	$(".ncc-flow li").eq(1).addClass("current");
	angular.module("shopApp",[]).controller("shopController",function ($scope,$http) {
		// 是否显示填写资料
		$scope.IsFill = false;
		// 是否显示修改收货人信息按钮
		$scope.IsRe = false;
		$scope.receiveAddress = [];
		// 点击使用新地址
		$scope.IsAdd = false;
		// 接收收货人信息
		// if (<?php echo ($address["status"]); ?> == 1) { // 有信息
			// $scope.address = <?php echo ($address["data"]); ?>;
			// 	// 隐藏填写资料
			// 	IsFill = false;
			// }else{
			// 	// 没有信息
			// 	// 显示添加收货人信息
			// }
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
		       			console.log("添加成功");
		       		}else if (data.status == 2) {
		       			console.log("添加失败");
		       		}
		        }).error(function (err) {
		       		console.log(err);
		        })
		    }
		}
		$scope.ck = function (IsAdd) {
			if (!$scope.IsAdd) {
				$scope.IsAdd = !IsAdd;
			}
		}
		$scope.update = function () {
			$scope.IsRe = true;
		}
	});
	$("#select").click(function (e) {
	SelCity(this,e);
	});
	$("#select1").click(function (e) {
	SelCity(this,e);
	});
</script>

</html>