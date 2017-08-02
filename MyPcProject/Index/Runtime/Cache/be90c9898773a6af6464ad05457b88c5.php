<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗 - 春舞枝</title>
		<meta name="keywords" content="春舞枝," />
		<meta name="description" content="春舞枝," />
		<meta property="qc:admins" content="23572640266531314636" />
		<meta property="wb:webmaster" content="9d474898800c1e71" />
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
		</style>
		<link rel="shortcut icon" href="http://531314.com/favicon.ico" />
		<link href="http://www.531314.com/templates/new/css/base.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/templates/new/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/templates/new/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		
		<script>
			var COOKIE_PRE = '3E36_';
			var _CHARSET = 'utf-8';
			var SITEURL = 'http://www.531314.com';
			var SHOP_SITE_URL = 'http://www.531314.com';
			var RESOURCE_SITE_URL = 'http://res.531314.com';
			var RESOURCE_SITE_URL = 'http://res.531314.com';
			var SHOP_TEMPLATES_URL = 'http://www.531314.com/templates/new';
		</script>
		<script src="http://res.531314.com/js/jquery.js"></script>
		<script src="http://res.531314.com/js/common.js" charset="utf-8"></script>
		<script src="http://res.531314.com/js/jquery-ui/jquery.ui.js"></script>
		<script src="http://res.531314.com/js/jquery.validation.min.js"></script>
		<script src="http://res.531314.com/js/jquery.masonry.js"></script>
		<script src="http://res.531314.com/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
		
	</head>

	<body>
		<script type="text/javascript">
	var PRICE_FORMAT = '&yen;%s';
	$(function() {
		//首页左侧分类菜单
		$(".category ul.menu").find("li").each(
			function() {
				$(this).hover(
					function() {
						var cat_id = $(this).attr("cat_id");
						var menu = $(this).find("div[cat_menu_id='" + cat_id + "']");
						menu.show();
						$(this).addClass("hover");
						var menu_height = menu.height();
						if(menu_height < 60) menu.height(80);
						menu_height = menu.height();
						var li_top = $(this).position().top;
						$(menu).css("top", -li_top + 38);
					},
					function() {
						$(this).removeClass("hover");
						var cat_id = $(this).attr("cat_id");
						$(this).find("div[cat_menu_id='" + cat_id + "']").hide();
					}
				);
			}
		);
		$(".head-user-menu dl").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});
		$('.head-user-menu .my-mall').mouseover(function() { // 最近浏览的商品
			load_history_information();
			$(this).unbind('mouseover');
		});
		$('.head-user-menu .my-cart').mouseover(function() { // 运行加载购物车
			load_cart_information();
			$(this).unbind('mouseover');
		});
		$('#button').click(function() {
			if($('#keyword').val() == '') {
				return false;
			}
		});
	});

	$(function() {
		//search
		var act = "index";
		if(act == "store_list") {
			$("#search").children('ul').children('li:eq(1)').addClass("current");
			$("#search").children('ul').children('li:eq(0)').removeClass("current");
		}
		$("#search").children('ul').children('li').click(function() {
			$(this).parent().children('li').removeClass("current");
			$(this).addClass("current");
			$('#search_act').attr("value", $(this).attr("act"));
			$('#keyword').attr("placeholder", $(this).attr("title"));
		});
		$("#keyword").blur();

	});
</script>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<script type="text/javascript">
	//动画显示边条内容区域
	$(function() {
		ncToolbar();
		$(window).resize(function() {
			ncToolbar();
		});

		function ncToolbar() {
			if($(window).width() >= 1240) {
				$('#appBarTabs >.variation').hide();
			} else {
				$('#appBarTabs >.variation').hide();
			}
		}
		$('#appBarTabs').hover(
			function() {
				$('#appBarTabs >.variation').hide();
			},
			function() {
				ncToolbar();
			}
		);
		$("#compare").click(function() {
			if($("#content-compare").css('right') == '-210px') {
				loadCompare(false);
				$('#content-cart').animate({
					'right': '-210px'
				});
				$("#content-compare").animate({
					right: '35px'
				});
			} else {
				$(".close").click();
				$(".chat-list").css("display", 'none');
			}
		});
		$("#rtoolbar_cart").click(function() {
			if($("#content-cart").css('right') == '-210px') {
				$('#content-compare').animate({
					'right': '-210px'
				});
				$("#content-cart").animate({
					right: '35px'
				});
				if(!$("#rtoolbar_cartlist").html()) {
					$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
				}
			} else {
				$(".close").click();
				$(".chat-list").css("display", 'none');
			}
		});
		$(".close").click(function() {
			$(".content-box").animate({
				right: '-210px'
			});
		});

		$(".quick-menu dl").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});

		// 右侧bar用户信息
		$('div[nctype="a-barUserInfo"]').click(function() {
			$('div[nctype="barUserInfo"]').toggle();
		});
		// 右侧bar登录
		$('div[nctype="a-barLoginBox"]').click(function() {
			$('div[nctype="barLoginBox"]').toggle();
			document.getElementById('codeimage').src = '__APP__/Index?act=seccode&op=makecode&nchash=c93636e5&t=' + Math.random();
		});
		$('a[nctype="close-barLoginBox"]').click(function() {
			$('div[nctype="barLoginBox"]').toggle();
		});
	});
</script>
<div class="public-top-layout w">
	<div class="topbar wrapper">
		<div class="user-entry">
			您好，欢迎来到
			<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=index">登录</a>]</span> <span>[<a href="__APP__/Index?act=login&op=register">注册</a>]</span>

		</div>
		<div class="quick-menu">

			<dl>
				<dt><a href="__APP__/Index?act=seller_login&op=show_login" target="_blank" title="商户中心">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></dt>

			</dl>
			<dl>
				<dt><a href="__APP__/Index?act=member_order">我的订单</a><i></i></dt>
				<dd>
					<ul>
						<li>
							<a href="__APP__/Index?act=member_order&state_type=state_new">待付款订单</a>
						</li>
						<li>
							<a href="__APP__/Index?act=member_order&state_type=state_send">待确认收货</a>
						</li>
						<li>
							<a href="__APP__/Index?act=member_order&state_type=state_noeval">待评价交易</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><a href="__APP__/Index?act=member_favorites&op=fglist">我的收藏</a><i></i></dt>
				<dd>
					<ul>
						<li>
							<a href="__APP__/Index?act=member_favorites&op=fglist">商品收藏</a>
						</li>
						<li>
							<a href="__APP__/Index?act=member_favorites&op=fslist">店铺收藏</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>客户服务<i></i></dt>
				<dd>
					<ul>
						<li>
							<a href="http://www.531314.com/article_cate-2.html">帮助中心</a>
						</li>
						<li>
							<a href="http://www.531314.com/article_cate-5.html">售后服务</a>
						</li>
						<li>
							<a href="http://www.531314.com/article_cate-6.html">客服中心</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl class="weixin">
				<dt>关注我们<i></i></dt>
				<dd>
					<h4>扫描二维码<br/>
关注商城微信号</h4>
					<img src="http://img.531314.com/shop/common/05003950598347095.jpg"> </dd>
			</dl>
		</div>
	</div>
</div>

