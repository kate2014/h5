<?php /* Smarty version Smarty-3.1.18, created on 2016-07-19 17:54:17
         compiled from "app\mobi\webview\UserOrder\lists.html" */ ?>
<?php /*%%SmartyHeaderCode:26333578df8c9b32ac0-03301479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966571e5eda88deb7280f098d35ac55cda6108f4' => 
    array (
      0 => 'app\\mobi\\webview\\UserOrder\\lists.html',
      1 => 1468836279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26333578df8c9b32ac0-03301479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'mall_title' => 0,
    'page_conf' => 0,
    'rslist' => 0,
    'v' => 0,
    'arr_state' => 0,
    'vs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578df8c9d885d1_86154264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578df8c9d885d1_86154264')) {function content_578df8c9d885d1_86154264($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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

<div class="g">
	<!--面包屑 -->
	<div class="breadcrumb-area fcn">
		<a href="/" title="首页">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="?c=user" title="个人中心">个人中心</a></em><em id="pathPoint">&nbsp;&gt;&nbsp;</em><span id="pathTitle"><?php echo $_smarty_tpl->tpl_vars['page_conf']->value['title'];?>
</span>
	</div>
</div>
<div class="hr-15"></div>

<div class="g">
	<div class="fr" style="width: 930px">
		<!--栏目 -->
		<div class="part-area clearfix">
			<div class="fl">
				<h3 class="myOrders-title"><span><?php echo $_smarty_tpl->tpl_vars['page_conf']->value['title'];?>
</span></h3>
			</div>
		</div>

		<!--我的订单 -->       
		<div class="myOrders-area">
			<div class="myOrders-title-area">

				<div class="b">
					<table border="0" cellpadding="0" cellspacing="0" id="order-list-head">
						<thead>
							<tr>
								<th>商品及订单号</th>
								<th class="tr-span-3">单价<em>/元</em></th>
								<th class="tr-span-2">数量</th>
								<th class="tr-span-4">实付款<em>/元</em></th>
								<th class="tr-span-4 operate">订单状态及操作</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>

			<div id="myOrders-list-content">
            <div class="hr-10"></div>
				<?php if ($_smarty_tpl->tpl_vars['rslist']->value) {?>

				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<div class="myOrders-list">
					<!--我的订单-订单-套餐 -->
					<div class="myOrders-pro-area">
						<div class="h clearfix">
							<table border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td class="tal">
										
						
        <?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?><input class="checkboxs" type="checkbox" name="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php }?>订单编号：<a href="?c=UserOrder&act=view&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="?c=UserOrder&act=view&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="查看订单详情">查看订单详情</a></td>
										<td class="tr-span-4"><em> <?php echo $_smarty_tpl->tpl_vars['arr_state']->value[$_smarty_tpl->tpl_vars['v']->value['state']];?>
 </em></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="b">
							<table border="0" cellpadding="0" cellspacing="0">
								<tbody>

									<!-- 组合套餐列表 -->

									<!-- 普通商品列表 -->

									<tr>

										<?php if ($_smarty_tpl->tpl_vars['v']->value['goods']) {?>
										<?php  $_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vs']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vs']->key => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['vs']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['vs']->value['i']==1) {?>
										<td class="tal">
										<div class="pro-area clearfix">
											<p class="p-img">
												<a title="<?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
" href="?c=goods&id=<?php echo $_smarty_tpl->tpl_vars['vs']->value['goods_id'];?>
" target="_blank"> <img alt="<?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['vs']->value['thumb'];?>
"> </a>
											</p>
											<p class="p-name">
												<a title="<?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
" target="_blank" href="?c=goods&id=<?php echo $_smarty_tpl->tpl_vars['vs']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
</a>
											</p>

										</div></td>

										<td class="tr-span-3">¥<?php echo $_smarty_tpl->tpl_vars['vs']->value['price'];?>
</td>

										<td class="tr-span-2"><?php echo $_smarty_tpl->tpl_vars['vs']->value['num'];?>
</td>
										<?php }?>
										<?php } ?>
										<?php }?>

										<td rowspan="3" class="tr-span-4">
										<p>
											¥<?php echo $_smarty_tpl->tpl_vars['v']->value['total_price'];?>

										</p></td>

										<td rowspan="3" class="tr-span-4 operate">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
										<p>
										<a class="button-go-pay-2" href="?c=buy&act=buy&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" title="去付款"> <span>去付款</span> </a>
										</p>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['state']==3) {?>
										<p>
										<a class="button-confirm-receipt" href="javascript:;" onclick="receive(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" target="_blank" title="确定收货"> <span>确定收货</span> </a>
										</p>
										<?php }?>
										<!--
										<p>
										<a href="/member/updateToOrder-1110218972" title="修改订单">修改订单</a>
										</p>
										-->
										<p>
											<a href="javascript:;" title="取消订单" onclick="Closed(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" >取消订单</a>
										</p></td>

									</tr>

									<?php if ($_smarty_tpl->tpl_vars['v']->value['goods']) {?>
									<?php  $_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vs']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vs']->key => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['vs']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['vs']->value['i']>1) {?>
									<tr>
										<td class="tal">
										<div class="pro-area clearfix">
											<p class="p-img">
												<a title="<?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
" href="?c=goods&id=<?php echo $_smarty_tpl->tpl_vars['vs']->value['goods_id'];?>
" target="_blank"> <img alt="<?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['vs']->value['thumb'];?>
"> </a>
											</p>
											<p class="p-name">
												<a title="<?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
" target="_blank" href="?c=goods&id=<?php echo $_smarty_tpl->tpl_vars['vs']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
</a>
											</p>

										</div></td>

										<td class="tr-span-3">¥<?php echo $_smarty_tpl->tpl_vars['vs']->value['price'];?>
</td>

										<td class="tr-span-2"><?php echo $_smarty_tpl->tpl_vars['vs']->value['num'];?>
</td>
									</tr>
									<?php }?>
									<?php } ?>
									<?php }?>
									<!-- 普通商品列表 end -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php } else { ?>
				<!--空数据-我的订单 -->
				<div class="myOrders-empty-area">
					对不起，您暂时没有订单信息！
				</div>
				<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
		<a href="?c=buy&act=buy&id=" id="yiqi">
		<div class="buy-submit-web">
			一起支付
		</div></a>
		<?php }?>
			</div>
			
			<div class="hr-5"></div>
			<!-- 20140819-我的订单-分页-start -->
			<div class="myOrders-page-area clearfix">
				<div class="fl"></div>
				<div class="fr">
					<!-- 分页-start -->
					<div class="pager" id="list-pager"></div>
					<!-- 分页-end -->
				</div>
			</div>
			<!-- 20140819-我的订单-分页-end -->
		</div>

	</div>
	<input type="hidden" id="colid" value="0">
	<div class="fl u-1-5">

		<!--左边菜单 -->
		<div class="mc-menu-area">
			<div class="h">
				<a href="?c=user" class="button-go-mc" title="个人中心"><span>个人中心</span></a>
			</div>
			<div class="b">
				<ul>
					<li>
						<h3><span>订单中心</span></h3>
						<ol>
							<li id="li-myAppointment" <?php if ($_smarty_tpl->tpl_vars['page_conf']->value['state']==null) {?>class="current"<?php }?> >
								<a href="?c=UserOrder&act=lists" title="全部订单"><span>全部订单</span></a>
							</li>
							<li id="li-order" <?php if ($_smarty_tpl->tpl_vars['page_conf']->value['state']==1) {?>class="current"<?php }?> >
								<a href="?c=UserOrder&act=lists&state=1" title="待付款订单"><span>待付款订单</span></a>
							</li>
							<li id="li-groupBuyRecord" <?php if ($_smarty_tpl->tpl_vars['page_conf']->value['state']==2) {?>class="current"<?php }?> >
								<a href="?c=UserOrder&act=lists&state=2" title="待发货订单"><span>待发货订单</span></a>
							</li>
							<li id="li-exchange" <?php if ($_smarty_tpl->tpl_vars['page_conf']->value['state']==3) {?>class="current"<?php }?> >
								<a href="?c=UserOrder&act=lists&state=3" title="退换货申请"><span>待收货订单</span></a>
							</li>
							<li id="li-orderRefund" <?php if ($_smarty_tpl->tpl_vars['page_conf']->value['state']==4) {?>class="current"<?php }?> >
								<a href="?c=UserOrder&act=lists&state=4" title="已完成订单"><span>已完成订单</span></a>
							</li>
						</ol>
					</li>
					<li>
						<h3><span>个人中心</span></h3>
						<ol>
							<li id="li-account">
								<a href="?c=user" title="个人信息"><span>个人信息</span></a>
							</li>
							<li id="li-myAddress">
								<a href="?c=User&act=prolists" title="资料修改"><span>我的地址</span></a>
							</li>
							<li id="li-myAddress">
								<a href="?c=User&act=profile" title="资料修改"><span>资料修改</span></a>
							</li>
							<li id="li-myAddress">
								<a href="?c=User&act=yhq" title="我的优惠券"><span>我的优惠券</span></a>
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
<div class="hr-60"></div>
<!--口号-20121025 -->
<script>
	
    //收货
    function receive(id) {
        url = '?c=UserOrder&act=receive&id=' + id;
        if(!confirm("确定收到商品了吗？")){
            return;
        }
        var data = {};
        $.get(url, data, function (json) {
            if (json.flag) {
                alert(json.msg);
                location.reload();
            }
            else {
                alert(json.msg);
            }
        }, 'json');
    }
    
    function Closed(orderId) {
        if(!confirm("确定要取消订单？")){
            return;
        }
        var data = {};
        data.id = orderId;
        $.post("?c=UserOrder&act=closedOrder", data, function (json) {
            if (json.success == "true") {
                alert("成功取消该订单！");
                location.reload();
            }
            else {
                alert(json.error);
            }
        }, 'json');
    }
    function Finish(orderId) {
        if(!confirm("收到货了？")){
            return;
        }
        var data = {};
        data.orderId = orderId;
        $.post("/vShopApiHandler.aspx?action=FinishOrder", data, function (json) {
            if (json.success == "true") {
                alert("完成订单");
                location.reload();
            }
            else {
                alert(json.error);
            }
        });
    }
    function view_log(a){
        if($(a).attr("data-status")!="1") {
            window.location.href='http://m.kuaidi100.com/result.jsp?nu='+$(a).attr("data-ShipOrderNumber");
        } else {
            alert("该订单还未发货");
        }
    }
		$('.checkboxs').click(function() {
			$("input[name='checkbox']:checked").each(function() {
				vv = $('#yiqi').attr('href');
				vr = eval("/" + $(this).val() + "/");
				if (!vr.test(vv)){
					v = vv + $(this).val() + ',';
					$('#yiqi').attr('href', v);
				}
			});
		});

</script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
