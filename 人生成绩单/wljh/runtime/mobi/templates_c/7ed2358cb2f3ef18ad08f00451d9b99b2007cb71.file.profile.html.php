<?php /* Smarty version Smarty-3.1.18, created on 2016-09-07 17:58:58
         compiled from "app\mobi\webview\User\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:3172457cfe4e22181b8-89244535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed2358cb2f3ef18ad08f00451d9b99b2007cb71' => 
    array (
      0 => 'app\\mobi\\webview\\User\\profile.html',
      1 => 1469695718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3172457cfe4e22181b8-89244535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'mall_title' => 0,
    'rs' => 0,
    'sex' => 0,
    'k' => 0,
    'v' => 0,
    'regions_list1' => 0,
    'regions_list2' => 0,
    'regions_list3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cfe4e2423937_61297976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cfe4e2423937_61297976')) {function content_57cfe4e2423937_61297976($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/ec.core.min.css" rel="stylesheet" />
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
<!-- 	<div class="breadcrumb-area">
		<a href="/" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><a href="" title="我的商城">我的商城</a></em><em id="pathPoint">&nbsp;&nbsp;\&nbsp;&nbsp;</em><span id="pathTitle">个人信息管理</span>
	</div> -->
</div>
<div class="hr-10"></div>

<div class="g">
	<div class="fr u-4-5" style="width: 930px">
		<div class="text">个人信息修改</div>
    <form action="?c=User&act=profileDo" method="post" class="my_form" >
        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>
" />
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
" />
        <div class="cart-stores mt15 cart-shadow">
        
            <ul class="stores-list mb50">
                <li>
                    <label>真实姓名：</label>
                    <div class="wbox-flex">
                        <input name="fullname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['fullname'];?>
" class="sn-input-text-b" /> 
                    </div>
                </li>
                <li>
                    <label>性别：</label>
                    <div class="wbox-flex">
                        <select name="sex">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['rs']->value['sex']==$_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>
                        </select>
                    </div>
                </li>
                <li>
                    <label>生日：</label>
                    <div class="wbox-flex">
                        <input name="birthday" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['birthday'];?>
" type="text" class="sn-input-text-b" readonly="readonly" onclick="new Calendar(1900, 2020, 0).show(this);" />
                    </div>
                </li>
                
                <span id="SellerUserProfile_dropRegions_1">
                <li>
                    <label>省份：</label>
                    <select id="ddlRegions1" name="regions1" selectset="regions">
                        <option value="">
                            -请选择-
                        </option>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions_list1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['rs']->value['regions1']) {?>selected<?php }?> >
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                        </option>
                    <?php } ?>
                    </select>
                </li>
                <li>
                    <label>城市：</label>
                    <select id="ddlRegions2" name="regions2" selectset="regions">
                        <option value="">-请选择-</option>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions_list2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['rs']->value['regions2']) {?>selected<?php }?> >
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                        </option>
                    <?php } ?>
                    </select>
                </li>
                <li>
                    <label>区县：</label>
                    <select id="ddlRegions3" name="regions3" selectset="regions">
                        <option value="">-请选择-</option>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions_list3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['rs']->value['regions3']) {?>selected<?php }?> >
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                        </option>
                    <?php } ?>
                     </select>
                </li>
                </span>
                
                <input id="regionSelectorValue" name="regions" value="0" type="hidden" />
                <input id="regionSelectorNull" name="regionSelectorNull" value="-请选择-" type="hidden" />
                
                <li>
                    <label>详细地址：</label>
                    <div class="wbox-flex">
                        <input name="address" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['address'];?>
" type="text" class="sn-input-text-b" />
                    </div>
                </li>
                <li>
                    <label>手机号码：</label>
                    <div class="wbox-flex">
                        <input name="phone" type="text" class="sn-input-text-b" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['phone'];?>
" />
                    </div>
                </li>
            </ul>
    
            <div class="sn-btn-d block mt15 mlr15 mb10" >
                <input type="submit" class="submit" value="提交" class="btn_ok" />
            </div>
            </div>
</form>

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
							<!-- <li id="li-account">
								<a href="?c=user" title="个人信息" ><span>个人信息</span></a>
							</li> -->
							<!-- <li id="li-myAddress">
								<a href="?c=User&act=prolists" title="资料修改"><span>我的地址</span></a>
							</li> -->
                            <li id="li-myAddress">
                                <a href="?c=User&act=zhongchou" title="我的众筹"><span>我的众筹</span></a>
                            </li>
							<li id="li-myAddress" class="current">
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
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
