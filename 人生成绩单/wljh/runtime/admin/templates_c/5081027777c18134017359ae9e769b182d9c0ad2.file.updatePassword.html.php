<?php /* Smarty version Smarty-3.1.18, created on 2017-09-26 11:01:58
         compiled from "app\admin\view\Admin\updatePassword.html" */ ?>
<?php /*%%SmartyHeaderCode:1489259c9c326163508-11531935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5081027777c18134017359ae9e769b182d9c0ad2' => 
    array (
      0 => 'app\\admin\\view\\Admin\\updatePassword.html',
      1 => 1505961947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1489259c9c326163508-11531935',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c9c3261a7f91_72171010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c9c3261a7f91_72171010')) {function content_59c9c3261a7f91_72171010($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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




<form action="?c=admin&act=savezhPassword" method="post" onsubmit="return checkform()">
    <input type="hidden" name="id" value="<?php echo $_SESSION['admin_id'];?>
" />
    <div class="panel panel-default" style="margin-top:15px;">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-cog"></i>  修改密码</h3>
        </div>
	    <div id="panel-collapse-4" class="collapse in" style="height: auto;">
	      <div class="panel-body">
               
		       <div class="form-horizontal">
                <div class="form-group">                     
                    <label class="control-label col-md-3">旧密码</label>                     
                    <div class="col-md-4">
                        <input name="password" id="password" value="" type="password" class="form-control" placeholder="旧密码" /> 
                    </div>                 
                </div>
                <div class="form-group">                     
                    <label class="control-label col-md-3">新密码</label>                     
                    <div class="col-md-4">
                        <input name="newpwd" id="newpwd" value="" type="password" class="form-control" placeholder="新密码" /> 
                    </div>                 
                </div>
                <div class="form-group">                     
                    <label class="control-label col-md-3">确认密码</label>                     
                    <div class="col-md-4">      
                        <input name="cmfpwd" type="password" id="cmfpwd" class="form-control" placeholder="确认密码" />  
                    </div>                 
                </div> 
                <div class="form-actions fluid">              
                    <div class="col-md-offset-4 col-md-9">
                        <input type="submit" value="确定" class="btn btn-primary" />
                    </div>    
                </div>
		       </div>
	      </div>
	    </div>
    </div>
    
    
            </form>
            
<script type="text/javascript">

function checkform(){
    if(!$('#password').val()){
        alert('密码不能为空！');
        return false;
    }
    if(!$('#newpwd').val()){
        alert('新密码不能为空！');
        return false;
    }
    if(!$('#cmfpwd').val()){
        alert('确认密码不能为空！');
        return false;
    }
    if($('#newpwd').val()!=$('#cmfpwd').val()){
        alert('新密码和确认密码不一样！');
        return false;
    }
}

</script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
