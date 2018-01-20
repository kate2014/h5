<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 11:10:56
         compiled from "app\mobi\view\NoticeList\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2209257e9e3407600a9-92303103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f7959b1e1a4208645afa8f743ce30e01daf9d4' => 
    array (
      0 => 'app\\mobi\\view\\NoticeList\\index.html',
      1 => 1469753962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2209257e9e3407600a9-92303103',
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
  'unifunc' => 'content_57e9e3407e4dc0_62808348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9e3407e4dc0_62808348')) {function content_57e9e3407e4dc0_62808348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="">

<header class="header">
    <a href="?index.php" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
    <p>众筹问答</p>
</header>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/index.css">

<div style="text-align:center; font:normal 14px/24px 'MicroSoft YaHei';padding-top:50px; ">
    <div class="wenda">
        <ul id="leftNavigation">
             <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['noticelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<i class="fa fa-coffee leftNavIcon"></i></a>
                <ul>
                    <li>
                        <div><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
                    </li>
                    
                </ul>
                
            </li>
            <?php } ?>
        </ul>
    </div>
    
</div>

<a href="#0" class="cd-top">Top</a>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.ssd-vertical-navigation.js"></script>
<script type="text/javascript">
$(function() {

    $('#leftNavigation').ssdVerticalNavigation();

});
</script>
</body>
</html><?php }} ?>
