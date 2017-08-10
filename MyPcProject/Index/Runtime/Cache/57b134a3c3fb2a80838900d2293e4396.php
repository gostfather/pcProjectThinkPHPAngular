<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>春舞枝 - 用户注册</title>
	<meta name="keywords" content="春舞枝"/>
	<meta name="description" content="春舞枝"/>
	<meta property="qc:admins" content="23572640266531314636"/>
	<meta property="wb:webmaster" content="9d474898800c1e71"/>
	<style type="text/css">
		.public-top-layout,.head-app,.head-search-bar,.head-user-menu,.public-nav-layout,.nch-breadcrumb-layout,#faq{
			display:none!important;
		}
		.public-head-layout{
			margin:10px auto -10px auto;
		}
		.wrapper{
			width:1000px;
		}
		#footer{
			border-top:none!important;padding-top:30px;
		}
	</style>
	<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
	<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
	<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header-wrap">
		<header class="public-head-layout wrapper">
			<h1 class="site-logo">
				<a href="__APP__/Index">
					<img src="__ROOT__/Index/Common/images/logo.png" class="pngFix">
				</a>
			</h1>
		</header>
	</div>
 
	<div class="nc-login-layout" ng-app="myapp" ng-controller="mycontroller">
		<div class="nc-login">
			<div class="nc-login-title">
				<h3>用户注册</h3>
			</div>
			<div class="nc-login-content">
				<form id="register_form" method="post" action="">
					<dl>
						<dt>用户名</dt>
						<dd style="min-height:54px;">
							<input type="text" id="username" name="username" class="text"
							ng-model="username"
				            required
				            ng-required="true"
				            ng-minlength="5"
				            ng-maxlength="20"
				            pattern="[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}"
				            ng-pattern="/^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}$/"
				            ng-change=""	
							title="只能输入5-20个以字母开头、可带数字、“_”、“.”的字串" autofocus />
							<label></label>
						</dd>
					</dl>
					<dl>
						<dt>设置密码</dt>
						<dd style="min-height:54px;">
							<input type="password" id="password" name="password"  class="text"
							ng-model="pwd1"
				            required
				            ng-required="true"
				            ng-minlength="6"
				            ng-maxlength="20"
				            pattern="(\w){6,20}"
				            ng-pattern="/^(\w){6,20}$/"
				            ng-change=""
							title="只能输入6-20个字母、数字、下划线"/>
							<label></label>
						</dd>
					</dl>
					<dl>
						<dt>确认密码</dt>
						<dd style="min-height:54px;">
							<input type="password" id="password_confirm" required
				            ng-required="true" name="password_confirm" ng-model="pwd2" class="text" title="请再次输入您的密码"/>
							<label></label>
						</dd>
					</dl>
					<dl>
						<dt>邮箱</dt>
						<dd style="min-height:54px;">
							<input type="email" id="email" name="email" class="text"
							ng-model="email"
				            required
				            ng-required="true"
				            ng-minlength="5"

				            ng-pattern="/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/"
							 title="请输入常用的邮箱，将用来找回密码、接受订单通知等"/>
							<label></label>
						</dd>
					</dl>
					<dl>
						<dt>验证码</dt>
						<dd style="min-height:54px;">

							<input type="text" id="captcha" name="captcha" class="text w50 fl" require ng-require="true"  ng-model="captcha" ng-trim="false"
							 ng-blur="sub()" size="10" />

							<img src= "__APP__/Index/verify"  name="codeimage" border="0" id="codeimage" class="fl ml5" ng-click="change()" href="" /> <a href="" class="ml5" ng-click="change()">看不清，换一张</a>
							<label></label>
						</dd>
					</dl>
					<dl>
						<dt>&nbsp;</dt>
						<dd>
							<input type="button"  
							id="Submit" 
							value="立即注册" 
							class="submit" 
							ng-click="isAgree&&trueVerify? upUser() : ''" title="立即注册"/>
							<input 
							name="agree" 
							type="checkbox" 
							class="vm ml10" 
							id="clause" 
							value="1" 
							ng-model="isAgree" 
							checked="checked"/>
							<span for="clause" class="ml5">阅读并同意<a href="http://www.531314.com/document-agreement.html" target="_blank" class="agreement" title="阅读并同意">服务协议</a></span>
							<label></label>
						</dd>
					</dl>
				</form>
				<div class="clear"></div>
			</div>
			<div class="nc-login-bottom"></div>
		</div>
		<div class="nc-login-left">
			<h3>注册之后您可以</h3>
			<ol>
				<li class="ico05"><i></i>购买商品支付订单</li>
				<li class="ico01"><i></i>申请开店销售商品</li>
				<li class="ico03"><i></i>空间好友推送分享</li>
				<li class="ico02"><i></i>收藏商品关注店铺</li>
				<li class="ico06"><i></i>商品咨询服务评价</li>
				<li class="ico04"><i></i>安全交易诚信无忧</li>
				<div class="clear"></div>
			</ol>
			<h3 class="mt20">如果您是本站用户</h3>
			<div class="nc-login-now mt10">
				<span class="ml20">我已经注册过账号，立即<a href="__APP__/Index?act=login&op=index" title="" class="register">登录</a></span>
				<span>或是<a class="forget" href="index.php?act=login&op=forget_password">找回密码？</a></span>
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
		<noscript>
			<img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&e=" style="display:none;"/>
		</noscript> 
	</div>
	<script src="__ROOT__/Index/Common/js/angular.min.js" type="text/javascript"></script>
	<script src="http://cdn.bootcss.com/blueimp-md5/1.1.0/js/md5.min.js"></script>
	<script type="text/javascript">
		var app = angular.module("myapp",[]);
	    app.controller("mycontroller",function ($scope,$http) {
	    	//绑定密码
	    	$scope.username = "";
	        $scope.pwd1 = "";
	        $scope.pwd2 = "";
	        $scope.email = "";
	        $scope.isAgree = true ;
	        $scope.captcha = "" ;
	        $scope.trueVerify = false;
	        $scope.upUser = function(){   	
	        	if(($scope.pwd1 === $scope.pwd2) && $scope.email !== "" ){
	        		$http({
	        			url:"__APP__/Index/upUser",
	        			method:"post",
	        			data:{
	        				username:$scope.username,
	        				pwd:$scope.pwd1,
	        				email:$scope.email,
	        			},
	        			headers:{
	        				"Content-Type":"application/x-www-form-urlencoded",
	        			}
	        		}).success(function(data){
	        			console.log(data)
	        			if(data.status === 1){
	        				//成功让他去登陆
	        				window.location.href = "__APP__/Index?act=login&op=index"
	        			}else if (data.status === 3){
	        				alert("系统出错"+data.info)
	        			}else{
	        				alert(data.info);
	        			}
	        		}).error(function(data){
	        			console.log("错误："+data);
	        		})
	        	}else{
	        		alert("邮箱或者密码错误");
	        	}
	        };
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