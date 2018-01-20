<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 18:02:33
         compiled from "app\mobi\view\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:172195799d839e6a666-39699985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d67116a7f26aee0aecc3fe7d1e0931f8e25e774' => 
    array (
      0 => 'app\\mobi\\view\\User\\index.html',
      1 => 1469516754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172195799d839e6a666-39699985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'rs' => 0,
    'user_username' => 0,
    'user_m2' => 0,
    'sell_enable' => 0,
    'Fans' => 0,
    'account' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799d83a060ab4_84929360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799d83a060ab4_84929360')) {function content_5799d83a060ab4_84929360($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<title>个人中心</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/global.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/sunny.css" rel="stylesheet" type="text/css">
<meta name="description" content="">
<meta name="keywords" content="">

<meta name="viewport"
	content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/base.css" rel="stylesheet"
	type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/sunny.css" rel="stylesheet"
	type="text/css">
</head>
<body class="body">
	<header class="header">
    <a href="?index.php" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
    <p>个人中心</p>
    </header>

    
	<form name="aspnetForm" method="post" action="" id="aspnetForm"
		onsubmit="return false;">
		<input name="SellerUserDefault$hdccituid" type="hidden"
			id="SellerUserDefault_hdccituid">

		<?php echo $_smarty_tpl->getSubTemplate ('User/sn_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="avatar-wrap"
			style="background:url(<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/avatar_bg.jpg) no-repeat center center; background-size: cover; height: 80px;">
			<!-- <div class="avatar rel mts-accountcenter-pic">
				<div class="img" style="margin-top: 15px;">
					<img src="<?php if ($_smarty_tpl->tpl_vars['rs']->value['avatars']) {?><?php echo $_smarty_tpl->tpl_vars['rs']->value['avatars'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/avatar.png<?php }?>">
				</div>
			</div> -->
			<div class="uname">Hi, <?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
</div>
			<!-- <div class="uname"><?php if ($_smarty_tpl->tpl_vars['rs']->value['type']==1) {?>注册会员<?php } else { ?>第<?php echo $_smarty_tpl->tpl_vars['user_m2']->value;?>
位微信会员<?php }?></div> -->
		</div>
        
      <!--   <?php if ($_smarty_tpl->tpl_vars['sell_enable']->value['status']) {?>
		<nav class="nav-state flex" data-base="" data-resroot="/RES"
			id="mts-globle-data">
            <a href="?c=UserSell">
				<span>人气：</span>
				<span><?php if ($_smarty_tpl->tpl_vars['Fans']->value) {?><?php echo $_smarty_tpl->tpl_vars['Fans']->value;?>
<?php } else { ?>0<?php }?></span>
			</a>

			<a href="?c=UserBalance">
				<span>总佣金：</span>
				<span><?php if ($_smarty_tpl->tpl_vars['account']->value['commission']) {?><?php echo $_smarty_tpl->tpl_vars['account']->value['commission'];?>
<?php } else { ?>0<?php }?></span>
			</a>
			<a href="?c=UserBalance">
				<span>余额：</span>
				<span><?php if ($_smarty_tpl->tpl_vars['account']->value['balance']) {?><?php echo $_smarty_tpl->tpl_vars['account']->value['balance'];?>
<?php } else { ?>0<?php }?></span>
			</a>
		</nav>
        <?php }?> -->

		<!-- <nav class="nav-state flex mt10" data-base="" data-resroot="/RES"
			id="mts-globle-data">
			<a href="?c=UserOrder&act=lists&state=1" class="mts-topaid">
				<span>待付款</span>
			</a>
			<a href="?c=UserOrder&act=lists&state=2" class="mts-toreceipt">
				<span>待发货</span>
			</a>
			<a href="?c=UserOrder&act=lists&state=3" class="mts-toreceipt">
				<span>待收货</span>
			</a>
			<a href="?c=UserOrder&act=lists&state=4" class="mts-returngoods">
				<span>已完成</span>
			</a>
		</nav> -->
		<!-- <div class="sn-block sn-list-div pr ">
			<a class="of pl15" href="?c=UserOrder&act=lists">全部订单</a>
		</div> -->
        
      <!--   <?php if ($_smarty_tpl->tpl_vars['sell_enable']->value['status']) {?>
		<div class="sn-block sn-list-div pr mt10">
			<a class="of pl15" href="?c=UserSell">我的分销</a>
		</div>
        <?php }?> -->
        
		<ul class="mt10 list-mine pl15 ">

			<li class="sn-block sn-list-div pr ">
				<a class="of" href="?c=User&act=profile" >个人信息</a>
			</li>
			
			<li class="sn-block sn-list-div pr ">
				<a class="of" href="?c=User&act=zhongchou">我的众筹</a>
			</li>
		</ul>
		<div class="sn-btn-c block m15">
			<a href="?c=Login&act=logout">注销</a>
		</div>
		

	</form>

	<?php echo $_smarty_tpl->getSubTemplate ('Public/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
