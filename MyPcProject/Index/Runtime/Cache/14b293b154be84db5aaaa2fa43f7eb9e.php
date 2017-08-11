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
		<link href="http://res.531314.com/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
		<link href="http://res.531314.com/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/layout.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
	</head>

	<body ng-app="app" ng-controller="myCon">
		
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
				<span><a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a></span><span class="arrow">></span>
				<span>鲜花束</span>
			</div>
		</div>
		
		<div class="nch-container wrapper">
			<div class="left">
				<div class="nch-module nch-module-style02">
					<div class="title">
						<h3>分类筛选</h3>
					</div>
					<div class="content">
						<ul id="files" class="tree">
							<li><i class="tree-parent tree-parent-collapsed"></i>
								<a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a>
								<ul>
									<li><i class="tree-parent tree-parent-collapsed"></i>
										<a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a>
										<ul>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html" class="selected">鲜花束</a>
											</li>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html">盒装鲜花</a>
											</li>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1076-0-0-0-0-0-0-0-0.html">家庭插花</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<div class="right">
				<div class="nch-module">
					<div class="class-content">
						<div class="goodsType">
							<div class="goodsType_row">
								<div class="goodsClass">主花材：</div>
								<div class="goodsLable">
									<div class="goodsLables" >
										<a ng-click="!isMaterial ? search($event,1) : ''">玫瑰</a>
										<a class="span-a" ng-click="unsearch($event,1)"><span>×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isMaterial ? search($event,1) : ''">百合</a>
										<a class="span-a" ng-click="unsearch($event,1)"><span>×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isMaterial ? search($event,1) : ''">康乃馨</a>
										<a class="span-a" ng-click="unsearch($event,1)"><span>×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isMaterial ? search($event,1) : ''">其它</a>
										<a class="span-a" ng-click="unsearch($event,1)"><span>×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isMaterial ? search($event,1) : ''">洋牡丹</a>
										<a class="span-a" ng-click="unsearch($event,1)"><span>×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">枝数：</div>
								<div class="goodsLable">
									<div class="goodsLables">
										<a ng-click="!isNumber ? search($event,2) : ''">9</a>
										<a class="span-a" ng-click="unsearch($event,2)"><span>×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isNumber ? search($event,2) : ''">11</a>
										<a class="span-a" ng-click="unsearch($event,2)"><span >×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isNumber ? search($event,2) : ''">19</a>
										<a class="span-a" ng-click="unsearch($event,2)"><span >×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isNumber ? search($event,2) : ''">36</a>
										<a class="span-a" ng-click="unsearch($event,2)"><span >×</span></a>
									</div>
									<div class="goodsLables" >
										<a ng-click="!isNumber ? search($event,2) : ''">99</a>
										<a class="span-a" ng-click="unsearch($event,2)"><span >×</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="nch-module nch-module-style01">
					<div class="title">
						<h3><em>鲜花束</em>-商品筛选</h3>
					</div>
					<div class="content">
						<div class="nch-module-filter">
							<dl>
								<dt>品牌：</dt>
								<dd class="list">
									<ul>
										<li>
											<a href="__APP__/Cate/cate_1074">春舞枝</a>
										</li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>颜色：</dt>
								<dd class="list">
									<ul>
										<li>
											<a >红色</a>
										</li>
										<li>
											<a >香槟</a>
										</li>
										<li>
											<a >蓝色</a>
										</li>
										<li>
											<a >白色</a>
										</li>
									</ul>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="shop_con_list" id="main-nav-holder">
					<nav class="sort-bar" id="main-nav">
						<div class="pagination">
							<ul>
								<li >
									<a ng-class="currentPage==0? '' : 'canHover'"><span ng-click="currentPage > 0? changePage(currentPage-1) : ''">上一页</span></a>
								</li>
								<li >
									<a ng-class="currentPage == pages - 1 ? '' : 'canHover' "><span ng-click="currentPage < pages -1 ? changePage(currentPage+1) : ''">下一页</span></a>
								</li>
							</ul>
						</div>
						<!--<div class="nch-all-category">
							<div class="all-category">
								<div class="title"> <i></i>
									<h3><a href="http://www.531314.com/category.html">所有商品分类</a></h3>
								</div>
								<div class="category">
									<ul class="menu">
										<li class="odd">
											<div class="class">
												<h4><a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a></h4>
												<span class="arrow"></span> </div>
											<div class="sub-class">
												<div class="sub-class-content">
													<div class="recommend-class">
														<span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html" title="鲜花束">鲜花束</a></span>
														<span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html" title="盒装鲜花">盒装鲜花</a></span>
														<span><a href="http://www.531314.com/cate-1076-0-0-0-0-0-0-0-0.html" title="家庭插花">家庭插花</a></span>
														<span><a href="http://www.531314.com/cate-1078-0-0-0-0-0-0-0-0.html" title="多肉植物">多肉植物</a></span>
														<span><a href="http://www.531314.com/cate-1079-0-0-0-0-0-0-0-0.html" title="桌面盆栽">桌面盆栽</a></span>
													</div>
													<dl>
														<dt>
