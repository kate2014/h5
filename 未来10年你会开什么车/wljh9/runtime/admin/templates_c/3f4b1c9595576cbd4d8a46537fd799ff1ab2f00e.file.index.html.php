<?php /* Smarty version Smarty-3.1.18, created on 2017-11-21 11:37:40
         compiled from "app\admin\view\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:39265a139f84b161d8-91554475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4b1c9595576cbd4d8a46537fd799ff1ab2f00e' => 
    array (
      0 => 'app\\admin\\view\\User\\index.html',
      1 => 1511233863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39265a139f84b161d8-91554475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'rslist' => 0,
    'v' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a139f84ca4938_76285409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a139f84ca4938_76285409')) {function content_5a139f84ca4938_76285409($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--主体-->
<form name="aspnetForm" method="post" action="sys.php?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" id="aspnetForm">
    <input type="hidden" name="c" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" />
	<script type="text/javascript">
		//<![CDATA[
		var theForm = document.forms['aspnetForm'];
		if (!theForm) {
			theForm = document.aspnetForm;
		}
		function __doPostBack(eventTarget, eventArgument) {
			if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
				theForm.__EVENTTARGET.value = eventTarget;
				theForm.__EVENTARGUMENT.value = eventArgument;
				theForm.submit();
			}
		}
		//]]>
	</script>


	<script>
		function CheckChanged() {
			var frm = document.aspnetForm;
			var boolAllChecked;
			boolAllChecked = true;
			for (i = 0; i < frm.length; i++) {
				e = frm.elements[i];
				if (e.type == 'checkbox' && e.name.indexOf('checkboxCol') != -1) {
					if (e.checked == true) {
						b = e.parentNode.parentNode;
						b.style.background = '#FBFBF4';
					} else {
						b = e.parentNode.parentNode;
						b.style.background = '#ffffff';
					}
				}
			}
		}
	</script>
	<script>
		function CheckReverse() {
			var frm = document.aspnetForm;
			var boolAllChecked;
			boolAllChecked = true;
			for (i = 0; i < frm.length; i++) {
				e = frm.elements[i];
				if (e.type == 'checkbox' && e.name.indexOf('checkboxCol') != -1) {
					if (e.checked == false) {
						e.checked = true;
						b = e.parentNode.parentNode;
						b.style.background = '#FBFBF4';
					} else {
						e.checked = false;
						b = e.parentNode.parentNode;
						b.style.background = '#ffffff';
					}
				}
			}
		}
	</script>
	<script>
		function CheckClickAll() {
			var frm = document.aspnetForm;
			for (i = 0; i < frm.length; i++) {
				e = frm.elements[i];
				if (e.type == 'checkbox' && e.name.indexOf('checkboxCol') != -1) {
					e.checked = true;
					b = e.parentNode.parentNode;
					b.style.background = '#FBFBF4';
				}
				if (e.type == 'checkbox'
						&& e.name.indexOf('checkboxHead') != -1) {
					e.checked = true;
				}
			}
		}
	</script>

	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-user"></i>
				会员信息
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-body">
				<div class="btn-toolbar top-table" style="margin-bottom: 0px"
					role="toolbar">
					<div class="btn-group">
						
					</div>
				</div>
				<div class="table-responsive">
					<div class="dataTables_wrapper form-inline">
						<table cellpadding="0" cellspacing="0"
							class="table table-th-block table-hover dataTable">
                            <thead>
								<tr class="diplayth1">
									<th>头像</th>
									<th>昵称</th>
									<th>性别</th>
									<th>城市</th>
									<th>语言</th>
									<th width="160">注册时间</th>
									<th width="160">最后登录时间</th>
								</tr>
							</thead>
							<tbody>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<td><img width="100" height=100 src="<?php echo $_smarty_tpl->tpl_vars['v']->value['avatars'];?>
"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</td>
									<td><?php if ($_smarty_tpl->tpl_vars['v']->value['gender']==1) {?>男<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['gender']==2) {?>女<?php } else { ?>未知<?php }?></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['city'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['language'];?>
</td>
									<td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['reg_time']);?>
</td>
									<td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['last_login_time']);?>
</td>
                            <?php } ?>    
							</tbody>
						</table>
                        <!--page begin-->
						<?php echo $_smarty_tpl->getSubTemplate ('Public/page.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <!--page end-->
                        
					</div>
				</div>
			</div>
		</div>
	</div>



</form>



<!--/主体-->

<script>
	var ctrl = '<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
';
</script>

<script type="text/javascript">
	//全选
	$(function() {
		$("#cbAll").change(function() {
            $("input[type='checkbox']").prop("checked",$(this).is(':checked'));
        });
		BindCB();
        
        $('#btn_delAll').click(function(){
            var str_id = CheckedId();
            if (!str_id) {
                alert('请选择要删除的记录！');
                return false;
            }
            
            if (confirm('确定要执行该删除操作吗？删除后将不可以恢复！')) {
                var url = '?c='+ctrl+'&act=ajaxDel&id=' + str_id;
                var flag = $.ajax({url:url,async:false}).responseText;
                if(!flag){
                    msg = "失败：非法操作！";
                    alert(msg);
                    return false;
                }
                if (isNaN(flag)) {
                    alert('失败：' + flag + '！');
                }
                else
                {
                    alert('成功删除'+flag+'条记录！');
                    location.reload();
                }
            }
            
        });
	});
    
	function BindCB() {
		$(".table tbody input[type='checkbox']").change(
            function() {
                if ($(".table").find("tbody input[type='checkbox']:checked").length == $(".table").find("tbody input[type='checkbox']").length) {
                    $("#cbAll").prop("checked", true);
                } else {
                    $("#cbAll").prop("checked", false);
                }
            }
        );
	}
    
    
    
    function CheckedId() {
        var cv = $(".table tbody input[type='checkbox']");
        var idarray = new Array();
        var m = 0;
        cv.each(function(){
            if($(this).prop("checked") == true){
                idarray[m] = $(this).val();
                m++;
            }
        });
        var tid = idarray.join(",");
        return tid;
    }
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/list.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
