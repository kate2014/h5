<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 17:59:22
         compiled from "app\mobi\view\User\zhongchou.html" */ ?>
<?php /*%%SmartyHeaderCode:298895799d77a07c153-15966891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4244f8823ee5867caae30179171fa5166b7c9a2f' => 
    array (
      0 => 'app\\mobi\\view\\User\\zhongchou.html',
      1 => 1469699881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298895799d77a07c153-15966891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'u_goods' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799d77a10ca04_17154285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799d77a10ca04_17154285')) {function content_5799d77a10ca04_17154285($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/sunny.css" rel="stylesheet" type="text/css">

<body>
    <header class="header">
    <a href="?c=User" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
    <p>我的众筹</p>
    </header>
    <div class="pzc-all">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['u_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <div class="pzc-list">
            <a href="?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <div class="pzc-tu"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
"></div>
                <div class="pzc-tx">
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
                    <p>￥<?php echo number_format($_smarty_tpl->tpl_vars['v']->value['price']);?>
</p>
                </div>
                <div class="clear"></div>
            </a>
        </div>
        <?php } ?>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
