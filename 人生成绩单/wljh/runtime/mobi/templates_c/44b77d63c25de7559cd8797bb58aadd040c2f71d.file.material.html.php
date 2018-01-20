<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 11:11:54
         compiled from "app\mobi\view\NoticeList\material.html" */ ?>
<?php /*%%SmartyHeaderCode:704257e9e37a0259c8-47394494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b77d63c25de7559cd8797bb58aadd040c2f71d' => 
    array (
      0 => 'app\\mobi\\view\\NoticeList\\material.html',
      1 => 1474940097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704257e9e37a0259c8-47394494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noticelist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9e37a0a6860_62235699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9e37a0a6860_62235699')) {function content_57e9e37a0a6860_62235699($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

	<div class="content">
		<div class="tag_box2" id="tab_nav">
			<ul>
				<li class="selected" onclick="cheng(this)" ><input type="hidden" id="id" name="id" value="5" >基本面<div class="sj"></div></li>
				<li onclick="cheng(this)"><input type="hidden" id="id" name="id" value="6" >技术面<div class="sj"></div></li>
			</ul>
			<div class="clear"></div>
		</div>

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

<script type="text/javascript">
	function cheng(e){
		var id = $(e).children("#id").val();

		$.get("?c=NoticeList&act=index&id="+id+"&types=ysp",
			function(data,status){
				var trs = "";
				$.each(data, function (n, v) {
					trs +="<li class='tag gzt' style='display:block'><a href='?c=Notice&id="+v.id+"'><div class='x_list'><img src='"+v.thumb+"'><p class='title'>"+v.title+"</p><p class='time'>活动时间："+v.appointed+"</p><div class='clear'></div></div></a></li>";
				});
					$("#menu_con").children("ul").html(trs);
					$(e).addClass("selected");
					$(e).siblings().removeClass("selected");
			},"json");
	}
</script>


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
