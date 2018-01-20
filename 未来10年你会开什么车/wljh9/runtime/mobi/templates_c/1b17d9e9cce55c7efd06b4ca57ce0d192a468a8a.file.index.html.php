<?php /* Smarty version Smarty-3.1.18, created on 2016-07-19 11:58:07
         compiled from "app\mobi\webview\Notice\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9096578da54fbc5f86-42573870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b17d9e9cce55c7efd06b4ca57ce0d192a468a8a' => 
    array (
      0 => 'app\\mobi\\webview\\Notice\\index.html',
      1 => 1468900635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9096578da54fbc5f86-42573870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
    'v' => 0,
    'show_notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578da54fc46e21_35783222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578da54fc46e21_35783222')) {function content_578da54fc46e21_35783222($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
 $_from = $_smarty_tpl->tpl_vars['notice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li><a href="?c=Notice&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
