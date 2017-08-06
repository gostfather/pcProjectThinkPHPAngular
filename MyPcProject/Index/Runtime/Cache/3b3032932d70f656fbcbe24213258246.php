<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>春舞枝</title>
	<meta name="keywords" content="春舞枝"/>
	<meta name="description" content="春舞枝"/>
	<style type="text/css">
		body{
			_behavior:url(http://www.531314.com/templates/new/css/csshover.htc);
		}
		.nc-appbar-tabs a.compare{display:none!important;}
	</style>
	<style>
		.ncc-table-style tbody tr.item_disabled td{background:none repeat scroll 0 0 #F9F9F9;height:30px;padding:10px 0;text-align:center;}
	</style>
	<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
	<link href="__ROOT__/Index/Common/css/home_cart.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
	<script type="text/javascript" src="__ROOT__/Index/Common/js/jq.min.js"></script>
</head>
<body ng-app="shopApp" ng-controller="shopController" ng-cloak>
	<!-- 1 -->
		<div class="public-top-layout w">
		<div class="topbar wrapper">
			<div class="user-entry">
				<?php if(!empty($_SESSION['username'])): ?>您好&nbsp;<?php echo (session('username')); ?>，欢迎来到
					<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=logout">退出</a>]</span> 
				<?php else: ?>您好，欢迎来到
					<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=index">登录</a>]</span> <span>[<a href="__APP__/Index?act=login&op=register">注册</a>]</span><?php endif; ?>
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

	<!-- 1.1 -->
	<header class="ncc-head-layout">
		<div class="site-logo">
			<a href="__APP__/Index/index">
				<img src="__ROOT__/Index/Common/images/logo.png" alt="">
			</a>
		</div>
		<ul class="ncc-flow">
			<li class="current">
				<i class="step1"></i>
				<p>我的购物车</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
			<li>
				<i class="step2"></i>
				<p>填写核对购物信息</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
			<li>
				<i class="step3"></i>
				<p>支付提交</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
			<li>
				<i class="step4"></i>
				<p>订单完成</p>
				<sub></sub>
				<div class="hr"></div>
			</li>
		</ul>
	</header>
	<!-- 没有商品的购物车 -->
	<div class="ncc-wrapper" style="display: none">
		<div class="ncc-null-shopping">
			<i class="ico"></i>
			<h4>您的购物车还没有商品</h4>
			<p>
				<a href="__APP__/Index/index" class="ncc-btn-mini mr10">马上去购物</a>
				<a href="" class="ncc-btn-mini">查看自己的订单</a>
			</p>
		</div>
	</div>
	<!-- 有商品的购物车 -->
	<div class="ncc-wrapper">
		<div class="ncc-main">
			<div class="ncc-title">
				<h3>我的购物车</h3>
				<h5>
					查看购物车商品清单，增加减少商品数量，并勾选想要的商品进入下一步操作。
				</h5>
			</div>
			<!-- 购物车操作开始 -->
			<form>
				<table class="ncc-table-style" nc_type="table_cart">
					<thead>
						<tr>
							<th class="w50">
								<label>
									<input type="checkbox" ng-checked="checks" ng-click="checks = !checks; all(checks)">&nbsp;全选
								</label>
							</th>
							<th></th>
							<th>商品</th>
							<th class="w120">单价（元）</th>
							<th class="w120">数量</th>
							<th class="w120">小计（元）</th>
							<th class="w80">操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="20">
								<strong>
									店铺：
									<a href="">春舞枝旗舰店</a>
								</strong>
								<span></span>
							</th>
						</tr>
						<tr ng-repeat="(k,v) in item" class="shop-list">
							<td>
								<input type="checkbox" ng-checked="chkItem[k]" ng-checked="chkItem[k]" ng-click="ck(chkItem[k]==undefind?false:chkItem[k], v, k)">
							</td>
							<td class="w60">
								<a href="" target="_blank" class="ncc-goods-thumb">
									<img ng-src="__ROOT__/{{v.imgurl}}" alt="{{v.title}}">
								</a>
							</td>
							<td class="tl">
								<dl class="ncc-goods-info">
									<dt>
										<a target="_blank" href="">{{v.title}}</a>
									</dt>
								</dl>
							</td>
							<td class="w120">
								<em>{{v.StorePrice | number:2}}</em>
							</td>
							<td class="w120 ws0">
								<a href="" class="add-substract-key tip" ng-click="sub(v,k)">-</a>
								<input type="text" readonly="" value="{{v.count}}" class="text w20" style="text-align: center;" ng-model="v.count">
								<a ng-click="add(v,k)" class="add-substract-key tip">+</a>
							</td>
							<td class="w120">
								<em >{{v.count * v.StorePrice | number:2}}</em>
							</td>
							<td class="w80">
								<a ng-click="del(k)">删除</a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="20">
								<div class="ncc-all-account">
									商品总价（不含运费）
									<em ng-init="">{{total | number:2}}元</em>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
			</form>
			<div class="ncc-bottom">
				<a href="" id="next_submit" class="ncc-btn ncc-btn-acidblue fr">
					下一步，填写核对购物信息
				</a>
			</div>
		</div>
	</div>

	<div id="faq">
		<div class="faq-wrapper"></div>
	</div>
	<!-- footer -->
	<div id="footer" class="wrapper">
		<p>
			<a href="__APP__/Index/index">
				首页
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=24">
				招聘英才
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=25">
				合作及洽谈
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=23">
				联系我们
			</a> | 
			<a href="/shop/index.php?act=article&amp;article_id=22">
				关于我们
			</a> | 
			<a href="/shop/index.php?act=link">
				友情链接
			</a>
		</p>
		Copyright 2015 闽ICP备12008006号-1
		<br>
	</div>
</body>
<script>
	angular.module("shopApp",[]).controller("shopController",function ($scope,$http) {
		$scope.item = [];
		$http({
           method: "post",
           url: "__APP__/Shop/getList",
       }).success(function (data) {
       		if (data.status == 1) {
       			console.log(data);
       			$scope.item = data.data;
       		}
       }).error(function (err) {
       		console.log(err);
       })

		$scope.sub = function (item,index) {
			if (item.count == 1 || item.count < 1) {
				item.count = 1;
			} else{
				$http({
					url:"__APP__/Shop/reduceItem",
	    			method:"get",
	    			data:{
	    				classify: item.classify,
	    			},
	    		}).success(function(data){
					if(data.status == 1){
						item.count = data.count;
						if ($scope.chkItem[index]) {
			   				$scope.total -= item.StorePrice;
			   			}
					}else{
						alert("操作失败");
					}
	    		}).error(function(data){
	    			console.log("错误："+data);
	    		})
    		}			
		}
		$scope.add = function (item,index) {
			$http({
				url:"__APP__/Shop/addItem",
    			method:"get",
    			data:{
    				classify: item.classify,
    			},
    		}).success(function(data){
				if(data.status == 1){
					item.count = data.count;
					if ($scope.chkItem[index]) {
		   				$scope.total += item.StorePrice;
		   			}
				}else{
					alert("操作失败");
				}
    		}).error(function(data){
    			console.log("错误："+data);
    		})
		}
		$scope.del = function (k) {
			console.log(k)
			$scope.item.splice(k,1);
		}
		$scope.total = 0;
		//用来标志每一项的状态  
        $scope.chkItem = [];  
        $scope.ck = function (state, item, index) {  
            //取状态的相反值  
            $scope.chkItem[index] = !state;
            // 计算总价
            if($scope.chkItem[index]) {
            	$scope.total += $scope.item[index].count * $scope.item[index].StorePrice;
            }else{
            	$scope.total -= $scope.item[index].count * $scope.item[index].StorePrice;
            }
            //有一个为false则全选按钮为不选中  
            if(!$scope.chkItem[index]){  
                $scope.checks = false;  
            }else {   
                for(var i = 0; i < $scope.item.length; i++) {  
                    //只要有一个按钮没有选中  
                    if(!$scope.chkItem[i]){  
                        return;  
                    }  
                }  
                //全部选中  
                $scope.checks = true;  
            } 
        } 
        // 全选
        $scope.all = function (checks) {  
            //初始化设置状态  
            init(checks);  
            // 总计
            $scope.total = 0;
            if (checks) {
            	for(var i = 0; i < $scope.item.length; i++) {  
                	$scope.total += $scope.item[i].count * $scope.item[i].StorePrice;
            	}  
            }
        }
        //初始化  
        var init = function (sel) {  
            for(var i = 0; i < $scope.item.length; i++) {  
                //sel没有值 默认初始化false  
                $scope.chkItem[i] = sel || false;  
            }  
        } 
	})
</script>
</html>