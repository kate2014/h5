<?php /* Smarty version Smarty-3.1.18, created on 2016-09-22 17:55:22
         compiled from "app\mobi\webview\Public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:274157e3aa8a2d7e47-92350174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba674de09541a1d8ada56b2f6dbfb411bd064dc1' => 
    array (
      0 => 'app\\mobi\\webview\\Public\\header.html',
      1 => 1469698229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274157e3aa8a2d7e47-92350174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'mall_wxqrcode' => 0,
    'mall_qq' => 0,
    'mall_tell' => 0,
    'username' => 0,
    'mall_logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e3aa8a3492d8_07073298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e3aa8a3492d8_07073298')) {function content_57e3aa8a3492d8_07073298($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<title>三荣实业发展有限公司</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/style.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.min.js" Charset="utf-8"></script>
</head>
<body>
	<!--头部开始-->
	<div class="header">
		<div class="header_box">
			<div class="header_top">
				<div class="top_l">
					<ul>
						<li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/wx_btn.png"></a><div><img src="<?php echo $_smarty_tpl->tpl_vars['mall_wxqrcode']->value;?>
"><p class="swx">三荣实业</p></div></li>
						<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qq_btn.png"></a><div><p class="qq_se"><span class="font15">在线客服</span><span>工作时间:<br>9:30-18:30</span></p><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['mall_qq']->value;?>
&site=qq&menu=yes" target=_blank ><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qq_btn_2.png"></a></div></li>
						<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/tell_btn.png"></a></li>
						<li><a href="#"><span class="tell">服务热线：<?php echo $_smarty_tpl->tpl_vars['mall_tell']->value;?>
 (工作日 9:00-18:00)</span></a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="top_r">
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['username']->value!=null) {?><li><a href="?c=User&act=profile"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
(个人中心)</a>|</li><li><a href="?c=Login&act=logout">退出</a></li><?php } else { ?><li><a href="?c=login">登录</a></li><?php }?>
						<li><a href="?c=Register">免费注册</a>|</li>
						<li><a href="">帮助中心</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="logo"><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['mall_logo']->value;?>
"></a></div>
			<div class="header_nav">
				<ul>
					<li><a href="?index.html">首页</a></li>
					<li><a href="?c=GoodsList">成功案例</a></li>
					<li><a href="?c=NoticeList&id=2">众筹问答</a></li>
					<li><a href="?c=NoticeList&act=about&id=11">安全保障</a></li>
					<li><a href="?c=NoticeList&act=about&id=5">关于我们</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!--头部结束--><?php }} ?>
