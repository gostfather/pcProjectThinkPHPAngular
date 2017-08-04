<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝 - 盒装鲜花</title>
		<meta name="keywords" content="春舞枝" />
		<meta name="description" content="春舞枝" />
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
		<!--[if IE 7]>
  <link rel="stylesheet" href="http://www.531314.com/resource/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->

		<!--[if lt IE 9]>
      <script src="http://res.531314.com/js/html5shiv.js"></script>
      <script src="http://res.531314.com/js/respond.min.js"></script>
<![endif]-->
		<!--[if IE 6]>
<script src="http://res.531314.com/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>
<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->
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
				var act = "search";
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
		<?php if(!empty($_SESSION['username'])): ?>您好&nbsp;<?php echo (session('username')); ?>，欢迎来到
			<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=logout">退出</a>]</span> 
		<?php else: ?>您好，欢迎来到
			<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=index">登录</a>]</span> <span>[<a href="__APP__/Index?act=login&op=register">注册</a>]</span><?php endif; ?>
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
				<span>盒装鲜花</span>
			</div>
		</div>
		<script src="http://www.531314.com/resource/js/search_goods.js"></script>
		<link href="http://www.531314.com/templates/new/css/layout.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
		</style>
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
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html" class="selected">盒装鲜花</a>
											</li>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html">鲜花束</a>
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

				<div nctype="booth_goods" class="nch-module" style="display:none;"> </div>

				<div class="nch-module"></div>

				<div class="nch-module nch-module-style03">
					<div class="title">
						<h3>最近浏览</h3>
					</div>
					<div class="content">
						<div class="nch-sidebar-viewed" id="nchSidebarViewed">
							<ul>
							</ul>
						</div>
						<a href="http://www.531314.com/index.php?act=member_goodsbrowse&op=list" class="nch-sidebar-all-viewed">全部浏览历史</a>
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
									<input type="hidden" id="search_div_class_26" data-acid="26" data-pre="0">
									<div class="goodsLables" id="search_div_class_27" data-acid="27" data-pre="26">
										<a href="javascript:send_class_searh_url(26,27);">玫瑰</a>
										<a class="span-a" href="javascript:deleteItem(26,27);"><span id="delte-span-27">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_28" data-acid="28" data-pre="26">
										<a href="javascript:send_class_searh_url(26,28);">百合</a>
										<a class="span-a" href="javascript:deleteItem(26,28);"><span id="delte-span-28">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_29" data-acid="29" data-pre="26">
										<a href="javascript:send_class_searh_url(26,29);">康乃馨</a>
										<a class="span-a" href="javascript:deleteItem(26,29);"><span id="delte-span-29">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_30" data-acid="30" data-pre="26">
										<a href="javascript:send_class_searh_url(26,30);">其它</a>
										<a class="span-a" href="javascript:deleteItem(26,30);"><span id="delte-span-30">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_85" data-acid="85" data-pre="26">
										<a href="javascript:send_class_searh_url(26,85);">洋牡丹</a>
										<a class="span-a" href="javascript:deleteItem(26,85);"><span id="delte-span-85">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">节日：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_31" data-acid="31" data-pre="0">
									<div class="goodsLables" id="search_div_class_32" data-acid="32" data-pre="31">
										<a href="javascript:send_class_searh_url(31,32);">情人节</a>
										<a class="span-a" href="javascript:deleteItem(31,32);"><span id="delte-span-32">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_33" data-acid="33" data-pre="31">
										<a href="javascript:send_class_searh_url(31,33);">母亲节</a>
										<a class="span-a" href="javascript:deleteItem(31,33);"><span id="delte-span-33">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_34" data-acid="34" data-pre="31">
										<a href="javascript:send_class_searh_url(31,34);">父亲节</a>
										<a class="span-a" href="javascript:deleteItem(31,34);"><span id="delte-span-34">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_35" data-acid="35" data-pre="31">
										<a href="javascript:send_class_searh_url(31,35);">圣诞节</a>
										<a class="span-a" href="javascript:deleteItem(31,35);"><span id="delte-span-35">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">枝数：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_36" data-acid="36" data-pre="0">
									<div class="goodsLables" id="search_div_class_37" data-acid="37" data-pre="36">
										<a href="javascript:send_class_searh_url(36,37);">9</a>
										<a class="span-a" href="javascript:deleteItem(36,37);"><span id="delte-span-37">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_38" data-acid="38" data-pre="36">
										<a href="javascript:send_class_searh_url(36,38);">11</a>
										<a class="span-a" href="javascript:deleteItem(36,38);"><span id="delte-span-38">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_39" data-acid="39" data-pre="36">
										<a href="javascript:send_class_searh_url(36,39);">19</a>
										<a class="span-a" href="javascript:deleteItem(36,39);"><span id="delte-span-39">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_40" data-acid="40" data-pre="36">
										<a href="javascript:send_class_searh_url(36,40);">36</a>
										<a class="span-a" href="javascript:deleteItem(36,40);"><span id="delte-span-40">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_41" data-acid="41" data-pre="36">
										<a href="javascript:send_class_searh_url(36,41);">99</a>
										<a class="span-a" href="javascript:deleteItem(36,41);"><span id="delte-span-41">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">送花对象：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_50" data-acid="50" data-pre="0">
									<div class="goodsLables" id="search_div_class_51" data-acid="51" data-pre="50">
										<a href="javascript:send_class_searh_url(50,51);">爱人</a>
										<a class="span-a" href="javascript:deleteItem(50,51);"><span id="delte-span-51">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_52" data-acid="52" data-pre="50">
										<a href="javascript:send_class_searh_url(50,52);">恋人</a>
										<a class="span-a" href="javascript:deleteItem(50,52);"><span id="delte-span-52">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_53" data-acid="53" data-pre="50">
										<a href="javascript:send_class_searh_url(50,53);">单身</a>
										<a class="span-a" href="javascript:deleteItem(50,53);"><span id="delte-span-53">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_54" data-acid="54" data-pre="50">
										<a href="javascript:send_class_searh_url(50,54);">老师</a>
										<a class="span-a" href="javascript:deleteItem(50,54);"><span id="delte-span-54">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_55" data-acid="55" data-pre="50">
										<a href="javascript:send_class_searh_url(50,55);">朋友</a>
										<a class="span-a" href="javascript:deleteItem(50,55);"><span id="delte-span-55">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_56" data-acid="56" data-pre="50">
										<a href="javascript:send_class_searh_url(50,56);">长辈</a>
										<a class="span-a" href="javascript:deleteItem(50,56);"><span id="delte-span-56">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_57" data-acid="57" data-pre="50">
										<a href="javascript:send_class_searh_url(50,57);">探望</a>
										<a class="span-a" href="javascript:deleteItem(50,57);"><span id="delte-span-57">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_58" data-acid="58" data-pre="50">
										<a href="javascript:send_class_searh_url(50,58);">客户</a>
										<a class="span-a" href="javascript:deleteItem(50,58);"><span id="delte-span-58">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">鲜花生活馆：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_59" data-acid="59" data-pre="0">
									<div class="goodsLables" id="search_div_class_60" data-acid="60" data-pre="59">
										<a href="javascript:send_class_searh_url(59,60);">家庭套餐</a>
										<a class="span-a" href="javascript:deleteItem(59,60);"><span id="delte-span-60">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_61" data-acid="61" data-pre="59">
										<a href="javascript:send_class_searh_url(59,61);">月度套餐</a>
										<a class="span-a" href="javascript:deleteItem(59,61);"><span id="delte-span-61">×</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="nch-module nch-module-style01">
					<div class="title">
						<h3>
