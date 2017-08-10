<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh" ng-app="app" ng-controller="myCon">
	<head>
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_goods.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/index.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/layui.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
		<title ng-bind="data.title + ' 春舞枝'" ></title>
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
			.icon-home{
				display: inline-block;
				height: 20px;
				width: 13px;
				background-image: url(__ROOT__/Index/Common/images/icon/home.png);
				background-size: 100%;
				background-repeat: no-repeat;
				background-position: center bottom;
			}
			.icon-shopping-cart{
				display: inline-block;
				height: 18px;
				width: 16px;
				background-image: url(__ROOT__/Index/Common/images/icon/shoppingCart.png);
				background-size: 100%;
				background-repeat: no-repeat;
				background-position: center bottom;
			}
		</style>
		<style>
			.ncs-goods-picture .levelB,.ncs-goods-picture .levelC{
				cursor:url(http://www.531314.com/templates/new/images/shop/zoom.cur),pointer;
			}
			.ncs-goods-picture .levelD{
				cursor:url(http://www.531314.com/templates/new/images/shop/hand.cur),move\9;
			}
		</style>
	</head>
	<body >
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
			<div class="nch-breadcrumb wrapper">
				<i class="icon-home"></i>
				<span><a href="__APP__/Index/index">首页</a></span>
				<span class="arrow">></span>
				<span><a href="__APP__/Index/index">所有分类</a></span>
				<span class="arrow">></span>
				<span><a href="__APP__/Index/index">鲜花速递</a></span>
				<span class="arrow">></span>
				<span><a href="__APP__/Index/index">鲜花束</a></span>
				<span class="arrow">></span>
				<span ng-cloak >{{data.title}} 此款鲜花需提前1-3天预订哦</span>
			</div>
		</div>

		<div id="content" class="wrapper pr">
			<div class="ncs-detail">
				<div class="ncs-goods-picture image_zoom" id="ncs-goods-picture">
					<div class="gallery_wrap" style="height: 360px; width: 360px; position: relative; overflow: hidden;">
						<div class="gallery levelB" style="position: absolute; overflow: hidden; opacity: 1; height: 320px; width: 320px; left: 20px; top: 20px;">
							<img style="height: 320px; width: 320px;" ng-src="__ROOT__/{{data.imgurl[0]}}" alt="{{data.info}}"/>
						</div>
						
					</div>
					<div class="controller_wrap">
						<div class="controller">
							<ul>
								<li ng-cloak ng-repeat="(k,v) in data.imgurl">
									<a href="" class="">
										<img ng-src="__ROOT__/{{v}}" alt="{{data.info}}" height="60" width="60">
									</a>
								</li>
							</ul>
						</div>
						<a href="" class="prev">
							<span><<</span>
						</a>
						<a href="" class="next">
							<span><<</span>
						</a>
					</div>
					<div class="close_wrap">
						<a class="close" >x</a>
					</div>
				</div>

				<div class="ncs-goods-summary">
					<div class="name">
						<h1 ng-cloak >{{data.title}} 此款鲜花需提前1-3天预订哦</h1>
						<strong></strong>
					</div>
					<div class="ncs-meta">
						<div class="rate">
							<a href="">商品评分</a>
							<div class="raty" title="很满意" style="width: 100px;">
								<img src="__ROOT__/Index/Common/images/icon/start.png" alt="1" title="很满意">
								<img src="__ROOT__/Index/Common/images/icon/start.png" alt="2" title="很满意">
								<img src="__ROOT__/Index/Common/images/icon/start.png" alt="3" title="很满意">
								<img src="__ROOT__/Index/Common/images/icon/start.png" alt="4" title="很满意">
								<img src="__ROOT__/Index/Common/images/icon/start.png" alt="5" title="很满意">
							</div>
						</div>
						<dl>
							<dt>市 场 价：</dt>
							<dd class="cost-price">
								<strong ng-cloak >¥{{data.marketPrice}}</strong>
							</dd>
						</dl>
						<dl>
							<dt>商 城 价：</dt>
							<dd class="price">
								<strong ng-cloak >¥{{data.StorePrice}}</strong>
							</dd>
						</dl>
					</div>
					<div class="ncs-plus">
						<dl class="ncs-freight">
							<dt>至 全国：</dt>
							<dd id="transport_price">
								<span id="nc_kd">卖家承担运费</span>
							</dd>
							<dd style="color:red;display:none" id="loading_price">loading.....</dd>
						</dl>
					</div>
					<div class="ncs-key">
						<dl>
							<dt>购买数量：</dt>
							<dd class="ncs-figure-input">
								<input type="text" name="" id="quantity" value="1" size="3" maxlength="6" class="text w30">
								<a class="increase">+</a>
								<a class="decrease">-</a>
								<span>当前库存<em nctype="goods_stock">{{data.stock}}</em></span>
							</dd>
						</dl>
					</div>
					<div class="ncs-btn">
						<div class="ncs-point"></div>
						<div class="clear"></div>
						<a class="buynow" title="立即购买">立即购买</a>
	 					<a class="addcart" title="添加购物车" ng-click="addToShop()">
	 						添加购物车
	 					</a>
	 					<div class="ncs-cart-popup">
	 						<dl>
	 							<dt>
	 								已经成功添加到购物车
	 								<a title="关闭" onclick="closeInfo()">x</a>
	 							</dt>
	 							<dd>购物车共有<strong id="bold_num" ng-bind="goods"></strong>种商品，总金额为：<em id="bold_mly" ng-bind="totalMoney" class="saleP"></em></dd>
	 							<dd class="btns">
	 								<a class="ncs-btn-mini ncs-btn-green" href="__APP__/Shop/ShoppingCart" >查看购物车</a>
	 								<a class="ncs-btn-mini" href="__APP__/Cate/cate_1074">继续购物</a>
	 							</dd>
	 						</dl>
	 					</div>
					</div>
				</div>
				<!-- 右侧 -->
				<div style=" position: absolute; z-index: 1; top: -1px; right: -1px;">
					<div class="ncs-info">
						<div class="title">
							<h4>春舞枝旗舰店</h4>
						</div>
						<div class="content">
							<dl class="all-rate">
								<dt>综合评分：</dt>
							
								<dd>
									<div class="rating">
										<span style="width: 100%"></span>
									</div>
									<em>5</em>分
								</dd>
							</dl>
							<div class="ncs-detail-rate">
								<h5>
									<strong>店铺动态评分</strong>与行业相比
								</h5>
								<ul>
									<li>描述相符
										<span class="credit">4.9 分</span>
										<span><i></i><em></em></span>
									</li>
									<li>服务态度
										<span class="credit">4.9 分</span>
										<span><i></i><em></em></span>
									</li>
									<li>发货速度
										<span class="credit">4.9 分</span>
										<span><i></i><em></em></span>
									</li>
								</ul>
							</div>
							<dl class="no-border">
								<dt>店铺名称：</dt>
								<dd>春舞枝旗舰店</dd>
							</dl>	
							<dl>
								<dt>店铺地址：</dt>
								<dd>福建省 三明市 清流县</dd>
							</dl>
							<div class="goto">
								<a href="">进入商家店铺</a>
								<a href="">收藏店铺<em nctype="store_collect">26</em></a>
							</div>
						</div>												
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="ncs-goods-layout expanded">
				<div class="ncs-goods-main" id="main-nav-holder">
					<div class="ncs-promotion" id="nc-bundling" style="display:none;"></div>
					<div class="tabbar pngFix" id="main-nav">
						<div class="ncs-goods-title-nav">
							<ul id="categorymenu">
								<li class="current">
									<a href="" id="tabGoodsIntro">商品详情</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="ncs-intro">
						<div class="content bd" id="ncGoodsIntro">
							<ul class="nc-goods-sort">
								<li>商家货号：W1T506A040031838</li>
								<li>品牌：春舞枝</li>
								<li>颜色：不限</li>
							</ul>
							<div class="ncs-goods-info-content">
								<div class="top-template">
									<img src="">
									<img src="">	
								</div>
								<div class="default">
									<p><br/></p>
									<img src="">
									<img src="">
									<img src="">
									<img src="">
									<img src="">
									<img src="">
									<img src="">
								</div>
							</div>
						</div>
					</div>
					<!-- 商品评价 -->
					<div class="ncs-comment">
						<div class="ncs-goods-title-bar hd">
							<h4>
								<a href="">商品评价</a>
							</h4>
						</div>
						<div class="ncs-goods-info-content bd" id="ncGoodsRate">
							<div class="top">
								<div class="rate">
									<p>
										<strong>100</strong>
										<sub>%</sub>
										<span>好评</span>
									</p>
									<span>共有1人参与评分</span>
								</div>
								<div class="percent">
									<dl>
										<dt>好评
											<em>(100)%</em>
										</dt>
										<dd>
											<i style="width:100%;"></i>
										</dd>
									</dl>
									<dl>
										<dt>中评
											<em>(0)%</em>
										</dt>
										<dd>
											<i style="width:0%;"></i>
										</dd>
									</dl>
									<dl>
										<dt>差评
											<em>(0)%</em>
										</dt>
										<dd>
											<i style="width:0%;"></i>
										</dd>
									</dl>
								</div>
								<div class="btns">
									<span>您可对已购商品进行评价</span>	
									<p>
										<a href="" class="ncs-btn ncs-btn-red" target="_blank">评价商品</a>
									</p>
								</div>
							</div>
							<div class="ncs-goods-title-nav">
								<ul id="comment_tab">
									<li class="current">商品评价（<span>1</span>）</li>
									<li>好价（<span>1</span>）</li>
									<li>中价（<span>0</span>）</li>
									<li>差价（<span>0</span>）</li>
								</ul>
							</div>
							<div id="goodseval" class="ncs-commend-main">
								<div id="t" class="ncs-commend-floor">
									<div class="user-avatar">
										<a href="" target="_blank" nctype="mcard">
											<img src="">
										</a>
									</div>
									<dl class="detail">
										<dt>
											<span class="user-name">
												<a href="" target="_blank" nctype="mcard">梦妞妞</a>
											</span>
											<time pubdate="pubdate">[2017-06-06]</time>
										</dt>
										<dd>用户评分：
											<span class="raty" style="width: 100px;" title="很满意">
												<img src="__ROOT__/Index/Common/images/icon/start.png" alt="1" title="很满意">
												<img src="__ROOT__/Index/Common/images/icon/start.png" alt="2" title="很满意">
												<img src="__ROOT__/Index/Common/images/icon/start.png" alt="3" title="很满意">
												<img src="__ROOT__/Index/Common/images/icon/start.png" alt="4" title="很满意">
												<img src="__ROOT__/Index/Common/images/icon/start.png" alt="5" title="很满意">
											</span>
										</dd>
										<dd class="content">
											评价详情：
											<span>很不错哦</span>
										</dd>
									</dl>
								</div>
								<div class="tr pr5 pb5 pr">
									<a href="" class="more-commend">查看全部>></a>
									<div class="pagination">
										<ul>
											<li>
												<span>首页</span>
											</li>
											<li>
												<span>上一页</span>
											</li>
											<li>
												<span>1</span>
											</li>
											<li>
												<span>下一页</span>
											</li>
											<li>
												<span>末页</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 销售记录 -->
					<div class="ncg-salelog">
						<div class="ncs-goods-title-bar hd">
							<h4>
								<a href="">销售记录</a>
							</h4>
						</div>
						<div class="ncs-goods-info-content bd" id="ncGoodsTraded">
							<div class="top">
								<div class="price">
									商 城 价
									<strong>356.00</strong>
									<span>购买的价格不同可能是由于店铺往期促销活动引起的，详情可以咨询卖家</span>
								</div>
							</div>
							<div id="salelog_demo" class="ncs-loading">
								<table width="100%" border="0" cellpadding="0" cellspacing="0" class="mt10">
									<thead>
										<tr>
											<th class="w200">买家1</th>
											<th class="w100">购买价</th>
											<th>购买数量</th>
											<th class="w200">购买时间</th>
										</tr>
									</thead>
									<tbody>
										<td>
											<span>用户名</span>
										</td>
										<td>
											<em class="price">¥356.00</em>
										</td>
										<td>
											<span>1</span>
										</td>
										<td>
											<span>2017-08-03 17:26:03</span>
										</td>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="10" class="tr">
												<div class="pagination">
													<ul>
														<li>
															<span>首页</span>
														</li>
														<li>
															<span>上一页</span>
														</li>
														<li>
															<span>1</span>
														</li>
														<li>
															<span>下一页</span>
														</li>
														<li>
															<span>末页</span>
														</li>
													</ul>
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
					<div class="ncs-consult">
						<div class="ncs-goods-title-bar hd">
							<h4>
								<a>购买咨询</a>
							</h4>
						</div>
						<div class="ncs-goods-info-content bd" id="ncGuestbook">
							<div id="consulting_demo" class="ncs-loading">
								<div class="top" style="overflow: hidden;">
									<div class="ncs-cosult-tips">
										<i></i>
										<p>客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不变还请谅解，谢谢！</p>
									</div>
									<div class="ncs-cosult-askbtn">
										<a href="" target="_blank" class="ncs-btn ncs-btn-red">我要提问</a>
									</div>
								</div>
								<div class="ncs-goods-title-nav">
									<ul id="consulting_tab">
										<li class="current">
											<a href="">全部</a>
										</li>
										<li>
											<a href="">商品咨询</a>
										</li>
										<li>
											<a href="">支付问题</a>
										</li>
										<li>
											<a href="">发票及保修</a>
										</li>
										<li>
											<a href="">促销及赠品</a>
										</li>
									</ul>
								</div>
								<div class="ncs-cosult-main">
									<div class="ncs-norecord">还没有咨询内容</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 推荐商品 -->
					<div class="ncs-recommend">
						<div class="title">
							<h4>推荐商品</h4>
						</div>
						<div class="content">
							<!-- 循环五个推荐商品 -->
							<ul>
								<li>
									<dl>
										<dt class="goods-name">
											<a href="http://www.531314.com/item-100872.html" target="_blank" title="11枝紫色洋兰 提前1-3天预订">【春舞枝】鲜花速递-紫色洋兰礼盒 紫色洋兰礼盒<em>11枝紫色洋兰 提前1-3天预订</em>
											</a>
										</dt>
										<dd class="goods-pic">
											<a href="" target="_blank" title="11枝紫色洋兰 提前1-3天预订">
												<img src="__ROOT__/Index/Common/images/1.jpg" alt="【春舞枝】鲜花速递-紫色洋兰礼盒 紫色洋兰礼盒">
											</a>
										</dd>
										<dd class="goods-price">¥138.00</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt class="goods-name">
											<a href="http://www.531314.com/item-100872.html" target="_blank" title="">【春舞枝】鲜花速递 9朵睡莲 高山积雪 花束全国同城配送 此款鲜花需提前1-3天预订哦<em>fcsfsfew</em></a></dt>
										<dd class="goods-pic">
											<a href="http://www.531314.com/item-100872.html" target="_blank" title="">
												<img src="http://img.531314.com/shop/store/goods/1/1_05075577590788277_240.jpg" alt="【春舞枝】鲜花速递 9朵睡莲 高山积雪 花束全国同城配送  此款鲜花需提前1-3天预订哦"/>
											</a>
										</dd>
										<dd class="goods-price">&yen;248.00</dd>
									</dl>
								</li>

							</ul>
							<div class="clear"></div>
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
			var classify = <?php echo ($classify); ?>;
			var app = angular.module("app",[]);
			app.controller("myCon",function ($scope,$http) {
				$scope.data = classify.info;
				$scope.err = "";
				$scope.goods = 0 ;
				$scope.totalMoney = 0 ;
				setTimeout(function(){
					after();
				},0);

				//添加到购物车
				$scope.addToShop = function(){
					$http({
						method: 'GET',
        				url: '__APP__/Shop/addToShop/?classify='+classify.info.classify,
					}).success(function(data){
//						console.log(data);
						if(data.status === 1){
							//进入购物车
							getSubtotal();
						}else if(data.status === 3){
							//进入登录
							window.location.href = "__APP__/Index/index?act=login&op=index"
						}else if(data.status === 4){
							//购物车已经存在
							getSubtotal();
						}else{
							//加入失败 网络问题
							alert("网络问题  购物车 " + data.info);
						}
					}).error(function(data){
						console.log(data);
					});
				}
				function getSubtotal(){
					$http.get("__APP__/Shop/subtotal").success(function(data){
	//					console.log(data);
						if(data.status == 1){
							$scope.goods = data.number ;
							$scope.totalMoney = data.subtotal ;
							$(".ncs-cart-popup").css("display","block");
						}
					}).error(function(data){
						console.log(data);
					});
				};
				
		    });
		    var img = $(".gallery_wrap").children("div:first-child");
		    $(".gallery_wrap").on("click",levelB);
		    //点击父容器 里面的图片和容器同时变大
		    function levelB(){
		    	img.attr("class","gallery levelC");
		    	$(this).animate({
		    		"height": "480px",
		    		"width": "1198px",
		    	},500,"linear");
		    	//背景可视窗口
		    	$(".ncs-goods-picture .close_wrap a").css("display","block");
		    	//关闭按钮
		    	img.animate({
		    		"height": "450px",
		    		"width": "450px",
		    		"left": "374px",
		    		"top": "15px",
		    	},500,"linear");
//		    	图片位置
		    	img.children("img:first-child").animate({
		    		"height": "450px",
		    		"width": "450px",
		    		"left": "374px",
		    		"top": "15px",
		    	},500,"linear");
		    	//图片大小 
		    	//图片可点击
		    	$(".levelC img").off("click");
		    	$(".levelC img").on("click",levelC);
//		    	变大后点击图片 还能二次变大
		    	
		    }
		    function levelC(event){
	    		$(this).animate({
	    			"height": "1200px",
	    			"width": "1200px",
	    		},300,"linear");
	    		var ev = window.event || event;
	    		$(this).parent().attr("class","gallery levelD");
	    		$(this).parent().animate({
	    			"height": "1200px",
	    			"width": "1200px",
	    			"left": "0px",
	    			"top": -ev.offsetY*720/450,
	    		},300,"linear");
	    		//取消之前绑定的点击事件防止它改变图片位置
	    		$(".levelD img").off("click");
	    		$(".levelD img").off("mousedown");
	    		var is_move = false ;
	    		//作为判断是否有拖拽的控件
		    	$(".levelD img").on("mousedown",function(event){
		    		var ev = window.event || event;
		    		var _top = ev.offsetY;
		    		is_move = false ;
		    		//取消点击事件 只进行鼠标按下的的操作
		    		$(".levelC img").off("click");
		    		//点击关闭变大的动画效果
		    		$(".gallery_wrap").off("click");
		    		$(".levelD img").on("mousemove",function(event){
		    			is_move = true ;
		    			var ev = window.event || event ;
		    			var imgTop = $(this).parent()[0].style.top;
		    			var imgTrueTop = (parseInt(imgTop) + ev.offsetY - _top);
						//移动图片容器是他显示位置不同
						if(imgTrueTop >= 0 ){
							imgTrueTop = 0 ;
						}
						if(imgTrueTop <= -720){
							imgTrueTop = -720;
						}
		    			$(this).parent()[0].style.top =  imgTrueTop + "px" ;
		    			return false ;
		    		});
		    		return false ;
		    	});
		    	$(".levelD img").off("mouseup");
		    	//防止绑定多次 mouseup事件
		    	$(".levelD img").on("mouseup",function(){
		    		if(!is_move){
		    			//当没有进行拖拽就给他点击放大的事件 
		    			$(".levelC img").on("click",levelC);
		    			//当没有进行拖拽就给他点击缩小的事件 
		    			$(".gallery_wrap").on("click",levelB);
		    		}
		    		$(".levelD img").off("mousemove");
		    		is_move = false ;//控件属性还原    提供拖拽后的正常效果
		    	})
	    		
	    		return false;
	    	}
		    $(".ncs-goods-picture .close_wrap a").on("click",function(){
		    	$(this).css("display","none");
		    	$(".gallery_wrap").animate({
		    		"height": "360px",
		    		"width": "360px",
		    	},400,"linear");
		    	
		    	img.attr("class","gallery levelB");
		    	img.animate({
			    	"height": "320px",
			    	"width": "320px",
			    	"left": "20px",
			    	"top": "20px",
		    	},500,"linear");
		    	img.children("img:first-child").animate({
		    		"height": "320px",
		    		"width": "320px",
		    	},500,"linear");
		    	$(".gallery img").off("click");

		    });
		    function closeInfo(){
				$(".ncs-cart-popup").css("display","none");
			};
		    function after(){
		    var smallImgs = $(".controller ul li a");
		    	smallImgs.eq(0).addClass("current");
		    	smallImgs.hover(function(){
		    		smallImgs.each(function(){
		    			$(this).attr("class","");
		    		});
		    		$(this).attr("class","current");
		    		$(".gallery_wrap").find("img")[0].src = $(this).children("img:first-child").attr("src");
		    	});
		    }
		</script>
	</body>
</html>