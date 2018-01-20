<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 15:11:15
         compiled from "app\admin\view\Public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:311495a4b30931796f7-70276935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca2d6e40f461508e89e82b1128384dbc9b6f5ff0' => 
    array (
      0 => 'app\\admin\\view\\Public\\footer.html',
      1 => 1511233863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311495a4b30931796f7-70276935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'y' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b30931db188_50787356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b30931db188_50787356')) {function content_5a4b30931db188_50787356($_smarty_tpl) {?>    
			</div>
            
            <footer>
                © <?php echo $_smarty_tpl->tpl_vars['y']->value;?>

            </footer>
        </div>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ('Public/box-demo.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div id="back-top">
		<a href="#top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap.min.js" Charset="utf-8"></script>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/retina.min.js" Charset="utf-8"></script>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.nicescroll.js" Charset="utf-8"></script>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.slimscroll.min.js" Charset="utf-8"></script>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.blockui.min.js" Charset="utf-8"></script>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.pop.js" Charset="utf-8"></script>
	<script type="text/javascript"
		src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/demo-panel.js" Charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/apps.js"
		Charset="utf-8"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap-datepicker.zh-CN.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/globals.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/windows.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/pagerView.js"
		type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.tmpl.js"
		type="text/javascript"></script>
	<div id="wshopft"
		style="width: 100%; height: 100%; position: fixed; display: none; z-index: 10000; background-color: rgba(0, 0, 0, 0.3); top: 0; left: 0;">
		<b
			style="background-color: rgba(0, 0, 0, 0.8); box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.8); width: 50px; height: 50px; display: block; position: absolute; right: 0; border-radius: 0 0 0 50px; font-size: 16px; color: #fff; font-weight: normal; cursor: pointer;"
			onClick="this.parentNode.style.display='none';document.getElementById('phone').style.display='none'">
			<i class="fa fa-times"
				style="position: absolute; display: block; top: 10px; right: 13px;"></i>
		</b>
	</div>
	<div id="phone"
		style="display: none; width: 412px; height: 754px; position: absolute; z-index: 10001; left: 50%; top: 80px; margin-left: -206px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/iPhone320.png); background-repeat: no-repeat;">
		<iframe id="showtmpl"
			style="position: absolute; top: 139px; left: 46px; width: 320px; height: 481px; margin: 0; padding: 0;"
			frameborder="0" scrolling="auto" src=""></iframe>
	</div>
</body>
</html><?php }} ?>
