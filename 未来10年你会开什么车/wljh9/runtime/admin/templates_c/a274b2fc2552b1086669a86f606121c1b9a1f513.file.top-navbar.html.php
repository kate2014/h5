<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 15:11:15
         compiled from "app\admin\view\Public\top-navbar.html" */ ?>
<?php /*%%SmartyHeaderCode:281195a4b30930dd2c3-24003186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a274b2fc2552b1086669a86f606121c1b9a1f513' => 
    array (
      0 => 'app\\admin\\view\\Public\\top-navbar.html',
      1 => 1511233863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281195a4b30930dd2c3-24003186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'server_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b3093100559_10651993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b3093100559_10651993')) {function content_5a4b3093100559_10651993($_smarty_tpl) {?><div class="top-navbar ">
    <div class="top-navbar-inner">
        <div class="logo-brand ">
            <a href="?c=Index" >
                <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/logo-login.png"  style="margin-top: 8px;max-width: 121px; margin-left:-82px"/> -->
            </a>
        </div>
        <div class="top-nav-content">
            <div class="btn-collapse-sidebar-left"> <i class="fa fa-bars"></i>
            </div>
            <ul class="nav-user navbar-right" style="position: initial;">
                <li class="dropdown">
                    <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-key"></i> <strong><?php echo $_SESSION['admin_account'];?>
</strong>
                        &nbsp;&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                        <li>
                            <a href="?c=admin&act=updatePassword" >修改密码</a>
                        </li>
                        <li>
                            <a href="?c=login&act=logout" >退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <ul class="nav-user navbar-right" style="position: initial;">
                <input type="hidden" id="ws_url" value="http://<?php echo $_smarty_tpl->tpl_vars['server_url']->value;?>
/mobi.php" />
                <!-- <li id="yw" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" onclick="$('#wshopft').show();$('#phone').show();$('#showtmpl').attr('src', $('#ws_url').val());">
                        <i class="fa fa-eye"></i> <strong>微商城预览</strong>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</div><?php }} ?>
