<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 18:02:34
         compiled from "app\mobi\view\User\sn_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:314815799d83a0c2544-13839365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d3ef881df26ecdc209c13dd23133d074287440' => 
    array (
      0 => 'app\\mobi\\view\\User\\sn_nav.html',
      1 => 1465895889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314815799d83a0c2544-13839365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799d83a0d1f56_29854062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799d83a0d1f56_29854062')) {function content_5799d83a0d1f56_29854062($_smarty_tpl) {?><div class="sn-nav">
        <div class="sn-nav-back" id="mts-back" onclick="history.back();">
            <a>返回</a>
        </div>
        <div class="sn-nav-title of"><?php echo $_smarty_tpl->tpl_vars['page_conf']->value['title'];?>
</div>
        <div class="sn-nav-right">
            <div class="quick-icon-area"
                onclick="$('#sub-title').toggle();$('#screenIfmNav').toggle();">
                <a class="quick-icon" href="javascript:void(0);"></a>
            </div>
            <div class="sub-list hide" id="sub-title" style="display: none;">
                <a href="?c=index">
                    <span class="quick-nav index-icon">首页</span>
                </a>
                <a href="?c=buy">
                    <span class="quick-nav cart-icon">购物车</span>
                </a>
                <a href="?c=user">
                    <span class="quick-nav yigou-icon">会员中心</span>
                </a>
            </div>
            <div id="screenIfmNav" class="screenIfm"
                onclick="$('#sub-title').toggle();$(this).hide();"
                style="opacity: 0; display: none;"></div>
        </div>
    </div><?php }} ?>
