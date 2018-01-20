<?php /* Smarty version Smarty-3.1.18, created on 2016-07-19 16:53:40
         compiled from "app\mobi\webview\Public\success.html" */ ?>
<?php /*%%SmartyHeaderCode:13788578dea94619d01-30356487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be03ffa6916d5aa2ce77364352d19545ee2654c2' => 
    array (
      0 => 'app\\mobi\\webview\\Public\\success.html',
      1 => 1468836279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13788578dea94619d01-30356487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578dea94664095_69172015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578dea94664095_69172015')) {function content_578dea94664095_69172015($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body id="body">
        <div style="text-align: center;
margin-top: 100px;
margin-bottom: 100px;">
        
            <div style="margin: 0 auto;
width: 500px;
height: 180px;
font-weight: bolder;
text-shadow: 1px 2px 8px #B6B6B6;
border-radius: 4px;
font-size: 17px;
font-family: 微软雅黑;
padding-top: 150px;
box-shadow: 2px 3px 8px #B8B8B8;
background: #F0F0F0;" >
                <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

            </div>
        </div>    
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
