<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 13:41:14
         compiled from "app\mobi\webview\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1839257999afa9030c7-30911637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '645bceff7ab7a7567ca41c25a94a5fedbb19744d' => 
    array (
      0 => 'app\\mobi\\webview\\Login\\index.html',
      1 => 1469518009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839257999afa9030c7-30911637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mall_title' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57999afa9ab061_63303927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57999afa9ab061_63303927')) {function content_57999afa9ab061_63303927($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Language" content="zh-cn">
		<title>登录_<?php echo $_smarty_tpl->tpl_vars['mall_title']->value;?>
</title>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/favicon.ico" media="screen">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/favicon.ico" media="screen">
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery-1.11.1.min.js" Charset="utf-8"></script>
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/ec.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/zh-cn_account.css" rel="stylesheet" type="text/css">

	</head>
	<body class="login">

		<!-- 头部 -->

		<div class="header">
		<div class="header_box">
			<div class="header_top">
				<div class="top_l">
					<ul>
						<li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/wx_btn.png"></a><div><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qrcode.png"><p class="swx">三荣实业</p></div></li>
						<li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qq_btn.png"></a><div><p class="qq_se"><span class="font15">在线客服</span><span>工作时间:<br>9:30-18:30</span></p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qq_btn_2.png"></a></div></li>
						<li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/tell_btn.png"></a></li>
						<li><a href=""><span class="tell">服务热线：xxx xxx xxxx (工作日 9:00-18:00)</span></a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="top_r">
					<ul>
						<li><a href="?c=login">你好，请登录</a>|</li>
						<li><a href="">免费注册</a>|</li>
						<li><a href="">帮助中心</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<!-- <div class="logo"><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/logo.png"></a></div> -->
			<div class="header_nav">
				<ul>
					<li><a href="?index.html">首页</a></li>
					<li><a href="?c=GoodsList">成功案例</a></li>
					<li><a href="?c=NoticeList&id=2">众筹问答</a></li>
					<li><a href="#">安全保障</a></li>
					<li><a href="?c=NoticeList&act=about&id=5">关于我们</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
		<div class="lg-bg">
		<div class="lg-g">
			<!--登录 -->
			<div class="login-area">
				<div class="new-txt-err" id="err" style="display:none;"></div>
				<div class="h">
					<h3 class="login-area-marginTop"><span>登录</span></h3>
				</div>
				<div class="b">
					<form name="aspnetForm" method="post" action="?c=login" id="aspnetForm" onSubmit="return false;" autocomplete="off" class="login-form-marginTop">
						<div class="form-edit-area">
							<table border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td><label for="login_userName" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;"><div class="text vam" style="border: medium none; background: none repeat scroll 0% 0% transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1"></div></label>
										<input style="z-index: 1;" validator="validator11422361035773" autocomplete="off" class="text vam" id="login_userName" name="account" maxlength="50" tabindex="1" type="text" placeholder="请输入用户名/邮箱">
										</td>
									</tr>
									<tr>
										<td><label for="login_password" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;"><div class="text vam" style="border: medium none; background: none repeat scroll 0% 0% transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1"></div></label>
										<input style="z-index: 1;" validator="validator21422361035774" id="login_password" autocomplete="off" class="text vam" name="password" value="" maxlength="32" tabindex="2" type="password" placeholder="请输入密码">
										</td>
									</tr>

									<tr>
										<td>
										<div style="margin-bottom:0px;">
											<span class="vam error" id="login_msg" style="margin-bottom:5px;display:block"></span>
										</div>
										<input class="button-login" id="btnLogin" name="btnLogin" value="登录" tabindex="5" type="submit">
										<p class="f_p">
											忘记<?php echo $_smarty_tpl->tpl_vars['mall_title']->value;?>
帐号密码？&nbsp;<a rel="nofollow" href="?c=Forget" class="new-fl">找回密码</a>
										</p>
										<input id="loginSubmitForm" style="display:none;" type="submit">
										<img class="load" src="login_files/loading3.gif"></td>
									</tr>
								</tbody>
							</table>
						</div>

					</form>

					<p>
						没有<?php echo $_smarty_tpl->tpl_vars['mall_title']->value;?>
帐号？ &nbsp;&nbsp;&nbsp;<a rel="nofollow" href="?c=register" class="new-fl">免费注册</a>
					</p>
					
				</div>
			</div>
		</div>
		<!-- <div class="hr-60"></div> -->
		</div>
		<!-- 底部  -->
		<div class="footer">
				<div class="foot">
					<div class="foot_l">
						<div class="foot_nav">
							<ul>
								<li><a href="">关于我们</a>|</li>
								<li><a href="">联系我们</a>|</li>
								<li><a href="">众筹问答</a>|</li>
								<li><a href="">用户协议</a>|</li>
								<li><a href="">免责声明</a></li>
								<div class="clear"></div>
							</ul>
						</div>
						<div class="foot_c">
							<span>Copyright © 2004-2016 三才实业发展有限公司 版权所有</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span>投资有风险，购买需谨慎</span>
						</div>
					</div>
					<div class="foot_r">
						<div class="qrcode">
							<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qrcode.png">
							<span>微信公众号</span>
						</div>
						<div class="rx">
							<p>客服热线(工作日 9:00~18:00)</p>
							<h2>400-823-8833</h2>
						</div>
						<div class="qq">
							<p>在线客服&nbsp;<span>(工作日 9:00~18:00)</span></p>
							<a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qq_btn_2.png"></a>
						</div>
					</div>
				</div>
			</div>
				<!--底部结束-->
		<script>
			$("#btnLogin").click(function() {
				var username = $("#login_userName").val();
				var password = $("#login_password").val();
				if (username == "") {
					$("#err").html("用户名不能为空");
					$("#err").show();
				} else if (password == "") {
					$("#err").html("密码不能为空");
					$("#err").show();
				} else {
					$.post("?c=login&act=login", $("#aspnetForm").serialize(), function(data) {
						$("#err").html(data);
						$("#err").show();
						if (data == '登陆成功!') {
							location.href = "?c=index";
						}
					});
				}
			});
		</script>
	</body>
</html>
<?php }} ?>
