<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
    	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/manage.css"/>
	</head>
	<body>
		<div ng-app="app" ng-controller="myCon" id="main">
			<div class="header">
				<h1>后台管理</h1>
				<div class="search">
					<input type="text" id="search" ng-model="keyWord" placeholder="搜索商品" /><input id="btn" ng-click="search()" value="搜索" type="button">
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="__APP__/Shop/index">添加商品》</a></li>
					<li><a href="__APP__/Manage/manage">管理商品》</a></li>
				</ul>
			</nav>
			<h3 ng-show="!shouList">找不到商品</h3>
			<article ng-show="shouList" ng-repeat="(k,v) in item" ng-click="edit(v.classify)">
				<div class="text">
					<ul>
						<li><span>id：</span>{{v.id}}</li>
						<li><span>商品id：</span>{{v.classify}}</li>
						<li><span>标题：</span>{{v.title}}</li>
						<li><span>简介：</span>{{v.info}}</li>
						<li><span>颜色：</span>{{v.color}}</li>
						<li><span>市场价：</span>{{v.marketPrice}}</li>
						<li><span>商店价：</span>{{v.StorePrice}}</li>
						<li><span>库存：</span>{{v.stock}}</li>
						<li><span>添加时间：</span>{{v.addtime}}</li>
					</ul>
				</div>
				<div class="imges" >
					<img ng-repeat="(kk,vv) in v.imgurl" ng-src="__ROOT__/{{vv}}"/>
				</div>
			</article>
			<div ng-show="manage" class="pagination">
				<ul>
					<li ng-class="currentPage==0? '' : 'canHover'" ng-click="currentPage==0? '' : changePage(0)">
						<span >首页</span>
					</li>
					<li ng-class="currentPage==0? '' : 'canHover'" ng-click="currentPage > 0? changePage(currentPage-1) : ''">
						<span >上一页</span>
					</li>
					<li ng-repeat="(k,v) in range(0,pages)" ng-click="currentPage==k? '' : changePage(k)" ng-class="currentPage==k? '' : 'canHover' ">
						<span >{{k+1}}</span>
					</li>
					<li ng-class="currentPage == pages - 1 ? '' : 'canHover' " ng-click="currentPage < pages -1 ? changePage(currentPage+1) : ''">
						<span >下一页</span>
					</li>
					<li ng-class="currentPage == pages - 1 ? '' : 'canHover'" ng-click="currentPage==pages-1? '' : changePage(pages-1)">
						<span >末页</span>
					</li>
				</ul>
			</div>
		</div>
	<script type="text/javascript">
		var item = <?php echo ($data); ?>;
    	var app = angular.module("app",[]);
	app.controller("myCon",function ($scope,$http) {
		$scope.item = item.info;
		$scope.err = "";
		$scope.pages = item.pages;
		$scope.currentPage = 0;
		$scope.keyWord = "" ;
		$scope.shouList = false ;
		$scope.manage = true ;
		if(item.status == 1){
			$scope.shouList = true ;
		}
		$scope.range = function (start, end) {
	        var ret = [];
	        if (!end) {
	            end = start;
	            start = 0;
	        }
	        for (var i = start; i < end; i++) {
	            ret.push(i);
	        }
	        return ret;
	    };
		$scope.changePage = function(k){
	    	getItem(k);
	    }
	    function getItem(page){
			$http.get("__APP__/Manage/getList?page="+page)
			.success(function(data){
				if(data.status ===1 ){
					$scope.item = data.info;
					$scope.pages = data.pages;
					$scope.currentPage = page;
				}else{
					$scope.err = "系统错误暂时找不到信息" ;
				}
			}).error(function(data){
				console.log(data);
			});
		}
	    $scope.search = function(){
	    	$http({
	    		url:'__APP__/Manage/search',
				method:'POST',
				headers:{
					"Content-type" : "application/x-www-form-urlencoded",
				},
				data:{
					keyWord:$scope.keyWord,
				},
			}).success(function(data){
				console.log(data);
				if(data.status === 1 ){
					$scope.item = data.info ;
					$scope.manage = false ;
					$scope.shouList = true ;
				}else{
					$scope.shouList = true ;
					$scope.manage = false ;
				}
			}).error(function(err){
				console.log("我是错误：" + err);
			});
	    }
	    
	    $scope.edit = function(classify){
	    	window.location.href = "__APP__/Edit/edit?classify="+ classify ;
	    }
	});
    </script>
	</body>
</html>