<h3><a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a></h3>
</dt>
														<dd class="goods-class">
															<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html">鲜花束</a>
															<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html">盒装鲜花</a>
															<a href="http://www.531314.com/cate-1076-0-0-0-0-0-0-0-0.html">家庭插花</a>
														</dd>
													</dl>
													<dl>
														<dt>
<h3><a href="http://www.531314.com/cate-1077-0-0-0-0-0-0-0-0.html">花卉绿植</a></h3>
</dt>
														<dd class="goods-class">
															<a href="http://www.531314.com/cate-1078-0-0-0-0-0-0-0-0.html">多肉植物</a>
															<a href="http://www.531314.com/cate-1079-0-0-0-0-0-0-0-0.html">桌面盆栽</a>
														</dd>
													</dl>
												</div>
												<div class="sub-class-right">
													<div class="brands-list">
													</div>
													<div class="adv-promotions"> </div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>-->
						<div class="nch-sortbar-array"> 排序方式：
							<ul>
								<li class="selected">
									<a  title="默认排序">默认</a>
								</li>
								<li>
									<a  title="点击按销量从高到低排序">销量<i></i></a>
								</li>
								<li>
									<a  title="点击按人气从高到低排序">人气<i></i></a>
								</li>
								<li>
									<a  title="点击按价格从高到低排序">价格<i></i></a>
								</li>
							</ul>
						</div>
						<div class="nch-sortbar-owner"><span><a ><i></i>平台自营</a></span></div>
						<div class="nch-sortbar-owner"><span><a ><i></i>赠品</a></span></div>
						<div class="nch-sortbar-location">商品所在地：
							<div class="select-layer">
								<div class="holder"><em>不限地区 </em></div>
								<div class="selected">
									<a>不限地区 </a>
								</div>
								<i class="direction"></i>
								<ul class="options">
									<div class="filter-detailc" id="addressDraw">
										<dl class="location-hots">
											<dt>常用地区</dt>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-1-0.html">北京</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-2-0.html">天津</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-9-0.html">上海</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-35-0.html">海外</a>
											</dd>
										</dl>
										<dl class="location-all">
											<dt>省份</dt>
											<dd>
												<ul>
													<li>
														<p class="lt">A</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-12-0.html">安徽</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-34-0.html">澳门</a></span> </p>
													</li>
													<li>
														<p class="lt">C</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-22-0.html">重庆</a></span> </p>
													</li>
													<li>
														<p class="lt">F</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-13-0.html">福建</a></span> </p>
													</li>
													<li>
														<p class="lt">G</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-19-0.html">广东</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-28-0.html">甘肃</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-20-0.html">广西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-24-0.html">贵州</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">H</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-21-0.html">海南</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-3-0.html">河北</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-16-0.html">河南</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-8-0.html">黑龙江</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-17-0.html">湖北</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-18-0.html">湖南</a></span> </p>
													</li>
													<li>
														<p class="lt">J</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-10-0.html">江苏</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-14-0.html">江西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-7-0.html">吉林</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">N</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-6-0.html">辽宁</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-5-0.html">内蒙古</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-30-0.html">宁夏</a></span> </p>
													</li>
													<li>
														<p class="lt">Q</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-29-0.html">青海</a></span> </p>
													</li>
													<li>
														<p class="lt">S</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-15-0.html">山东</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-4-0.html">山西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-27-0.html">陕西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-23-0.html">四川</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">T</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-32-0.html">台湾</a></span> </p>
													</li>
													<li>
														<p class="lt">X</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-26-0.html">西藏</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-31-0.html">新疆</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-33-0.html">香港</a></span> </p>
													</li>
													<li>
														<p class="lt">Y</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-25-0.html">云南</a></span> </p>
													</li>
													<li>
														<p class="lt">Z</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-11-0.html">浙江</a></span> </p>
													</li>
												</ul>
											</dd>
										</dl>
										<p class="oreder-default">
											<a href="__APP__/Cate/cate_1074">不限地区</a>
										</p>
									</div>
								</ul>
							</div>
						</div>
					</nav>

					<div>
						<!--<style type="text/css">
							#box {
								background: #FFF;
								width: 238px;
								height: 410px;
								margin: -390px 0 0 0;
								display: block;
								border: solid 4px #434343;
								position: absolute;
								z-index: 999;
								opacity: .5
							}
							
							.shopMenu {
								position: fixed;
								z-index: 1;
								right: 25%;
								top: 0;
							}
						</style>-->
						<div class="squares" >
							<div ng-show="show" id="no_results" ng-model="message" ng-cloak class="no-results"><i></i>{{message}}符合条件的商品</div>
							<ul ng-show="!show" class="list_pic">
								<li class="item" ng-repeat="(k,v) in data" >
									<div class="goods-content">
										<div class="goods-pic">
											<a href="__APP__/Item/item?item={{v.classify}}" target="_blank" title="{{v.title}}"><img ng-cloak ng-src="__ROOT__/{{v.imgurl[0]}}" title="{{v.title}}" alt="{{v.title}}" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li ng-class="$index == 0 ? 'selected' : ''" ng-cloak ng-repeat="(kk,vv) in v.imgurl">
														<a><img ng-cloak ng-src="__ROOT__/{{vv}}" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="__APP__/Item/item?item={{v.classify}}" target="_blank" title="9枝白玫瑰紫玫瑰16枝 、8枝子洋桔梗、尤加利若干">{{v.title}}<em>{{v.info}}</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" >&yen;{{v.StorePrice}}</em> <em class="market-price" >&yen;{{v.marketPrice}}</em></div>
											<div class="goods-sub">
											</div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="__APP__/Item/item?item={{v.classify}}" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101014-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
												</ul>
											</div>
											<div class="store">
												<a href="__APP__/Index/index" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href=""><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<div class="clear"></div>
							</ul>
						</div>
						
					</div>
					<div class="tc mt20 mb20">
						<div ng-show="pages>1" class="pagination">
							<ul>
								<li ng-class="currentPage==0? '' : 'canHover'">
									<span ng-click="currentPage==0? '' : changePage(0)">首页</span>
								</li>
								<li ng-class="currentPage==0? '' : 'canHover'">
									<span ng-click="currentPage > 0? changePage(currentPage-1) : ''">上一页</span>
								</li>
								<li ng-repeat="(k,v) in range(0,pages)" ng-class="currentPage==k? '' : 'canHover' ">
									<span ng-click="currentPage==k? '' : changePage(k)">{{k+1}}</span>
								</li>
								<li ng-class="currentPage == pages - 1 ? '' : 'canHover' ">
									<span ng-click="currentPage < pages -1 ? changePage(currentPage+1) : ''">下一页</span>
								</li>
								<li ng-class="currentPage == pages - 1 ? '' : 'canHover'">
									<span ng-click="currentPage==pages-1? '' : changePage(pages-1)">末页</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
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
		 	function asdf(){
		 	$(".item").hover(itemmouseOver, itemmouseOut);
		 	function itemmouseOver(){
		 		$(this).find(".goods-info").css({"top":180});
		 		return false;
		 	};
		 	function itemmouseOut(){
		 		$(this).find(".goods-info").css({"top":240});
		 		return false;
		 	}
		 	$(".goods-pic-scroll-show li").hover(liHoverIn,function(){
		 		return false ;
		 	});
		 	function liHoverIn(){
		 		$(this).parent().find("li").attr("class","");
		 		this.className = "selected" ;
		 		$(this).parent().parent().parent().prev().find("img")[0].src = $(this).find("img")[0].src;
		 		$(this).parent().parent().parent().prev().find("img").css({
		 			"width":220,
		 			"height":220,
		 		})
		 	}
		 	};
			var data = <?php echo ($data); ?> ;
			var app = angular.module("app",[]);
			app.controller("myCon",function ($scope,$http) {
				$scope.show = true ;
				$scope.message = "正在搜索";
				//显示加载页
				$scope.currentPage = 0;
				//当前页数
				$scope.isMaterial = false ;
			    $scope.isNumber = false ;
			    //按钮搜索条件
			    $scope.arr = [] ; 
			    //存放关键字
				if(data.status == 1 ){
					$scope.pages = data.pages;
					$scope.show = false ;
					$scope.data = data.info;
				}else{
					$scope.pages = 0;
					$scope.data = [];
				}
				setTimeout(function(){
					asdf();
				},0);
				window.clearTimeout();
				$scope.range = function (start, end) {
			        var ret = [];
			        if (!end) {
			            end = start;
			            start = 0;
			        }
			        for (var i = start; i < end; i++) {
			            ret.push(i);
			        }
			        return ret;
			    };
			    $scope.changePage = function(k){
			    	if( $scope.arr.length > 1){
			    		CateKeyWord($scope.arr,k);
			    	}
			    	getItem(k);
			    }
			    function getItem(page){
					$http.get("__APP__/Cate/getList?page="+page).success(function(data){
						if(data.status === 1 ){
							$scope.show = false ;
							$scope.data = data.info;
							$scope.pages = data.pages;
							$scope.currentPage = page;
							console.log($scope.currentPage);
							setTimeout(function(){
								asdf();
							},0);
							window.clearTimeout();
							//让节点循环完之后绑定jq事件
						}else{
							$scope.show = true ;
			    			$scope.pages = 0;
							$scope.message = data.info ;
						}
					}).error(function(data){
						console.log(data);
					});
				}
			    $scope.search = function($event,k){
			    	var text = $($event.target).text();
			    	$($event.target).parent().attr("class","goodsLables goodsLables_selected");
			    	$($event.target).parent().find("span").css({"display":"inline"});
			    	if(k === 1){
			    		$scope.isMaterial = true ;
			    	}
			    	if(k === 2){
			    		$scope.isNumber = true ;
			    	}
			    	$scope.arr[k-1] = text;
			    	CateKeyWord($scope.arr)
			    	return false;
			    }
			    $scope.unsearch = function($event ,k){
			    	console.log($($event.target).parent().prev().text());
			    	$($event.target).parent().parent().attr("class","goodsLables");
			    	$($event.target).parent().parent().find("span").css({"display":"none"});
					if(k === 1){
			    		$scope.isMaterial = false ;
			    	}
			    	if(k === 2){
			    		$scope.isNumber = false ;
			    	}
			    	$scope.arr[k-1] = "";
			    	CateKeyWord($scope.arr);
					return false;
				}
			    function CateKeyWord(arr,k){
			    	$http({
			    		url:"__APP__/Cate/CateKeyWord",
			    		method:"POST",
			    		data:{
			    			arr:arr,
			    			page:k,
			    		},
			    		headers:{
	        				"Content-Type":"application/x-www-form-urlencoded",
	        			},
			    	}).success(function(data){
			    		if(data.status === 1){
			    			$scope.show = false ;
			    			$scope.data = data.data;
			    			$scope.pages = data.pages;
							$scope.currentPage = 0;
							setTimeout(function(){
								asdf();
							},0);
							window.clearTimeout();
			    		}else{
			    			$scope.show = true ;
			    			$scope.pages = 0;
			    			$scope.message = data.info ;
			    		}
			    	}).error(function(err){
			    		console.log("错误是"+err);
			    	});
			    }
			    
		    });
		    
		</script>
	</body>
</html>