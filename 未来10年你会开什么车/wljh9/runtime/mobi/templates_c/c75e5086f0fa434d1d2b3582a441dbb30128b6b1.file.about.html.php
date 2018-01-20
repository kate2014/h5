<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 11:17:25
         compiled from "app\mobi\view\NoticeList\about.html" */ ?>
<?php /*%%SmartyHeaderCode:2513957e9e4c5c00ad7-35598503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75e5086f0fa434d1d2b3582a441dbb30128b6b1' => 
    array (
      0 => 'app\\mobi\\view\\NoticeList\\about.html',
      1 => 1474876040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2513957e9e4c5c00ad7-35598503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noticelist' => 0,
    'mall_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9e4c5c569e9_19041151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9e4c5c569e9_19041151')) {function content_57e9e4c5c569e9_19041151($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>

<script type="text/javascript">
	$(function() {
		
		var bh = $(window).height();
		$(".content").css({"min-height":bh+"px"});
	});
</script>
	<div class="content" style="background:#fff;padding:3%;">
		<div class="t_line t_t">
			<span><?php echo $_smarty_tpl->tpl_vars['noticelist']->value[0]['title'];?>
</span>
		</div>
		<div class="j_c">
			<p>
				<?php echo $_smarty_tpl->tpl_vars['noticelist']->value[0]['content'];?>

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
