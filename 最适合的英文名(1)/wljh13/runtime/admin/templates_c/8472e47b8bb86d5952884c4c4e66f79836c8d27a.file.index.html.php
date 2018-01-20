<?php /* Smarty version Smarty-3.1.18, created on 2017-09-26 11:02:16
         compiled from "app\admin\view\Admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2762159c9c3384150b4-00650505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8472e47b8bb86d5952884c4c4e66f79836c8d27a' => 
    array (
      0 => 'app\\admin\\view\\Admin\\index.html',
      1 => 1505961947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2762159c9c3384150b4-00650505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rslist' => 0,
    'value' => 0,
    'rslist2' => 0,
    'value2' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c9c3384b1703_50112470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c9c3384b1703_50112470')) {function content_59c9c3384b1703_50112470($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style type="text/css">

/* pop */
#pop{background:#fff;width:260px;border:1px solid #e0e0e0;font-size:12px;position:fixed;right:10px;bottom:10px;}
#popHead{line-height:32px;background:#f6f0f3;border-bottom:1px solid #e0e0e0;position:relative;font-size:12px;padding:0 0 0 10px;}
#popHead h2{font-size:14px;color:#666;line-height:32px;height:32px;margin: 0;}
#popHead #popClose{position:absolute;right:10px;top:1px;}
#popHead a#popClose:hover{color:#f00;cursor:pointer;}
#popContent{padding:5px 10px;}
#popTitle a{line-height:24px;font-size:14px;font-family:'微软雅黑';color:#333;font-weight:bold;text-decoration:none;}
#popTitle a:hover{color:#f60;}
#popIntro{text-indent:24px;line-height:160%;margin:5px 0;color:#666;}
#popMore{text-align:right;border-top:1px dotted #ccc;line-height:24px;margin:8px 0 0 0;}
#popMore a{color:#f60;}
#popMore a:hover{color:#f00;}

.windowsdialog .dialog-word li{list-style-type: none;};
.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"]{margin-left: 0;}
.form-horizontal .radio{padding-top:0;}
@media(max-width:767px)
{
    #yw{display:none}
}

</style>

