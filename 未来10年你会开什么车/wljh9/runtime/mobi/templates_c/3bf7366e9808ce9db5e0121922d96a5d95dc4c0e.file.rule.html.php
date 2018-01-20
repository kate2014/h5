<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 11:14:01
         compiled from "app\mobi\view\NoticeList\rule.html" */ ?>
<?php /*%%SmartyHeaderCode:1322657e9e3f91cc8a9-09432498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bf7366e9808ce9db5e0121922d96a5d95dc4c0e' => 
    array (
      0 => 'app\\mobi\\view\\NoticeList\\rule.html',
      1 => 1474945538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322657e9e3f91cc8a9-09432498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'notice_cate' => 0,
    'cate_id' => 0,
    'v' => 0,
    'rule' => 0,
    'qa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9e3f92a3658_10439275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9e3f92a3658_10439275')) {function content_57e9e3f92a3658_10439275($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="background:#f0eff5">
<script type="text/javascript">
	$(function() {
		
		var	sw = $(".menu_list ul li:first-child").width();
		var lh = sw*1.65;
		var arr = $(".menu_list ul").find("li");
	
		for(i=0;i<arr.length;i++){
			arr[i].style.height=sw+"px";
			arr[i].style.lineHeight=lh+"px";
		}
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
	<div class="banner">
		<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/banner.png">
	</div>
	<div class="content">
		<div class="tag_box" id="tab_nav">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notice_cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<li onclick="cheng(this)" <?php if ($_smarty_tpl->tpl_vars['cate_id']->value==$_smarty_tpl->tpl_vars['v']->value['id']) {?> class="selected"<?php }?>><input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<div class="sj"></div></li>
				<?php } ?>
				
				<div class="clear"></div>
			</ul>
		</div>

		<div id="menu_con">
			<ul>
				<li class="tag gzt" style="display:block">
					<div class="rule">
					<?php echo $_smarty_tpl->tpl_vars['rule']->value["content"];?>

					</div>
					<div class="show_box">
						<div class="title">
							常见问题答疑
						</div>
						<div class="qa">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['qa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<p class="q"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</p>
							<p class="a"><?php echo $_smarty_tpl->tpl_vars['v']->value["content"];?>
</p>
							<?php } ?>
							
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
<script type="text/javascript">
	function cheng(e){
		var id = $(e).children("#id").val();

		$.get("?c=NoticeList&act=rule&cate_id="+id+"&types=ysp",
			function(data,status){
				var trs = "";
				var rule = data.rule.content;
				$(".rule").html(rule);
				if (data.qa) {
				$.each(data.qa, function (n, v) {
					trs +='<p class="q">'+v.title+'</p><p class="a">'+v.content+'</p>';
				});
					$(".qa").html(trs);					
				}else{

					$(".qa").children().remove();	
				};
					$(e).addClass("selected");
					$(e).siblings().removeClass("selected");
			},"json");
	}
</script>
</body>
</html><?php }} ?>
