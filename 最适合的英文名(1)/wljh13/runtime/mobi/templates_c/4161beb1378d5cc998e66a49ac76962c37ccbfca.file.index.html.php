<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 16:46:42
         compiled from "app\mobi\webview\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:84675799c67239a999-41730890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4161beb1378d5cc998e66a49ac76962c37ccbfca' => 
    array (
      0 => 'app\\mobi\\webview\\User\\index.html',
      1 => 1469516753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84675799c67239a999-41730890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'mall_title' => 0,
    'user_username' => 0,
    'user_cate_name' => 0,
    'user_points' => 0,
    'order' => 0,
    'click' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799c672498846_65218304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799c672498846_65218304')) {function content_5799c672498846_65218304($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/ec.core.min.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/style.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/user.css" rel="stylesheet" type="text/css">
<style>
	.g {
		width: 1202px;
		margin: 0 auto;
		zoom: 1;
	}
	.hr-60{
		min-height:500px ;
	}

</style>
<title><?php echo $_smarty_tpl->tpl_vars['mall_title']->value;?>
</title>

<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
	<div class="breadcrumb-area fcn">
		<a href="/" title="首页">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><span>个人中心</span></em><em id="pathPoint"></em><span id="pathTitle"></span>
	</div>
</div>
<div class="hr-15"></div>

<div class="g">
	<div class="fr u-4-5" style="width: 930px;">
		<!--个人中心 -->
		<div class="ic-area">
			<div class="ic-detail-area">
				<div class="h">
					<h3><b> <?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
<b style="color: red"><?php echo $_smarty_tpl->tpl_vars['user_cate_name']->value;?>
 </b><em class="vip-state">  </em><b>欢迎您！&nbsp;</b></h3>
					<div class="ic-detail-area">
						<table border="0" cellpadding="0" cellspacing="0">
							<tbody>
								<!-- <tr>
									<th>我的积分值：</th>
									<td><a href="" class="red"><b><?php echo $_smarty_tpl->tpl_vars['user_points']->value;?>
</b></a></td>
								</tr> -->

								
							</tbody>
						</table>
					</div>
				</div>
				<!-- <div class="b">
					<div class="form-detail-area">
						<table border="0" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<th>订单中心：</th>
									<td><a href="?c=UserOrder&act=lists&state=1">未支付的订单（<b><?php echo $_smarty_tpl->tpl_vars['order']->value['daif'];?>
</b>）</a><a id="member_index_notRemarkCount" href="?c=UserOrder&act=lists&state=3">待收货的订单（<b id="member-notRemarkCount"><?php echo $_smarty_tpl->tpl_vars['order']->value['dais'];?>
</b>）</a></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div> -->
			</div>
			<div class="hr-70"></div>
			<!--商品tab-最近浏览-猜您还喜欢 -->
			
		</div>
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
							<li id="li-account" class="current">
									<a href="?c=user" title="个人信息" ><span>个人信息</span></a>
								</li>
							<li id="li-account">
								<a href="?c=User&act=zhongchou" title="我的众筹" ><span>我的众筹</span></a>
							</li>
							<!-- <li id="li-myAddress">
								<a href="?c=User&act=prolists" title="资料修改"><span>我的地址</span></a>
							</li> -->
							<li id="li-myAddress">
								<a href="?c=User&act=profile" title="资料修改"><span>资料修改</span></a>
							</li>
							<!-- <li id="li-myAddress">
								<a href="?c=User&act=yhq" title="我的优惠券"><span>我的优惠券</span></a>
							</li> -->
							<li id="li-enterprise" class="hide"></li>
						</ol>
					</li>
				</ul>
			</div>
			<div class="f"></div>
		</div>
	</div>
	<div class="pro-tab-area">
	<div class="h clearfix">
		<div class="h-tab">
			<ul>
				<li id="tab-pro-his" class="current">
					<a href="javascript:;"><span style="color:#000;">猜你喜欢</span></a>
				</li>
				<!--<li id="tab-pro-fav"><a href="javascript:;"><span>猜您还喜欢</span></a></li>-->
			</ul>
		</div>
	</div>

	<div class="b">
		<!--商品列表  -->
		<div class="pro-list">
			<ul id="tab-pro-his-content">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['click']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li>
					<div>
						<p class="p-img">
							<a href="?c=goods&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" width="300px" height="280px"></a>
						</p>
						<p class="p-name">
							<a href="?c=goods&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
						</p>
						<p class="p-price">
							<b>¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</b>
						</p>
					</div>
				</li>
				<?php } ?>
				
			</ul>
			<ul id="tab-pro-fav-content" class="hide"></ul>
		</div>
	</div>
</div>
</div>

<div class="hr-60"></div>

<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