<div class="header-wrap">
	<header class="public-head-layout wrapper">
		<h1 class="site-logo"><a href="__APP__/Index"><img src="http://img.531314.com/shop/common/04993648993753192.png" class="pngFix"></a></h1>
		<div id="search" class="head-search-bar">

			<ul class="tab">
				<li title="请输入您要搜索的商品关键字" act="search" class="current">商品</li>
				<li title="请输入您要搜索的店铺关键字" act="store_list">店铺</li>
			</ul>
			<form class="search-form" method="get" action="http://www.531314.com">
				<input type="hidden" value="search" id="search_act" name="act">
				<input placeholder="请输入您要搜索的商品关键字" name="keyword" id="keyword" type="text" class="input-text" value="" maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search" />
				<input type="submit" id="button" value="搜索" class="input-submit">
			</form>

			<div class="keyword">热门搜索：
				<ul>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E7%99%BD%E8%89%B2%E6%83%85%E4%BA%BA%E8%8A%82">白色情人节</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E6%AF%8D%E4%BA%B2%E8%8A%82">母亲节</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E7%8E%AB%E7%91%B0">玫瑰</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E5%BA%B7%E4%B9%83%E9%A6%A8">康乃馨</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E7%94%9F%E6%97%A5%E7%A4%BC%E7%89%A9">生日礼物</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="head-user-menu">
			<dl class="my-mall">
				<dt><span class="ico"></span>我的商城<i class="arrow"></i></dt>
				<dd>
					<div class="sub-title">
						<h4>
</h4>
						<a href="__APP__/Index?act=member&op=home" class="arrow">我的用户中心<i></i></a>
					</div>
					<div class="user-centent-menu">
						<ul>
							<li>
								<a href="__APP__/Index?act=member_message&op=message">站内消息(<span>0</span>)</a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_order" class="arrow">我的订单<i></i></a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_consult&op=my_consult">咨询回复(<span id="member_consult">0</span>)</a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_favorites&op=fglist" class="arrow">我的收藏<i></i></a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_voucher">代金券(<span id="member_voucher">0</span>)</a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_points" class="arrow">我的积分<i></i></a>
							</li>
						</ul>
					</div>
					<div class="browse-history">
						<div class="part-title">
							<h4>最近浏览的商品</h4>
							<span style="float:right;"><a href="__APP__/Index?act=member_goodsbrowse&op=list">全部浏览历史</a></span>
						</div>
						<ul>
							<li class="no-goods"><img class="loading" src="__ROOT__/Index/Common/images/loading.gif" /></li>
						</ul>
					</div>
				</dd>
			</dl>
			<dl class="my-cart">
				<dt><span class="ico"></span>购物车结算<i class="arrow"></i></dt>
				<dd>
					<div class="sub-title">
						<h4>最新加入的商品</h4>
					</div>
					<div class="incart-goods-box">
						<div class="incart-goods"> <img class="loading" src="__ROOT__/Index/Common/images/loading.gif" /> </div>
					</div>
					<div class="checkout"> <span class="total-price">共<i>0</i>种商品</span>
						<a href="__APP__/Index?act=cart" class="btn-cart">结算购物车中的商品</a>
					</div>
				</dd>
			</dl>
		</div>
	</header>
</div>
<nav class="public-nav-layout">
	<div class="wrapper">
		<div class="all-category">
			<div class="title"> <i></i>
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
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=27&keyword=%E7%8E%AB%E7%91%B0">玫瑰</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=28&keyword=%E7%99%BE%E5%90%88">百合</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=29&keyword=%E5%BA%B7%E4%B9%83%E9%A6%A8">康乃馨</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=30&keyword=%E5%85%B6%E5%AE%83">其它</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=85&keyword=%E6%B4%8B%E7%89%A1%E4%B8%B9">洋牡丹</a></h5></dd>
						</dl>
						<li>
							<li>
								<div class="class">
									<h4>节日</h4>
									<span class="arrow"></span>
								</div>
							</li>
							<li class="class-items">
								<dl>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=32&keyword=%E6%83%85%E4%BA%BA%E8%8A%82">情人节</a></h5></dd>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=33&keyword=%E6%AF%8D%E4%BA%B2%E8%8A%82">母亲节</a></h5></dd>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=34&keyword=%E7%88%B6%E4%BA%B2%E8%8A%82">父亲节</a></h5></dd>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=35&keyword=%E5%9C%A3%E8%AF%9E%E8%8A%82">圣诞节</a></h5></dd>
								</dl>
								<li>
									<li>
										<div class="class">
											<h4>枝数</h4>
											<span class="arrow"></span>
										</div>
									</li>
									<li class="class-items">
										<dl>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=37&keyword=9">9</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=38&keyword=11">11</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=39&keyword=19">19</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=40&keyword=36">36</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=41&keyword=99">99</a></h5></dd>
										</dl>
										<li>
											<li>
												<div class="class">
													<h4>送花对象</h4>
													<span class="arrow"></span>
												</div>
											</li>
											<li class="class-items">
												<dl>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=51&keyword=%E7%88%B1%E4%BA%BA">爱人</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=52&keyword=%E6%81%8B%E4%BA%BA">恋人</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=53&keyword=%E5%8D%95%E8%BA%AB">单身</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=54&keyword=%E8%80%81%E5%B8%88">老师</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=55&keyword=%E6%9C%8B%E5%8F%8B">朋友</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=56&keyword=%E9%95%BF%E8%BE%88">长辈</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=57&keyword=%E6%8E%A2%E6%9C%9B">探望</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=58&keyword=%E5%AE%A2%E6%88%B7">客户</a></h5></dd>
												</dl>
												<li>
													<li>
														<div class="class">
															<h4>鲜花生活馆</h4>
															<span class="arrow"></span>
														</div>
													</li>
													<li class="class-items">
														<dl>
															<dd>
																<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=60&keyword=%E5%AE%B6%E5%BA%AD%E5%A5%97%E9%A4%90">家庭套餐</a></h5></dd>
															<dd>
																<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=61&keyword=%E6%9C%88%E5%BA%A6%E5%A5%97%E9%A4%90">月度套餐</a></h5></dd>
														</dl>
														<li>
				</ul>
			</div>
		</div>
		<ul class="site-menu">
			<li>
				<a href="__APP__/Index/index" class="current">首页</a>
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
<!--<div class="nch-breadcrumb-layout">
</div>-->

<!--<style type="text/css">
	.category {
		display: block!important;
	}
