<?php /* Smarty version Smarty-3.1.18, created on 2017-09-24 13:55:19
         compiled from "app\mobi\view\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3227659c748c7bff0e7-85283453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e1487dad6d437fc3a64310f2dd75df645090aa' => 
    array (
      0 => 'app\\mobi\\view\\Index\\index.html',
      1 => 1505961968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3227659c748c7bff0e7-85283453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c748c7c3c171_06341066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c748c7c3c171_06341066')) {function content_59c748c7c3c171_06341066($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="background:#f0eff5">
<script type="text/javascript">
    $(function() {
        
        var sw = $(".menu_list ul li:first-child").width();
        var lh = sw*1.65;
        var arr = $(".menu_list ul").find("li");
    
        for(i=0;i<arr.length;i++){
            arr[i].style.height=sw+"px";
            arr[i].style.lineHeight=lh+"px";
        }
        var bw = $(document.body).width();
        var fw = bw/750;
        var w = fw*100,
            lw = w*0.58;
        $(".foot").css({"height":w+"px"});
        arr2 = $(".foot ul").find("li");
        for(i=0;i<arr2.length;i++){
            
            arr2[i].style.paddingTop=lw+"px";
        }
    });
</script>
    <div class="banner">
        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/banner.png">
    </div>
    <div class="menu_list">
        <ul>
            <a href="?c=NoticeList&id=1" ><li class="menu1" >平台介绍</li></a>
            <a href="?c=NoticeList&id=2" ><li class="menu2" >新手指南</li></a>
            <a href="?c=NoticeList&act=rule&cate_id=7" ><li class="menu3" >交易规则</li></a>
            <a href="?c=NoticeList&id=3" ><li class="menu4" >活动列表</li></a>
            <a href="" ><li class="menu5" >有奖竞猜</li></a>
            <a href="?c=NoticeList&id=5" ><li class="menu6" >投资学堂</li></a>
            <div class="clear"></div>
        </ul>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
