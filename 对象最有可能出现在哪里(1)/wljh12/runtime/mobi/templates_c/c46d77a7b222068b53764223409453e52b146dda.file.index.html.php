<?php /* Smarty version Smarty-3.1.18, created on 2016-09-26 15:41:55
         compiled from "app\mobi\view\Notice\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2500357e8d14330d1c6-45919665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c46d77a7b222068b53764223409453e52b146dda' => 
    array (
      0 => 'app\\mobi\\view\\Notice\\index.html',
      1 => 1474875234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2500357e8d14330d1c6-45919665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
    'title' => 0,
    'show_notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e8d143372ae3_56474917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8d143372ae3_56474917')) {function content_57e8d143372ae3_56474917($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    
                    <li><a href="?c=Notice&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    
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
