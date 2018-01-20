<?php /* Smarty version Smarty-3.1.18, created on 2017-10-19 15:12:20
         compiled from "app\admin\view\Carousel\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1940559e850543cbfc5-52297397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06dca93cebfa2e3f90375c74da30da07615b9bfc' => 
    array (
      0 => 'app\\admin\\view\\Carousel\\add.html',
      1 => 1508380624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940559e850543cbfc5-52297397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'catelist' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59e8505443a9c3_18878468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e8505443a9c3_18878468')) {function content_59e8505443a9c3_18878468($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script charset="utf-8" src="resource/kindeditor/kindeditor-min.js" type="text/javascript"></script>
 <link rel="stylesheet" href="resource/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="resource/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="resource/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="resource/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="resource/kindeditor/plugins/code/prettify.js"></script>
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

<form name="aspnetForm" method="post" action="?c=Carousel&act=save"  id="aspnetForm">

	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-cubes"></i>
				添加幻灯片
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-body">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3">幻灯片名称：</label>
						<div class="col-md-4">
							<input name="title" type="text" id="name" class="form-control" />
							<p id="ctl00_contentHolder_txtBrandNameTip" class="help-block">幻灯片名称不能为空，长度限制在30个字符以内</p>
						</div>
						<div class=" col-md-4">
							<em style="color: Red">*</em>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">文章分类</label>
						<div class="col-md-4">
						<select name="cate_id">
						<option value="0">--请选择--</option>
						<option value="0">--首页--</option>
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
						<?php } ?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">幻灯片图像：</label>
						<div class="col-md-6">
							<span id="ctl00_contentHolder_fileUpload"
								style="display: inline-block;">
								<script charset="utf-8"
									src="resource/kindeditor/kindeditor-min.js"></script>
								<script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/zh_CN.js"></script>
								<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/default.css"
									rel="stylesheet" type="text/css" />
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
									class="form-control" value="" />
								<img style="height: 120px; width: 160px; float: left;" src=""
									id="imglogo_fileUpload" />
								<div style="float: left; margin-top: 34px; margin-left: 20px;">
									<button type="button" class="btn btn-default"
										id="image_fileUpload">
										<i class="fa fa-cloud-upload"></i>
										上传图片
									</button>
									<br />
									<small></small>
								</div>
							</span>
							<small class="help-block" id="txtImgUrlTip"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">详情：</label>
						<div class="col-md-6">
							<textarea id="content" name="content" class="form-control" style="width: 100%;height: 500px; resize: none; border-color: #DDD;"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">排序字段：</label>
						<div class="col-md-4">
							<input name="sort" type="text" value="0" id="ctl00_contentHolder_txtSort" class="form-control num" />
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
							<input type="submit"
								 value="保存并继续添加"
								onclick="return onverify();"
								id="ctl00_contentHolder_btnAddBrandCategory"
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
</div>
<div id="back-top">
	<a href="#top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<div id="wshopft"
		style="width: 100%; height: 100%; position: fixed; display: none; z-index: 10000; background-color: rgba(0, 0, 0, 0.3); top: 0; left: 0;">
		<b
			style="background-color: rgba(0, 0, 0, 0.8); box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.8); width: 50px; height: 50px; display: block; position: absolute; right: 0; border-radius: 0 0 0 50px; font-size: 16px; color: #fff; font-weight: normal; cursor: pointer;"
			onClick="this.parentNode.style.display='none';document.getElementById('phone').style.display='none'">
			<i class="fa fa-times"
				style="position: absolute; display: block; top: 10px; right: 13px;"></i>
		</b>
	</div>
	<div id="phone"
		style="display: none; width: 412px; height: 754px; position: absolute; z-index: 10001; left: 50%; top: 80px; margin-left: -206px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/iPhone320.png); background-repeat: no-repeat;">
		<iframe id="showtmpl"
			style="position: absolute; top: 139px; left: 46px; width: 320px; height: 481px; margin: 0; padding: 0;"
			frameborder="0" scrolling="auto" src=""></iframe>
	</div>
	</body>
	</html><?php }} ?>