</style>-->
<!--<div class="clear"></div>-->

		<div class="nch-breadcrumb-layout">
			<div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
				<span><a href="http://www.531314.com">首页</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html">鲜花束</a></span><span class="arrow">></span>
				<span>【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗</span>
			</div>
		</div>
		<link href="http://www.531314.com/templates/new/css/home_goods.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			.ncs-goods-picture .levelB,
			.ncs-goods-picture .levelC {
				cursor: url(http://www.531314.com/templates/new/images/shop/zoom.cur), pointer;
			}
			
			.ncs-goods-picture .levelD {
				cursor: url(http://www.531314.com/templates/new/images/shop/hand.cur), move\9;
			}
		</style>
		<div id="content" class="wrapper pr">
			<input type="hidden" id="lockcompare" value="unlock" />
			<div class="ncs-detail">

				<div id="ncs-goods-picture" class="ncs-goods-picture image_zoom"> </div>

				<div class="ncs-goods-summary">
					<div class="name">
						<h1>【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗</h1>
						<strong>9枝白玫瑰紫玫瑰16枝 、8枝子洋桔梗、尤加利若干</strong> </div>
					<div class="ncs-meta">
						<div class="rate">
							<a href="#ncGoodsRate">商品评分</a>
							<div class="raty" data-score="5"></div>
						</div>

						<dl>
							<dt>市&nbsp;场&nbsp;价：</dt>
							<dd class="cost-price"><strong>&yen;599.00</strong></dd>
						</dl>

						<dl>
							<dt>商&nbsp;城&nbsp;价：</dt>
							<dd class="price">
								<strong>&yen;388.00</strong>
							</dd>
						</dl>

					</div>
					<div class="ncs-plus">

						<dl class="ncs-freight">
							<dt>
 
 
至&#12288;全国： </dt>
							<dd id="transport_price">
								<span id="nc_kd">卖家承担运费</span>
							</dd>
							<dd style="color:red;display:none" id="loading_price">loading.....</dd>
						</dl>

					</div>
					<div class="ncs-key">

						<dl nctype="nc-spec">
							<dt>颜色：</dt>
							<dd>
								<ul nctyle="ul_sign">

									<li class="sp-img">
										<a href="javascript:void(0);" class="hovered" data-param="{valid:681}" title="33白+紫玫瑰16枝+8枝子洋桔梗"><img src="http://img.531314.com/shop/store/goods/1/1_05424700938891995_60.jpg" />33白+紫玫瑰16枝+8枝子洋桔梗<i></i></a>
									</li>
								</ul>
							</dd>
						</dl>

						<dl>
							<dt>购买数量：</dt>
							<dd class="ncs-figure-input">
								<input type="text" name="" id="quantity" value="1" size="3" maxlength="6" class="text w30">
								<a href="javascript:void(0)" class="increase">+</a>
								<a href="javascript:void(0)" class="decrease">-</a> <span>(当前库存<em nctype="goods_stock">998</em>件  
)</span> </dd>
						</dl>

					</div>

					<div class="ncs-btn">
						<div nctype="goods_prompt" class="ncs-point">
							<span class="yes">已选择 <strong>33白+紫玫瑰16枝+8枝子洋桔梗</strong></span>
						</div>

						<div class="clear"></div>

						<a href="javascript:void(0);" nctype="buynow_submit" class="buynow " title="立即购买">立即购买</a>

						<a href="javascript:void(0);" nctype="addcart_submit" class="addcart " title="添加购物车"><i class="icon-shopping-cart"></i>添加购物车</a>

						<div class="ncs-cart-popup">
							<dl>
								<dt>成功添加到购物车<a title="关闭" onClick="$('.ncs-cart-popup').css({'display':'none'});">X</a></dt>
								<dd>购物车共有 <strong id="bold_num"></strong> 种商品 总金额为：<em id="bold_mly" class="saleP"></em></dd>
								<dd class="btns">
									<a href="javascript:void(0);" class="ncs-btn-mini ncs-btn-green" onClick="location.href='http://www.531314.com/index.php?act=cart&store_id=1'">查看购物车</a>
									<a href="javascript:void(0);" class="ncs-btn-mini" value="" onClick="$('.ncs-cart-popup').css({'display':'none'});">继续购物</a>
								</dd>
							</dl>
						</div>

					</div>

				</div>

				<div style=" position: absolute; z-index: 1; top: -1px; right: -1px;">

					<div class="ncs-info">
						<div class="title">
							<h4>春舞枝旗舰店</h4>
						</div>
						<div class="content">
							<dl class="all-rate">
								<dt>综合评分：</dt>
								<dd>
									<div class="rating"><span style="width: 100%"></span></div>
									<em>5</em>分</dd>
							</dl>
							<div class="ncs-detail-rate">
								<h5><strong>店铺动态评分</strong>与行业相比</h5>
								<ul>
									<li> 描述相符<span class="credit">4.9 分</span> <span class=""><i></i><em></em></span> </li>
									<li> 服务态度<span class="credit">5 分</span> <span class=""><i></i><em></em></span> </li>
									<li> 发货速度<span class="credit">5 分</span> <span class=""><i></i><em></em></span> </li>
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
								<a href="http://123.531314.com/">进入商家店铺</a>
								<a href="javascript:collect_store('1','count','store_collect')">收藏店铺<em nctype="store_collect">26</em></a>
							</div>

						</div>
					</div>

					<script type="text/javascript">
						var cityName = "龙津镇屏山路66号";
						var address = "福建省	三明市	清流县";
						var store_name = "春舞枝花卉有限公司";

						function initialize() {
							map = new BMap.Map("map_container");
							localCity = new BMap.LocalCity();

							map.enableScrollWheelZoom();
							localCity.get(function(cityResult) {
								if(cityResult) {
									var level = cityResult.level;
									if(level < 13) level = 13;
									map.centerAndZoom(cityResult.center, level);
									cityResultName = cityResult.name;
									if(cityResultName.indexOf(cityName) >= 0) cityName = cityResult.name;
									getPoint();
								}
							});
						}

						function loadScript() {
							var script = document.createElement("script");
							script.src = "http://api.map.baidu.com/api?v=1.2&callback=initialize";
							document.body.appendChild(script);
						}

						function getPoint() {
							var myGeo = new BMap.Geocoder();
							myGeo.getPoint(address, function(point) {
								if(point) {
									setPoint(point);
								}
							}, cityName);
						}

						function setPoint(point) {
							if(point) {
								map.centerAndZoom(point, 16);
								var marker = new BMap.Marker(point);
								map.addOverlay(marker);
							}
						}

						// 当鼠标放在店铺地图上再加载百度地图。
						$(function() {
							$('.ncs-info-btn-map').one('mouseover', function() {
								loadScript();
							});
						});
					</script>
					<script>
						$(function() {
							var store_id = "1";
							var goods_id = "101014";
							var act = "goods";
							var op = "index";
							$.getJSON("index.php?act=show_store&op=ajax_flowstat_record", {
								store_id: store_id,
								goods_id: goods_id,
								act_param: act,
								op_param: op
							});
						});
					</script>
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
									<a id="tabGoodsIntro" href="#content">商品详情</a>
								</li>

							</ul>
							<div class="switch-bar">
								<a href="javascript:void(0)" id="fold">&nbsp;</a>
							</div>
						</div>
					</div>
					<div class="ncs-intro">
						<div class="content bd" id="ncGoodsIntro">

							<ul class="nc-goods-sort">
								<li>商家货号：</li>
								<li>品牌：</li>
								<li>颜色：不限</li>
							</ul>
							<div class="ncs-goods-info-content">
								<div class="top-template"><img src="http://img.531314.com/shop/store/goods/1/1_05423050836478158_1280.jpg" alt="image" /><img src="http://img.531314.com/shop/store/goods/1/1_05398056314067252.jpg" alt="" /></div>
								<div class="default"><img src="http://img.531314.com/shop/store/goods/1/1_05424699839526818_1280.jpg" alt="image" /><img src="http://img.531314.com/shop/store/goods/1/1_05424699739364635_1280.jpg" alt="image" /><img src="http://img.531314.com/shop/store/goods/1/1_05424699796088798_1280.jpg" alt="image" /><img src="http://img.531314.com/shop/store/goods/1/1_05424699931249205_1280.jpg" alt="image" /><img src="http://img.531314.com/shop/store/goods/1/1_05424699877021375_1280.jpg" alt="image" /></div>
							</div>
						</div>
					</div>
					<div class="ncs-comment">
						<div class="ncs-goods-title-bar hd">
							<h4><a href="javascript:void(0);">商品评价</a></h4>
						</div>
						<div class="ncs-goods-info-content bd" id="ncGoodsRate">
							<div class="top">
								<div class="rate">
									<p><strong>100</strong><sub>%</sub>好评</p>
									<span>共有0人参与评分</span></div>
								<div class="percent">
									<dl>
										<dt>好评<em>(100%)</em></dt>
										<dd><i style="width: 100%"></i></dd>
									</dl>
									<dl>
										<dt>中评<em>(0%)</em></dt>
										<dd><i style="width: 0%"></i></dd>
									</dl>
									<dl>
										<dt>差评<em>(0%)</em></dt>
										<dd><i style="width: 0%"></i></dd>
									</dl>
								</div>
								<div class="btns"><span>您可对已购商品进行评价</span>
									<p>
										<a href="http://www.531314.com/index.php?act=member_order&op=index" class="ncs-btn ncs-btn-red" target="_blank"><i class="icon-comment-alt"></i>评价商品</a>
									</p>
								</div>
							</div>
							<div class="ncs-goods-title-nav">
								<ul id="comment_tab">
									<li data-type="all" class="current">
										<a href="javascript:void(0);">商品评价(0)</a>
									</li>
									<li data-type="1">
										<a href="javascript:void(0);">好评(0)</a>
									</li>
									<li data-type="2">
										<a href="javascript:void(0);">中评(0)</a>
									</li>
									<li data-type="3">
										<a href="javascript:void(0);">差评(0)</a>
									</li>
								</ul>
							</div>

							<div id="goodseval" class="ncs-commend-main"></div>
						</div>
					</div>
					<div class="ncg-salelog">
						<div class="ncs-goods-title-bar hd">
							<h4><a href="javascript:void(0);">销售记录</a></h4>
						</div>
						<div class="ncs-goods-info-content bd" id="ncGoodsTraded">
							<div class="top">
								<div class="price">商&nbsp;城&nbsp;价<strong>388.00</strong>元<span>购买的价格不同可能是由于店铺往期促销活动引起的，详情可以咨询卖家</span></div>
							</div>

							<div id="salelog_demo" class="ncs-loading"> </div>
						</div>
					</div>
					<div class="ncs-consult">
						<div class="ncs-goods-title-bar hd">
							<h4><a href="javascript:void(0);">购买咨询</a></h4>
						</div>
						<div class="ncs-goods-info-content bd" id="ncGuestbook">

							<div id="consulting_demo" class="ncs-loading"> </div>
						</div>
					</div>
					<div class="ncs-recommend">
						<div class="title">
							<h4>推荐商品</h4>
						</div>
						<div class="content">
							<ul>
								<li>
									<dl>
										<dt class="goods-name"><a href="http://www.531314.com/item-100941.html" target="_blank" title="">【春舞枝】补差价链接，差多少买多少<em></em></a></dt>
										<dd class="goods-pic">
											<a href="http://www.531314.com/item-100941.html" target="_blank" title=""><img src="http://img.531314.com/shop/store/goods/1/1_05114435486606689_240.jpg" alt="【春舞枝】补差价链接，差多少买多少" /></a>
										</dd>
										<dd class="goods-price">&yen;1.00</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt class="goods-name"><a href="http://www.531314.com/item-100705.html" target="_blank" title="同城配送 专人送达">11朵香槟玫瑰全国北京上海广州同城送花 香槟色<em>同城配送 专人送达</em></a></dt>
										<dd class="goods-pic">
											<a href="http://www.531314.com/item-100705.html" target="_blank" title="同城配送 专人送达"><img src="http://img.531314.com/shop/store/goods/1/1_05001363477346670_240.jpg" alt="11朵香槟玫瑰全国北京上海广州同城送花 香槟色" /></a>
										</dd>
										<dd class="goods-price">&yen;236.00</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt class="goods-name"><a href="http://www.531314.com/item-100944.html" target="_blank" title="紫白色满天星混搭花束  提前三天预定">【春舞枝】鲜花速递-紫雨烟云花束 紫白色满天星 提前3天预订<em>紫白色满天星混搭花束 提前三天预定</em></a></dt>
										<dd class="goods-pic">
											<a href="http://www.531314.com/item-100944.html" target="_blank" title="紫白色满天星混搭花束  提前三天预定"><img src="http://img.531314.com/shop/store/goods/1/1_05140438819067877_240.jpg" alt="【春舞枝】鲜花速递-紫雨烟云花束 紫白色满天星 提前3天预订" /></a>
										</dd>
										<dd class="goods-price">&yen;178.00</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt class="goods-name"><a href="http://www.531314.com/item-100816.html" target="_blank" title="">【春舞枝】鲜花速递创意礼品21枝香槟玫瑰情人节玫瑰花束生日礼物<em></em></a></dt>
										<dd class="goods-pic">
											<a href="http://www.531314.com/item-100816.html" target="_blank" title=""><img src="http://img.531314.com/shop/store/goods/1/1_05073990172657079_240.jpg" alt="【春舞枝】鲜花速递创意礼品21枝香槟玫瑰情人节玫瑰花束生日礼物" /></a>
										</dd>
										<dd class="goods-price">&yen;238.00</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt class="goods-name"><a href="http://www.531314.com/item-100919.html" target="_blank" title="">【春舞枝】鲜花速递19枝粉玫瑰花束母亲节鲜花七夕鲜花全国基地直销<em></em></a></dt>
										<dd class="goods-pic">
											<a href="http://www.531314.com/item-100919.html" target="_blank" title=""><img src="http://img.531314.com/shop/store/goods/1/1_05158574671878308_240.jpg" alt="【春舞枝】鲜花速递19枝粉玫瑰花束母亲节鲜花七夕鲜花全国基地直销" /></a>
										</dd>
										<dd class="goods-price">&yen;299.00</dd>
									</dl>
								</li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="ncs-sidebar">

					<div class="ncs-message-bar">
						<div class="default">
							<h5>春舞枝旗舰店</h5>
							<span member_id="1"></span>
						</div>
						<div class="service-list" store_id="1" store_name="春舞枝旗舰店">
							<dl>
								<dt>售前客服：</dt>
								<dd><span>售前</span><span>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1263058363&site=qq&menu=yes" title="QQ: 1263058363"><img border="0" src="http://wpa.qq.com/pa?p=2:1263058363:52" style=" vertical-align: middle;"/></a>
</span></dd>
							</dl>
							<dl>
								<dt>售后客服：</dt>
								<dd><span>售后</span><span>
<a href="http://wpa.qq.com/msgrd?v=3&uin=1805336588&site=qq&menu=yes" title="QQ: 1805336588" target="_blank"><img border="0" src="http://wpa.qq.com/pa?p=2:1805336588:52" alt="点击这里给我发消息" style=" vertical-align: middle;"></a>
</span></dd>
							</dl>
						</div>
					</div>

					<div class="ncs-sidebar-container ncs-class-bar">
						<div class="title">
							<h4>商品分类</h4>
						</div>
						<div class="content">
							<p><span><a href="http://www.531314.com/shop_view-1-0-1-2-0.html">按新品</a></span><span><a href="http://www.531314.com/shop_view-1-0-2-2-0.html">按价格</a></span><span><a href="http://www.531314.com/shop_view-1-0-3-2-0.html">按销量</a></span><span><a href="http://www.531314.com/shop_view-1-0-5-2-0.html">按人气</a></span></p>
							<div class="ncs-search">
								<form id="" name="searchShop" method="get" action="index.php">
									<input type="hidden" name="act" value="show_store" />
									<input type="hidden" name="op" value="goods_all" />
									<input type="hidden" name="store_id" value="1" />
									<input type="text" class="text w120" name="inkeyword" value="" placeholder="搜索店内商品">
									<a href="javascript:document.searchShop.submit();" class="ncs-btn">搜索</a>
								</form>
							</div>
							<ul class="ncs-submenu">
								<li><span class="ico-none"><em>-</em></span>
									<a href="http://www.531314.com/shop_view-1-0-0-0-0.html">全部商品</a>
								</li>
								<li><span class="ico-none" onclick="class_list(this);" span_id="1" style="cursor: pointer;"><em>-</em></span>
									<a href="http://www.531314.com/shop_view-1-1-0-0-0.html">鲜花</a>
									<ul id="stc_1">

										<li><span class="ico-none" onclick="class_list(this);" span_id="26" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-26-0-0-0.html">主花材</a>
											<ul id="stc_1">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-27-0-0-0.html">玫瑰</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-28-0-0-0.html">百合</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-29-0-0-0.html">康乃馨</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-30-0-0-0.html">其它</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-85-0-0-0.html">洋牡丹</a>
												</li>
											</ul>
										</li>

										<li><span class="ico-none" onclick="class_list(this);" span_id="31" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-31-0-0-0.html">节日</a>
											<ul id="stc_1">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-32-0-0-0.html">情人节</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-33-0-0-0.html">母亲节</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-34-0-0-0.html">父亲节</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-35-0-0-0.html">圣诞节</a>
												</li>
											</ul>
										</li>

										<li><span class="ico-none" onclick="class_list(this);" span_id="36" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-36-0-0-0.html">枝数</a>
											<ul id="stc_1">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-37-0-0-0.html">9</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-38-0-0-0.html">11</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-39-0-0-0.html">19</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-40-0-0-0.html">36</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-41-0-0-0.html">99</a>
												</li>
											</ul>
										</li>

										<li><span class="ico-none" onclick="class_list(this);" span_id="50" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-50-0-0-0.html">送花对象</a>
											<ul id="stc_1">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-51-0-0-0.html">爱人</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-52-0-0-0.html">恋人</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-53-0-0-0.html">单身</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-54-0-0-0.html">老师</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-55-0-0-0.html">朋友</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-56-0-0-0.html">长辈</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-57-0-0-0.html">探望</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-58-0-0-0.html">客户</a>
												</li>
											</ul>
										</li>

										<li><span class="ico-none" onclick="class_list(this);" span_id="59" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-59-0-0-0.html">鲜花生活馆</a>
											<ul id="stc_1">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-60-0-0-0.html">家庭套餐</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-61-0-0-0.html">月度套餐</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li><span class="ico-none" onclick="class_list(this);" span_id="2" style="cursor: pointer;"><em>-</em></span>
									<a href="http://www.531314.com/shop_view-1-2-0-0-0.html">多肉</a>
									<ul id="stc_2">

										<li><span class="ico-none" onclick="class_list(this);" span_id="42" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-42-0-0-0.html">品种</a>
											<ul id="stc_2">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-43-0-0-0.html">石科</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-62-0-0-0.html">景天科</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-63-0-0-0.html">番杏科</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-64-0-0-0.html">百合科</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-65-0-0-0.html">菊科</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-66-0-0-0.html">马齿觅科</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-67-0-0-0.html">其他科属</a>
												</li>
											</ul>
										</li>

										<li> <span class="ico-none"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-68-0-0-0.html">多肉组合</a>
										</li>

										<li> <span class="ico-none"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-69-0-0-0.html">进口多肉</a>
										</li>

										<li><span class="ico-none" onclick="class_list(this);" span_id="71" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-71-0-0-0.html">萌肉花器</a>
											<ul id="stc_2">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-72-0-0-0.html">简约花盆</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-73-0-0-0.html">萌宠花盆</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-74-0-0-0.html">复古花盆</a>
												</li>
											</ul>
										</li>

										<li> <span class="ico-none"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-75-0-0-0.html">工具摆件</a>
										</li>

										<li> <span class="ico-none"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-76-0-0-0.html">种植石料</a>
										</li>
									</ul>
								</li>
								<li><span class="ico-none" onclick="class_list(this);" span_id="3" style="cursor: pointer;"><em>-</em></span>
									<a href="http://www.531314.com/shop_view-1-3-0-0-0.html">绿植</a>
									<ul id="stc_3">

										<li><span class="ico-none" onclick="class_list(this);" span_id="44" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-44-0-0-0.html">功能</a>
											<ul id="stc_3">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-45-0-0-0.html">净化PM2.5</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-77-0-0-0.html">吸甲醛</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-78-0-0-0.html">防辐射</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-79-0-0-0.html">增湿增氧</a>
												</li>
											</ul>
										</li>

										<li> <span class="ico-none"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-80-0-0-0.html">水培绿植</a>
										</li>

										<li> <span class="ico-none"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-81-0-0-0.html">开花绿植</a>
										</li>

										<li><span class="ico-none" onclick="class_list(this);" span_id="82" style="cursor: pointer;"><em>-</em></span>
											<a href="http://www.531314.com/shop_view-1-82-0-0-0.html">绿植园艺</a>
											<ul id="stc_3">
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-83-0-0-0.html">花盆</a>
												</li>
												<li><span class="ico-sub">&nbsp;</span>
													<a href="http://www.531314.com/shop_view-1-84-0-0-0.html">工具配件</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

					<div class="ncs-sidebar-container ncs-top-bar">
						<div class="title">
							<h4>商品排行</h4>
						</div>
						<div class="content">
							<ul class="ncs-top-tab pngFix">
								<li id="hot_sales_tab" class="current">
									<a href="http://www.531314.com/shop_view-1-0-4-2-0.html">热销商品排行</a>
								</li>
								<li id="hot_collect_tab">
									<a href="http://www.531314.com/shop_view-1-0-4-2-0.html">热门收藏排行</a>
								</li>
							</ul>
							<div id="hot_sales_list" class="ncs-top-panel">
								<ol>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100807.html">【春舞枝】鲜花速递永生花礼盒情人节创意礼品生日礼物 G款-红玫瑰礼盒永生花通过快递形式发货</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100807-store_id-1.html"><span class="thumb size40"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073975800939461_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073975800939461_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递永生花礼盒情人节创意礼品生日礼物 G款-红玫瑰礼盒永生花通过快递形式发货"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">628.00</dd>
											<dd class="selled pngFix">售出：<strong>521</strong>笔</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100810.html">【春舞枝】鲜花速递永生花礼盒情人节创意礼品生日礼物 E款-小熊蓝 永生花通过快递形式发货</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100810-store_id-1.html"><span class="thumb size40"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073982466251268_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073982466251268_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递永生花礼盒情人节创意礼品生日礼物 E款-小熊蓝  永生花通过快递形式发货"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">298.00</dd>
											<dd class="selled pngFix">售出：<strong>389</strong>笔</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100894.html">【春舞枝】鲜花速递 18枝红袖玫瑰 送女朋友表白礼物 花束全国同城配送 此款鲜花需提前1-3天预订哦</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100894-store_id-1.html"><span class="thumb size40"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05075600898592416_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05075600898592416_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递 18枝红袖玫瑰 送女朋友表白礼物 花束全国同城配送 此款鲜花需提前1-3天预订哦"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">468.00</dd>
											<dd class="selled pngFix">售出：<strong>387</strong>笔</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100826.html">【春舞枝】鲜花速递19朵红玫瑰花束礼盒全国直销</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100826-store_id-1.html"><span class="thumb size40"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073999825004078_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073999825004078_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递19朵红玫瑰花束礼盒全国直销"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">198.00</dd>
											<dd class="selled pngFix">售出：<strong>378</strong>笔</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100861.html">【春舞枝】鲜花速递 黄百合混搭金辉蔷薇黄小菊松针 全国同城配送 此款鲜花需提前1-3天预订哦</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100861-store_id-1.html"><span class="thumb size40"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05075558517654335_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05075558517654335_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递 黄百合混搭金辉蔷薇黄小菊松针 全国同城配送 此款鲜花需提前1-3天预订哦"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">438.00</dd>
											<dd class="selled pngFix">售出：<strong>373</strong>笔</dd>
										</dl>
									</li>
								</ol>
							</div>
							<div id="hot_collect_list" class="ncs-top-panel hide">
								<ol>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100809.html">【春舞枝】鲜花速递康乃馨相思梅全国同城配送</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100809-store_id-1.html" title=""><span class="thumb size40"><i></i> <img src="http://img.531314.com/shop/store/goods/1/1_05073982590466699_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073982590466699_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递康乃馨相思梅全国同城配送"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">198.00</dd>
											<dd class="collection pngFix">收藏人气：<strong>10</strong></dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100814.html">【春舞枝】鲜花速递创意礼品21枝混搭玫瑰情人节花束生日礼物</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100814-store_id-1.html" title=""><span class="thumb size40"><i></i> <img src="http://img.531314.com/shop/store/goods/1/1_05073987921400349_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073987921400349_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递创意礼品21枝混搭玫瑰情人节花束生日礼物"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">238.00</dd>
											<dd class="collection pngFix">收藏人气：<strong>3</strong></dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100804.html">【春舞枝】鲜花速递19朵红玫瑰花束全国花店同城配送 红色</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100804-store_id-1.html" title=""><span class="thumb size40"><i></i> <img src="http://img.531314.com/shop/store/goods/1/1_05073971578907109_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073971578907109_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递19朵红玫瑰花束全国花店同城配送 红色"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">178.00</dd>
											<dd class="collection pngFix">收藏人气：<strong>2</strong></dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100806.html">【春舞枝】鲜花速递11朵紫玫瑰全国同城配送 此款鲜花需提前1-3天预订哦</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100806-store_id-1.html" title=""><span class="thumb size40"><i></i> <img src="http://img.531314.com/shop/store/goods/1/1_05073973407032966_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073973407032966_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递11朵紫玫瑰全国同城配送  此款鲜花需提前1-3天预订哦"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">158.00</dd>
											<dd class="collection pngFix">收藏人气：<strong>2</strong></dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt><a href="http://www.531314.com/item-100811.html">【春舞枝】鲜花速递19朵粉玫瑰全国北京同城送花 19枝</a></dt>
											<dd class="goods-pic">
												<a href="http://www.531314.com/goods-index-goods_id-100811-store_id-1.html" title=""><span class="thumb size40"><i></i> <img src="http://img.531314.com/shop/store/goods/1/1_05073983604067163_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
												<p><span class="thumb size100"><i></i><img src="http://img.531314.com/shop/store/goods/1/1_05073983604067163_240.jpg" onload="javascript:DrawImage(this,100,100);" title="【春舞枝】鲜花速递19朵粉玫瑰全国北京同城送花 19枝"><big></big><small></small></span></p>
											</dd>
											<dd class="price pngFix">188.00</dd>
											<dd class="collection pngFix">收藏人气：<strong>2</strong></dd>
										</dl>
									</li>
								</ol>
							</div>
							<p>
								<a href="http://www.531314.com/shop_view-1-0-0-0-0.html">查看本店其他商品</a>
							</p>
						</div>
					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							//热销排行切换
							$('#hot_sales_tab').on('mouseenter', function() {
								$(this).addClass('current');
								$('#hot_collect_tab').removeClass('current');
								$('#hot_sales_list').removeClass('hide');
								$('#hot_collect_list').addClass('hide');
							});
							$('#hot_collect_tab').on('mouseenter', function() {
								$(this).addClass('current');
								$('#hot_sales_tab').removeClass('current');
								$('#hot_sales_list').addClass('hide');
								$('#hot_collect_list').removeClass('hide');
							});
						});
						/** left.php **/
						// 商品分类
						function class_list(obj) {
							var stc_id = $(obj).attr('span_id');
							var span_class = $(obj).attr('class');
							if(span_class == 'ico-block') {
								$("#stc_" + stc_id).show();
								$(obj).html('<em>-</em>');
								$(obj).attr('class', 'ico-none');
							} else {
								$("#stc_" + stc_id).hide();
								$(obj).html('<em>+</em>');
								$(obj).attr('class', 'ico-block');
							}
						}
					</script>
				</div>
			</div>
		</div>
		<form id="buynow_form" method="post" action="http://www.531314.com/index.php?&store_id=1">
			<input id="act" name="act" type="hidden" value="buy" />
			<input id="op" name="op" type="hidden" value="buy_step1" />
			<input id="cart_id" name="cart_id[]" type="hidden" />
			<input id="store_id" name="store_id" type="hidden" value="1" />
		</form>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.charCount.js"></script>
		<script src="http://res.531314.com/js/jquery.ajaxContent.pack.js" type="text/javascript"></script>
		<script src="http://res.531314.com/js/sns.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://res.531314.com/js/jquery.F_slider.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="http://res.531314.com/js/waypoints.js"></script>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.raty/jquery.raty.min.js"></script>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.nyroModal/custom.min.js" charset="utf-8"></script>
		<link href="http://res.531314.com/js/jquery.nyroModal/styles/nyroModal.css" rel="stylesheet" type="text/css" id="cssfile2" />
		<script type="text/javascript">
			/** 辅助浏览 **/
			jQuery(function($) {
				//产品图片
				$.getScript('http://www.531314.com/resource/js/ImageZoom.js', function() {
					var
						zoomController,
						zoomControllerUl,
						zoomControllerUlLeft = 0,
						shell = $('#ncs-goods-picture'),
						shellPanel = shell.parent(),
						heightNcsDetail = $('div[class="ncs-detail"]').height();
					heightOffset = 60,
						minGallerySize = [360, 360],
						imageZoom = new ImageZoom({
							shell: shell,
							basePath: '',
							levelASize: [60, 60],
							levelBSize: [320, 320],
							gallerySize: minGallerySize,
							onBeforeZoom: function(index, level) {
								if(!zoomController) {
									zoomController = shell.find('div.controller');
								}

								var
									self = this,
									duration = 320,
									width = minGallerySize[0],
									height = minGallerySize[1],
									zoomFx = function() {
										self.ops.gallerySize = [width, height];
										self.galleryPanel.stop().animate({
											width: width,
											height: height
										}, duration);
										shellPanel.stop().animate({
											height: height + heightOffset
										}, duration).css('overflow', 'visible');
										zoomController.animate({
											width: width - 22
										}, duration);
										shell.stop().animate({
											width: width
										}, duration);
									};
								if(level !== this.level && this.level !== 0) {
									if(this.level === 1 && level > 1) {
										height = Math.max(480, shellPanel.height());
										width = shellPanel.width();
										zoomFx();
									} else if(level === 1) {
										zoomFx();
										shellPanel.stop().animate({
											height: heightNcsDetail
										}, duration);
									}
								}
							},
							onZoom: function(index, level, prevIndex) {
								shell.find('a.prev,a.next')[level < 3 ? 'removeClass' : 'addClass']('hide');
								shell.find('a.close').css('display', [level > 1 ? 'block' : 'none']);
							},
							items: [{
								title: '',
								levelA: 'http://img.531314.com/shop/store/goods/1/1_05424700938891995_60.jpg',
								levelB: 'http://img.531314.com/shop/store/goods/1/1_05424700938891995_360.jpg',
								levelC: 'http://img.531314.com/shop/store/goods/1/1_05424700938891995_360.jpg',
								levelD: 'http://img.531314.com/shop/store/goods/1/1_05424700938891995_1280.jpg'
							}, {
								title: '',
								levelA: 'http://img.531314.com/shop/store/goods/1/1_05424701597331704_60.jpg',
								levelB: 'http://img.531314.com/shop/store/goods/1/1_05424701597331704_360.jpg',
								levelC: 'http://img.531314.com/shop/store/goods/1/1_05424701597331704_360.jpg',
								levelD: 'http://img.531314.com/shop/store/goods/1/1_05424701597331704_1280.jpg'
							}, {
								title: '',
								levelA: 'http://img.531314.com/shop/store/goods/1/1_05424701671243872_60.jpg',
								levelB: 'http://img.531314.com/shop/store/goods/1/1_05424701671243872_360.jpg',
								levelC: 'http://img.531314.com/shop/store/goods/1/1_05424701671243872_360.jpg',
								levelD: 'http://img.531314.com/shop/store/goods/1/1_05424701671243872_1280.jpg'
							}, {
								title: '',
								levelA: 'http://img.531314.com/shop/store/goods/1/1_05424701767640824_60.jpg',
								levelB: 'http://img.531314.com/shop/store/goods/1/1_05424701767640824_360.jpg',
								levelC: 'http://img.531314.com/shop/store/goods/1/1_05424701767640824_360.jpg',
								levelD: 'http://img.531314.com/shop/store/goods/1/1_05424701767640824_1280.jpg'
							}, {
								title: '',
								levelA: 'http://img.531314.com/shop/store/goods/1/1_05424701861394707_60.jpg',
								levelB: 'http://img.531314.com/shop/store/goods/1/1_05424701861394707_360.jpg',
								levelC: 'http://img.531314.com/shop/store/goods/1/1_05424701861394707_360.jpg',
								levelD: 'http://img.531314.com/shop/store/goods/1/1_05424701861394707_1280.jpg'
							}]
						});
					shell.data('imageZoom', imageZoom);
				});

			});

			//收藏分享处下拉操作
			jQuery.divselect = function(divselectid, inputselectid) {
				var inputselect = $(inputselectid);
				$(divselectid).mouseover(function() {
					var ul = $(divselectid + " ul");
					ul.slideDown("fast");
					if(ul.css("display") == "none") {
						ul.slideDown("fast");
					}
				});
				$(divselectid).live('mouseleave', function() {
					$(divselectid + " ul").hide();
				});
			};
			$(function() {
				//赠品处滚条
				$('#ncsGoodsGift').perfectScrollbar();
				// 加入购物车
				$('a[nctype="addcart_submit"]').click(function() {
					addcart(101014, checkQuantity(), 1, 'addcart_callback');
				});
				// 立即购买
				$('a[nctype="buynow_submit"]').click(function() {
					buynow(101014, checkQuantity());
				});
				// 到货通知
				//浮动导航  waypoints.js
				$('#main-nav').waypoint(function(event, direction) {
					$(this).parent().parent().parent().toggleClass('sticky', direction === "down");
					event.stopPropagation();
				});

				// 分享收藏下拉操作
				$.divselect("#handle-l");
				$.divselect("#handle-r");

				// 规格选择
				$('dl[nctype="nc-spec"]').find('a').each(function() {
					$(this).click(function() {
						if($(this).hasClass('hovered')) {
							return false;
						}
						$(this).parents('ul:first').find('a').removeClass('hovered');
						$(this).addClass('hovered');
						checkSpec();
					});
				});

			});

			function checkSpec() {
				var spec_param = [{
					"sign": "681",
					"url": "http:\/\/www.531314.com\/item-101014.html"
				}];
				var spec = new Array();
				$('ul[nctyle="ul_sign"]').find('.hovered').each(function() {
					var data_str = '';
					eval('data_str =' + $(this).attr('data-param'));
					spec.push(data_str.valid);
				});
				spec1 = spec.sort(function(a, b) {
					return a - b;
				});
				var spec_sign = spec1.join('|');
				$.each(spec_param, function(i, n) {
					if(n.sign == spec_sign) {
						window.location.href = n.url;
					}
				});
			}

			// 验证购买数量
			function checkQuantity() {
				var quantity = parseInt($("#quantity").val());
				if(quantity < 1) {
					alert("请填写购买数量");
					$("#quantity").val('1');
					return false;
				}
				max = parseInt($('[nctype="goods_stock"]').text());
				if(quantity > max) {
					alert("库存不足");
					return false;
				}
				return quantity;
			}

			// 立即购买js
			function buynow(goods_id, quantity) {
				login_dialog();
			}

			$(function() {
				//选择地区查看运费
				$('#transport_pannel>a').click(function() {
					var id = $(this).attr('nctype');
					if(id == 'undefined') return false;
					var _self = this,
						tpl_id = '0';
					var url = 'index.php?act=goods&op=calc&rand=' + Math.random();
					$('#transport_price').css('display', 'none');
					$('#loading_price').css('display', '');
					$.getJSON(url, {
						'id': id,
						'tid': tpl_id
					}, function(data) {
						if(data == null) return false;
						if(data != 'undefined') {
							$('#nc_kd').html('运费：<em>' + data + '</em>元');
						} else {
							'卖家承担运费';
						}
						$('#transport_price').css('display', '');
						$('#loading_price').css('display', 'none');
						$('#ncrecive').html($(_self).html());
					});
				});
				$("#nc-bundling").load('index.php?act=goods&op=get_bundling&goods_id=101014', function() {
					if($(this).html() != '') {
						$(this).show();
					}
				});
				$("#salelog_demo").load('index.php?act=goods&op=salelog&goods_id=101014&store_id=1&vr=0', function() {
					// Membership card
					$(this).find('[nctype="mcard"]').membershipCard({
						type: 'shop'
					});
				});
				$("#consulting_demo").load('index.php?act=goods&op=consulting&goods_id=101014&store_id=1', function() {
					// Membership card
					$(this).find('[nctype="mcard"]').membershipCard({
						type: 'shop'
					});
				});

				/** goods.php **/
				// 商品内容部分折叠收起侧边栏控制
				$('#fold').click(function() {
					$('.ncs-goods-layout').toggleClass('expanded');
				});
				// 商品内容介绍Tab样式切换控制
				$('#categorymenu').find("li").click(function() {
					$('#categorymenu').find("li").removeClass('current');
					$(this).addClass('current');
				});
				// 商品详情默认情况下显示全部
				$('#tabGoodsIntro').click(function() {
					$('.bd').css('display', '');
					$('.hd').css('display', '');
				});
				// 点击评价隐藏其他以及其标题栏
				$('#tabGoodsRate').click(function() {
					$('.bd').css('display', 'none');
					$('#ncGoodsRate').css('display', '');
					$('.hd').css('display', 'none');
				});
				// 点击成交隐藏其他以及其标题
				$('#tabGoodsTraded').click(function() {
					$('.bd').css('display', 'none');
					$('#ncGoodsTraded').css('display', '');
					$('.hd').css('display', 'none');
				});
				// 点击咨询隐藏其他以及其标题
				$('#tabGuestbook').click(function() {
					$('.bd').css('display', 'none');
					$('#ncGuestbook').css('display', '');
					$('.hd').css('display', 'none');
				});
				//商品排行Tab切换
				$(".ncs-top-tab > li > a").mouseover(function(e) {
					if(e.target == this) {
						var tabs = $(this).parent().parent().children("li");
						var panels = $(this).parent().parent().parent().children(".ncs-top-panel");
						var index = $.inArray(this, $(this).parent().parent().find("a"));
						if(panels.eq(index)[0]) {
							tabs.removeClass("current ").eq(index).addClass("current ");
							panels.addClass("hide").eq(index).removeClass("hide");
						}
					}
				});
				//信用评价动态评分打分人次Tab切换
				$(".ncs-rate-tab > li > a").mouseover(function(e) {
					if(e.target == this) {
						var tabs = $(this).parent().parent().children("li");
						var panels = $(this).parent().parent().parent().children(".ncs-rate-panel");
						var index = $.inArray(this, $(this).parent().parent().find("a"));
						if(panels.eq(index)[0]) {
							tabs.removeClass("current ").eq(index).addClass("current ");
							panels.addClass("hide").eq(index).removeClass("hide");
						}
					}
				});

				//触及显示缩略图
				$('.goods-pic > .thumb').hover(
					function() {
						$(this).next().css('display', 'block');
					},
					function() {
						$(this).next().css('display', 'none');
					}
				);

				/* 商品购买数量增减js */
				// 增加
				$('.increase').click(function() {
					num = parseInt($('#quantity').val());
					max = parseInt($('[nctype="goods_stock"]').text());
					if(num < max) {
						$('#quantity').val(num + 1);
					}
				});
				//减少
				$('.decrease').click(function() {
					num = parseInt($('#quantity').val());
					if(num > 1) {
						$('#quantity').val(num - 1);
					}
				});

				//评价列表
				$('#comment_tab').on('click', 'li', function() {
					$('#comment_tab li').removeClass('current');
					$(this).addClass('current');
					load_goodseval($(this).attr('data-type'));
				});
				load_goodseval('all');

				function load_goodseval(type) {
					var url = 'http://www.531314.com/index.php?act=goods&op=comments&goods_id=101014';
					url += '&type=' + type;
					$("#goodseval").load(url, function() {
						$(this).find('[nctype="mcard"]').membershipCard({
							type: 'shop'
						});
					});
				}

				//记录浏览历史
				$.get("index.php?act=goods&op=addbrowse", {
					gid: 101014
				});
				//初始化对比按钮
				initCompare();
			});
			/* 加入购物车后的效果函数 */
			function addcart_callback(data) {
				$('#bold_num').html(data.num);
				$('#bold_mly').html(price_format(data.amount));
				$('.ncs-cart-popup').fadeIn('fast');
			}
		</script>
		<div id="faq">
			<div class="faq-wrapper">
				<ul>
					<li>
						<dl class="s1">
							<dt>
