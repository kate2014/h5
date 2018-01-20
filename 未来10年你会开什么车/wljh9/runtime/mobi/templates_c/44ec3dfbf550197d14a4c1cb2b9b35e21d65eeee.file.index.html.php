<?php /* Smarty version Smarty-3.1.18, created on 2016-09-22 17:55:22
         compiled from "app\mobi\webview\Goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:177257e3aa8a1496e9-43480354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ec3dfbf550197d14a4c1cb2b9b35e21d65eeee' => 
    array (
      0 => 'app\\mobi\\webview\\Goods\\index.html',
      1 => 1469692945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177257e3aa8a1496e9-43480354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumb' => 0,
    'name' => 0,
    'describe' => 0,
    'price' => 0,
    'all_time' => 0,
    'days' => 0,
    'percent' => 0,
    'percent_s' => 0,
    'count' => 0,
    'status' => 0,
    'username' => 0,
    'id' => 0,
    'praise' => 0,
    'parameters' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e3aa8a27e0a4_91212890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e3aa8a27e0a4_91212890')) {function content_57e3aa8a27e0a4_91212890($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--内容页开始-->
	<div class="content">
		<div class="crumb_project">
			<p><font color="#1178ca">您的位置</font>&nbsp;:&nbsp;成功案例>【南海】富力湾</p>
			<div class="crumb_bot"></div>
		</div>
		<div class="hot_p">
						<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
">
						<div class="hot_msg">
							<h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
							<p class="cl6">其他收益:<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
</p>
							<div class="lin1"></div>
							<p>众筹目标:<font class="cl6">￥<?php echo number_format($_smarty_tpl->tpl_vars['price']->value);?>
</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;需持有时间:<font class="cl6"><?php echo $_smarty_tpl->tpl_vars['all_time']->value;?>
天</font></p>
							<p>剩余时间:<font class="cl6"><?php echo $_smarty_tpl->tpl_vars['days']->value;?>
天</font></p>
							<br>
							<p>已筹得:<font class="cl6"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['percent']->value);?>
%</font>&nbsp;&nbsp;&nbsp;金额:<font class="cl6">￥<?php echo $_smarty_tpl->tpl_vars['percent_s']->value['SUM(money)'];?>
</font></p>
							<div class="jdt"><div class="jds" style="width:<?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
"></div></div>
							<div class="lin1"></div>
							<p>已参与:<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赞:139 --></p>
							<div class="hot_bt">
								<ul>
									<li class="zc"<?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>id="no"<?php }?> ><?php if ($_smarty_tpl->tpl_vars['username']->value!=null) {?><a <?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>href="#"<?php } else { ?>href="?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&act=qrzc"<?php }?> >我要众筹</a><?php } else { ?><a href="?c=login">我要众筹</a><?php }?></li>
									<li class="zan"><a href="#">赞&nbsp;(<span><?php echo $_smarty_tpl->tpl_vars['praise']->value;?>
</span>)</a></li>
									<div class="clear"></div>
								</ul>
							</div>
							<div class="hot_fx">
								<p>分享到</p>
								<div class="bdsharebuttonbox"><!-- <a href="#" class="bds_more" data-cmd="more"></a> --><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
								<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
							</div>
						</div>
							
						<div class="clear"></div>
					</div>
		<div class="i_hot">
			<div class="tag_box pro_box" id="tab_nav">
				<ul>
					<li class="selected"><a href="#">项目介绍</a><div class="sj"></div></li>
					<li><a href="#">项目进展情况</a><div class="sj"></div></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div id="menu_con" class="p_con">
				<ul>
				<li class="tag" style="display:block">
					<p><?php echo $_smarty_tpl->tpl_vars['parameters']->value;?>
</p>
				</li>
				<li class="tag" style="display:none">
					<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
				</li>
				</ul>
			</div>
		</div>
	</div>
	<!--内容结束-->
	<script type="text/javascript">
		$("#no").click(function(){
			alert("您已参与过该项目的众筹了哦！");
		});
	</script>
	<script type="text/javascript">
		$(".zan").click(function(){
			var num = $(".zan").children("a").children("span").html();
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
							$(".zan").children("a").children("span").html(sum);
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
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
