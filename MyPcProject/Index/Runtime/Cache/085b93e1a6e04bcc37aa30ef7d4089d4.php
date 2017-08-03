<?php if (!defined('THINK_PATH')) exit();?><html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝 - 登&nbsp;&nbsp;&nbsp;录</title>
		<meta name="keywords" content="春舞枝">
		<meta name="description" content="春舞枝">
		<meta property="qc:admins" content="23572640266531314636">
		<meta property="wb:webmaster" content="9d474898800c1e71">
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
		</style>
		<link rel="shortcut icon" href="http://531314.com/favicon.ico">
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<script src="//hm.baidu.com/hm.js?88de49926eae5852d298d5a5fbba3dda"></script>
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
		<link href="http://res.531314.com/js/dialog/dialog.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>

		<div class="header-wrap">
			<header class="public-head-layout wrapper">
				<h1 class="site-logo"><a href="__APP__/Index"><img src="http://img.531314.com/shop/common/04993648993753192.png" class="pngFix"></a></h1>
				<div id="search" class="head-search-bar">

				</div>
			</header>
		</div>

		<div class="nch-breadcrumb-layout">
		</div>
		<style type="text/css">
			.public-top-layout,
			.head-app,
			.head-search-bar,
			.head-user-menu,
			.public-nav-layout,
			.nch-breadcrumb-layout,
			#faq {
				display: none!important;
			}
			
			.public-head-layout {
				margin: 10px auto -10px auto;
			}
			
			.wrapper {
				width: 1000px;
			}
			
			#footer {
				border-top: none!important;
				padding-top: 30px;
			}
		</style>
		<div class="nc-login-layout" ng-app="myapp" ng-controller="mycontroller">
			<div class="left-pic"><img src="http://img.531314.com/shop/login/1.jpg" border="0"></div>
			<div class="nc-login">
				<div class="nc-login-title">
					<h3>用户登录</h3>
				</div>
				<div class="nc-login-content" id="demo-form-site">
					<div id="login_form" class="bg">
						<dl>
							<dt>用户名</dt>
							<dd style="min-height:54px;">
								<input type="text" 
									class="text" 
									autocomplete="off" 
									name="user_name" 
									id="user_name" 
									ng-model="username"
									>
								
							</dd>
						</dl>
						<dl>
							<dt>密&nbsp;&nbsp;&nbsp;码 </dt>
							<dd style="min-height:54px;">
								<input type="password" 
									class="text" 
									name="password" 
									autocomplete="off" 
									id="password"
									ng-model="pwd"
									>
								
							</dd>
						</dl>
						<dl>
							<dt>验证码</dt>
							<dd style="min-height:54px;">
								<input type="text" 
									name="captcha" 
									autocomplete="off" 
									class="text w50 fl" 
									id="captcha" 
									maxlength="4" 
									size="10"
									ng-trim="false"
									ng-model="captcha"
									ng-blur="sub()"
									>
								<img ng-click="change()" src= "__APP__/Index/verify"  name="codeimage" border="0" id="codeimage" class="fl ml5" ng-click="change()" href="" /> 
								<a  ng-click="change()" href="" class="ml5" ng-click="change()">看不清，换一张</a>
							
							</dd>
						</dl>
						<dl>
							<dt>&nbsp;</dt>
							<dd>
								<input type="button" ng-click="trueVerify? loginUser() : ''" class="submit" value="登&nbsp;&nbsp;&nbsp;录">
								<a class="forget" href="index.php?act=login&amp;op=forget_password">忘记密码？</a>
							</dd>
						</dl>
					</div>
					<dl class="mt10 mb10">
						<dt>&nbsp;</dt>
						<dd>还不是本站会员？立即
							<a title="" href="__APP__/Index?act=login&op=register" class="register">注册</a>
						</dd>
					</dl>
				</div>
				<div class="nc-login-bottom"></div>
			</div>
		</div>
		

		<div id="footer" class="wrapper">
			<p>
				<a href="__APP__/Index">首页</a>
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
			Copyright 2015 闽ICP备12008006号-1<br>
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
			</script><span id="cnzz_stat_icon_5477377"></span>
			<script src=" http://s23.cnzz.com/stat.php?id=5477377" type="text/javascript"></script>
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
			<noscript>&lt;img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&amp;e=" style="display:none;"/&gt;</noscript> </div>
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

		<div id="cli_dialog_div"></div>
		<script src="__ROOT__/Index/Common/js/angular.min.js" type="text/javascript"></script>
		<script src="http://cdn.bootcss.com/blueimp-md5/1.1.0/js/md5.min.js"></script>
		<script type="text/javascript">
			var app = angular.module("myapp",[]);
		    app.controller("mycontroller",function ($scope,$http) {
		    	$scope.username = "";
		        $scope.pwd = "";
		        $scope.captcha = "" ;
		        $scope.trueVerify = false;
				
				$scope.loginUser = function(){
					$http({
						url:"__APP__/Index/loginUser",
	        			method:"post",
	        			data:{
	        				username:$scope.username,
	        				pwd:$scope.pwd,
	        			},
	        			headers:{
	        				"Content-Type":"application/x-www-form-urlencoded",
	        			}
	        		}).success(function(data){
//	        			console.log(data);
						if(data.status===1){
							//登陆成功
							window.location.href = "__APP__/Index/index";
						}else{
							alert("用户名或者密码错误");
						}
	        		}).error(function(data){
	        			console.log("错误："+data);
	        		})
				}
				//验证码验证
		        $scope.sub = function() {
		//      		console.log(11111);
		        	$http.get("__APP__/Index/check").success(function (data) {
		//			 	console.log( (md5($scope.captcha) == data));
				 		$scope.trueVerify = (md5($scope.captcha) == data);
					});
		        };
		        
				 $scope.change = function() {
					var img = document.getElementById('codeimage');
					img.src = "__APP__/Index/verify?time="+ new Date().getTime();
					
				}
		    });
		
			 
		</script>
		
		
	</body>

</html>