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
			Copyright 2015 闽ICP备12008006号-1<br>
			
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
							alert(data.info);
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