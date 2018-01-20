<?php /* Smarty version Smarty-3.1.18, created on 2016-07-19 17:32:34
         compiled from "app\mobi\webview\User\prolists.html" */ ?>
<?php /*%%SmartyHeaderCode:11476578df3b281b819-04853933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a45d0bb20c4a493cbca5d26efcdd4e49581f76e7' => 
    array (
      0 => 'app\\mobi\\webview\\User\\prolists.html',
      1 => 1468836279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11476578df3b281b819-04853933',
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
    'regions_list1' => 0,
    'vs' => 0,
    'regions_list2' => 0,
    'regions_list3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578df3b29f8180_41172825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578df3b29f8180_41172825')) {function content_578df3b29f8180_41172825($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/ec.core.min.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/style.css" rel="stylesheet" />
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
	.hr-60{
		min-height:500px ;
	}

	.myOrders-pro-area {
		border: 1px solid #dedede;
		margin-bottom: 10px;
	}
	.h {
 padding-left: 0px; 
}
</style>

<div class="hr-10"></div>
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
								<th class="tr-span-2">姓名</th>
								<th class="tr-span-3">手机</th>
								<th class="tr-span-3">省份</th>
								<th class="tr-span-3">城市</th>
								<th class="tr-span-3">详细地址</th>
								<th class="tr-span-4">操作</th>
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
										<td class="tr-span-2">
										<!--<input class="checkboxs" type="checkbox" name="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">-->
										<em class="fullname-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['fullname'];?>
</em></td>
										<td class="tr-span-3"><em class="phone-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</em></td>
										<td class="tr-span-3"><em class="regions1-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['regions1'];?>
</em></td>
										<td class="tr-span-3"><em class="regions2-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['regions2'];?>
</em></td>
										<td class="tr-span-3"><em class="address-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</em></td>
										<td class="tr-span-4"><em class="address-edit" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</em>&nbsp;&nbsp;<em onclick="Closed(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" style="cursor: pointer;">删除</em>&nbsp;&nbsp;<em onclick="set(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" style="cursor: pointer;">设置为默认地址</em></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php } else { ?>
				<!--空数据-我的订单 -->
				<div class="myOrders-empty-area">
					对不起，您暂时没有地址信息！
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
				<a href="?c=buy&act=buy&id=" id="yiqi">
				<div class="buy-submit-web">
					一起支付
				</div></a>
				<?php }?>
				<div class="buy-submit-web" id="address-new" style="cursor: pointer;">
					新增地址
				</div>
				
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
							<li id="li-myAppointment">
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
							<li id="li-myAddress" class="current">
								<a href="?c=User&act=prolists" title="资料修改"><span>我的地址</span></a>
							</li>
							<li id="li-myAddress">
								<a href="?c=User&act=yhq" title="资料修改"><span>资料修改</span></a>
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

<div class="ol_box_4" style="width: 690px;display: none;position: fixed;top: 20px;z-index: 1000;left: 50%;margin-left: -345px;" id="addAddressBox">
	<div class="box-ct">
		<div class="box-header">
			<div class="box-tl"></div>
			<div class="box-tc">
				<div class="box-tc1"></div>
				<div class="box-tc2">
					<a class="box-close" style="right:-20px;" title="关闭" onclick="return false;" href="javascript:;"></a><span class="box-title">修改地址</span>
				</div>
			</div>
			<div class="box-tr"></div>
		</div>
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
				<tr>
					<td class="box-cl"></td>
					<td class="box-cc">
					<div>

						<form id="getform">
							<!-- 20140815-表单-地址-start -->
							<div class="form-address-area">
								<div class="form-edit-area">
									<div class="form-edit-table">
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<!--
												<tr>
												<th>&nbsp;</th>
												<td><a href="javscript:;" title="您现在可以直接调用支付宝帐户的收货地址"><img class="vam" alt="使用支付宝地址" src="/images/echannel/btn/btn14.png"/></a></td>
												</tr> -->

												<input type="hidden" name="id" value="" >
												<tr>
													<th><span class="required">*</span><label for="">收货人：</label></th>
													<td>
													<input type="text" name="fullname" class="text vam span-200" value="">
													<span id="consigneeError"> </span></td>
												</tr>

												<span id="SellerUserProfile_dropRegions_1">
													<tr>

														<th><span class="required">*</span><label for="">收货省份：</label></th>
														<td>
														<select id="ddlRegions1" name="regions1" selectset="regions" style="border: 1px solid #dedede;padding: 3px 4px;height: 30px;line-height: 18px;">
															<option value=""> -请选择- </option>
															<?php  $_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vs']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions_list1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vs']->key => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['vs']->key;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['vs']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
 </option>
															<?php } ?>
														</select><span id="consigneeError"> </span></td>
													</tr>
													<tr>

														<th><span class="required">*</span><label for="">收货城市：</label></th>
														<td>
														<select id="ddlRegions2" name="regions2" selectset="regions" style="border: 1px solid #dedede;padding: 3px 4px;height: 30px;line-height: 18px;">
															<option value="">-请选择-</option>
															<?php  $_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vs']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions_list2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vs']->key => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['vs']->key;
?>
															<?php if ($_smarty_tpl->tpl_vars['vs']->value['id']!=null) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['vs']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
 </option>
															<?php }?>
															<?php } ?>
														</select></td>
													</tr>
													<tr>
														<th><span class="required">*</span><label for="">收货区号：</label></th>
														<td>
														<select id="ddlRegions3" name="regions3" selectset="regions" style="border: 1px solid #dedede;padding: 3px 4px;height: 30px;line-height: 18px;">
															<option value="">-请选择-</option>
															<?php  $_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vs']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions_list3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vs']->key => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['vs']->key;
?>
															<?php if ($_smarty_tpl->tpl_vars['vs']->value['id']!=null) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['vs']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['vs']->value['name'];?>
 </option>
															<?php }?>
															<?php } ?>
														</select></td>
													</tr> </span>
												<tr>
													<th rowspan="2" class="vat"><span class="required">*</span><label for="">收货地址：</label></th>
													<td name="myAddress-add-region" id="myAddress-add-region"></td>

													<td></td>
												</tr>
												<tr>
													<td>													<textarea class="textarea span-400" placeholder="详细地址" id="area" name="address" seed="adress-detail"></textarea><span id="addressDetailError"></span></td>
												</tr>
												<tr>
													<th><label for="">邮编：</label></th>
													<td>
													<input type="text" name="zipCode" class="text vam span-100 ime-disabled">
													<span id="zipCodeError"></span></td>
												</tr>
												<tr>
													<th><span class="required">*</span><label for="">手机号码：</label></th>
													<td>
													<div class="vam inline-block">
														<input type="text" name="phone" class="text span-100 ime-disabled" value="">
													</div><span id="phone-msg"> </span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="box-button">
								<a href="javascript:;" class="box-ok"><span>确定</span></a>
								<a href="javascript:;" class="box-cancel"><span>取消</span></a>
							</div>
							<div>
								<span id="validateAddressMsg"></span>
							</div>
						</form>

						<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/chooice_region.js"></script>
						<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/calendar.js"></script>
						<!-- 20140815-表单-地址-end -->
					</div></td>
					<td class="box-cr"></td>
				</tr>
			</tbody>
		</table>
		<div class="box-bottom">
			<div class="box-bl"></div>
			<div class="box-bc"></div>
			<div class="box-br"></div>
		</div>
	</div>
</div>
<!--口号-20121025 -->
<script>
	//收货
	function Closed(orderId) {
		if (!confirm("你确定删除地址？")) {
			return;
		}
		var data = {};
		data.id = orderId;
		$.post("?c=User&act=del", data, function(json) {
			if (json.success == "true") {
				alert("成功删除地址！");
				location.reload();
			} else {
				alert(json.msg);
			}
		}, 'json');
	}	
	function set(orderId) {
		if (!confirm("你确定设置地址？")) {
			return;
		}
		var data = {};
		data.id = orderId;
		$.post("?c=User&act=set", data, function(json) {
			if (json.success == "true") {
				alert("成功设置默认地址！");
				location.reload();
			} else {
				alert(json.msg);
			}
		}, 'json');
	}

	$('.checkboxs').click(function() {
		$("input[name='checkbox']:checked").each(function() {
			vv = $('#yiqi').attr('href');
			vr = eval("/" + $(this).val() + "/");
			if (!vr.test(vv)) {
				v = vv + $(this).val() + ',';
				$('#yiqi').attr('href', v);
			}
		});
	});
	$('.address-edit,#address-new').click(function() {
		$('#addAddressBox').show();
		var id = $(this).attr('value');
		$('input[name="id"]').val(id);
		$('input[name="fullname"]').val($('.fullname-' + id).html());
		$('#area').val($('.address-' + id).html());
		$('input[name="phone"]').val($('.phone-' + id).html());
	});
	$('#address-new').click(function() {
		$('.box-title').html("新增收货地址");
	});

	$('.box-ok').click(function() {
		$.post("?c=User&act=profiles", $("#getform").serialize(), function(json) {
			if (json.success == true) {
				alert(json.msg);
				location.reload();
			} else {
				alert(json.msg);
			}

		},'json');
	});
	$('.box-close,.box-cancel,.box-ok').click(function() {
		$('#addAddressBox').hide();
	}); 
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
