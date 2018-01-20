<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 15:11:15
         compiled from "app\admin\view\Public\left.html" */ ?>
<?php /*%%SmartyHeaderCode:304045a4b3093108252-53055905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c8f35e1b1dd7e4a2a1c9e076f612d09cb0a586' => 
    array (
      0 => 'app\\admin\\view\\Public\\left.html',
      1 => 1511422162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304045a4b3093108252-53055905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'menulist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b3093165e74_49774776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b3093165e74_49774776')) {function content_5a4b3093165e74_49774776($_smarty_tpl) {?><script type="text/javascript" src="resource/js/memory_nav.js"></script>
<div class="sidebar-left sidebar-nicescroller ">
    <ul class="sidebar-menu">
        <li>
            <a href="?c=index">
                <i class="fa icon-sidebar fa fa-dashboard"></i>
                <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                欢迎页
            </a>
        </li>

        <?php if (preg_match("/(,12,|,13,)/",$_smarty_tpl->tpl_vars['group']->value)) {?>
        <li>
            <a href="javascript:;">
                <i class="fa icon-sidebar fa fa-bars"></i>
                <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                文章管理
            </a>
            <ul class="submenu">
                <li><a href="?c=Notice_cate">分类管理</a></li>
                <!-- <li><a href="?c=Notice">文章列表</a></li> -->
            </ul>
        </li>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menulist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <?php if (preg_match("/(,1,|,2,|,3,|,4,)/",$_smarty_tpl->tpl_vars['group']->value)) {?>
        <li>
            <a href="?c=Notice&cate_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <i class="fa icon-sidebar fa fa-cubes"></i>
                <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

            </a>
        </li>
        <?php }?>
        <?php } ?>
		
        <li>
            <a href="?c=Message">
                <i class="fa icon-sidebar fa fa-cubes"></i>
                <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                在线留言
            </a>
        </li>
        
        <?php if (preg_match("/(,14,|,15,|,16,|,17,|,18,|,19,|,20,|,30,|,31,|,32,|,33,)/",$_smarty_tpl->tpl_vars['group']->value)) {?>
        <li>
            <a href="javascript:;">
                <i class="fa icon-sidebar fa fa-cog"></i>
                <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                系统设置
            </a>
            <ul class="submenu">
            	
            	
                <li>
                    <a href="?c=Kefu">
                        <span>客服管理</span>
                    </a>
                </li>
            	
            </ul>
        </li>
        <?php }?>
        
        
    </ul>
</div><?php }} ?>
