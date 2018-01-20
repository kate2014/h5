<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 14:46:10
         compiled from "app\admin\view\Carousel\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:105995a166eb20aadb7-09489459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9826f50fb21e2c360f37e02eb4d749ff95c76a16' => 
    array (
      0 => 'app\\admin\\view\\Carousel\\edit.html',
      1 => 1511233865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105995a166eb20aadb7-09489459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'rs' => 0,
    'success' => 0,
    'failed' => 0,
    'catelist' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a166eb22187c8_12958963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a166eb22187c8_12958963')) {function content_5a166eb22187c8_12958963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script charset="utf-8" src="resource/kindeditor/kindeditor-min.js" type="text/javascript"></script>
<script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/zh_CN.js" type="text/javascript"></script>
<script>
KindEditor.ready(function(K) {
    var editor1 = K.create('textarea[name="mall_note"]', {
		cssPath : 'resource/kindeditor/plugins/code/prettify.css',
        uploadJson : 'resource/kindeditor/php/upload_json.php',
        fileManagerJson : 'resource/kindeditor/php/file_manager_json.php',
        allowFileManager : true,
        afterCreate : function() {
            var self = this;
            K.ctrl(document, 13, function() {
                self.sync();
                K('form[name=add_form]')[0].submit();
            });
            K.ctrl(self.edit.doc, 13, function() {
                self.sync();
                K('form[name=add_form]')[0].submit();
            });
        }
    });
	var editor2 = K.create('textarea[name="content"]', {
		cssPath : 'resource/kindeditor/plugins/code/prettify.css',
        uploadJson : 'resource/kindeditor/php/upload_json.php',
        fileManagerJson : 'resource/kindeditor/php/file_manager_json.php',
        allowFileManager : true,
        afterCreate : function() {
            var self = this;
            K.ctrl(document, 13, function() {
                self.sync();
                K('form[name=add_form]')[0].submit();
            });
            K.ctrl(self.edit.doc, 13, function() {
                self.sync();
                K('form[name=add_form]')[0].submit();
            });
        }
    });
    prettyPrint();
});
</script>
<script type="text/javascript">
	    var editor;
	    KindEditor.ready(function(K) {
	        editor = K.create('textarea[calss="content"]', {
	            resizeType: 1,
	            allowPreviewEmoticons: false,
	            items: [
				    'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				    'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				    'insertunorderedlist', '|', 'image', 'link']
	        });
	    });
	    
	    function onverify(){
            var txtBrandName=$("#name");
           
            if(txtBrandName.val()==""){
                txtBrandName.parent().parent().addClass("has-error");
                txtBrandName.focus();
                return false;
            }else{
                txtBrandName.parent().parent().removeClass("has-error");
            }
            
            return true;
        }
    </script>
      <form name="aspnetForm" method="post" action="?c=Carousel&act=save" id="aspnetForm">
        <div>
          <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['rs']->value['id'])) {?> <?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
 <?php }?>"/>
        
        </div>
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-cubes"></i> 添加幻灯片</h3>
          </div>
          <div id="panel-collapse-4" class="collapse in" style="height: auto;">
          
            <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
			<div class="alert alert-success alert-block fade in alert-dismissable" >
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</strong>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['failed']->value)) {?>
			<div class="alert alert-danger alert-block fade in alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong><?php echo $_smarty_tpl->tpl_vars['failed']->value;?>
</strong>
			</div>
			<?php }?>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="control-label col-md-3">幻灯片名称：</label>
                  <div class="col-md-4">
                    <input name="title" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" type="text" id="name" class="form-control" />
                    <p id="ctl00_contentHolder_txtBrandNameTip" class="help-block"></p>
                  </div>
                  <div class=" col-md-4"> <em style="color:Red">*</em> </div>
                </div>
				<div class="form-group">
								<label class="control-label col-md-3">文章分类</label>
							<div class="col-md-4">
							<select name="cate_id">
                            <option value="0">--请选择--</option>
						<option <?php if ($_smarty_tpl->tpl_vars['rs']->value['cate_id']==0) {?>selected="selected"<?php }?> value="0">--首页--</option>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['rs']->value['cate_id']==$_smarty_tpl->tpl_vars['value']->value['id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                            <?php } ?>
                            </select>
							</div>
							</div>
                <div class="form-group">
                  <label class="control-label col-md-3">幻灯片图像：</label>
                  <div class="col-md-6"> <span id="ctl00_contentHolder_fileUpload" style="display:inline-block;"><script charset="utf-8" src="resource/kindeditor/kindeditor-min.js"></script><script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/zh_CN.js"></script>
                    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/default.css" rel="stylesheet" type="text/css" />
                    <script>
									KindEditor.ready(function(K) {
										var editor = K.editor({
											allowFileManager : true
										});
										K('#image_fileUpload').click(function() {
											editor.loadPlugin('image', function() {
												editor.plugin.imageDialog({
													imageUrl : K('#url_fileUpload').val(),
													clickFn : function(url, title, width, height, border, align) {
														$('#url_fileUpload').val(url);
														$("#imglogo_fileUpload").attr("src",url);
														editor.hideDialog();
													}
												});
											});
										});
									});
								</script>
								
								<input type="hidden" id="url_fileUpload" name="thumb"
									class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['thumb'];?>
" />
                    <img  style=" height:120px; width:160px;float:left; " src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['thumb'];?>
" id="imglogo_fileUpload"/>
                    <div style="float: left;margin-top: 34px;margin-left: 20px;">
                      <button type="button" class="btn btn-default" id="image_fileUpload" ><i class="fa fa-cloud-upload"></i>上传图片</button>
                      <small></small></div>
                    </span> <small class="help-block" id="txtImgUrlTip"></small> </div>
                </div>
                <div class="form-group">
						<label class="control-label col-md-3">详情：</label>
						<div class="col-md-6">
							<textarea id="content" name="content" class="form-control" style="width: 100%; height: 500px; resize: none; border-color: #DDD;"><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">是否跳转详情：</label>
						<div class="col-md-4">
							<select name="islink" id="ctl00_contentHolder_ddlRecommend" class="form-control productType">
								<option <?php if ($_smarty_tpl->tpl_vars['rs']->value['islink']==1) {?>selected="selected"<?php }?> value="1">是</option>
								<option <?php if ($_smarty_tpl->tpl_vars['rs']->value['islink']==0) {?>selected="selected"<?php }?> value="0">否</option>

							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">排序字段：</label>
						<div class="col-md-4">
							<input name="sort" type="text" value="0"
								id="ctl00_contentHolder_txtSort" class="form-control num" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">是否启用：</label>
						<div class="col-md-4">
							<select name="status" id="ctl00_contentHolder_ddlRecommend" class="form-control productType">
								<option selected="selected" value="1">是</option>
								<option value="0">否</option>

							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-4 col-md-9">
							<input type="submit" value="保 存" onclick="return onverify();"
								id="ctl00_contentHolder_btnSave" class="btn btn-primary" />
							<input type="button"
								 value="返回"
								onclick="location.href='?c=Carousel'"
								class="btn btn-primary" />
						</div>
					</div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
 <?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
