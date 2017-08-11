<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝</title>

		<link rel="shortcut icon" href="http://531314.com/favicon.ico" />
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="http://www.531314.com/templates/new/css/member.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>

	</head>

	<body>
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

		
<div class="header-wrap">
	<header class="public-head-layout wrapper">
		<h1 class="site-logo">
			<a href="__APP__/Index/index">
			<img src="__ROOT__/Index/Common/images/logo.png" alt="">
		</a>
		</h1>
		<div id="search" class="head-search-bar">
			<ul class="tab">
				<li title="请输入您要搜索的商品关键字" class="current">商品</li>
			</ul>
			<form action="__APP__/Search/search" method="get" class="search-form">
				<input type="text" name="keyWord" placeholder="请输入您要搜索的商品关键字" class="input-text" maxlength="60">
				<input type="submit" id="button" value="搜索" class="input-submit">
			</form>
			<div class="keyword">
				热门搜索
				<ul>
					<li><a href="">白色情人节</a></li>
					<li><a href="">母亲节</a></li>
					<li><a href="">玫瑰</a></li>
					<li><a href="">康乃馨</a></li>
					<li><a href="">生日礼物</a></li>
				</ul>
			</div>
		</div>
		<div class="head-user-menu">
			<dl class="my-mall">
				<dt>
					<span class="ico"></span>我的商城<i class="arrow"></i>
				</dt>
				<dd>
					<div class="sub-title">
						<h4></h4>
						<a href="" class="arrow">我的用户中心 <i></i></a>
						
					</div>
					<div class="user-centent-menu">
						<ul>
							<li>
								<a href="">
									站内消息（<span>0</span>）
								</a>
							</li>
							<li>
								<a href="" class="arrow">
									我的订单
									<i></i>
								</a>
							</li>
							<li>
								<a href="">
									咨询回复（<span>0</span>）
								</a>
							</li>
							<li>
								<a href="" class="arrow">
									我的收藏
									<i></i>
								</a>
							</li>
							<li>
								<a href="">
									代金券（<span>0</span>）
								</a>
							</li>
							<li>
								<a href="" class="arrow">
									我的积分
									<i></i>
								</a>
							</li>
						</ul>
					</div>
				</dd>
			</dl>
			<dl class="my-cart">
				<dt>
					<span class="ico"></span>购物车结算<i class="arrow"></i>
				</dt>
				<dd>
					<div class="sub-title">
						<h4>最新加入商品</h4>
					</div>
					<div class="incart-goods-box">
						<div class="incart-goods">
							<div class="no-order">
								<span>您的购物车中暂无商品，赶快选择心爱的商品吧！</span>
							</div>
						</div>
					</div>
					<div class="checkout">
						<span class="total-price"></span>
						<a href="" class="btn-cart">结算购物车中的商品</a>
					</div>
				</dd>
			</dl>
		</div>
	</header>
</div>
<nav class="public-nav-layout">
	<div class="wrapper">
		<div class="all-category">
			<div class="title">
				<i></i>
				<h3>所有商品分类</h3>
			</div>
			<div class="category">
				<ul class="menu">
					<li>
						<div class="class">
							<h4>主花材</h4>
							<span class="arrow"></span>
						</div>
					</li>
					<li class="class-items">
						<dl>
							<dd><h5><a style="margin-left:15px;" href="">玫瑰</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">百合</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">康乃馨</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">其他</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">洋牡丹</a></h5></dd>
						</dl>
					</li>
					<li></li>
											<li>
						<div class="class">
							<h4>节日</h4>
							<span class="arrow"></span>
						</div>
					</li>
					<li class="class-items">
						<dl>
							<dd><h5><a style="margin-left:15px;" href="">情人节</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">母亲节</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">父亲节</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">圣诞节</a></h5></dd>
						</dl>
					</li>
					<li></li>
					<li>
						<div class="class">
							<h4>支数</h4>
							<span class="arrow"></span>
						</div>
					</li>
					<li class="class-items">
						<dl>
							<dd><h5><a style="margin-left:15px;" href="">9</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">11</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">19</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">36</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">99</a></h5></dd>
						</dl>
					</li>
					<li></li>
					<li>
						<div class="class">
							<h4>送花对象</h4>
							<span class="arrow"></span>
						</div>
					</li>
					<li class="class-items">
						<dl>
							<dd><h5><a style="margin-left:15px;" href="">爱人</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">恋人</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">单身</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">老师</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">朋友</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">长辈</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">探望</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">客户</a></h5></dd>
						</dl>
					</li>
					<li></li>
					<li>
						<div class="class">
							<h4>鲜花生活馆</h4>
							<span class="arrow"></span>
						</div>
					</li>
					<li class="class-items">
						<dl>
							<dd><h5><a style="margin-left:15px;" href="">家庭套餐</a></h5></dd>
							<dd><h5><a style="margin-left:15px;" href="">月度套餐</a></h5></dd>
						</dl>
					</li>
					<li></li>
				</ul>
			</div>
		</div>
		<ul class="site-menu">
			<li>
				<a href="__APP__/Index/index">首页</a>
			</li>
			<li>
				<a href="__APP__/Cate/cate_1074">鲜花速递</a>
			</li>
			<li>
				<a href="__APP__/Cate/cate_1075">鲜花礼盒</a>
			</li>
		</ul>
	</div>
