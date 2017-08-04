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
			<div class="public-top-layout w">
		<div class="topbar wrapper">
			<div class="user-entry">
				您好
				<span>
					<a href="">张三</a>
					<div class="nc-grade-mini" style="cursor:pointer;" onclick="">V0</div>
				</span>欢迎来到
				<a href="__APP__/Index"><span>春舞枝</span></a>
				<a href=""><span>[退出]</span></a>
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
				<li title="请输入您要搜索的店铺关键字">店铺</li>
			</ul>
			<form action="" class="search-form">
				<input type="text" placeholder="请输入您要搜索的商品关键字" class="input-text" maxlength="60">
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
	<noscript><img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&e=" style="display:none;"/></noscript> 
</div>
	</body>
</html>