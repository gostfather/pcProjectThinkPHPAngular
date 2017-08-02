<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝 - 购物流程</title>
		<meta name="keywords" content="春舞枝,">
		<meta name="description" content="春舞枝,">
		<meta property="qc:admins" content="23572640266531314636"><meta property="wb:webmaster" content="9d474898800c1e71"><style type="text/css">body{_behavior:url(http://www.531314.com/templates/new/css/csshover.htc);}</style>
		<link rel="shortcut icon" href="http://531314.com/favicon.ico">
		<link href="http://www.531314.com/templates/new/css/base.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/templates/new/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/templates/new/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
		<script src="//hm.baidu.com/hm.js?88de49926eae5852d298d5a5fbba3dda"></script><script>
		var COOKIE_PRE = '3E36_';var _CHARSET = 'utf-8';var SITEURL = 'http://www.531314.com';var SHOP_SITE_URL = 'http://www.531314.com';var RESOURCE_SITE_URL = 'http://res.531314.com';var RESOURCE_SITE_URL = 'http://res.531314.com';var SHOP_TEMPLATES_URL = 'http://www.531314.com/templates/new';
		</script>
		<script src="http://res.531314.com/js/jquery.js"></script>
		<script src="http://res.531314.com/js/common.js" charset="utf-8"></script>
		<script src="http://res.531314.com/js/jquery-ui/jquery.ui.js"></script>
		<script src="http://res.531314.com/js/jquery.validation.min.js"></script>
		<script src="http://res.531314.com/js/jquery.masonry.js"></script>
		<script src="http://res.531314.com/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script><link href="http://res.531314.com/js/dialog/dialog.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">
		var PRICE_FORMAT = '&yen;%s';
		$(function(){
			//首页左侧分类菜单
			$(".category ul.menu").find("li").each(
				function() {
					$(this).hover(
						function() {
						    var cat_id = $(this).attr("cat_id");
							var menu = $(this).find("div[cat_menu_id='"+cat_id+"']");
							menu.show();
							$(this).addClass("hover");					
							var menu_height = menu.height();
							if (menu_height < 60) menu.height(80);
							menu_height = menu.height();
							var li_top = $(this).position().top;
							$(menu).css("top",-li_top + 38);
						},
						function() {
							$(this).removeClass("hover");
						    var cat_id = $(this).attr("cat_id");
							$(this).find("div[cat_menu_id='"+cat_id+"']").hide();
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
			$('.head-user-menu .my-mall').mouseover(function());
			$('.head-user-menu .my-cart').mouseover(function());
			$('#button').click(function(){
			    if ($('#keyword').val() == '') {
				    return false;
			    }
			});
		    });
		
		$(function(){
			//search
			var act = "article";
			if (act == "store_list"){
				$("#search").children('ul').children('li:eq(1)').addClass("current");
				$("#search").children('ul').children('li:eq(0)').removeClass("current");
				}
			$("#search").children('ul').children('li').click(function(){
				$(this).parent().children('li').removeClass("current");
				$(this).addClass("current");
				$('#search_act').attr("value",$(this).attr("act"));
				$('#keyword').attr("placeholder",$(this).attr("title"));
			});
			$("#keyword").blur();
		
		});
		</script>
		</head>
		<body>
		 
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>
		<script src="http://fm.p0y.cn/j/adv.js"></script><script type="text/javascript">
		//动画显示边条内容区域
		$(function() {
		    ncToolbar();
		    $(window).resize(function() {
		        ncToolbar();
		    });
		    function ncToolbar() {
		        if ($(window).width() >= 1240) {
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
		    $("#compare").click(function(){
		    	if ($("#content-compare").css('right') == '-210px') {
		 		   loadCompare(false);
		 		   $('#content-cart').animate({'right': '-210px'});
		  		   $("#content-compare").animate({right:'35px'});
		    	} else {
		    		$(".close").click();
		    		$(".chat-list").css("display",'none');
		        }
			});
		    $("#rtoolbar_cart").click(function(){
		        if ($("#content-cart").css('right') == '-210px') {
		         	$('#content-compare').animate({'right': '-210px'});
		    		$("#content-cart").animate({right:'35px'});
		    		if (!$("#rtoolbar_cartlist").html()) {
		    			$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
		    		}
		        } else {
		        	$(".close").click();
		        	$(".chat-list").css("display",'none');
		        }
			});
			$(".close").click(function(){
				$(".content-box").animate({right:'-210px'});
		      });
		
			$(".quick-menu dl").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});
		
		    // 右侧bar用户信息
		    $('div[nctype="a-barUserInfo"]').click(function(){
		        $('div[nctype="barUserInfo"]').toggle();
		    });
		    // 右侧bar登录
		    $('div[nctype="a-barLoginBox"]').click(function(){
		        $('div[nctype="barLoginBox"]').toggle();
		        document.getElementById('codeimage').src='http://www.531314.com/index.php?act=seccode&op=makecode&nchash=c93636e5&t=' + Math.random();
		    });
		    $('a[nctype="close-barLoginBox"]').click(function(){
		        $('div[nctype="barLoginBox"]').toggle();
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

		<div class="nch-breadcrumb-layout">
		<div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
		<span><a href="http://www.531314.com">首页</a></span><span class="arrow">&gt;</span>
		<span><a href="http://www.531314.com/article_cate-2.html">帮助中心</a></span><span class="arrow">&gt;</span>
		<span>文章内容</span>
		</div>
		</div>
		<link href="http://www.531314.com/templates/new/css/layout.css" rel="stylesheet" type="text/css">
		<div class="nch-container wrapper">
		<div class="left">
		<div class="nch-module nch-module-style01">
		<div class="title">
		<h3>文章分类</h3>
		</div>
		<div class="content">
		<div class="nch-sidebar-article-class">
		<ul>
		<li><a href="http://www.531314.com/article_cate-14.html">鲜花学院</a></li>
		<li><a href="http://www.531314.com/article_cate-8.html">绿植馆</a></li>
		<li><a href="http://www.531314.com/article_cate-1.html">商城公告</a></li>
		<li><a href="http://www.531314.com/article_cate-2.html">帮助中心</a></li>
		<li><a href="http://www.531314.com/article_cate-3.html">店主之家</a></li>
		<li><a href="http://www.531314.com/article_cate-4.html">支付方式</a></li>
		<li><a href="http://www.531314.com/article_cate-5.html">售后服务</a></li>
		<li><a href="http://www.531314.com/article_cate-6.html">客服中心</a></li>
		<li><a href="http://www.531314.com/article_cate-7.html">关于我们</a></li>
		<li><a href="http://www.531314.com/article_cate-20.html">配送服务</a></li>
		</ul>
		</div>
		</div>
		</div>
		<div class="nch-module nch-module-style03">
		<div class="title">
		<h3>最新文章</h3>
		</div>
		<div class="content">
		<ul class="nch-sidebar-article-list">
		<li><i></i><a href="http://www.531314.com/article-6.html">购物流程</a></li>
		<li><i></i><a href="http://www.531314.com/article-8.html">服务声明</a></li>
		<li><i></i><a href="http://www.531314.com/article-9.html">集团采购</a></li>
		</ul>
		</div>
		</div>
		</div>
		<div class="right">
		<div class="nch-article-con">
		<h1>购物流程</h1>
		<h2>2014-01-16 17:31</h2>
		<div class="default">
		<p></p><p>
		<strong><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">第一步：选择商品</span></strong><br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp; 1.进入网站，选择您喜欢的商品，在商品详情页面中，从店铺列表中选择你所需的店铺，点击店铺名称后面的“查看详情”；</span>
		</p>
		<p>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp; 2.或进入您所选择的店铺，点击商品的图片或者名称，将打开商品详情页面。</span>
		</p>
		<p>
		<br>
		</p>
		<p>
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p style="text-align:center;">
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><img src="http://img.531314.com/shop/editor/20151127120422_63193.png" alt="" height="127" width="800"></span>
		</p>
		<p>
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<strong><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">第二步：加入购物车</span></strong>
		<p>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp; 点击商品图片下方的“加入购物车”，添加商品成功。通过页面右上角“我的购物车”进入所选产品列表页面，点击“立即购买”进入登陆页面（如果还需其他产品，您可以点击“再逛逛”按钮，然后找到所需产品，同样点击“加入购物车”即可）。</span>
		</p>
		<p>
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p style="text-align:center;">
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp; &nbsp; <br>
		</span>
		</p>
		<p style="text-align:center;">
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p style="text-align:center;">
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p style="text-align:center;">
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><img src="http://img.531314.com/shop/editor/20151127120735_60023.png" alt="" height="501" width="800"><br>
		</span>
		</p>
		<p>
		<br>
		</p>
		<p>
		<br>
		</p>
		<p>
		<strong><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">第三步：用户登录</span></strong>
		</p>
		<div>
		<p>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp; 1.会员、网店用户请点击网站头部“登录”选项直接登录。</span>
		</p>
		</div>
		<div>
		<p>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp; 2.如果您是第一次使用本网站，请点击网站头部“免费注册”，填写用户名和密码注册</span>
		</p>
		<p>
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p>
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"> </span>
		</p>
		<p style="text-align:center;">
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><img src="http://img.531314.com/shop/editor/20151127120806_94201.png" alt="" height="628" width="800"></span>
		</p>
		<p>
		<br>
		</p>
		<p>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><br>
		</span>
		</p>
		</div>
		<p style="margin-left:5.25pt;">
		<strong><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">第四步：提交订单</span></strong><br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp;&nbsp; 登陆成功后，页面跳转到订单结算，请仔细填写送、收货人联系方式和地址信息，填写完毕请从页面右侧选择一种支付方式，确定后“提交订单”。</span>
		</p>
		<p style="margin-left:5.25pt;">
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p style="margin-left:5.25pt;text-align:center;">
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><img src="http://img.531314.com/shop/editor/20151127120911_23743.png" alt="" height="362" width="800"><br>
		</span>
		</p>
		<p style="margin-left:5.25pt;">
		<strong><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">第五步：支付款项</span></strong><br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp;&nbsp; 提交完成订单后，如果您选择“平台支付”，会直接带您到所选择的支付款项的步骤，请按照提示完成支付；如果您选择“网银转账”，稍后请您依照客服提供的账号完成支付。</span><br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp; 如果您不了解支付的相关信息，请参考帮助中心栏目中的支付帮助。</span>
		</p>
		<p style="margin-left:5.25pt;">
		<br>
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"></span>
		</p>
		<p style="margin-left:5.25pt;text-align:center;">
		<span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;"><img src="http://img.531314.com/shop/editor/20151127120941_12169.png" alt="" height="277" width="800"></span><br>
		</span>
		</p><p></p>
		</div>
		<div class="more_article"> <span class="fl">上一篇：
		没有符合条件的文章 </span> <span class="fr">下一篇：
		<a href="http://www.531314.com/article-8.html">服务声明</a> <time>2014-01-16 17:31</time>
		</span> </div>
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
		<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?88de49926eae5852d298d5a5fbba3dda";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
		</script>
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5477377'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D5477377' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5477377"></span><script src=" http://s23.cnzz.com/stat.php?id=5477377" type="text/javascript"></script>
		<script type="text/javascript">
		var _py = _py || [];
		_py.push(['a', 'Qws..wq6b3kLKcogvLsNjmWhqcX']);
		_py.push(['domain','stats.ipinyou.com']);
		_py.push(['e','']);
		-function(d) {
			var s = d.createElement('script'),
			e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
			f = 'https:' == location.protocol;
			s.src = (f ? 'https' : 'http') + '://'+(f?'fm.ipinyou.com':'fm.p0y.cn')+'/j/adv.js';
		}(document);
		</script>
		<noscript>&lt;img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&amp;e=" style="display:none;"/&gt;</noscript> </div>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.cookie.js"></script>
		<link href="http://res.531314.com/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://res.531314.com/js/perfect-scrollbar.min.js"></script>
		<script type="text/javascript" src="http://res.531314.com/js/qtip/jquery.qtip.min.js"></script>
		<link href="http://res.531314.com/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
		 
		<script src="http://www.531314.com/resource/js/compare.js"></script>
		<script type="text/javascript">
		$(function(){
			// Membership card
			$('[nctype="mcard"]').membershipCard({type:'shop'});
		});
		</script>
		
		
		<div id="cli_dialog_div"></div>
	</body>
</html>