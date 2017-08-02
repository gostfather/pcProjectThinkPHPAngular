<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝 - 用户注册</title>
		<meta name="keywords" content="春舞枝" />
		<meta name="description" content="春舞枝" />
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

		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>
	
	
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
		<div class="nc-login-layout">
			<div class="nc-login">
				<div class="nc-login-title">
					<h3>用户注册</h3>
				</div>
				<div class="nc-login-content">
					<form id="register_form" method="post" action="http://www.531314.com/index.php?act=login&op=usersave">
						<input type='hidden' name='formhash' value='5FzR_0Lp_ExVmskptqQ-yie_C1otGQi' />
						<dl>
							<dt>用户名</dt>
							<dd style="min-height:54px;">
								<input type="text" id="user_name" name="user_name" class="text tip" title="3-15位字符，可由中文、英文、数字及“_”、“-”组成" autofocus />
								<label></label>
							</dd>
						</dl>
						<dl>
							<dt>设置密码</dt>
							<dd style="min-height:54px;">
								<input type="password" id="password" name="password" class="text tip" title="6-20位字符，可由英文、数字及标点符号组成" />
								<label></label>
							</dd>
						</dl>
						<dl>
							<dt>确认密码</dt>
							<dd style="min-height:54px;">
								<input type="password" id="password_confirm" name="password_confirm" class="text tip" title="请再次输入您的密码" />
								<label></label>
							</dd>
						</dl>
						<dl>
							<dt>邮箱</dt>
							<dd style="min-height:54px;">
								<input type="text" id="email" name="email" class="text tip" title="请输入常用的邮箱，将用来找回密码、接受订单通知等" />
								<label></label>
							</dd>
						</dl>
						<dl>
							<dt>验证码</dt>
							<dd style="min-height:54px;">
								<input type="text" id="captcha" name="captcha" class="text w50 fl tip" maxlength="4" size="10" title="请输入验证码，不区分大小写" />
								<img src="index.php?act=seccode&op=makecode&nchash=0902fed7" title="" name="codeimage" border="0" id="codeimage" class="fl ml5" />
								<a href="javascript:void(0)" class="ml5" onclick="javascript:document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&nchash=0902fed7&t=' + Math.random();">看不清，换一张</a>
								<label></label>
							</dd>
						</dl>
						<dl>
							<dt>&nbsp;</dt>
							<dd>
								<input type="submit" id="Submit" value="立即注册" class="submit" title="立即注册" />
								<input name="agree" type="checkbox" class="vm ml10" id="clause" value="1" checked="checked" />
								<span for="clause" class="ml5">阅读并同意<a href="http://www.531314.com/document-agreement.html" target="_blank" class="agreement" title="阅读并同意">服务协议</a></span>
								<label></label>
							</dd>
						</dl>
						<input type="hidden" value="" name="ref_url">
						<input name="nchash" type="hidden" value="0902fed7" />
						<input type="hidden" name="form_submit" value="ok" />
						<input type="hidden" value="" name="zmr">
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
				<div class="nc-login-now mt10"><span class="ml20">我已经注册过账号，立即<a href="index.php?act=login&ref_url=" title="" class="register">登录</a></span><span>或是<a class="forget" href="index.php?act=login&op=forget_password">找回密码？</a></span></div>
			</div>
		</div>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.poshytip.min.js" charset="utf-8"></script>
		<script>
			//注册表单提示
			$('.tip').poshytip({
				className: 'tip-yellowsimple',
				showOn: 'focus',
				alignTo: 'target',
				alignX: 'center',
				alignY: 'top',
				offsetX: 0,
				offsetY: 5,
				allowTipHover: false
			});

			//注册表单验证
			$(function() {
				jQuery.validator.addMethod("lettersonly", function(value, element) {
					return this.optional(element) || /^[^:%,'\*\"\s\<\>\&]+$/i.test(value);
				}, "Letters only please");
				jQuery.validator.addMethod("lettersmin", function(value, element) {
					return this.optional(element) || ($.trim(value.replace(/[^\u0000-\u00ff]/g, "aa")).length >= 3);
				}, "Letters min please");
				jQuery.validator.addMethod("lettersmax", function(value, element) {
					return this.optional(element) || ($.trim(value.replace(/[^\u0000-\u00ff]/g, "aa")).length <= 15);
				}, "Letters max please");
				$("#register_form").validate({
					errorPlacement: function(error, element) {
						var error_td = element.parent('dd');
						error_td.find('label').hide();
						error_td.append(error);
					},
					onkeyup: false,
					rules: {
						user_name: {
							required: true,
							lettersmin: true,
							lettersmax: true,
							lettersonly: true,
							remote: {
								url: 'index.php?act=login&op=check_member&column=ok',
								type: 'get',
								data: {
									user_name: function() {
										return $('#user_name').val();
									}
								}
							}
						},
						password: {
							required: true,
							minlength: 6,
							maxlength: 20
						},
						password_confirm: {
							required: true,
							equalTo: '#password'
						},
						email: {
							required: true,
							email: true,
							remote: {
								url: 'index.php?act=login&op=check_email',
								type: 'get',
								data: {
									email: function() {
										return $('#email').val();
									}
								}
							}
						},
						captcha: {
							required: true,
							remote: {
								url: 'index.php?act=seccode&op=check&nchash=0902fed7',
								type: 'get',
								data: {
									captcha: function() {
										return $('#captcha').val();
									}
								},
								complete: function(data) {
									if(data.responseText == 'false') {
										document.getElementById('codeimage').src = 'http://www.531314.com/index.php?act=seccode&op=makecode&nchash=0902fed7&t=' + Math.random();
									}
								}
							}
						},
						agree: {
							required: true
						}
					},
					messages: {
						user_name: {
							required: '用户名不能为空',
							lettersmin: '用户名必须在3-15个字符之间',
							lettersmax: '用户名必须在3-15个字符之间',
							lettersonly: '用户名不能包含敏感字符',
							remote: '该用户名已经存在'
						},
						password: {
							required: '密码不能为空',
							minlength: '密码长度应在6-20个字符之间',
							maxlength: '密码长度应在6-20个字符之间'
						},
						password_confirm: {
							required: '请再次输入您的密码',
							equalTo: '两次输入的密码不一致'
						},
						email: {
							required: '电子邮箱不能为空',
							email: '这不是一个有效的电子邮箱',
							remote: '该电子邮箱已经存在'
						},
						captcha: {
							required: '请输入验证码',
							remote: '验证码不正确'
						},
						agree: {
							required: '请阅读并同意该协议'
						}
					}
				});
			});
		</script>
		<div id="faq">
			<div class="faq-wrapper">
				<ul>
					<li>
						<dl class="s1">
							<dt>
帮助中心 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-9.html" title="集团采购"> 集团采购 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-8.html" title="服务声明"> 服务声明 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-6.html" title="购物流程"> 购物流程 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s2">
							<dt>
店主之家 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-13.html" title="如何发货"> 如何发货 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-12.html" title="查看售出商品"> 查看售出商品 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-14.html" title="商城商品推荐"> 商城商品推荐 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-11.html" title="如何管理店铺"> 如何管理店铺 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s3">
							<dt>
支付方式 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-30.html" title="公司转账"> 公司转账 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-16.html" title="付款方式"> 付款方式 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-29.html" title="货到付款"> 货到付款 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-17.html" title="付款问题"> 付款问题 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s4">
							<dt>
售后服务 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-32.html" title="退换货流程"> 退换货流程 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-26.html" title="投诉说明"> 投诉说明 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s5">
							<dt>
客服中心 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-18.html" title="会员修改密码"> 会员修改密码 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-20.html" title="商品发布"> 商品发布 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-19.html" title="会员修改个人资料"> 会员修改个人资料 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-21.html" title="修改收货地址"> 修改收货地址 </a>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="s6">
							<dt>
关于我们 </dt>
							<dd><i></i>
								<a href="http://www.531314.com/article-23.html" title="联系我们"> 联系我们 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-25.html" title="合作及洽谈"> 合作及洽谈 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-22.html" title="关于我们"> 关于我们 </a>
							</dd>
							<dd><i></i>
								<a href="http://www.531314.com/article-24.html" title="招聘英才"> 招聘英才 </a>
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
				<a href="http://www.531314.com">首页</a>
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
			<noscript><img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&e=" style="display:none;"/></noscript> </div>
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
	</body>

</html>