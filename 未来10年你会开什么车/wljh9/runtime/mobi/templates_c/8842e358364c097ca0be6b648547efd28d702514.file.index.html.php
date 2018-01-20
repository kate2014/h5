<?php /* Smarty version Smarty-3.1.18, created on 2016-07-25 11:19:55
         compiled from "app\mobi\webview\NoticeList\index.html" */ ?>
<?php /*%%SmartyHeaderCode:229475795855bb00bf3-82311480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8842e358364c097ca0be6b648547efd28d702514' => 
    array (
      0 => 'app\\mobi\\webview\\NoticeList\\index.html',
      1 => 1468999854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229475795855bb00bf3-82311480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noticelist' => 0,
    'v' => 0,
    'show_notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5795855bb79d91_00093940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5795855bb79d91_00093940')) {function content_5795855bb79d91_00093940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--内容页开始-->
    <div class="pj_list">
    <div class="content">
        <div class="crumb">
            <p><font color="#1178ca">您的位置</font>&nbsp;:&nbsp;案例中心></p>
        </div>
        <div class="articl">
            <div class="articl_l">
                <ul>
                    <li class="a_title">众筹问答</li>
                   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['noticelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li><a href="?c=NoticeList&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="articl_r">
                <div class="ar_title">
                    <?php echo $_smarty_tpl->tpl_vars['show_notice']->value[0]['title'];?>

                </div>
                <div class="ar_c">
                     <!-- <img src="images/wenda_1.png" style="float:right"> -->
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['show_notice']->value[0]['content'];?>

                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>
    <!--内容结束-->

<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