帮助中心 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-9.html" title="集团采购"> 集团采购 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-8.html" title="服务声明"> 服务声明 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-6.html" title="购物流程"> 购物流程 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s2">
							<dt>
店主之家 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-13.html" title="如何发货"> 如何发货 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-12.html" title="查看售出商品"> 查看售出商品 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-14.html" title="商城商品推荐"> 商城商品推荐 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-11.html" title="如何管理店铺"> 如何管理店铺 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s3">
							<dt>
支付方式 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-30.html" title="公司转账"> 公司转账 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-16.html" title="付款方式"> 付款方式 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-29.html" title="货到付款"> 货到付款 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-17.html" title="付款问题"> 付款问题 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s4">
							<dt>
售后服务 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-32.html" title="退换货流程"> 退换货流程 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-26.html" title="投诉说明"> 投诉说明 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s5">
							<dt>
客服中心 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-18.html" title="会员修改密码"> 会员修改密码 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-20.html" title="商品发布"> 商品发布 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-19.html" title="会员修改个人资料"> 会员修改个人资料 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-21.html" title="修改收货地址"> 修改收货地址 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s6">
							<dt>
关于我们 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-23.html" title="联系我们"> 联系我们 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-25.html" title="合作及洽谈"> 合作及洽谈 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-22.html" title="关于我们"> 关于我们 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-24.html" title="招聘英才"> 招聘英才 </a>
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
										<img src="http://img.531314.com/shop/common/05003950598347095.jpg" class="f-l jImg img-error">
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
				<a href="http://www.531314.com">首页</a>
				|
				<a href="/shop/index.php?act=article&amp;article_id=24">招聘英才</a>
				|
				<a href="/shop/index.php?act=article&amp;article_id=25">合作及洽谈</a>
				|
				<a href="/shop/index.php?act=article&amp;article_id=23">联系我们</a>
				|
				<a href="/shop/index.php?act=article&amp;article_id=22">关于我们</a>
				|
				<a href="/shop/index.php?act=link">友情链接</a>
			</p>
			Copyright 2015</a> 闽ICP备12008006号-1<br/>
			<script>
				var _hmt = _hmt || [];
				(function() {
					var hm = document.createElement("script");
					hm.src = "//hm.baidu.com/hm.js?88de49926eae5852d298d5a5fbba3dda";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(hm, s);
				})();
			</script>
			<script type="text/javascript">
				var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
				document.write(unescape("%3Cspan id='cnzz_stat_icon_5477377'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D5477377' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
				var _py = _py || [];
				_py.push(['a', 'Qws..wq6b3kLKcogvLsNjmWhqcX']);
				_py.push(['domain', 'stats.ipinyou.com']);
				_py.push(['e', '']); -
				function(d) {
					var s = d.createElement('script'),
						e = d.body.getElementsByTagName('script')[0];
					e.parentNode.insertBefore(s, e),
						f = 'https:' == location.protocol;
					s.src = (f ? 'https' : 'http') + '://' + (f ? 'fm.ipinyou.com' : 'fm.p0y.cn') + '/j/adv.js';
				}(document);
			</script>
			<noscript><img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&e=" style="display:none;"/></noscript> </div>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.cookie.js"></script>
		<link href="http://res.531314.com/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://res.531314.com/js/perfect-scrollbar.min.js"></script>
		<script type="text/javascript" src="http://res.531314.com/js/qtip/jquery.qtip.min.js"></script>
		<link href="http://res.531314.com/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">

		<script src="http://www.531314.com/resource/js/compare.js"></script>
		<script type="text/javascript">
			$(function() {
				// Membership card
				$('[nctype="mcard"]').membershipCard({
					type: 'shop'
				});
			});
		</script>
	</body>

</html>