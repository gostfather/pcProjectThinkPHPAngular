<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
    	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/index.css"/>
	</head>
	<body>
		<div ng-app="myapp" ng-controller="mycontroller" id="main">
			<div class="header">
				<h1>后台管理</h1>
			</div>
			<div id="content">
				<div id="header">
					<h2>管理员登录</h2>
				</div>
				<div id="body">
					<div id="name">
						<input type="text" ng-model="username" placeholder="用户名"/>
					</div>
					<div id="password">
						<input type="password" ng-model="pwd" placeholder="密码"/>
					</div>
					<div id="">
						<input type="button" ng-click="sub()" value="提交"/>
					</div>
					
				</div>
			</div>
		</div>
	<script type="text/javascript">
    	const app = angular.module("myapp",[]);
    	app.controller("mycontroller",function($scope,$http){
    		$scope.username = "";
    		$scope.pwd = "";
    		$scope.sub = function(){
    			let url = "__APP__/Index/checkUsers";
//  			alert(url);
    			$http({
    				url,
    				method:"post",
    				headers:{
    					"Content":"application/x-www-form-urlencoded",
    				},
    				data:{
    					username:$scope.username,
    					pwd:$scope.pwd,
    				}
    			}).success(function(data){
    				console.log(data);
					if(data.status===1){
						window.location.href = "__APP__/Shop/index";
					}else{
						alert(data.info);
					}
    			}).error(function(data){
    				console.log(data);
    			});
    		}
    	})
    </script>
	</body>
</html>