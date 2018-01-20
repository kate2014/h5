<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 12:01:16
         compiled from "app\mobi\webview\User\zhongchou.html" */ ?>
<?php /*%%SmartyHeaderCode:174495799838ce0bed3-84462348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b545d9cd5b200a4cca44e53f6f0fd741d6374cd' => 
    array (
      0 => 'app\\mobi\\webview\\User\\zhongchou.html',
      1 => 1469673720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174495799838ce0bed3-84462348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'mall_title' => 0,
    'u_goods' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799838cedaf81_30517629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799838cedaf81_30517629')) {function content_5799838cedaf81_30517629($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<!-- <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/ec.core.min.css" rel="stylesheet" /> -->
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/style_b.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/user.css" rel="stylesheet" type="text/css">
<title><?php echo $_smarty_tpl->tpl_vars['mall_title']->value;?>
</title>
<style>
	.g {
		width: 1202px;
		margin: 0 auto;
		zoom: 1;
	}
	.hr-80{
		min-height:500px ;
	}

</style>
<div class="user-all" style="background:#f7f7f7;padding:60px 0 100px 0;">
<div class="user-all" style="background:#f7f7f7;padding:60px 0 100px 0;">
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
	<!-- <div class="breadcrumb-area">
		<a href="/" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><a href="" title="我的商城">我的商城</a></em><em id="pathPoint">&nbsp;&nbsp;\&nbsp;&nbsp;</em><span id="pathTitle">个人信息管理</span>
	</div> -->
</div>
<div class="hr-10"></div>

<div class="g">
	<div class="fr u-4-5" style="width: 930px">
		<div class="text">我众筹的项目</div>
    	<div class="zc_show">
    		<ul>
    			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['u_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    			<li><a href="?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
    				<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" width="240px" height="200px">
    				<p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
    				<p>众筹金额：￥<?php echo number_format($_smarty_tpl->tpl_vars['v']->value['money']);?>
</p>
    			</a></li>
    			<?php } ?>
    			<div class="clear"></div>
    		</ul>
    	</div>
		<div id="pager_div"></div>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/chooice_region.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/calendar.js"></script>
</div>
	<div class="fl u-1-5">

		<!--左边菜单 -->
		<div class="mc-menu-area">
			<div class="h">
				<a href="?c=user" class="button-go-mc" title="个人中心"><span>个人中心</span></a>
			</div>
			<div class="b">
				<ul>
					<!-- <li>
						<h3><span>订单中心</span></h3>
						<ol>
							<li id="li-myAppointment">
								<a href="?c=UserOrder&act=lists" title="全部订单"><span>全部订单</span></a>
							</li>
							<li id="li-order" >
								<a href="?c=UserOrder&act=lists&state=1" title="待付款订单"><span>待付款订单</span></a>
							</li>
							<li id="li-groupBuyRecord">
								<a href="?c=UserOrder&act=lists&state=2" title="待发货订单"><span>待发货订单</span></a>
							</li>
							<li id="li-exchange">
								<a href="?c=UserOrder&act=lists&state=3" title="退换货申请"><span>待收货订单</span></a>
							</li>
							<li id="li-orderRefund">
								<a href="?c=UserOrder&act=lists&state=4" title="已完成订单"><span>已完成订单</span></a>
							</li>
						</ol>
					</li> -->
					<li>
						<!-- <h3><span>个人中心</span></h3> -->
						<ol>
							<li id="li-account">
								<a href="?c=user" title="个人信息" ><span>个人信息</span></a>
							</li>
							<!-- <li id="li-myAddress">
								<a href="?c=User&act=prolists" title="资料修改"><span>我的地址</span></a>
							</li> -->
							<li id="li-myAddress" class="current">
								<a href="?c=User&act=zhongchou" title="我的众筹"><span>我的众筹</span></a>
							</li>
							<li id="li-myAddress" >
								<a href="?c=User&act=profile" title="资料修改"><span>资料修改</span></a>
							</li>
							
							<li id="li-enterprise" class="hide"></li>
						</ol>
					</li>
				</ul>
			</div>
			<div class="f"></div>
		</div>
	</div>
</div>
<div class="hr-80"></div>
</div>
<input type="hidden" name="ctl00$contentHolder$Count" id="ctl00_contentHolder_Count" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['rowtotal'];?>
" />
<input type="hidden" name="ctl00$contentHolder$PageIndex" id="ctl00_contentHolder_PageIndex" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['nowpage'];?>
" />
<script type="text/javascript">
		$(function() {
			var pager = new PagerView('pager_div');
			pager.pageSize = <?php echo $_smarty_tpl->tpl_vars['page']->value["pagesize"];?>
;

			pager.totalRecord = $("#ctl00_contentHolder_Count").val();
			pager.pageIndex = $("#ctl00_contentHolder_PageIndex").val();
			pager.render();
			pager.onclick = function(startIndex, endIndex) {
				var url = window.location.href
						.replace(
								"&p="
										+ $("#ctl00_contentHolder_PageIndex")
												.val(), "").replace(
								"?p="
										+ $("#ctl00_contentHolder_PageIndex")
												.val(), "");
				var pageindex = "&p=";
				if (url.indexOf('?') < 0) {
					pageindex = "?p=";
				}
				window.location.href = url + pageindex + pager.pageIndex;
			}
			BindCB();
		});

		//全选
		$("#ctl00_contentHolder_cbAllProductId").change(
				function() {
					$("input[type='checkbox']").prop("checked",
							$(this).is(':checked'));
				});
		function BindCB() {
			$(".table tbody input[type='checkbox']")
					.change(
							function() {
								if ($(".table").find(
										"tbody input[type='checkbox']:checked").length == $(
										".table").find(
										"tbody input[type='checkbox']").length) {
									$("#ctl00_contentHolder_cbAllProductId")
											.prop("checked", true);
								} else {
									$("#ctl00_contentHolder_cbAllProductId")
											.prop("checked", false);
								}
							});
		}
	</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/pagerView.js" ></script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
