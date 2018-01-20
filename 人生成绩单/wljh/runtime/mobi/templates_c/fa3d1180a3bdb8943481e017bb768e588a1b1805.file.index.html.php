<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 18:00:46
         compiled from "app\mobi\view\GoodsList\index.html" */ ?>
<?php /*%%SmartyHeaderCode:293135799d7ce30f844-01538198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3d1180a3bdb8943481e017bb768e588a1b1805' => 
    array (
      0 => 'app\\mobi\\view\\GoodsList\\index.html',
      1 => 1469602449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293135799d7ce30f844-01538198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'goods_success' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799d7ce3a00e3_55463506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799d7ce3a00e3_55463506')) {function content_5799d7ce3a00e3_55463506($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="">

<header class="header">
	<a href="?index.php" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
	<p>成功案例</p>
</header>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/index.css">

<div style="text-align:center; font:normal 14px/24px 'MicroSoft YaHei';padding-top:50px; ">
	<div class="i_hot">
			<div id="">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_success']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<div class="prj_box">
					<a href="?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
">
					<div class="p_title">
						<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

					</div>
					<div class="p_list">
						<span>众筹目标:<font><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
元</font></span><span>需要时间:<font><?php echo $_smarty_tpl->tpl_vars['v']->value['all_time'];?>
天</font></span><div class="clear"></div>
					</div>
					<div class="p_list2">
						<div class="jdt"><div class="jds" style="width:100%;border-radius: 5px;"></div></div>
					</div>
					</a>
				</div>
				<?php } ?>
			</div>
	</div>
</div>

<a href="#0" class="cd-top">Top</a>

</body>
</html><?php }} ?>