</nav>

		<div class="nch-breadcrumb-layout">
			<div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
				<span><a href="http://www.531314.com">首页</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/index.php?act=member&op=home">我的商城</a></span><span class="arrow">></span>
				<span>实物交易订单</span>
			</div>
		</div>

		<div class="ncm-container">
			<div class="left-layout">
				<div class="ncm-user-info">
					<div class="avatar"><img src="http://img.531314.com/shop/common/default_user_portrait.gif">
						<div class="frame"></div>
					</div>
					<div class="handle">
						<a href="index.php?act=member_information&op=avatar" title="修改头像"><i class="icon-camera"></i>修改头像</a>
						<a href="index.php?act=member_information&op=member" title="修改资料"><i class="icon-pencil"></i>修改资料</a>
						<a href="index.php?act=login&op=logout" title="安全退出"><i class="icon-off"></i>安全退出</a>
					</div>
					<div class="name">857902620&nbsp;
						<div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go('http://www.531314.com/grade.html');">V0</div>
					</div>
				</div>
				<ul class="ncm-sidebar ncm-quick-menu">
					<li class="side-menu-quick" nctype="commonOperations" style="display: none;">
						<a href="javascript:void(0)">
							<h3>常用操作</h3>
						</a>
						<ul>
						</ul>
					</li>
				</ul>
				<ul id="sidebarMenu" class="ncm-sidebar">
					<li class="side-menu">
						<h3>交易管理</h3>
						<ul>
							<li ><a href="__APP__/Order/order">实物交易订单</a></li>
							<li class="selected"><a href="__APP__/Order/comment">交易评价</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="right-layout">
				<div class="wrap">
					<div class="tabmenu">
						<ul class="tab pngFix">
							<li class="active">
								<a>交易评价</a>
							</li>
						</ul>
					</div>
					<table ng-app="app" ng-controller="myCon" class="ncm-default-table order">
						<tbody ng-show="isFind">
							<tr>
								<td colspan="20" class="norecord">
									<div class="warning-option"><i>&nbsp;</i><span>暂无符合条件的数据记录</span></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="wrapper">
	<div class="mt10"></div>
</div>

<div class="clear"></div>
<div class="footer-line"></div>

<div id="faq">
	<div class="faq-wrapper">
		<ul>
			<li>
				<dl class="s1">
					<dt>
帮助中心 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=9" title="集团采购"> 集团采购 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=8" title="服务声明"> 服务声明 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=6" title="购物流程"> 购物流程 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s2">
					<dt>
店主之家 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=13" title="如何发货"> 如何发货 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=12" title="查看售出商品"> 查看售出商品 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=14" title="商城商品推荐"> 商城商品推荐 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=11" title="如何管理店铺"> 如何管理店铺 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s3">
					<dt>
支付方式 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=30" title="公司转账"> 公司转账 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=16" title="付款方式"> 付款方式 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=29" title="货到付款"> 货到付款 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=17" title="付款问题"> 付款问题 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s4">
					<dt>
