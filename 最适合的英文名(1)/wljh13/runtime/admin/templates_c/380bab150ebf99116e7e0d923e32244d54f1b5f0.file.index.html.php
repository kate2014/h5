<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 15:11:14
         compiled from "app\admin\view\Message\index.html" */ ?>
<?php /*%%SmartyHeaderCode:248565a4b3092ebbef3-80020058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '380bab150ebf99116e7e0d923e32244d54f1b5f0' => 
    array (
      0 => 'app\\admin\\view\\Message\\index.html',
      1 => 1514873238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248565a4b3092ebbef3-80020058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rslist' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b309305c439_60321782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b309305c439_60321782')) {function content_5a4b309305c439_60321782($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form name="aspnetForm" method="post" action="?c=Kefu"
	id="aspnetForm">
	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-cubes"></i>
				留言管理
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-body">
				<div class="btn-toolbar top-table" style="margin-bottom: 0px"
					role="toolbar">
					
				</div>
				<div class="table-responsive">
					<div class="dataTables_wrapper form-inline">

						<div>
							<table cellspacing="0"
								class="table table-th-block table-hover dataTable" border="0"
								id="ctl00_contentHolder_grdProductTypes"
								style="width: 100%; border-collapse: collapse;">
								<tr class="table_title">
									<th></th>
									<th class="td_right td_left" scope="col">姓名</th>
									<!-- <th class="td_right td_left" scope="col">电话</th> -->
									<th class="td_right td_left" scope="col" style="">模板</th>
									<th class="td_right td_left" scope="col">日期</th>
									<th class="td_right td_left" scope="col" style="width:150px;">操作</th>
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
									<td style="width=20px;line-height:0.8;cursor: pointer;color:red;" onclick="read(this)" data="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['value']->value['state']==1) {?>new<?php }?></td>
									<td style="width: 20%;">
										<a href="result.html?cate_id=1&name=<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
									</td>
                                    <!-- <td style="width: 20%;">
										<span><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</span>
									</td> -->
									<td class="spanD spanN" style="">
										<?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>

									</td>
									<td style="width: 20%;">
										<span><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['inputtime']);?>
</span>
									</td>
									<td class="spanD spanN" style="width: 110px;">
										<a
											id="ctl00_contentHolder_grdProductTypes_ctl02_lkbViewAttribute"
											title="编辑" class="btn-default"
											href="?c=Message&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
											<i class='fa fa-edit'></i>
											编辑
										</a>
										&nbsp;&nbsp;
										<a 
											id="ctl00_contentHolder_grdProductTypes_ctl02_lkbDelete"
											class="btn-default"
											href="javascript:del(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)">
											<i class='fa fa-trash-o'></i>
											删除
										</a>
									</td>
								</tr>
								<?php } ?>
								<?php }?>
							</table>
						</div>
						<div id="pager_div"></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<input type="hidden" name="ctl00$contentHolder$Count"
		id="ctl00_contentHolder_Count" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['rowtotal'];?>
" />
	<input type="hidden" name="ctl00$contentHolder$PageIndex"
		id="ctl00_contentHolder_PageIndex" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['nowpage'];?>
" />
	<script type="text/javascript">
		$(function() {
			var pager = new PagerView('pager_div');
			pager.pageSize = <?php echo $_smarty_tpl->tpl_vars['page']->value["pagesize"];?>
;
			pager.totalRecord = $("#ctl00_contentHolder_Count").val();
			pager.pageIndex = $("#ctl00_contentHolder_PageIndex").val();
			pager.render();
			pager.onclick = function(startIndex, endIndex) {
				var url = window.location.href
						.replace(
								"&p="
										+ $("#ctl00_contentHolder_PageIndex")
												.val(), "").replace(
								"?p="
										+ $("#ctl00_contentHolder_PageIndex")
												.val(), "");
				var pageindex = "&p=";
				if (url.indexOf('?') < 0) {
					pageindex = "?p=";
				}
				window.location.href = url + pageindex + pager.pageIndex;
			}
		});
	</script>
	<script type="text/javascript">
	
	function read(e){
		var id = $(e).attr("data");
		$.post("?c=Message&act=read",{
		id:id},function(data){
			
		},"json");
		$(e).css("color","#d6d4d4");
	}
</script>
<script type="text/javascript">
	function del(id)
	{ 
		if (confirm("确定要删除这条数据吗？"))
			$.post("?c=Message&act=del",{
				id:id},function(data){
					if(data)
						location="?c=Message";
				})
			
	}
</script>
</form>
</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
