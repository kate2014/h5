<?php /* Smarty version Smarty-3.1.18, created on 2016-07-25 11:20:02
         compiled from "app\mobi\webview\NoticeList\about.html" */ ?>
<?php /*%%SmartyHeaderCode:1256557958562f1d272-18513158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f954669f952dbba7940c24ec607a304013f4db11' => 
    array (
      0 => 'app\\mobi\\webview\\NoticeList\\about.html',
      1 => 1468999854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1256557958562f1d272-18513158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about' => 0,
    'v' => 0,
    'about2' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5795856306b718_99343739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5795856306b718_99343739')) {function content_5795856306b718_99343739($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--内容页开始-->
	<div class="about_bj_top"></div>
	<div class="about_bj_con">
		<div class="content_ab">
			<div class="crumb_ab">
				<p><font color="#1178ca">您的位置</font>&nbsp;:&nbsp;关于我们>公司简介</p>
			</div>
			<div class="about">
				<div class="ab_nav">
					<ul>
						<li class="ab_title">关于我们</li>
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['about']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li><a href="?c=NoticeList&act=about&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
						 <?php } ?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="ab_fr">
					<div class="ar_title"><?php echo $_smarty_tpl->tpl_vars['about2']->value[0]['title'];?>
</div>
					<div class="ab_con" id="ab_scroll">
						<?php echo $_smarty_tpl->tpl_vars['about2']->value[0]['content'];?>


					</div>
				</div>
				<div class="clear"></div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.min.js"></script> 
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.nicescroll.js"></script>
        <script type="text/javascript">
            $('#ab_scroll').niceScroll({
                cursorcolor: "#38c249",//#CC0071 光标颜色
                cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "5px", //像素光标的宽度
                cursorborder: "0", // 	游标边框css定义
                cursorborderradius: "5px",//以像素为光标边界半径
                autohidemode: false //是否隐藏滚动条
            });
        </script>
	<!--内容结束-->


<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
