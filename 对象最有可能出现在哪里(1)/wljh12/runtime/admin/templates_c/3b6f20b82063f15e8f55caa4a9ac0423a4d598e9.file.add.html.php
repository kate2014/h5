<?php /* Smarty version Smarty-3.1.18, created on 2017-12-25 09:23:51
         compiled from "app\admin\view\Notice\add.html" */ ?>
<?php /*%%SmartyHeaderCode:282735a405327abe6d2-90284888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6f20b82063f15e8f55caa4a9ac0423a4d598e9' => 
    array (
      0 => 'app\\admin\\view\\Notice\\add.html',
      1 => 1514110987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282735a405327abe6d2-90284888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'cate_id' => 0,
    'rslist' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a405327c25d21_32160530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a405327c25d21_32160530')) {function content_5a405327c25d21_32160530($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <link rel="stylesheet" href="resource/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="resource/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="resource/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="resource/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="resource/kindeditor/plugins/code/prettify.js"></script>
<script>
KindEditor.ready(function(K) {
    var editor1 = K.create('textarea[name="advantage"]', {
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

<style type="text/css">
/* pop */
#pop {
	background: #fff;
	width: 260px;
	border: 1px solid #e0e0e0;
	font-size: 12px;
	position: fixed;
	right: 10px;
	bottom: 10px;
}

#popHead {
	line-height: 32px;
	background: #f6f0f3;
	border-bottom: 1px solid #e0e0e0;
	position: relative;
	font-size: 12px;
	padding: 0 0 0 10px;
}

#popHead h2 {
	font-size: 14px;
	color: #666;
	line-height: 32px;
	height: 32px;
	margin: 0;
}

#popHead #popClose {
	position: absolute;
	right: 10px;
	top: 1px;
}

#popHead a#popClose:hover {
	color: #f00;
	cursor: pointer;
}

#popContent {
	padding: 5px 10px;
}

#popTitle a {
	line-height: 24px;
	font-size: 14px;
	font-family: '微软雅黑';
	color: #333;
	font-weight: bold;
	text-decoration: none;
}

#popTitle a:hover {
	color: #f60;
}

#popIntro {
	text-indent: 24px;
	line-height: 160%;
	margin: 5px 0;
	color: #666;
}

#popMore {
	text-align: right;
	border-top: 1px dotted #ccc;
	line-height: 24px;
	margin: 8px 0 0 0;
}

#popMore a {
	color: #f60;
}

#popMore a:hover {
	color: #f00;
}

.windowsdialog .dialog-word li {
	list-style-type: none;
}

;
.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]
	{
	margin-left: 0;
}

.form-horizontal .radio {
	padding-top: 0;
}

@media ( max-width :767px) {
	#yw {
		display: none
	}
}

</style>

<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/plugins.css" rel="stylesheet" type="text/css" />



<script type="text/javascript">
	function onverify() {
		var txtTypeName = $("#ctl00_contentHolder_txtTypeName");

		if (txtTypeName.val() == "") {
			txtTypeName.parent().parent().addClass("has-error");
			txtTypeName.focus();
			return false;
		} else {
			txtTypeName.parent().parent().removeClass("has-error");
		}

		return true;
	}
	$(function() {
		var pa = $("#pa");
		console.log(pa.html() != "");
		if (pa.html() != "") {
			pa.removeClass("hide");
		} else {
			pa.addClass("hide");
		}

	});
</script>

