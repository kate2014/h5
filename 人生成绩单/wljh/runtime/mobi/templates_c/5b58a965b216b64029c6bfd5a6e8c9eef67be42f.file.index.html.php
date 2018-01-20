<?php /* Smarty version Smarty-3.1.18, created on 2016-07-29 17:44:30
         compiled from "app\mobi\view\Goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11830579b257ed5eac8-34731087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b58a965b216b64029c6bfd5a6e8c9eef67be42f' => 
    array (
      0 => 'app\\mobi\\view\\Goods\\index.html',
      1 => 1469785465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11830579b257ed5eac8-34731087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'name' => 0,
    'price' => 0,
    'all_time' => 0,
    'percent_s' => 0,
    'percent' => 0,
    'days' => 0,
    'count' => 0,
    'username' => 0,
    'id' => 0,
    'praise' => 0,
    'parameters' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579b257ee50df1_22572525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b257ee50df1_22572525')) {function content_579b257ee50df1_22572525($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="">

<!-- <header class="header">
	<a href="?index.php" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
	<p>【海南】富力湾<a href="#" class="fenx"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/icon_fx.png" alt=""></a></p>

</header> -->
<header class="header">
    <a href="?index.php" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
    <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <div id="dl-menu" class="dl-menuwrapper fx-icon">
        <button id="dl-menu-button">Open Menu</button>
        <div class="dl-menu menu" >
            <div id="firstpane" class="menu_list">
             <div class="bdsharebuttonbox"><!-- <a href="#" class="bds_more" data-cmd="more"></a> --><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
            </div>
        </div>
    </div>

</header>

<script type="text/javascript">
$(function(){
    $( '#dl-menu' ).dlmenu();
});
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/index.css">

<div style="text-align:center; font:normal 14px/24px 'MicroSoft YaHei';padding-top:50px; ">
	<div class="i_hot">		
				<div class="prj_box">
					<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/product_01.png">
					<div class="ps_title">
						<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

					</div>
					<div class="p_list">
						<span>众筹目标:<font>￥<?php echo number_format($_smarty_tpl->tpl_vars['price']->value);?>
</font></span><span>需要持有时间:<font><?php echo $_smarty_tpl->tpl_vars['all_time']->value;?>
天</font></span>
						<span>筹得金额：<font>￥<?php echo $_smarty_tpl->tpl_vars['percent_s']->value['SUM(money)'];?>
</font></span><span>已筹得:<font><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['percent']->value);?>
%</font></span><div class="clear"></div>
					</div>
					<div class="p_list2">
						<div class="jdt"><div class="jds" style="width:<?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
;border-radius: 5px;"></div></div>
						<span>众筹倒计时:<font><?php echo $_smarty_tpl->tpl_vars['days']->value;?>
天</font></span><span class="span2">已参与:<font><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</font></span><span>已筹得:<font><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['percent']->value);?>
%</font></span>
						<div class="clear"></div>
					</div>
					<div class="p_list3">
						<ul>
							<li class="zc"><?php if ($_smarty_tpl->tpl_vars['username']->value!=null) {?><a href="?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&act=qrzc">我要众筹</a><?php } else { ?><a href="?c=login">我要众筹</a><?php }?></li>
							<li class="zan"><a href="#">赞<font>（<?php echo $_smarty_tpl->tpl_vars['praise']->value;?>
）</font></a></li>
							<div class="clear"></div>
						</ul>
					</div>
				</div>
				
	</div>
	<div class="colbg"></div>
	<div class="p_box" id="tab_nav">
		<ul>
			<li class="selected first"><a href="#">项目介绍</a></li>
			<li class="tow"><a href="#">项目进展</a></li>
			<div class="clear"></div>
		</ul>
	</div>
	<div id="menu_con">
				<ul>
				<li class="tag" style="display:block"><?php echo $_smarty_tpl->tpl_vars['parameters']->value;?>
</li>
				<li class="tag" style="display:none"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</li>
				</ul>
			</div>

</div>

<a href="#0" class="cd-top">Top</a>
   
    <script type="text/javascript">
        $(".zan").click(function(){
            var num = $(".zan").children("a").children("font").html();
            
                $.ajax({
                    url:"?c=Goods&act=praise&id="+<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,
                    // data:'id='+id,
                    type:"GET",
                    dataTyep:"json",
                    success:function(data){
                        data = $.parseJSON(data);
                        if (data.success) {
                            var sum = parseInt(num)+1;
                            $(".zan").children("a").children("font").html(sum);
                        }else{
                        alert(data.msg);
                    };
                    }
                });
        });
    </script>

<script>
var tabs=function(){
    function tag(name,elem){
        return (elem||document).getElementsByTagName(name);
    }
    //获得相应ID的元素
    function id(name){
        return document.getElementById(name);
    }
    function first(elem){
        elem=elem.firstChild;
        return elem&&elem.nodeType==1? elem:next(elem);
    }
    function next(elem){
        do{
            elem=elem.nextSibling;  
        }while(
            elem&&elem.nodeType!=1  
        )
        return elem;
    }
    return {
        set:function(elemId,tabId){
            var elem=tag("li",id(elemId));
            var tabs=tag("li",id(tabId));
            var listNum=elem.length;
            var tabNum=tabs.length;
            for(var i=0;i<listNum;i++){
                    elem[i].onclick=(function(i){
                        return function(){
                            for(var j=0;j<tabNum;j++){
                                if(i==j){
                                    tabs[j].style.display="block";
                                    elem[j].className="selected";
                                }
                                else{
                                    tabs[j].style.display="none";
                                    elem[j].className="";
                                }
                            }
                        }
                    })(i)
            }
        }
    }
}();
tabs.set("tab_nav","menu_con");//执行
</script>

</body>
</html><?php }} ?>
