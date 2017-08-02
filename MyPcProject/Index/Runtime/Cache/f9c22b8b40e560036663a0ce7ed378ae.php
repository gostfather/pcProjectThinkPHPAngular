<?php if (!defined('THINK_PATH')) exit();?><!-- design lj 652 -->
<!doctype html>
<html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>myproject</title>
		<meta name="keywords" content="春舞枝,鲜花,鲜花网,鲜花速递,网上订花送花,鲜花礼品,网上订花,送花网站" />
		<meta name="description" content="春舞枝鲜花网-中国鲜花礼品网领先品牌,专注鲜花速递服务,销量居鲜花礼品网站前茅！春舞枝鲜花网可24小时预订鲜花，同城送花、异地送花服务,网上订花后最快3小时即可将鲜花速递上门,送花网站覆盖中国2800多个县级以上城市！" />
		<meta property="qc:admins" content="23572640266531314636" />
		<meta property="wb:webmaster" content="9d474898800c1e71" />
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
		</style>
		<link rel="shortcut icon" href="http://531314.com/favicon.ico" />
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
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
		<link href="__ROOT__/Index/Common/css/index.css" rel="stylesheet" type="text/css">

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

		
<script type="text/javascript" src="http://www.531314.com/resource/js/home_index.js" charset="utf-8"></script>		
<script type="text/javascript">
	var uid = window.location.href.split("#V3");
	var fragment = uid[1];
	if(fragment) {
		if(fragment.indexOf("V3") == 0) {
			document.cookie = 'uid=0';
		} else {
			document.cookie = 'uid=' + uid[1];
		}
	}
</script>
<div class="home-focus-layout">
	<ul id="fullScreenSlides" class="full-screen-slides">
		<li style="background:  url('__ROOT__/Index/Common/images/editor/web-101-101-3.jpg?180') no-repeat center top">
			<a href="http://www.531314.com/shop/index.php?act=zt&amp;op=valentine" target="_blank" title="">&nbsp;</a>
		</li>
		<li style="background: #ffffff url('__ROOT__/Index/Common/images/editor/web-101-101-2.jpg?163') no-repeat center top">
			<a href="http://www.531314.com/shop/cate-1074-0-0-0-0-0-0-0-0.html" target="_blank" title="">&nbsp;</a>
		</li>
		<li style="background:  url('__ROOT__/Index/Common/images/editor/web-101-101-1.jpg?806') no-repeat center top">
			<a href="http://www.531314.com/item-100942.html" target="_blank" title="">&nbsp;</a>
		</li>
	</ul>
	<script type="text/javascript">
		update_screen_focus();
	</script>
	<div class="right-sidebar">
		<div class="policy">
			<ul>
				<li class="b1">特色服务</li>
				<li class="b2">方便快捷</li>
				<li class="b3">价位优惠</li>
				<li class="b4">机构认证</li>
				<li class="b5">万千口碑</li>
				<li class="b6">诚信服务</li>
			</ul>
		</div>
		<div class="proclamation">
			<ul class="tabs-nav">
				<li class="tabs-selected">
					<h3>商城公告</h3>
				</li>
			</ul>
			<div class="tabs-panel">
				<ul class="mall-news">
					<li><i></i>
						<a target="_blank" href="http://www.531314.com/article-102.html" title="花草发黄的11个重大原因！ 喜欢养花的必看！">花草发黄的11个重大原因！ </a>
						<time>(2016-03-31)</time>
					</li>
					<li><i></i>
						<a target="_blank" href="http://www.531314.com/article-101.html" title="小家庭，小惊喜">小家庭，小惊喜 </a>
						<time>(2016-03-31)</time>
					</li>
					<li><i></i>
						<a target="_blank" href="http://www.531314.com/article-100.html" title="送花的讲究！">送花的讲究！ </a>
						<time>(2016-03-31)</time>
					</li>
					<li><i></i>
						<a target="_blank" href="http://www.531314.com/article-99.html" title="关于郁金香的小常识（二）">关于郁金香的小常识（二） </a>
						<time>(2016-03-30)</time>
					</li>
					<li><i></i>
						<a target="_blank" href="http://www.531314.com/article-98.html" title="关于郁金香的小常识（一）">关于郁金香的小常识（一） </a>
						<time>(2016-03-30)</time>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
		<div class="home-sale-layout wrapper">
	<div class="left-layout">
		<ul class="tabs-nav">
			<li class="tabs-selected"><i class="arrow"></i>
				<h3>新品推荐</h3></li>
		</ul>
		<div class="tabs-panel sale-goods-list ">
			<ul>


			
				<li>
					<dl>
						<dt class="goods-name">
							<a target="_blank" href="http://www.531314.com/item-100836.html" title="【春舞枝】鲜花速递 白玫瑰清新混搭白紫罗兰花束全国同城配送  此款鲜花需提前1-3天预订哦">
								【春舞枝】鲜花速递 白玫瑰清新混搭白紫罗兰花束全国同城配送 此款鲜花需提前1-3天预订哦
							</a>
						</dt>
						<dd class="goods-thumb">
							<a target="_blank" href="http://www.531314.com/item-100836.html">
								<img src="http://img.531314.com/shop/store/goods/1/1_05075525382032819_240.jpg" alt="【春舞枝】鲜花速递 白玫瑰清新混搭白紫罗兰花束全国同城配送  此款鲜花需提前1-3天预订哦" />
							</a>
						</dd>
						<dd class="goods-price">
							商城价：<em>￥356.00</em>
						</dd>
					</dl>
				</li>
				
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="mt10">
		<div class="mt10">
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="wrapper">
	<div class="mt10">
		<div class="mt10"></div>
	</div>
