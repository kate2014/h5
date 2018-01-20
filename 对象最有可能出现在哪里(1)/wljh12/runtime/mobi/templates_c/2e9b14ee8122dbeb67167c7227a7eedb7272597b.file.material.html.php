<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 09:44:14
         compiled from "app\mobi\view\Notice\material.html" */ ?>
<?php /*%%SmartyHeaderCode:1923757e9ceee1c93e6-34296537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9b14ee8122dbeb67167c7227a7eedb7272597b' => 
    array (
      0 => 'app\\mobi\\view\\Notice\\material.html',
      1 => 1474940589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923757e9ceee1c93e6-34296537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'author' => 0,
    'appointed' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9ceee227009_10954731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ceee227009_10954731')) {function content_57e9ceee227009_10954731($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
			<p class="appointed"><span>活动时间：<?php echo date("m月d号 H:s",$_smarty_tpl->tpl_vars['appointed']->value);?>
</span></p>
			<p>
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</p>
		</div>
		
	</div>
</body>
</html><?php }} ?>
