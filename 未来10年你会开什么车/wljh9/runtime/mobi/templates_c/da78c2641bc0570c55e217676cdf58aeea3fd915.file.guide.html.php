<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 09:50:14
         compiled from "app\mobi\view\Notice\guide.html" */ ?>
<?php /*%%SmartyHeaderCode:1092357e9d056244a79-14150844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da78c2641bc0570c55e217676cdf58aeea3fd915' => 
    array (
      0 => 'app\\mobi\\view\\Notice\\guide.html',
      1 => 1474940940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092357e9d056244a79-14150844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'author' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9d05628ee05_04251934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9d05628ee05_04251934')) {function content_57e9d05628ee05_04251934($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
	$(function() {
		
		var bh = $(window).height();
		$(".content").css({"min-height":bh+"px"});
	});
</script>
	<div class="content" style="background:#fff;padding:3%;">
		
		<div class="j_c">
			<p class="title"><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></p>
			<p class="author"><span><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span></p>
			<p>
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</p>
		</div>
		
	</div>
</body>
</html><?php }} ?>
