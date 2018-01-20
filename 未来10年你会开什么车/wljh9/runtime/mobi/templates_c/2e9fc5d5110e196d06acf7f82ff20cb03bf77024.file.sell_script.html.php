<?php /* Smarty version Smarty-3.1.18, created on 2016-09-27 11:07:45
         compiled from "app\mobi\view\Public\sell_script.html" */ ?>
<?php /*%%SmartyHeaderCode:2987757e9e281495738-58018831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9fc5d5110e196d06acf7f82ff20cb03bf77024' => 
    array (
      0 => 'app\\mobi\\view\\Public\\sell_script.html',
      1 => 1465895889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2987757e9e281495738-58018831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'suid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e9e2814a12b0_64894847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9e2814a12b0_64894847')) {function content_57e9e2814a12b0_64894847($_smarty_tpl) {?><script>
var g = document.getElementsByTagName('a');

for(var i=0;i<g.length;i++){
    var a = g[i];
    a.onclick = function(){
        var url = this.href;
        var glue = '&';
        if (url.indexOf('?') < 0) {
            glue = '?';
        }
        this.href = url + glue + 'suid=<?php echo $_smarty_tpl->tpl_vars['suid']->value;?>
';
    }
}
</script>
<?php }} ?>