售后服务 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=32" title="退换货流程"> 退换货流程 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=26" title="投诉说明"> 投诉说明 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s5">
					<dt>
客服中心 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=18" title="会员修改密码"> 会员修改密码 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=20" title="商品发布"> 商品发布 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=19" title="会员修改个人资料"> 会员修改个人资料 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=21" title="修改收货地址"> 修改收货地址 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s6">
					<dt>
关于我们 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=23" title="联系我们"> 联系我们 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=25" title="合作及洽谈"> 合作及洽谈 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=22" title="关于我们"> 关于我们 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=24" title="招聘英才"> 招聘英才 </a>
					</dd>
				</dl>
			</li>
		</ul>
		<div class="help">
			<div class="w1190 clearfix">
				<div class="contact f-l">
					<div class="contact-border clearfix">
						<span class="ic tel t20">4000531314</span>
						<span>备用号码：0598-5253803</span>
						<span class="ic mail">it@531314.com</span>
						<div class="attention cleafix">
							<div class="weixin f-l">
								<img src="__ROOT__/Index/Common/images/05003950598347095.jpg" class="f-l jImg img-error">
								<p class="f-l">
									<span>扫一扫</span>
									<span>关注我们</span>
								</p>
							</div>
							<div class="weibo f-l">
								<div class="ic qq" style="padding-left: 0px;">
									<ul>
										<li>
											<a target="_blank">腾讯微博</a>
										</li>
									</ul>
								</div>
								<div class="ic sina" style="padding-left: 0px;">
									<ul>
										<li>
											<a target="_blank">新浪微博</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer" class="wrapper">
	<p>
		<a href="__APP__/Index/index">首页</a>
		|
		<a href="__APP__/Article?article=24">招聘英才</a>
		|
		<a href="__APP__/Article?article=25">合作及洽谈</a>
		|
		<a href="__APP__/Article?article=23">联系我们</a>
		|
		<a href="__APP__/Article?article=22">关于我们</a>
		|
		<a href="/shop/index.php?act=link">友情链接</a>
	</p>
	Copyright 2015</a> 闽ICP备12008006号-1<br/>
</div>
		<script type="text/javascript">
			var data = [{
					ordernumber: 123123,
					shops: [{
							imgurl: "http://img.531314.com/shop/store/goods/1/1_05424639725775441_60.jpg",
							title: "【春舞枝】基地直销 33枝粉玫瑰",
							StorePrice: "388.00",
							count: 1,
						},
						{
							imgurl: "http://img.531314.com/shop/store/goods/1/1_05424686092644715_60.jpg",
							title: "【春舞枝】基地直销 33枝红玫瑰情人草",
							StorePrice: "388.00",
							count: 1,
						},
					],
					addtime: "2017-08-07 11:25:30",
					totalmoney: "776.00",
					is_pay: 1,
					is_receive: 1,
				},
				{
					ordernumber: 41234123,
					shops: [{
						imgurl: "http://img.531314.com/shop/store/goods/1/1_05424686092644715_60.jpg",
						title: "【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗",
						StorePrice: "388.00",
						count: 2,
					}],
					addtime: "2017-08-07 09:58:44",
					totalmoney: "776.00",
					is_pay: 0,
					is_receive: 0,
				}
			];
			console.log(data);
			var app = angular.module("app", []);
			app.controller("myCon", function($scope, $http) {
				$scope.isFind = true;
				/*if(data) {
					$scope.isFind = false;
				}*/
				$scope.orders = data;
				setTimeout(function() {
					$(".ncm-goods-thumb").on("mouseenter", mouseIn);
				}, 0);
				$scope.delOrder = function(ordernumber) {
					console.log(ordernumber);
				}
			});

			function mouseIn(ev) {
				var event = window.event || ev;
				var img = $("<img />");
				var src = $(this).find("img").attr("src");
				img.css({
					"position": "absolute",
					"width": "100",
				})
				img.attr("src", src);
				$(this).append(img);
				$(this).mousemove(function(ev) {
					var event = window.event || ev;
					img.css({
						"marginLeft": event.offsetX + 30,
						"marginTop": event.offsetY - 90,
					});
					$(this).mouseleave(function() {
						img.remove();
					})
				})
				return false;
			}
		</script>
	</body>

</html>