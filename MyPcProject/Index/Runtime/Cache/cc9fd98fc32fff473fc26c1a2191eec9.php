<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>春舞枝</title>
	<meta name="keywords" content="春舞枝"/>
	<meta name="description" content="春舞枝"/>
	<style type="text/css">
		body{
			_behavior:url(http://www.531314.com/templates/new/css/csshover.htc);
		}
		.nc-appbar-tabs a.compare{display:none!important;}
	</style>
	<style>
		.ncc-table-style tbody tr.item_disabled td{background:none repeat scroll 0 0 #F9F9F9;height:30px;padding:10px 0;text-align:center;}
	</style>
	<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
	<link href="__ROOT__/Index/Common/css/home_cart.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
	<script type="text/javascript" src="__ROOT__/Index/Common/js/jq.min.js"></script>
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
		<form action="">
			<div class="ncc-main">
				<div class="ncc-title">
					<h3>填写核对购物信息</h3>
					<h5>请仔细核对填写收货、发票等信息，以确保物流快递及时准确投递。</h5>
				</div>
				<div class="ncc-receipt-info current_box">
					<div class="ncc-receipt-info-title">
						<h3>收货人信息</h3>
						<a href="" style="display: none;">[修改]</a>
					</div>
					<div class="ncc-candidate-items">
						<ul>
							<li class="receive_add addr_item">
								<input type="radio" checked="">
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
													<input type="text" class="text w100" maxlength="20" ng-model="consignee">
												</dd>
											</dl>
											<dl>
												<dt>
													<i class="required">*</i>
													所在地区
												</dt>
												<dd>
													<div>
														<select name="" id=""></select>
													</div>
												</dd>
											</dl>
											<dl>
												<dt>
													<i class="required">*</i>
													详细地址:
												</dt>
												<dd>
													<input type="text" class="text w500" maxlength="100">
													<p class="hint">请填写真实地址，不需要重复填写所在地区</p>
												</dd>
											</dl>
											<dl>
												<dt>
													<i class="required">*</i>
													手机号码:
												</dt>
												<dd>
													<input type="text" class="text w200" maxlength="15">
	  												 &nbsp;(或) 固定电话:&nbsp; 
	  												<input type="text" class="text w200" maxlength="20" >
												</dd>
											</dl>
											
										</form>
									</div>
								</div>
							</li>
						</ul>
						<div class="hr16">
							<a href="" class="ncc-btn ncc-btn-red">保存收货人信息</a>
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
									<textarea class="ncc-msg-textarea" placeholder="选填：对本次交易的说明（建议填写已经和商家达成一致的说明）" maxlength="150"></textarea>
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
	console.log(<?php echo ($data); ?>);
	if (<?php echo ($data); ?>) {

	}else{
		alert("无效");
	}
	$(".ncc-flow li").eq(1).addClass("current");
	angular.module("shopApp",[]).controller("shopController",function ($scope,$http) {
		$scope.item = [
			{
				StorePrice: 233,
				title: "【春舞枝】基地直销 33枝红玫瑰情人草",
				count: 3,
				imgurl:"fefw"
			},
			{
				StorePrice: 233,
				title: "【春舞枝】基地直销 33枝红玫瑰情人草",
				count: 3,
				imgurl:"fefw"
			}
		];
		$scope.total = 0;
		for (var i = 0; i < $scope.item.length; i++) {
			$scope.total += $scope.item[i].StorePrice * $scope.item[i].count;
		}
	});
</script>
</html>