<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 18:28:54
         compiled from "app\admin\view\Public\success.html" */ ?>
<?php /*%%SmartyHeaderCode:321815a16a2e6dab239-44513095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38bded2422f7fce4c7d39b76fdd54679ba72afa3' => 
    array (
      0 => 'app\\admin\\view\\Public\\success.html',
      1 => 1511233863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321815a16a2e6dab239-44513095',
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
  'unifunc' => 'content_5a16a2e6e3f952_34718985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a16a2e6e3f952_34718985')) {function content_5a16a2e6e3f952_34718985($_smarty_tpl) {?><!doctype html>
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