</div>
<div class="clear"></div>
		<div class="home-standard-layout wrapper style-diy1">
	<div class="title">
		<div class="pic-type">
			<img src="__ROOT__/Index/Common/images/index/floor1Top.jpg" />
		</div>
	</div>
	<div class="left-sidebar">
		<div class="left-ads">
			<a href="#" title="" target="_blank">
				<img src="__ROOT__/Index/Common/images/index/floor1Left.jpg" alt="">
			</a>
		</div>
		<div class="recommend-classes">
			<ul>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="玫瑰" target="_blank">玫瑰</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="百合" target="_blank">百合</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="康乃馨" target="_blank">康乃馨</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="其它" target="_blank">其它</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="情人节" target="_blank">情人节</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="母亲节" target="_blank">母亲节</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="middle-layout">
		<div class="tabs-panel middle-goods-list ">
			<ul>

			
				<li>
					<dl>
						<dt class="goods-name">
							<a target="_blank" href="http://www.531314.com/item-100814.html" title="【春舞枝】鲜花速递创意礼品21枝混搭玫瑰情人节花束生日礼物">
								【春舞枝】鲜花速递创意礼品21枝混搭玫瑰情人节花束生日礼物
							</a>
						</dt>
						<dd class="goods-thumb">
							<a target="_blank" href="http://www.531314.com/item-100814.html">
								<img src="http://img.531314.com/shop/store/goods/1/1_05073987921400349_240.jpg" alt="【春舞枝】鲜花速递创意礼品21枝混搭玫瑰情人节花束生日礼物" />
							</a>
						</dd>
						<dd class="goods-price">
							<em>￥238.00</em>
							<span class="original">￥348.00</span>
						</dd>
					</dl>
				</li>

				
			</ul>
		</div>
	</div>
	<div class="right-sidebar">
		<div class="right-side-focus">
			<ul>
				<li>
					<a href="http://www.531314.com/shop/index.php?act=goods&amp;op=index&amp;goods_id=100863" title="" target="_blank">
						<img src="__ROOT__/Index/Common/images/index/floor1Right.jpg" alt="" /></a>
				</li>
			</ul>
		</div>
	</div>