<form name="aspnetForm" method="post" action="?c=Notice&act=save&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
" id="aspnetForm">

	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-cubes"></i>
				添加文章
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-body">

				<div class="alert alert-warning" style="display:none">
					<strong>提示： </strong>
					<p>底部类型是一系属性的组合，可以用来向顾客展示某些底部具有的特有的属性，一个底部类型下可添加多种属性.一种是供客户查看的扩展属性,如图书类型底部的作者，出版社等，一种是供客户可选的规格,如服装类型底部的颜色、尺码。</p>
				</div>
				<div class="panel panel-default with-nav-tabs"
					style="margin-top: 15px;">
					<div class="panel-heading" id="pa"></div>
					<div class="tab-content form-horizontal" style="margin-top: 15px;">
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">文章标题</label>
								<div class="col-md-4">
									<input name="title" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="长度限制在1-30个字符之间" class="form-control" />
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['cate_id']->value==3) {?>
							<div class="form-group">
								<label class="control-label col-md-3">宣传口号</label>
								<div class="col-md-4">
									<input name="note1" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="长度限制在1-30个字符之间" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">补充说明</label>
								<div class="col-md-4">
									<input name="note2" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="长度限制在1-30个字符之间" class="form-control" />
								</div>
							</div>
							<?php }?>
							<div class="form-group">
								<label class="control-label col-md-3">文章分类</label>
							<div class="col-md-4">
							<select name="cate_id">
                            <option value="0">--请选择--</option>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['cate_id']->value==$_smarty_tpl->tpl_vars['value']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                            <?php } ?>
                            </select>
							</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">顶部图片</label>
								<div class="col-md-6">
									<span id="ctl00_contentHolder_fileUpload" style="display: inline-block;">
										<script charset="utf-8" src="resource/kindeditor/kindeditor-min.js"></script>
										<script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/zh_CN.js"></script>
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

										<input type="hidden" id="url_fileUpload" name="thumb" class="form-control" value="" />
										<img style="height: 120px; width: 160px; float: left;" src=""
												id="imglogo_fileUpload" />
										<div style="float: left; margin-top: 34px; margin-left: 20px;">
											<button type="button" class="btn btn-default" id="image_fileUpload">
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
							
							<!-- <div class="form-group">
								<label class="control-label col-md-3">文章内容</label>
								<div class="col-md-4" style="width:60%">
									<textarea id="content" name="content" type="text/plain" style="width:100%;height:350px;max-height:200px;display:inline-block;"></textarea> 
								</div>
							</div> -->
							<!-- <?php if ($_smarty_tpl->tpl_vars['cate_id']->value==3||$_smarty_tpl->tpl_vars['cate_id']->value==2) {?>
							<div class="form-group">
								<label class="control-label col-md-3"><?php if ($_smarty_tpl->tpl_vars['cate_id']->value==2) {?>招聘信息<?php } else { ?>产品优势<?php }?></label>
								<div class="col-md-4" style="width:60%">
									<textarea id="content" name="advantage" type="text/plain" style="width:100%;height:350px;max-height:200px;display:inline-block;"></textarea> 
								</div>
							</div>
							<?php }?> -->
							
							<!--<div class="form-group">
								<label class="control-label col-md-3">排序字段：</label>
								<div class="col-md-4">
									<input name="cate_id" type="text" value="0"
										id="ctl00_contentHolder_txtSort" class="form-control num" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">是否启用：</label>
								<div class="col-md-4">
									<select name="content" id="ctl00_contentHolder_ddlRecommend"
										class="form-control productType">
										<option selected="selected" value="1">是</option>
										<option value="0">否</option>

									</select>
								</div>
							</div>-->
						</div>
						<div class="form-group">
							<div class="col-md-offset-4 col-md-9">
								<input type="submit" value="保存" onclick="return onverify();"
									class="btn btn-primary" />
							</div>
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
</div>
<script type="text/javascript">

!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#demo'});//绑定元素
}();


//日期范围限制
var start = {
    elem: '#start',
    format: 'YYYY-MM-DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};

var end = {
    elem: '#end',
    format: 'YYYY-MM-DD',
    min: laydate.now(),
    max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，充值开始日的最大日期
    }
};
laydate(start);
laydate(end);

//自定义日期格式
laydate({
    elem: '#test1',
    format: 'YYYY年MM月DD日',
    festival: true, //显示节日
    choose: function(datas){ //选择日期完毕的回调
        alert('得到：'+datas);
    }
});

//日期范围限定在昨天到明天
laydate({
    elem: '#hello3',
    min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
});
</script>

<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap.min.js" Charset="utf-8"></script>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/retina.min.js" Charset="utf-8"></script>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.nicescroll.js" Charset="utf-8"></script>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.slimscroll.min.js" Charset="utf-8"></script>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.blockui.min.js" Charset="utf-8"></script>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.pop.js" Charset="utf-8"></script>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/demo-panel.js" Charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/apps.js"
	Charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/bootstrap-datepicker.zh-CN.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/globals.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/windows.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/pagerView.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/jquery.tmpl.js"
	type="text/javascript"></script>

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
</html>
<?php }} ?>
