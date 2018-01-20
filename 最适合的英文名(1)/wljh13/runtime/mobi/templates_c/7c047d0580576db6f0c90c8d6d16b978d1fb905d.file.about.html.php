<?php /* Smarty version Smarty-3.1.18, created on 2016-09-26 15:18:15
         compiled from "app\mobi\view\noticelist\about.html" */ ?>
<?php /*%%SmartyHeaderCode:71357e8cbb78f5ab7-69112324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c047d0580576db6f0c90c8d6d16b978d1fb905d' => 
    array (
      0 => 'app\\mobi\\view\\noticelist\\about.html',
      1 => 1469700142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71357e8cbb78f5ab7-69112324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'about2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e8cbb794f846_52907894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8cbb794f846_52907894')) {function content_57e8cbb794f846_52907894($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="">

<header class="header">
    <a href="?index.php" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
    <p><?php echo $_smarty_tpl->tpl_vars['about2']->value[0]['title'];?>
</p>

</header>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/index.css">

<div style="text-align:center; font:normal 14px/24px 'MicroSoft YaHei';padding-top:50px; ">
    <div class="c_msg">
        <?php echo $_smarty_tpl->tpl_vars['about2']->value[0]['content'];?>

    </div>
</div>

<a href="#0" class="cd-top">Top</a>

<!-- <script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/jquery.imgpreload.min.js"></script> -->
</body>
</html><?php }} ?>