</div>
		<div class="home-standard-layout wrapper style-diy2">
	<div class="title">
		<div class="pic-type"><img src="__ROOT__/Index/Common/images/index/floor2Top.jpg" /></div>
	</div>
	<div class="left-sidebar">
		<div class="left-ads">
			<a href="#" title="" target="_blank">
				<img src="__ROOT__/Index/Common/images/index/floor2Left.jpg" alt="">
			</a>
		</div>
		<div class="recommend-classes">
			<ul>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="鲜花束" target="_blank">鲜花束</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="盒装鲜花" target="_blank">盒装鲜花</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="多肉植物" target="_blank">多肉植物</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="绿植盆栽" target="_blank">绿植盆栽</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="纪念" target="_blank">纪念</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="探视" target="_blank">探视</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="生日" target="_blank">生日</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="祝福" target="_blank">祝福</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="求婚" target="_blank">求婚</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="情人节" target="_blank">情人节</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="教师节" target="_blank">教师节</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="母亲节" target="_blank">母亲节</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="父亲节" target="_blank">父亲节</a>
				</li>
				<li>
					<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="圣诞节" target="_blank">圣诞节</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="middle-layout">
		<div class="tabs-panel middle-goods-list ">
			<ul>
				<li>
					<dl>
						<dt class="goods-name">
							<a target="_blank" href="http://www.531314.com/item-100829.html" title="【春舞枝】鲜花速递19枝混搭扶郎花送长辈送朋友花店送花">
								【春舞枝】鲜花速递19枝混搭扶郎花送长辈送朋友花店送花
							</a>
						</dt>
						<dd class="goods-thumb">
							<a target="_blank" href="http://www.531314.com/item-100829.html">
								<img src="http://img.531314.com/shop/store/goods/1/1_05074003616714448_240.jpg" alt="【春舞枝】鲜花速递19枝混搭扶郎花送长辈送朋友花店送花" />
							</a>
						</dd>
						<dd class="goods-price">
							<em>￥178.00</em>
							<span class="original">￥258.00</span>
						</dd>
					</dl>
				</li>
			</ul>
		</div>
	</div>
	<div class="right-sidebar">

		<div class="right-side-focus">
			<ul>
				<li>
					<a href="http://www.531314.com/shop/index.php?act=goods&amp;op=index&amp;goods_id=100870" title="" target="_blank">
						<img src="__ROOT__/Index/Common/images/index/floor2Right.jpg" alt="" /></a>
				</li>
			</ul>
		</div>
	</div>
</div>
				<div class="home-standard-layout wrapper style-diy3">
			<div class="title">
				<div class="pic-type"><img src="__ROOT__/Index/Common/images/index/floor3Top.jpg" /></div>
			</div>
			<div class="left-sidebar">
				<div class="left-ads">
					<a href="#" title="" target="_blank">
						<img src="__ROOT__/Index/Common/images/index/floor3Left.jpg" alt="">
					</a>
				</div>
				<div class="recommend-classes">
					<ul>
						<li>
							<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="鲜花束" target="_blank">鲜花束</a>
						</li>
						<li>
							<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="盒装鲜花" target="_blank">盒装鲜花</a>
						</li>
						<li>
							<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="多肉植物" target="_blank">多肉植物</a>
						</li>
						<li>
							<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="绿植盆栽" target="_blank">绿植盆栽</a>
						</li>
						<li>
							<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="情人节" target="_blank">情人节</a>
						</li>
						<li>
							<a href="http://www.531314.com/cate-0-0-0-0-0-0-0-0-0.html" title="教师节" target="_blank">教师节</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="middle-layout">
				<div class="tabs-panel middle-goods-list ">
					<ul>
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="http://www.531314.com/goods-index-goods_id-100819-stc_id-.html" title="【春舞枝】鲜花速递5枝多头白百合A花店送花全国配送母亲节教师节祝福鲜花">
										【春舞枝】鲜花速递5枝多头白百合A花店送花全国配送母亲节教师节祝福鲜花
									</a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="http://www.531314.com/goods-index-goods_id-100819-stc_id-.html">
										<img src="http://img.531314.com/shop/store/goods/1/1_05073992610931992_240.jpg" alt="【春舞枝】鲜花速递5枝多头白百合A花店送花全国配送母亲节教师节祝福鲜花" />
									</a>
								</dd>
								<dd class="goods-price">
									<em>￥178.00</em>
									<span class="original">￥258.00</span>
								</dd>
							</dl>
						</li>

					</ul>
				</div>
			</div>
			<div class="right-sidebar">

				<div class="right-side-focus">
					<ul>
						<li>
							<a href="http://www.531314.com/shop/index.php?act=search&amp;op=index&amp;keyword=&amp;cate_id=1074&amp;stc_id=28" title="" target="_blank">
								<img src="__ROOT__/Index/Common/images/index/floor3Right.jpg" alt="" /></a>
						</li>
					</ul>
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
	<noscript><img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&e=" style="display:none;"/></noscript> 
</div>
	</body>
</html>