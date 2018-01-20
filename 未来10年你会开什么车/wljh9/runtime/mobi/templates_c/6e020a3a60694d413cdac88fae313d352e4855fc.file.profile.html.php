<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 17:33:11
         compiled from "app\mobi\view\User\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:273855799d157ed9e49-86045241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e020a3a60694d413cdac88fae313d352e4855fc' => 
    array (
      0 => 'app\\mobi\\view\\User\\profile.html',
      1 => 1469516754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273855799d157ed9e49-86045241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
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
  'unifunc' => 'content_5799d158158e29_43221494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799d158158e29_43221494')) {function content_5799d158158e29_43221494($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/cart.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/index.css">
<style>
select {
border: 1px solid #D9D9D9;
height: 30px;
line-height: 30px;
display: block;
margin-bottom: 5px;
}
</style>

<body id="body">
    <header class="header">
    <a href="?c=User" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
    <p>个人信息</p>
</header>

<div class="user-content">
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
                <input type="submit" value="提交" class="btn_ok" />
            </div>
</form>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/chooice_region.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/calendar.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
