<?php /* Smarty version Smarty-3.1.18, created on 2017-09-26 13:51:11
         compiled from "app\admin\view\Training\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2856459c9eacfaa5de7-59710442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a8ea90d025ef92ebd21f9efc5bfb4bc10d80a5' => 
    array (
      0 => 'app\\admin\\view\\Training\\index.html',
      1 => 1506051044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2856459c9eacfaa5de7-59710442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'catelist' => 0,
    'cate_id' => 0,
    'value' => 0,
    'rslist' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c9eacfb3e721_89173066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c9eacfb3e721_89173066')) {function content_59c9eacfb3e721_89173066($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form name="aspnetForm" method="post" action="?c=Training" id="aspnetForm">
	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-cubes"></i>
				文章列表
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-body">
				<div class="btn-toolbar top-table" style="margin-bottom: 0px"
					role="toolbar">
					<div class="btn-group">
						<a class="btn  btn-default" href="?c=Training&act=add">
							<i class="fa fa-plus"></i>
							添加
						</a>
					</div>
					<div class="form-group col-md-6 pull-right">
						<div class="col-md-4 pmopx">
							<select name="cate_id" id="ctl00_contentHolder_ddltype" onchange="checks(this)" data="cate_id" class="form-control">
								<option selected="selected"  value="0">全部分类</option>
								<?php if ($_smarty_tpl->tpl_vars['catelist']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<option <?php if ($_smarty_tpl->tpl_vars['cate_id']->value==$_smarty_tpl->tpl_vars['value']->value['id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value["space"];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value["branch"];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value["name"];?>
</option>
								<?php } ?>
								<?php }?>
							</select>
						</div>
						<div class="col-md-6">
							<input name="title" type="text"
								id="ctl00_contentHolder_txtSearchText" Button="btnSearchButton"
								class="form-control input-medium" placeholder="文章名称" />
						</div>
						<input type="submit"
							value="查询" id="ctl00_contentHolder_btnSearchButton"
							class="btn btn-primary" />
					</div>
				</div>
				<div class="table-responsive">
					<div class="dataTables_wrapper form-inline">

						<div>
							<table cellspacing="0"
								class="table table-th-block table-hover dataTable" border="0"
								id="ctl00_contentHolder_grdProductTypes"
								style="width: 100%; border-collapse: collapse;">
								<tr class="table_title">
									<th class="td_right td_left" scope="col">文章标题</th>
									<th class="td_right td_left" scope="col">分类</th>
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
									<td style="">
										<span><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
									</td>
									<td style="width: 20%;">
										<span><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</span>
									</td>
                                    <td style="width: 20%;">
										<span><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['inputtime']);?>
</span>
									</td>
									<td class="spanD spanN" style="width: 110px;">
										<a id="ctl00_contentHolder_grdProductTypes_ctl02_lkbViewAttribute" title="编辑" class="btn-default" href="?c=Training&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
	function del(id)
	{
		if (confirm("确定要删除这条数据吗？"))
			$.post("?c=Notice&act=del",{
				id:id},function(data){
					if(data)
						location="?c=Training";	
				})
			
	}
</script>

<script type="text/javascript"> 
//滚动后导航固定
$(function(){
	$(window).scroll(function(){
          height = $(window).scrollTop();
   	  	  if(height > 500){
   	  	  	$('#fixed-fr').fadeIn();
   	  	  	//alert('1');
   	  	  }else{
   	  	  	$('#fixed-fr').fadeOut();
   	  	  };
});
});
function changeURLArg(url,arg,arg_val){ 
            var pattern=arg+'=([^&]*)'; 
            var replaceText=arg+'='+arg_val; 
            if(url.match(pattern)){ 
                var tmp='/('+ arg+'=)([^&]*)/gi'; 
                tmp=url.replace(eval(tmp),replaceText); 
                return tmp; 
            }else{ 
                if(url.match('[\?]')){ 
                    return url+'&'+replaceText; 
                }else{ 
                    return url+'?'+replaceText; 
                } 
            } 
            return url+'\n'+arg+'\n'+arg_val; 
        }

        function delQueStr(url, ref) //删除参数值
        {
            var str = "";

            if (url.indexOf('?') != -1)
                str = url.substr(url.indexOf('?') + 1);
            else
                return url;
            var arr = "";
            var returnurl = "";
            var setparam = "";
            if (str.indexOf('&') != -1) {
                arr = str.split('&');
                for (i in arr) {
                    if (arr[i].split('=')[0] != ref) {
                        returnurl = returnurl + arr[i].split('=')[0] + "=" + arr[i].split('=')[1] + "&";
                    }
                }
                return url.substr(0, url.indexOf('?')) + "?" + returnurl.substr(0, returnurl.length - 1);
            }
            else {
                arr = str.split('=');
                if (arr[0] == ref)
                    return url.substr(0, url.indexOf('?'));
                else
                    return url;
            }
        }
    function checks(s){
            if ($(s).val()==0) {
                url = window.location.href;
                ref = $(s).attr("data");
                url = delQueStr(url,ref);
                
            }else{
                url = window.location.href;
                arg = $(s).attr("data");
                arg_val = $(s).val();
                url = changeURLArg(url,arg,arg_val);
            };
            location.href = url;
            
        }
</script>

</form>
</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