<em>盒装鲜花</em> -
商品筛选</h3>
					</div>
					<div class="content">
						<div class="nch-module-filter">
							<dl>
								<dt>品牌：</dt>
								<dd class="list">
									<ul>
										<li>
											<a href="http://www.531314.com/cate-1075-365-0-0-0-0-0-0-0.html">春舞枝</a>
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
								<li><span>上一页</span></li>
								<li>
									<a class="demo" href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-2.html"><span>下一页</span></a>
								</li>
							</ul>
						</div>
						<div class="nch-all-category">
							<div class="all-category">
								<div class="title"> <i></i>
									<h3><a href="http://www.531314.com/category.html">所有商品分类</a></h3>
								</div>
								<div class="category">
									<ul class="menu">
										<li cat_id="1072" class="odd">
											<div class="class">
												<h4><a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a></h4>
												<span class="arrow"></span> </div>
											<div class="sub-class" cat_menu_id="1072">
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
						</div>
						<div class="nch-sortbar-array"> 排序方式：
							<ul>
								<li class="selected">
									<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html" title="默认排序">默认</a>
								</li>
								<li>
									<a href="http://www.531314.com/cate-1075-0-0-1-2-0-0-0-0.html" title="点击按销量从高到低排序">销量<i></i></a>
								</li>
								<li>
									<a href="http://www.531314.com/cate-1075-0-0-2-2-0-0-0-0.html" title="点击按人气从高到低排序">人气<i></i></a>
								</li>
								<li>
									<a href="http://www.531314.com/cate-1075-0-0-3-2-0-0-0-0.html" title="点击按价格从高到低排序">价格<i></i></a>
								</li>
							</ul>
						</div>
						<div class="nch-sortbar-owner"><span><a href="http://www.531314.com/cate-1075-0-0-0-0-1-0-0-0.html"><i></i>平台自营</a></span></div>
						<div class="nch-sortbar-owner"><span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-1-0-0.html"><i></i>赠品</a></span></div>
						<div class="nch-sortbar-location">商品所在地：
							<div class="select-layer">
								<div class="holder"><em nc_type="area_name">不限地区 </em></div>
								<div class="selected">
									<a nc_type="area_name">不限地区 </a>
								</div>
								<i class="direction"></i>
								<ul class="options">
									<div class="filter-detailc" id="addressDraw">
										<dl class="location-hots">
											<dt>常用地区</dt>
											<dd>
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-1-0.html">北京</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-2-0.html">天津</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-9-0.html">上海</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-35-0.html">海外</a>
											</dd>
										</dl>
										<dl class="location-all">
											<dt>省份</dt>
											<dd>
												<ul>
													<li>
														<p class="lt">A</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-12-0.html">安徽</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-34-0.html">澳门</a></span> </p>
													</li>
													<li>
														<p class="lt">C</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-22-0.html">重庆</a></span> </p>
													</li>
													<li>
														<p class="lt">F</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-13-0.html">福建</a></span> </p>
													</li>
													<li>
														<p class="lt">G</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-19-0.html">广东</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-28-0.html">甘肃</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-20-0.html">广西</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-24-0.html">贵州</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">H</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-21-0.html">海南</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-3-0.html">河北</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-16-0.html">河南</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-8-0.html">黑龙江</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-17-0.html">湖北</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-18-0.html">湖南</a></span> </p>
													</li>
													<li>
														<p class="lt">J</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-10-0.html">江苏</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-14-0.html">江西</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-7-0.html">吉林</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">N</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-6-0.html">辽宁</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-5-0.html">内蒙古</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-30-0.html">宁夏</a></span> </p>
													</li>
													<li>
														<p class="lt">Q</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-29-0.html">青海</a></span> </p>
													</li>
													<li>
														<p class="lt">S</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-15-0.html">山东</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-4-0.html">山西</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-27-0.html">陕西</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-23-0.html">四川</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">T</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-32-0.html">台湾</a></span> </p>
													</li>
													<li>
														<p class="lt">X</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-26-0.html">西藏</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-31-0.html">新疆</a></span> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-33-0.html">香港</a></span> </p>
													</li>
													<li>
														<p class="lt">Y</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-25-0.html">云南</a></span> </p>
													</li>
													<li>
														<p class="lt">Z</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-11-0.html">浙江</a></span> </p>
													</li>
												</ul>
											</dd>
										</dl>
										<p class="oreder-default">
											<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html">不限地区</a>
										</p>
									</div>
								</ul>
							</div>
						</div>
					</nav>

					<div>
						<style type="text/css">
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
						</style>
						<div class="squares" nc_type="current_display_mode">
							<input type="hidden" id="lockcompare" value="unlock" />
							<ul class="list_pic">
								<li class="item">
									<div class="goods-content" nctype_goods=" 101015" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101015.html" target="_blank" title="春舞枝】基地直销 9枝白玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05424730829998504_240.jpg" title="春舞枝】基地直销 9枝白玫瑰礼盒" alt="春舞枝】基地直销 9枝白玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424730829998504_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424732534365197_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424732602646195_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424740318279881_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424740368420429_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101015.html" target="_blank" title="11支白玫瑰 、栀子叶若干">春舞枝】基地直销 9枝白玫瑰礼盒<em>11支白玫瑰 、栀子叶若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;98.00">&yen;98.00</em> <em class="market-price" title="市场价：&yen;119.00">&yen;119.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101015" data-param='{"gid":"101015"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101015.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101015-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101015,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101004" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101004.html" target="_blank" title="【春舞枝】基地直销 9枝香槟玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05424558394678236_240.jpg" title="【春舞枝】基地直销 9枝香槟玫瑰礼盒" alt="【春舞枝】基地直销 9枝香槟玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424558394678236_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424721739368331_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424720494364898_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424563817020798_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424553869368238_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101004.html" target="_blank" title="9支香槟玫瑰 、栀子叶若干">【春舞枝】基地直销 9枝香槟玫瑰礼盒<em>9支香槟玫瑰 、栀子叶若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;98.00">&yen;98.00</em> <em class="market-price" title="市场价：&yen;119.00">&yen;119.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101004" data-param='{"gid":"101004"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101004.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101004-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101004,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101003" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101003.html" target="_blank" title="【春舞枝】基地直销 9枝红玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05424532600616299_240.jpg" title="【春舞枝】基地直销 9枝红玫瑰礼盒" alt="【春舞枝】基地直销 9枝红玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424532600616299_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424714374525823_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424538259676352_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424535281390961_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424535333743415_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101003.html" target="_blank" title="9支红玫瑰 、栀子叶若干">【春舞枝】基地直销 9枝红玫瑰礼盒<em>9支红玫瑰 、栀子叶若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;98.00">&yen;98.00</em> <em class="market-price" title="市场价：&yen;119.00">&yen;119.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101003" data-param='{"gid":"101003"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101003.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101003-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101003,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101002" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101002.html" target="_blank" title="【春舞枝】基地直销 9枝粉玫瑰礼盒 9枝粉玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05423978673042955_240.jpg" title="【春舞枝】基地直销 9枝粉玫瑰礼盒 9枝粉玫瑰礼盒" alt="【春舞枝】基地直销 9枝粉玫瑰礼盒 9枝粉玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05423978673042955_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424726996089822_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424727667028068_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424727016864709_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424727060464053_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101002.html" target="_blank" title="9支粉玫瑰 、栀子叶若干">【春舞枝】基地直销 9枝粉玫瑰礼盒 9枝粉玫瑰礼盒<em>9支粉玫瑰 、栀子叶若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;98.00">&yen;98.00</em> <em class="market-price" title="市场价：&yen;119.00">&yen;119.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101002" data-param='{"gid":"101002"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101002.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101002-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101002,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101001" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101001.html" target="_blank" title="【春舞枝】基地直销 9枝白玫瑰礼盒 9枝白玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05423970257262186_240.jpg" title="【春舞枝】基地直销 9枝白玫瑰礼盒 9枝白玫瑰礼盒" alt="【春舞枝】基地直销 9枝白玫瑰礼盒 9枝白玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05423970257262186_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101001.html" target="_blank" title="9枝白玫瑰礼盒">【春舞枝】基地直销 9枝白玫瑰礼盒 9枝白玫瑰礼盒<em>9枝白玫瑰礼盒</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;98.00">&yen;98.00</em> <em class="market-price" title="市场价：&yen;119.00">&yen;119.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101001" data-param='{"gid":"101001"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101001.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101001-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101001,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100999" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100999.html" target="_blank" title="【春舞枝】基地直销 19枝金辉玫瑰礼盒 19枝金辉玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05400622100463207_240.jpg" title="【春舞枝】基地直销 19枝金辉玫瑰礼盒 19枝金辉玫瑰" alt="【春舞枝】基地直销 19枝金辉玫瑰礼盒 19枝金辉玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622100463207_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622124686356_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622139537368_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622154371342_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100999.html" target="_blank" title="19枝金辉玫瑰、栀子叶若干">【春舞枝】基地直销 19枝金辉玫瑰礼盒 19枝金辉玫瑰<em>19枝金辉玫瑰、栀子叶若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;269.00">&yen;269.00</em> <em class="market-price" title="市场价：&yen;538.00">&yen;538.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100999" data-param='{"gid":"100999"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100999.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100999-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100999,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100998" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100998.html" target="_blank" title="【春舞枝】基地直销 11枝混搭玫瑰礼盒 11枝混搭玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05400622542814248_240.jpg" title="【春舞枝】基地直销 11枝混搭玫瑰礼盒 11枝混搭玫瑰礼盒" alt="【春舞枝】基地直销 11枝混搭玫瑰礼盒 11枝混搭玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622542814248_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400623143439507_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622595781402_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622617502931_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05400622641710200_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100998.html" target="_blank" title="11枝粉玫瑰，雏菊、情人草若干">【春舞枝】基地直销 11枝混搭玫瑰礼盒 11枝混搭玫瑰礼盒<em>11枝粉玫瑰，雏菊、情人草若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;199.00">&yen;199.00</em> <em class="market-price" title="市场价：&yen;398.00">&yen;398.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100998" data-param='{"gid":"100998"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100998.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100998-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100998,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100997" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100997.html" target="_blank" title="【春舞枝】基地直销 19枝红玫瑰礼盒 19枝红玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05398157876254308_240.jpg" title="【春舞枝】基地直销 19枝红玫瑰礼盒 19枝红玫瑰礼盒" alt="【春舞枝】基地直销 19枝红玫瑰礼盒 19枝红玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398157876254308_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398157862815566_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398157897813527_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398157886094069_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398157909379626_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100997.html" target="_blank" title="19枝红玫瑰、黄莺若干">【春舞枝】基地直销 19枝红玫瑰礼盒 19枝红玫瑰礼盒<em>19枝红玫瑰、黄莺若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;269.00">&yen;269.00</em> <em class="market-price" title="市场价：&yen;538.00">&yen;538.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100997" data-param='{"gid":"100997"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100997.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100997-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100997,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100995" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100995.html" target="_blank" title="【春舞枝】基地直销 19枝粉玫瑰礼盒 19枝粉玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05398148676404111_240.jpg" title="【春舞枝】基地直销 19枝粉玫瑰礼盒 19枝粉玫瑰礼盒" alt="【春舞枝】基地直销 19枝粉玫瑰礼盒 19枝粉玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398148676404111_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398148645003709_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398148667180766_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398148657502117_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398148686251872_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100995.html" target="_blank" title="19枝粉玫瑰、栀子叶若干">【春舞枝】基地直销 19枝粉玫瑰礼盒 19枝粉玫瑰礼盒<em>19枝粉玫瑰、栀子叶若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;269.00">&yen;269.00</em> <em class="market-price" title="市场价：&yen;538.00">&yen;538.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100995" data-param='{"gid":"100995"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100995.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100995-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100995,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100994" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100994.html" target="_blank" title="【春舞枝】基地直销 11枝红玫瑰礼盒 11枝红玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05398137596400798_240.jpg" title="【春舞枝】基地直销 11枝红玫瑰礼盒 11枝红玫瑰礼盒" alt="【春舞枝】基地直销 11枝红玫瑰礼盒 11枝红玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398137596400798_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398137547344766_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398137560785742_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398137570464488_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398137583909109_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100994.html" target="_blank" title="11枝红玫瑰、情人草若干">【春舞枝】基地直销 11枝红玫瑰礼盒 11枝红玫瑰礼盒<em>11枝红玫瑰、情人草若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;199.00">&yen;199.00</em> <em class="market-price" title="市场价：&yen;398.00">&yen;398.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100994" data-param='{"gid":"100994"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100994.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100994-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100994,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100993" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100993.html" target="_blank" title="【春舞枝】基地直销 11枝粉玫瑰礼盒 11枝粉玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05398131112816802_240.jpg" title="【春舞枝】基地直销 11枝粉玫瑰礼盒 11枝粉玫瑰礼盒" alt="【春舞枝】基地直销 11枝粉玫瑰礼盒 11枝粉玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398131112816802_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398131096406641_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398131104538675_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398131086718033_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398131124688494_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100993.html" target="_blank" title="11支粉玫瑰 、情人草若干">【春舞枝】基地直销 11枝粉玫瑰礼盒 11枝粉玫瑰礼盒<em>11支粉玫瑰 、情人草若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;199.00">&yen;199.00</em> <em class="market-price" title="市场价：&yen;398.00">&yen;398.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100993" data-param='{"gid":"100993"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100993.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100993-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100993,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100992" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100992.html" target="_blank" title="【春舞枝】基地直销 11枝白玫瑰礼盒 11枝白玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05398119645468976_240.jpg" title="【春舞枝】基地直销 11枝白玫瑰礼盒 11枝白玫瑰礼盒" alt="【春舞枝】基地直销 11枝白玫瑰礼盒 11枝白玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398119645468976_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398119608430904_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398119635152570_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398119624680409_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05398119658595595_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100992.html" target="_blank" title="11枝白玫瑰  情人草">【春舞枝】基地直销 11枝白玫瑰礼盒 11枝白玫瑰礼盒<em>11枝白玫瑰 情人草</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;199.00">&yen;199.00</em> <em class="market-price" title="市场价：&yen;398.00">&yen;398.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100992" data-param='{"gid":"100992"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100992.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100992-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100992,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100990" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100990.html" target="_blank" title="12星座系列-射手座守护花束 12星座系列-射手座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05332975396687208_240.jpg" title="12星座系列-射手座守护花束 12星座系列-射手座守护花束" alt="12星座系列-射手座守护花束 12星座系列-射手座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05332975396687208_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05332977166053036_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05332977185277422_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05332977239969184_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05332977272308939_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100990.html" target="_blank" title="6枝向日葵 尤加利混搭礼盒">12星座系列-射手座守护花束 12星座系列-射手座守护花束<em>6枝向日葵 尤加利混搭礼盒</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100990" data-param='{"gid":"100990"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100990.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100990-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100990,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100989" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100989.html" target="_blank" title="【春舞枝】12星座系列 - 天蝎座守护花束 12星座系列-天蝎座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05315122869212310_240.jpg" title="【春舞枝】12星座系列 - 天蝎座守护花束 12星座系列-天蝎座守护花束" alt="【春舞枝】12星座系列 - 天蝎座守护花束 12星座系列-天蝎座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05315122869212310_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05315125233278703_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05315125281711783_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05315125308423497_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05315125360628567_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100989.html" target="_blank" title="19枝海洋之歌玫瑰 配白相思梅 尤加利">【春舞枝】12星座系列 - 天蝎座守护花束 12星座系列-天蝎座守护花束<em>19枝海洋之歌玫瑰 配白相思梅 尤加利</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100989" data-param='{"gid":"100989"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100989.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100989-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100989,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100977" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100977.html" target="_blank" title="【春舞枝】基地直销 19枝香槟玫瑰礼盒 19枝香槟玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05231322794063733_240.jpg" title="【春舞枝】基地直销 19枝香槟玫瑰礼盒 19枝香槟玫瑰礼盒" alt="【春舞枝】基地直销 19枝香槟玫瑰礼盒 19枝香槟玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231322794063733_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231323738906070_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231323769211239_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231323798430391_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231323843753096_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100977.html" target="_blank" title="19枝香槟玫瑰 尤加利">【春舞枝】基地直销 19枝香槟玫瑰礼盒 19枝香槟玫瑰礼盒<em>19枝香槟玫瑰 尤加利</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;269.00">&yen;269.00</em> <em class="market-price" title="市场价：&yen;538.00">&yen;538.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100977" data-param='{"gid":"100977"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100977.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100977-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100977,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100976" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100976.html" target="_blank" title="【春舞枝】基地直销 香槟洋桔梗混搭玫瑰 香槟玫瑰紫桔梗礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05231320800154398_240.jpg" title="【春舞枝】基地直销 香槟洋桔梗混搭玫瑰 香槟玫瑰紫桔梗礼盒" alt="【春舞枝】基地直销 香槟洋桔梗混搭玫瑰 香槟玫瑰紫桔梗礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231320800154398_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231321861715967_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231321898755404_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231321940785315_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231321973437590_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100976.html" target="_blank" title="11枝香槟玫瑰 紫洋桔梗 情人草">【春舞枝】基地直销 香槟洋桔梗混搭玫瑰 香槟玫瑰紫桔梗礼盒<em>11枝香槟玫瑰 紫洋桔梗 情人草</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;219.00">&yen;219.00</em> <em class="market-price" title="市场价：&yen;438.00">&yen;438.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100976" data-param='{"gid":"100976"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100976.html#ncGoodsRate" target="_blank" class="status">12</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100976-0-0.html" target="_blank">18</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100976,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100975" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100975.html" target="_blank" title="【春舞枝】基地直销 11枝香槟玫瑰礼盒 11枝香槟玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05231317172178264_240.jpg" title="【春舞枝】基地直销 11枝香槟玫瑰礼盒 11枝香槟玫瑰礼盒" alt="【春舞枝】基地直销 11枝香槟玫瑰礼盒 11枝香槟玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231317172178264_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231318689673946_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231318664512512_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231318858121305_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231319018599278_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100975.html" target="_blank" title="11枝香槟玫瑰  栀子叶 情人草">【春舞枝】基地直销 11枝香槟玫瑰礼盒 11枝香槟玫瑰礼盒<em>11枝香槟玫瑰 栀子叶 情人草</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;199.00">&yen;199.00</em> <em class="market-price" title="市场价：&yen;398.00">&yen;398.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100975" data-param='{"gid":"100975"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100975.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100975-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100975,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100974" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100974.html" target="_blank" title="【春舞枝】基地直销 33枝香槟玫瑰礼盒 33枝香槟玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05231313134675733_240.jpg" title="【春舞枝】基地直销 33枝香槟玫瑰礼盒 33枝香槟玫瑰礼盒" alt="【春舞枝】基地直销 33枝香槟玫瑰礼盒 33枝香槟玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231313134675733_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231314867016940_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231314925768544_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231314981862534_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100974.html" target="_blank" title="33枝香槟玫瑰 栀子叶">【春舞枝】基地直销 33枝香槟玫瑰礼盒 33枝香槟玫瑰礼盒<em>33枝香槟玫瑰 栀子叶</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;369.00">&yen;369.00</em> <em class="market-price" title="市场价：&yen;738.00">&yen;738.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100974" data-param='{"gid":"100974"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100974.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100974-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100974,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100973" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100973.html" target="_blank" title="【春舞枝】基地直销 33枝苏醒玫瑰礼盒 33枝苏醒玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05231308490613511_240.jpg" title="【春舞枝】基地直销 33枝苏醒玫瑰礼盒 33枝苏醒玫瑰礼盒" alt="【春舞枝】基地直销 33枝苏醒玫瑰礼盒 33枝苏醒玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231308490613511_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231309972336859_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231310027806632_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231311090301001_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100973.html" target="_blank" title="33枝苏醒玫瑰 尤加利">【春舞枝】基地直销 33枝苏醒玫瑰礼盒 33枝苏醒玫瑰礼盒<em>33枝苏醒玫瑰 尤加利</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;369.00">&yen;369.00</em> <em class="market-price" title="市场价：&yen;738.00">&yen;738.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100973" data-param='{"gid":"100973"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100973.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100973-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100973,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100972" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100972.html" target="_blank" title="【春舞枝】基地直销 11枝苏醒玫瑰礼盒 11枝苏醒玫瑰礼盒"><img src="http://img.531314.com/shop/store/goods/1/1_05231302367656834_240.jpg" title="【春舞枝】基地直销 11枝苏醒玫瑰礼盒 11枝苏醒玫瑰礼盒" alt="【春舞枝】基地直销 11枝苏醒玫瑰礼盒 11枝苏醒玫瑰礼盒" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231302367656834_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231303594210024_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231303855159162_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231304158906253_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231307153733176_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100972.html" target="_blank" title="11枝苏醒玫瑰  白色相思梅">【春舞枝】基地直销 11枝苏醒玫瑰礼盒 11枝苏醒玫瑰礼盒<em>11枝苏醒玫瑰 白色相思梅</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;199.00">&yen;199.00</em> <em class="market-price" title="市场价：&yen;398.00">&yen;398.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100972" data-param='{"gid":"100972"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100972.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100972-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100972,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100971" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100971.html" target="_blank" title="【春舞枝】基地直销 11枝金辉洋桔梗花束 11枝金辉洋桔梗花束"><img src="http://img.531314.com/shop/store/goods/1/1_05231298815611041_240.jpg" title="【春舞枝】基地直销 11枝金辉洋桔梗花束 11枝金辉洋桔梗花束" alt="【春舞枝】基地直销 11枝金辉洋桔梗花束 11枝金辉洋桔梗花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231298815611041_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231301046404431_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231301148759764_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231301211093582_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05231301293438541_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100971.html" target="_blank" title="11枝金辉洋桔梗花束">【春舞枝】基地直销 11枝金辉洋桔梗花束 11枝金辉洋桔梗花束<em>11枝金辉洋桔梗花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;219.00">&yen;219.00</em> <em class="market-price" title="市场价：&yen;438.00">&yen;438.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100971" data-param='{"gid":"100971"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100971.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100971-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100971,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100969" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100969.html" target="_blank" title="【春舞枝】12星座系列 - 巨蟹座守护花束 12星座系列-巨蟹座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05206036977348483_240.jpg" title="【春舞枝】12星座系列 - 巨蟹座守护花束 12星座系列-巨蟹座守护花束" alt="【春舞枝】12星座系列 - 巨蟹座守护花束 12星座系列-巨蟹座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05206036977348483_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05206039556092076_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05206039605007664_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05206039646718830_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05206039708431420_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100969.html" target="_blank" title="18枝睡莲花束 提前1-3天预订">【春舞枝】12星座系列 - 巨蟹座守护花束 12星座系列-巨蟹座守护花束<em>18枝睡莲花束 提前1-3天预订</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;158.00">&yen;158.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100969" data-param='{"gid":"100969"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100969.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100969-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100969,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100968" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100968.html" target="_blank" title="【春舞枝】12星座系列 - 处女座守护花束 12星座系列-处女座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05194766104210737_240.jpg" title="【春舞枝】12星座系列 - 处女座守护花束 12星座系列-处女座守护花束" alt="【春舞枝】12星座系列 - 处女座守护花束 12星座系列-处女座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194766104210737_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194770797343265_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194770406874881_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194773900787942_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194776220151175_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100968.html" target="_blank" title="5枝天蓝色大飞燕草花束  提前1-3天预订">【春舞枝】12星座系列 - 处女座守护花束 12星座系列-处女座守护花束<em>5枝天蓝色大飞燕草花束 提前1-3天预订</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100968" data-param='{"gid":"100968"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100968.html#ncGoodsRate" target="_blank" class="status">4</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100968-0-0.html" target="_blank">3</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100968,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100967" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100967.html" target="_blank" title="【春舞枝】12星座系列 - 狮子座守护花束 12星座系列-狮子座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05194049868906215_240.jpg" title="【春舞枝】12星座系列 - 狮子座守护花束 12星座系列-狮子座守护花束" alt="【春舞枝】12星座系列 - 狮子座守护花束 12星座系列-狮子座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194049868906215_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194052089530418_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194052053125551_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194052180009298_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05194054870463679_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100967.html" target="_blank" title="9枝黄色进口马蹄莲、3片巴西叶">【春舞枝】12星座系列 - 狮子座守护花束 12星座系列-狮子座守护花束<em>9枝黄色进口马蹄莲、3片巴西叶</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;198.00">&yen;198.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100967" data-param='{"gid":"100967"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100967.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100967-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100967,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<div class="clear"></div>
							</ul>
						</div>
						<form id="buynow_form" method="post" action="http://www.531314.com/index.php?store_id=1" target="_blank">
							<input id="act" name="act" type="hidden" value="buy" />
							<input id="op" name="op" type="hidden" value="buy_step1" />
							<input id="goods_id" name="cart_id[]" type="hidden" />
						</form>
						<script type="text/javascript" src="http://res.531314.com/js/jquery.raty/jquery.raty.min.js"></script>
						<script type="text/javascript">
							$(document).ready(function() {
								$('.raty').raty({
									path: "http://res.531314.com/js/jquery.raty/img",
									readOnly: true,
									width: 80,
									score: function() {
										return $(this).attr('data-score');
									}
								});
								//初始化对比按钮
								initCompare();
							});
						</script>
					</div>
					<div class="tc mt20 mb20">
						<div class="pagination">
							<ul>
								<li><span>首页</span></li>
								<li><span>上一页</span></li>
								<li><span class="currentpage">1</span></li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1075-0-0-0-0-0-0-0-2.html'><span>2</span></a>
								</li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1075-0-0-0-0-0-0-0-3.html'><span>3</span></a>
								</li>
								<li>
									<a class="demo" href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-2.html"><span>下一页</span></a>
								</li>
								<li>
									<a class="demo" href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-3.html"><span>末页</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div id="guesslike_div" style="width:980px;"></div>
			</div>
		</div>
		<script src="http://res.531314.com/js/waypoints.js"></script>
		<script src="http://www.531314.com/resource/js/search_category_menu.js"></script>
		<script type="text/javascript">
			function delArr(ar, n) {
				if(n < 0)
					return ar;
				else
					return ar.slice(0, n).concat(ar.slice(n + 1, ar.length));
			}
			//标记已选择样式
			$(function() {
				var r_selected = "";
				var r_arr = r_selected.split(',');
				var r_count = r_arr.length;
				if(r_selected !== "") {
					for(var i = 0; i < r_count; i++) {
						$("#search_div_class_" + r_arr[i] + "").addClass("goodsLables_selected");
						var data_pre = $("#search_div_class_" + r_arr[i] + "").attr("data-pre");
						$("#search_div_class_" + data_pre + "").attr('data-pre', r_arr[i]);
						$("#delte-span-" + r_arr[i] + "").show();
						// $("#search_class_"+data_pre+"").removeClass("goodsLables_selected");
					}
				}
				//      $(".goodsLables a").hover(function(){
				//            var _itme_id=$(this).attr("data-acid");
				//        
				//      },function(){
				//            var _itme_id=$(this).attr("data-acid");
				//            $("#delte-span-"+_itme_id+"").hide(); 
				//      });
			});
			//删除当前选择项
			function deleteItem(cid, stcid) {
				$("#search_div_class_" + stcid + "").removeClass("goodsLables_selected");
				$("#delte-span-" + stcid + "").hide();
				var _stcids = "";
				var _s = $("div[id^=search_div_class_]");
				var data_pre = $("#search_div_class_" + cid + "").attr("data-pre");
				$("#search_div_class_" + data_pre + "").removeClass("goodsLables_selected");
				$("#delte-span-" + stcid + "").show();
				for(var i = 0; i < _s.length; i++) {
					if($(_s[i]).hasClass("goodsLables_selected")) {
						var id = $(_s[i]).attr("data-acid");
						if(_stcids == '') {
							_stcids = id;
						} else {
							_stcids = _stcids + ',' + id;
						}
					}
				}
				document.location.href = "http://www.531314.com/index.php?act=search&op=index&keyword=" + $("#keyword").val() + "&cate_id=1075&stc_id=" + _stcids;
			}
			//拼接搜索
			function send_class_searh_url(cid, stcid) {
				var _stcids = "";
				var _s = $("div[id^=search_div_class_]");
				var data_pre = $("#search_div_class_" + cid + "").attr("data-pre");
				$("#search_div_class_" + data_pre + "").removeClass("goodsLables_selected");
				$("#search_div_class_" + stcid + "").addClass("goodsLables_selected");
				$("#delte-span-" + stcid + "").show();
				for(var i = 0; i < _s.length; i++) {
					if($(_s[i]).hasClass("goodsLables_selected")) {
						var id = $(_s[i]).attr("data-acid");
						if(_stcids == '') {
							_stcids = id;
						} else {
							_stcids = _stcids + ',' + id;
						}
					}
				}
				document.location.href = "http://www.531314.com/index.php?act=search&op=index&keyword=" + $("#keyword").val() + "&cate_id=1075&stc_id=" + _stcids;
			}
		</script>
		<script type="text/javascript">
			var defaultSmallGoodsImage = 'shop/common/default_goods_image_240.gif';
			var defaultTinyGoodsImage = 'shop/common/default_goods_image_60.gif';

			$(function() {
				$('#files').tree({
					expanded: 'li:lt(2)'
				});

				//浮动导航  waypoints.js
				$('#main-nav-holder').waypoint(function(event, direction) {
					$(this).parent().toggleClass('sticky', direction === "down");
					event.stopPropagation();
				});
				// 单行显示更多
				$('span[nc_type="show"]').click(function() {
					s = $(this).parents('dd').prev().find('li[nc_type="none"]');
					if(s.css('display') == 'none') {
						s.show();
						$(this).html('<i class="icon-angle-up"></i>收起');
					} else {
						s.hide();
						$(this).html('<i class="icon-angle-down"></i>更多');
					}
				});

				// 推荐商品异步显示
				$('div[nctype="booth_goods"]').load('http://www.531314.com/index.php?act=search&op=get_booth_goods&cate_id=1075', function() {
					$(this).show();
				});
				//浏览历史处滚条
				$('#nchSidebarViewed').perfectScrollbar();

				//猜你喜欢
				$('#guesslike_div').load('http://www.531314.com/index.php?act=search&op=get_guesslike', function() {
					$(this).show();
				});
			});
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