<!--主体-->
<form name="aspnetForm" method="post" action="?c=Admin&act=add" id="aspnetForm">

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
function CheckChanged(){  
    var frm = document.aspnetForm;  
    var boolAllChecked;  
    boolAllChecked=true;  
    for(i=0;i< frm.length;i++)  {    
        e=frm.elements[i];  
        if ( e.type=='checkbox' && e.name.indexOf('checkboxCol') != -1 ) {        
            if( e.checked == true) {             
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
    var boolAllChecked;  boolAllChecked=true;  
    for(i=0;i< frm.length;i++)  {         
        e=frm.elements[i];     
        if(e.type=='checkbox' && e.name.indexOf('checkboxCol') != -1) {         
            if( e.checked== false) {              
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
    for(i=0;i< frm.length;i++) {         
        e=frm.elements[i];        
        if(e.type=='checkbox' && e.name.indexOf('checkboxCol') != -1) {            
            e.checked= true ;             
            b = e.parentNode.parentNode;             
            b.style.background = '#FBFBF4';            
        }        
        if(e.type=='checkbox' && e.name.indexOf('checkboxHead') != -1) { 
            e.checked= true ;  
        } 
    }  
}
</script>
                


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


                
<div class="panel panel-default" style="margin-top:15px;">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-wrench"></i>  账户管理</h3>
  </div>
  <!--数据列表区域-->
    <div id="panel-collapse-4" class="collapse in" style="height: auto;">
      <div class="panel-body">
           
	       <div class="btn-toolbar top-table" style="margin-bottom:0px" role="toolbar">
                <div class="btn-group"><a href="?c=Admin&act=addzh" class="btn  btn-default"><i class="fa fa-plus"></i> 添加 </a></div>
            </div>
           <div class="table-responsive">
                <div class="dataTables_wrapper form-inline">
                    <table cellspacing="0" border="0" style="width:100%;border-collapse:collapse;" class="table table-th-block table-hover dataTable">
                    <thead>
                        <tr class="table_title"><th style="padding:8px;width: 88px;">账户</th><th style="padding:8px">姓名</th><th style="padding:8px">角色</th><th style="padding:8px">创建时间</th><th style="padding:8px;width: 186px;">操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['rslist']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <?php if ('超级管理员'!=$_smarty_tpl->tpl_vars['value']->value['note']) {?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['real_name'];?>
</td>

                        <?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['value2']->value['id']==$_smarty_tpl->tpl_vars['value']->value['note']) {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['value2']->value['title'];?>
</td>
                        <?php }?>
                        <?php } ?>


                       
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['reg_time'];?>
</td>
                        <td>
                            <a href="?c=Admin&act=editps&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn-default"><i class="fa fa-key"></i>修改密码</a>&nbsp;&nbsp;
                            <a href="?c=Admin&act=editzh&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn-default"><i class="fa fa-edit"></i>编辑</a>&nbsp;&nbsp;
                                                        <a class="btn-default" name="ctl00$contentHolder$rp_prducttag$ctl00$lkbtnDelete" href="javascript:del(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"><i class="fa fa-trash-o"></i>删除</a>
                        </td>
                        </tr>
                        <?php }?>
                        								<?php } ?>
								<?php }?>
                       
                        <script type="text/javascript">
	function del(id)
	{ 
		if (confirm("确定要删除这条数据吗？"))
			$.post("?c=Admin&act=del",{
				id:id},function(data){
					if(data)
						location="?c=Admin";	
				})
			
	}
</script>
            		    </tbody>
                    </table>
                </div>
           </div>
      </div>
    </div>
</div>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<div class="modal fade" id="divexpresscomputers" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
     <div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-header bg-dark no-border">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title"><i class="fa fa-key"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
修改密码</h4>
              </div>
<div class="modal-body form-horizontal" style="padding-bottom: 0;">
       <div class="form-group">                     
            <label class="control-label col-md-3">旧密码：</label>                     
            <div class="col-md-8">      
                <input name="password" type="password" id="ctl00_contentHolder_txtOldPw" class="form-control" placeholder="旧密码">  
            </div>  
            <div class="col-md-1">
                <em style="color:Red">*</em>
            </div>              
        </div>
       <div class="form-group">                     
            <label class="control-label col-md-3">新密码：</label>                     
            <div class="col-md-8">      
                <input name="newpwd" type="password" id="ctl00_contentHolder_txtNewPw" class="form-control" placeholder="新密码"> 
            </div>                 
        </div>
       <div class="form-group">                     
            <label class="control-label col-md-3">确认密码：</label>                     
            <div class="col-md-8">   
                <input name="cmfpwd" type="password" id="ctl00_contentHolder_txtConfirmedPw" class="form-control" placeholder="确认密码">  
            </div>                   
        </div>
        <div class="modal-footer">              
            <div class="col-md-offset-4 col-md-9">
            <input type="submit" name="ctl00$contentHolder$btnOKValue" value="保 存" onclick="return onverify();" id="ctl00_contentHolder_btnOKValue" class="btn btn-primary"></div>         
        </div>
  </div>
</div>
</div>
</div>
                        								<?php } ?>
<input name="ctl00$contentHolder$RoId" type="hidden" id="ctl00_contentHolder_RoId">

            </form>
		</div>

		
        

<!--/主体-->


<script type="text/javascript">
   
    $(function() {
        var pager = new PagerView('pager_div');
        pager.pageSize = 10;
  
        pager.totalRecord = $("#ctl00_contentHolder_Count").val();
        pager.pageIndex = $("#ctl00_contentHolder_PageIndex").val();
        pager.render();
        pager.onclick = function(startIndex, endIndex) {
            var url = window.location.href.replace("&pageindex=" + $("#ctl00_contentHolder_PageIndex").val(), "").replace("?pageindex=" + $("#ctl00_contentHolder_PageIndex").val(), "");
            var pageindex = "&pageindex=";
            if (url.indexOf('?') < 0) {
                pageindex = "?pageindex=";
            }
            window.location.href = url + pageindex + pager.pageIndex;
        }
    });
    //全选
    $(function(){
        $("#ctl00_contentHolder_cbAllProductId").change(function(){
            $("input[type='checkbox']").prop("checked",$(this).is(':checked'));
        });
        BindCB();
    });
    function BindCB(){
        $(".table tbody input[type='checkbox']").change(function(){
            if($(".table").find("tbody input[type='checkbox']:checked").length==$(".table").find("tbody input[type='checkbox']").length){
                $("#ctl00_contentHolder_cbAllProductId").prop("checked",true);
            }else{
                $("#ctl00_contentHolder_cbAllProductId").prop("checked",false);
            }
        });
    }
</script>
<script>var ctrl='{$c}';</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/list.js" ></script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
