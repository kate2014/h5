<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 11:13:56
         compiled from "app\mobi\view\NoticeList\guide.html" */ ?>
<?php /*%%SmartyHeaderCode:1139557e9e3f4939e06-42794949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '645383f457a0cd25f7e193c7bf70ebfc481edaf7' => 
    array (
      0 => 'app\\mobi\\view\\NoticeList\\guide.html',
      1 => 1474943302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139557e9e3f4939e06-42794949',
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
  'unifunc' => 'content_57e9e3f49b2fa6_79811025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9e3f49b2fa6_79811025')) {function content_57e9e3f49b2fa6_79811025($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
				<li class="tag jct" style="display:block">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['noticelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<div class="x_list" style="line-height:1;">
							
							<div class="title" style="padding:2.5% 0;background:url(<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
) no-repeat left center;background-size:8% auto;text-indent:12%;"><a href="?c=Notice&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="color:#333333"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></div>
							<div class="clear"></div>
						</div>
					<?php } ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
