<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 08:56:42
         compiled from "app\mobi\view\Notice\about.html" */ ?>
<?php /*%%SmartyHeaderCode:3267957e9c3ca7f13a8-21512361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '608430a141c0db133e3926e45af447948ec36ffe' => 
    array (
      0 => 'app\\mobi\\view\\Notice\\about.html',
      1 => 1474884183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3267957e9c3ca7f13a8-21512361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'mall_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9c3ca84b138_75663543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9c3ca84b138_75663543')) {function content_57e9c3ca84b138_75663543($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>

<script type="text/javascript">
	$(function() {
		
		var bh = $(window).height();
		$(".content").css({"min-height":bh+"px"});
	});
</script>
	<div class="content" style="background:#fff;padding:3%;">
		<div class="t_line t_t">
			<span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
		</div>
		<div class="j_c">
			<p>
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</p>
		</div>
		<div class="t_line f_t">
			<span><?php echo $_smarty_tpl->tpl_vars['mall_title']->value;?>
</span>
		</div>
		<p style="font-size:0.8em;text-align:center;color:#999;">中达百微盘</p>
	</div>
</body>
</html><?php }} ?>
