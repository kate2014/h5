<?php /* Smarty version Smarty-3.1.18, created on 2017-11-21 11:37:40
         compiled from "app\admin\view\Public\page.html" */ ?>
<?php /*%%SmartyHeaderCode:282755a139f84e0bf86-41458724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03283f7965bd4ad970546972fdbf90ad7fe15aef' => 
    array (
      0 => 'app\\admin\\view\\Public\\page.html',
      1 => 1511233863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282755a139f84e0bf86-41458724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a139f84e90ca8_69440757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a139f84e90ca8_69440757')) {function content_5a139f84e90ca8_69440757($_smarty_tpl) {?><div id="pager_div"></div>
                        
<input type="hidden" name="rowtotal"
    id="rowtotal" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['rowtotal'];?>
" />
<input type="hidden" name="nowpage"
    id="nowpage" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['nowpage'];?>
" />
<input type="hidden" name="pagesize"
    id="pagesize" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['pagesize'];?>
" />

<script type="text/javascript">      
    $(function() {
        var pager = new PagerView('pager_div');
        pager.pageSize = $("#pagesize").val();

        pager.totalRecord = $("#rowtotal").val();
        pager.pageIndex = $("#nowpage").val();
        pager.render();
        pager.onclick = function(startIndex, endIndex) {
            var str1 = "&p=" + $("#nowpage").val();
            var str2 = "?p=" + $("#nowpage").val();
            var url = window.location.href;
            url = url.replace(str1,"").replace(str2,"");
            var pageindex = "&p=";
            if (url.indexOf('?') < 0) {
                pageindex = "?p=";
            }
            window.location.href = url + pageindex + pager.pageIndex;
        }
    });
</script>   
 <?php }} ?>
