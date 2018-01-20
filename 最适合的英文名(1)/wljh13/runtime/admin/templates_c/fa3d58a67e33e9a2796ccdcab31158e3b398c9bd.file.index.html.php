<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 13:59:52
         compiled from "app\admin\view\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:317835a4b1fd8194e28-82920584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3d58a67e33e9a2796ccdcab31158e3b398c9bd' => 
    array (
      0 => 'app\\admin\\view\\Login\\index.html',
      1 => 1511233864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317835a4b1fd8194e28-82920584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b1fd8231243_59487851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b1fd8231243_59487851')) {function content_5a4b1fd8231243_59487851($_smarty_tpl) {?><!doctype html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>管理后台</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="MobileOptimized" content="320">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/font-awesome.min.css"
	rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/style.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/style-responsive.css"
	rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/CcituUser.js"></script>
<!--[if lt IE 9]>
<script src="resource/js/html5shiv.min.js"></script>
<script src="resource/js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="favicon.ico">

</head>
<body class="login tooltips bg-dark">
	<!-- BEGIN PANEL DEMO -->
	<div class="box-demo">
		<div class="inner-panel">
			<div class="cog-panel" id="demo-panel">
				<i class="fa fa-cog fa-spin"></i>
			</div>
			<p class="text-muted small text-center"></p>
			<div class="row text-center">
				<div class="col-xs-3">
					<div class="xs-tiles" data-toggle="tooltip" title="Default"
						id="color-reset">
						<div class="half-tiles bg-primary"></div>
						<div class="half-tiles bg-primary"></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="xs-tiles" data-toggle="tooltip" title="Success"
						id="bg-success">
						<div class="half-tiles bg-success"></div>
						<div class="half-tiles bg-success"></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="xs-tiles" data-toggle="tooltip" title="Info"
						id="bg-info">
						<div class="half-tiles bg-info"></div>
						<div class="half-tiles bg-info"></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="xs-tiles" data-toggle="tooltip" title="Danger"
						id="bg-danger">
						<div class="half-tiles bg-danger"></div>
						<div class="half-tiles bg-danger"></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="xs-tiles" data-toggle="tooltip" title="Warning"
						id="bg-warning">
						<div class="half-tiles bg-warning"></div>
						<div class="half-tiles bg-warning"></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="xs-tiles" data-toggle="tooltip" title="Dark"
						id="bg-dark">
						<div class="half-tiles bg-dark"></div>
						<div class="half-tiles bg-dark"></div>
					</div>
				</div>
			</div>
			<button class="btn btn-block btn-primary btn-sm" id="btn-reset">默认风格</button>
		</div>
	</div>
	<!-- END PANEL DEMO -->

	<div class="login-header text-center">
		<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/logo-login.png"  class="logo" alt="Logo"> -->
	</div>

	<div class="login-wrapper">
		<form name="ctl01" method="post" action="?c=login&act=login" id="ctl01" role="form" onSubmit="return checkForm()">

			<div
				class="alert alert-warning alert-bold-border fade in alert-dismissable"
				style="display: none;">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<p style="color: red" id="warningTxt">
					<i class="fa fa-exclamation-circle"></i>
					用户名或密码错误
				</p>
			</div>

			<div class="form-group has-feedback lg left-feedback no-label">
				<input name="account" type="text" value="" id="txtUserName"
					class="form-control no-border input-lg rounded" placeholder="用户名"
					autofocus="">
				<span class="fa fa-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback lg left-feedback no-label">
				<input name="password" type="password" id="txtPw"
					class="form-control no-border input-lg rounded" placeholder="密  码">
				<span class="fa fa-unlock-alt form-control-feedback"></span>
			</div>

			<div class="form-group">
				<input type="submit" name="btnLogin" value="登陆" id="btnLogin"
					class="btn btn-warning btn-lg btn-perspective btn-block">
			</div>
		</form>
		<p class="text-center">
			<strong>© 2014-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</strong>
		</p>
	</div>

	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.nicescroll.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/owl.carousel.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/icheck.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap-datepicker.js"></script>
	<!--[if IE]>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/excanvas.js"></script>
<![endif]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.knob.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/knob.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/apps.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/demo-panel-1.js"></script>

	<!-- END PAGE LEVEL SCRIPTS -->

</body>
</html><?php }} ?>
