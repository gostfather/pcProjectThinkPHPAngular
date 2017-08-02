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
			<form action="" method="post">
				
				<input type="submit" value="提交"/>
			</form>
		</div>
	<script type="text/javascript">
    	const app = angular.module("myapp",[]);
    	app.controller("mycontroller",function($scope,$http){
    		
    	})
    </script>
	</body>
</html>