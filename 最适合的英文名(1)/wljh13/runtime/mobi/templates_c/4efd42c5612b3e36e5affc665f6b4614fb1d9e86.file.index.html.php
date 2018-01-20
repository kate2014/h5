<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 21:44:48
         compiled from "app\mobi\view\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2090857ea77d030d399-08867558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4efd42c5612b3e36e5affc665f6b4614fb1d9e86' => 
    array (
      0 => 'app\\mobi\\view\\Login\\index.html',
      1 => 1474970110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090857ea77d030d399-08867558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ea77d0366b84_46970074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea77d0366b84_46970074')) {function content_57ea77d0366b84_46970074($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="background:#f0eff5">
<script type="text/javascript">
	$(function() {
		var bw = $(document.body).width(),

			bh = $(window).height(),
			bannerh = $(".banner").height(), 
			fw = bw/750,
		 	w = fw*100,
			lw = w*0.58;
			alert(bannerh);
		$(".content").css({"min-height":bh-bannerh-w+"px"});
		$(".foot").css({"height":w+"px","position":"inherit"});
		arr2 = $(".foot ul").find("li");
		for(i=0;i<arr2.length;i++){
			arr2[i].style.paddingTop=lw+"px";
		}
	});
</script>
	<div class="banner">
		<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/banner.png">
	</div>
	<div class="content">
		<form class="jifrom" action="" method="" name="">
			<div class="jip">
				<label><font color="red">*</font>用户名：</label>
				<input type="text" name="account" id="account" class="" >
			</div>
			<div class="jip">
				<label><font color="red">*</font>密码：</label>
				<input type="password" name="password" id="password" class="" >
			</div>
			
		</form>
		<div class="jip">
			<a href="javascript:" class="submit" >登陆</a>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
