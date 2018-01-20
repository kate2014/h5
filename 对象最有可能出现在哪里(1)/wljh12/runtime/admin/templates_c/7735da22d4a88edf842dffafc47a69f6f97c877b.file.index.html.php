<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 14:44:42
         compiled from "app\admin\view\Carousel\index.html" */ ?>
<?php /*%%SmartyHeaderCode:152155a166e5a0f6709-80648697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7735da22d4a88edf842dffafc47a69f6f97c877b' => 
    array (
      0 => 'app\\admin\\view\\Carousel\\index.html',
      1 => 1511233865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152155a166e5a0f6709-80648697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rslist' => 0,
    'value' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a166e5a1aa234_35575446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a166e5a1aa234_35575446')) {function content_5a166e5a1aa234_35575446($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form name="aspnetForm" method="post" action="?c=Carousel" id="aspnetForm">

<!--数据列表区域-->
<div class="panel panel-default" style="margin-top:15px;">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fa fa-cubes"></i>
幻灯片列表
</h3>
</div>
<div id="panel-collapse-4" class="collapse in" style="height: auto;">
<div class="panel-body">

<div class="btn-toolbar top-table" style="margin-bottom:0px" role="toolbar">
	<div class="btn-group">
		<a  class="btn  btn-default" href="?c=Carousel&act=add">
			<i class="fa fa-plus"></i>
			添加幻灯片
		</a>
	</div>
	<div class="btn-group hide">
		<a onclick="return CheckOrderNumber();" id="ctl00_contentHolder_btnorder" class="btn btn-default" href="javascript:__doPostBack('ctl00$contentHolder$btnorder','')">
			<i class="fa fa-list"></i>
			批量保存排序
		</a>
	</div>

	<div class="form-group col-md-4 pull-right">
		<div class="col-md-8">
			<input name="name" type="text" id="ctl00_contentHolder_txtSearchText" Button="btnSearchButton" class="form-control input-medium" placeholder="幻灯片名称" />
		</div>
		<input type="submit" value="查询" id="ctl00_contentHolder_btnSearchButton" class="btn btn-primary" />
	</div>
</div>
<div class="table-responsive">
	<div class="dataTables_wrapper form-inline">
	    <div>
			<table cellspacing="0" class="table table-th-block table-hover dataTable" border="0" id="ctl00_contentHolder_grdBrandCategriesList" style="width:100%;border-collapse:collapse;">
				<tr class="table_title">
					<th class="td_right td_left" scope="col">幻灯片编号</th>
					<th class="td_right td_left" scope="col">幻灯片图像</th>
					<th class="td_right td_left" scope="col">幻灯片名称</th>
					<th class="td_right td_left" scope="col" style="width:107px;">操作</th>
				</tr>
			<?php if ($_smarty_tpl->tpl_vars['rslist']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr>
					<td style="width:12%;"><?php echo $_smarty_tpl->tpl_vars['value']->value["id"];?>
</td>
					<td style="width:14%;">
						<a href="javascript:;" id="ctl00_contentHolder_grdBrandCategriesList_ctl02_A1" target="_blank">
							<img id="ctl00_contentHolder_grdBrandCategriesList_ctl02_HiImage1" class="Img100_30" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumb'];?>
" style="height:46px;width:150px;border-width:0px;" />
						</a>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value["title"];?>
</td>
					<td>
						<span class="submit_bianji">
							<a id="ctl00_contentHolder_grdBrandCategriesList_ctl02_lkEdit" class="btn-default" href="?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
								<i class="fa fa-edit"></i>
								编辑
							</a>
						</span>
						&nbsp;&nbsp;
						<span class="submit_shanchu">
							<a onclick="javascript:del(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)" id="ctl00_contentHolder_grdBrandCategriesList_ctl02_lkbtnDelete" class="btn-default" name="ctl00$contentHolder$grdBrandCategriesList$ctl02$lkbtnDelete" href="javascript:__doPostBack('ctl00$contentHolder$grdBrandCategriesList$ctl02$lkbtnDelete','')">
								<i class="fa fa-trash-o"></i>
								删除
							</a>
						</span>
					</td>
				</tr>
			<?php } ?>
			<?php }?>
			</table>
		</div>
	</div>
</div>
</div>
</div>
</div>

<script>
function CheckOrderNumber(){
    var reg=/^[1-9]+$/;
    tag=true;
    $(".datalist input[type='text']").each(function(index,item){
        if(!reg.test($(this).val().replace(/\s/g,""))){
           alert("排序值不允许为非负数！");
           tag=false; 
           //break;
        }
    });
    return tag;
}
</script>
<script type="text/javascript">
	function del(id)
	{ 
		if (confirm("确定要删除这条数据吗？"))
			$.post("?c=Carousel&act=del",{
				id:id},function(data){
					if(data)
						location="?c=Carousel";	
				})
			
	}
</script>
</form>
</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
