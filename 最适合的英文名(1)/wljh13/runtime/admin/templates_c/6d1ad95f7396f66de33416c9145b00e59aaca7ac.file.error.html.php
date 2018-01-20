<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 13:41:49
         compiled from "app\admin\view\Public\error.html" */ ?>
<?php /*%%SmartyHeaderCode:117525a4b1b9d598817-15046379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d1ad95f7396f66de33416c9145b00e59aaca7ac' => 
    array (
      0 => 'app\\admin\\view\\Public\\error.html',
      1 => 1511233863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117525a4b1b9d598817-15046379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'to_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b1b9d5f25a8_97897104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b1b9d5f25a8_97897104')) {function content_5a4b1b9d5f25a8_97897104($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <META HTTP-EQUIV="pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">

    <title>提示信息</title>
    <style>
        body{
            padding: 0px;
            margin: 0px;
        }

        .main{
            width: 450px;
            border: 1px solid #ccc;
            margin: 50px auto;
        }

        .title{
            text-align: left;
            height: 35px;
            line-height: 35px;
            font-size: 16px;
            background: rgb(244,244,244);
			text-indent:15px;
			font-family:"microsoft yahei";
        }

        .content{
            padding-top: 35px;
            padding-bottom: 35px;
            text-align: center;
        }

        .hit{
            font-size: 14px;
        }
    </style>

</head>
<body>
    <div class="main">
        <div class="title">提示信息</div>
        <div class="content">
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br/><br/><br/><a href="<?php echo $_smarty_tpl->tpl_vars['to_url']->value;?>
">点击这里跳转</a><br/><br/>
        </div>
    </div>
</body>
</html><?php }} ?>
