<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/body.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<div id="main">
			<div class="header">
				<h1>后台管理</h1>
			</div>
			<div class="body">
				<div class="addinfo">
			        <div>
			            <span>标题 </span><input id="title" type="text"/>
			        </div>
			        <div>
			            <span>简介 </span><input id="info" type="text"/>
			        </div>
			        <div>
			            <span>颜色 </span><input id="color" type="text"/>
			        </div>
			        
			        <div>
			            <span>图片1: </span><input name="img" type="file"/><span id="btn" style="position: absolute; margin-left: -50px;margin-top: 5px; width: 120px;">&nbsp;&nbsp;点击添加更多图片 </span>
			        	<span>图片2: </span><input name="img" type="file"/>
			        	<span>图片3: </span><input name="img" type="file"/>
			        </div>
			        
			        <div>
			            <span>市场价 </span><input id="marketPrice" type="text"/>
			        </div>
			        <div>
			            <span>商店价 </span><input id="StorePrice" type="text"/>
			        </div>
			        <div>
			            <span>库存 </span><input id="stock" type="text"/>
			        </div>
			        <div>
			            <span>分类id </span><input id="classify" type="text"/>
			        </div>
			        <div class="addinfo_btn" onclick="sub()">提交</div>
			    </div>
			

		        <table ng-app="app" ng-controller="myCon">
		            <tr >
		                <td style="width:55px">编号</td>
		                <td style="width:100px;">分类ID</td>
		                <td >标题</td>
		                <td >简介</td>
		                <td >颜色</td>
		                <td >URL</td>
		                <td >市场价</td>
		                <td >商店价</td>
		                <td >库存</td>
		                <td style="width:70px;">时间</td>
		                <td style="width:70px;">操作</td>
		            </tr>
		           
	                <tr ng-clok ng-repeat="(k,v) in data" >
	                    <td width="10px;">{{k+1}}</td>
	                    <td>{{v.classify}}</td>
	                    <td>{{v.title}}</td>
	                    <td>{{v.info}}</td>
	                    <td>{{v.color}}</td>
	                    <td>{{v.imgurl}}</td>
	                    <td>{{v.marketPrice}}</td>
	                    <td>{{v.StorePrice}}</td>
	                    <td>{{v.stock}}</td>
	                    <td>{{v.addtime}}</td>
	                    <td ng-click="del(v.classify)"><span>删除</span></td>
	                </tr>
		          
		       </table>
			</div>
		</div>
	<script src="__ROOT__/Admin/Common/js/angular.min.js"></script>	
	<script type="text/javascript">
		var app = angular.module("app",[]);
	app.controller("myCon",function ($scope,$http) {
		$scope.data = [];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> master
		$scope.err = "";
		$http.get("__APP__/Shop/simpleList").success(function(data){
//			console.log(data);
			if(data.status ===1 ){
				$scope.data = data.res;
<<<<<<< HEAD
			}else{
				$scope.err = "系统错误暂时找不到信息" ;
			}
=======
		$http.get("__APP__/Shop/simpleList").success(function(data){
			console.log(data);
>>>>>>> master
=======
				console.log($scope.data)
			}else{
				$scope.err = "系统错误暂时找不到信息" ;
			}
>>>>>>> master
		}).error(function(data){
			console.log(data);
		})
    });
	</script>

	<script type="text/javascript">
		var fd = new FormData();
		function sub(){
			var	title = $("#title").val() ;
	    	var	info = $("#info").val() ;
	    	var	color = $("#color").val() ;
	    	var	marketPrice = $("#marketPrice").val() ;
	    	var	StorePrice = $("#StorePrice").val() ;
	    	var	stock = $("#stock").val() ;
	    	var	classify = $("#classify").val() ;
			try{
				if(title===""){
					throw new Error("请输入标题");
				}
				if(info===""){
					throw new Error("请输入简介");
				}
				if(color===""){
					throw new Error("请输入颜色");
				}
				if(marketPrice===""){
					throw new Error("请输入市场价");
				}
				if(StorePrice===""){
					throw new Error("请输入商品价");
				}
				if(stock===""){
					throw new Error("请输入库存");
				}
				if(classify===""){
					throw new Error("请输入商品id号");
				}
			}catch(e){
				alert(e.message);
			}finally{
				var allImg = true;
				$("input[name='img']").each(function(){
					if(this.value===""){
						allImg = false;
					};
				});
				if(allImg){
	    			$("input[name='img']").each(function(k){
	//	    				console.log(k, this.files[0] );
						 fd.append('img'+k, this.files[0]);
	    			});
	    			fd.append('title', title);
	    			fd.append('info', info);
	    			fd.append('color', color);
	    			fd.append('marketPrice', marketPrice);
	    			fd.append('StorePrice', StorePrice);
	    			fd.append('stock', stock);
	    			fd.append('classify', classify);
	    			asdf(fd);
	    			
				}else{
					alert("缺少图片");
				}
			}
		}
    	function asdf(data){
    		$.ajax({
				type:"POST",
				url:"__APP__/Shop/upload",
				async:true,
				data:data,
				processData: false,
    			contentType: false,
				success:function(data){
					console.log(data);
				}
			});
    	}
    </script>
	</body>
</html>