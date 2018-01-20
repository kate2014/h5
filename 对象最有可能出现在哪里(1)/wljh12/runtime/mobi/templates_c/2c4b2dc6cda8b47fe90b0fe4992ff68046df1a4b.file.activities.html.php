<?php /* Smarty version Smarty-3.1.18, created on 2016-09-26 20:31:44
         compiled from "app\mobi\view\Notice\activities.html" */ ?>
<?php /*%%SmartyHeaderCode:2127957e9153039f584-68619985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c4b2dc6cda8b47fe90b0fe4992ff68046df1a4b' => 
    array (
      0 => 'app\\mobi\\view\\Notice\\activities.html',
      1 => 1474893058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127957e9153039f584-68619985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e915303ddd95_71147424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e915303ddd95_71147424')) {function content_57e915303ddd95_71147424($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
	$(function() {
		
		var bh = $(window).height();
		$(".content").css({"min-height":bh+"px"});
	});
</script>
	<div class="content" style="background:#fff;padding:3%;">
		
		<div class="j_c">
			<p>
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</p>
		</div>
		
	</div>
</body>
</html><?php }} ?>
