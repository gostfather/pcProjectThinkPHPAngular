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
			<nav>
				<ul>
					<li><a href="__APP__/Shop/index">添加商品》</a></li>
					<li><a href="__APP__/Manage/manage">管理商品》</a></li>
				</ul>
			</nav>
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
			        
			        <div class="addImage">
			        	<span id="addBtn">&nbsp;&nbsp;点击添加更多图片 </span>
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
	                </tr>
		       </table>
			</div>
		</div>
	<script src="__ROOT__/Admin/Common/js/angular.min.js"></script>	
	<script type="text/javascript">
		var app = angular.module("app",[]);
		app.controller("myCon",function ($scope,$http) {
		$scope.data = [];
		$scope.err = "";
		$http.get("__APP__/Shop/simpleList").success(function(data){
			if(data.status ===1 ){
				$scope.data = data.res;
			}else{
				$scope.err = "系统错误暂时找不到信息" ;
			}
		}).error(function(data){
			console.log(data);
		})
    });
	</script>

	<script type="text/javascript">
		var index = 0;
		for(var i = 0 ; i < 3 ; i++){
			index++;
			if(index === 1 ){
				var inputImage = $("<div class='list'><span>图片"+ (index) +"主图: </span><input onchange='preview("+(index-1)+")' name='img' type='file'/></div>")
			}else{
				var inputImage = $("<div class='list'><span>图片"+ (index) +": </span><input onchange='preview("+(index-1)+")' name='img' type='file'/></div>")
			}
			$(".addImage").append(inputImage);
		}
		$("#addBtn").on("click",function(){
			index ++ ;
			var inputImage = $("<div class='list'><span>图片"+ (index) +": </span><input onchange='preview("+(index-1)+")' name='img' type='file'/></div>")
			$(this).parent().append(inputImage)
		})
		function preview(k){
			const fs = document.getElementsByName("img")[k].files[0]; 
			const reader = new FileReader();
			reader.readAsDataURL(fs);
			reader.onload = function(){
				const img = new Image();
				img.style.width = "70px";
				img.style.height = "70px";
				img.src = reader.result;
				document.getElementsByName("img")[k].parentNode.appendChild(img);
			}
		}
		var fd = new FormData();
		function sub(){
			var	title = $("#title").val() ;
	    	var	info = $("#info").val() ;
	    	var	color = $("#color").val() ;
	    	var	marketPrice = $("#marketPrice").val() ;
	    	var	StorePrice = $("#StorePrice").val() ;
	    	var	stock = $("#stock").val() ;
	    	var	classify = $("#classify").val() ;
	    	var canSub = true ;
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
				canSub = true ;
			}catch(e){
				canSub = false ;
				alert(e.message);
			}
			if(canSub){
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
//					console.log(data);
					if(data.status === 1 ){
						$("input[name='img']").each(function(){
							this.value = null ;
						});
					}else{
						alert(data.info);
					}
				}
			});
    	}
    </script>
	</body>
</html>