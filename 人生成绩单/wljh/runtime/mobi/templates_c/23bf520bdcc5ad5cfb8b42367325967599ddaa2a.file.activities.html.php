<?php /* Smarty version Smarty-3.1.18, created on 2016-09-26 20:31:45
         compiled from "app\mobi\view\NoticeList\activities.html" */ ?>
<?php /*%%SmartyHeaderCode:2155757e915310b56f3-42670040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23bf520bdcc5ad5cfb8b42367325967599ddaa2a' => 
    array (
      0 => 'app\\mobi\\view\\NoticeList\\activities.html',
      1 => 1474893099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2155757e915310b56f3-42670040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'noticelist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e91531136596_81848655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e91531136596_81848655')) {function content_57e91531136596_81848655($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
	$(function() {
		
		var bw = $(document.body).width();
		var	fw = bw/750;
		var w = fw*100,
			lw = w*0.58;
		$(".foot").css({"height":w+"px"});
		arr2 = $(".foot ul").find("li");
		for(i=0;i<arr2.length;i++){
			
			arr2[i].style.paddingTop=lw+"px";
		}
	});
</script>
<body>
	<div class="banner">
		<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/banner.png">
	</div>
	<div class="content">
		

		<div id="menu_con">
			<ul>
				<li class="tag gzt" style="display:block">
					
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['noticelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<a href="?c=Notice&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
						<div class="x_list">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
">
							<p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
							<p class="time">活动时间：<?php echo date("m月d号 H:s",$_smarty_tpl->tpl_vars['v']->value['appointed']);?>
</p>
							<div class="clear"></div>
						</div>
						</a>
					<?php } ?>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>

	<div class="foot">
		<ul>
			<li class="menu7"><a href="">首页</a></li>
			<li class="menu8"><a href="">登陆微盘</a></li>
			<li class="menu9"><a href="">招商加盟</a></li>
			<li class="menu10"><a href="">联系客服</a></li>
			<div class="clear"></div>
		</ul>
	</div>
</body>
</html><?php }} ?>
