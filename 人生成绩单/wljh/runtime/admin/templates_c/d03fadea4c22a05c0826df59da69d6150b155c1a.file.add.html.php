<?php /* Smarty version Smarty-3.1.18, created on 2017-12-24 18:18:30
         compiled from "app\admin\view\Notice_Cate\add.html" */ ?>
<?php /*%%SmartyHeaderCode:141615a3f7ef61d2625-01258230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd03fadea4c22a05c0826df59da69d6150b155c1a' => 
    array (
      0 => 'app\\admin\\view\\Notice_Cate\\add.html',
      1 => 1511233864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141615a3f7ef61d2625-01258230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'cateList' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a3f7ef630ecf9_10341766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3f7ef630ecf9_10341766')) {function content_5a3f7ef630ecf9_10341766($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
resource/css/plugins.css" rel="stylesheet"
	type="text/css" />



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

<form name="aspnetForm" method="post" action="?c=Notice_Cate&act=save"
	id="aspnetForm">

	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-cubes"></i>
				添加文章分类
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-body">

				<div class="alert alert-warning" style="display:none">
					<strong>提示： </strong>
					<p>文章分类是一系属性的组合，可以用来向顾客展示某些底部具有的特有的属性，一个文章分类下可添加多种属性.一种是供客户查看的扩展属性,如图书类型底部的作者，出版社等，一种是供客户可选的规格,如服装类型底部的颜色、尺码。</p>
				</div>
				<div class="panel panel-default with-nav-tabs"
					style="margin-top: 15px;">
					<div class="panel-heading" id="pa"></div>
					<div class="tab-content form-horizontal" style="margin-top: 15px;">
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">文章分类名称</label>
								<div class="col-md-4">
									<input name="name" type="text" maxlength="30"
										id="ctl00_contentHolder_txtTypeName"
										placeholder="长度限制在1-30个字符之间" class="form-control" />
								</div>
							</div>
							<div class="form-group">
							<label class="control-label col-md-3">上级分类：</label>
							<div class="col-md-4">
								<select name=pid id="pid" class="form-control productType">
									<option value="0">--顶级--</option>
									<?php if (isset($_smarty_tpl->tpl_vars['cateList']->value)) {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" >
					              	 <?php echo $_smarty_tpl->tpl_vars['value']->value["space"];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value["branch"];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value["name"];?>

					                </option>
									<?php } ?>
									<?php }?>

								</select>
							</div>
						</div>
							<div class="form-group">
								<label class="control-label col-md-3">是否单页：</label>
								<div class="col-md-4">
									<select name="onepages" id="ctl00_contentHolder_ddlRecommend"
										class="form-control productType">
										<option  value="1">是</option>
										<option selected="selected" value="0">否</option>

									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">支持栏目图：</label>
								<div class="col-md-4">
									<select name="banner" id="ctl00_contentHolder_ddlRecommend"
										class="form-control productType">
										<option value="1">是</option>
										<option selected="selected" value="0">否</option>
									</select>
									<small>每个栏目（分类）顶部的图片</small>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-4 col-md-9">
								<input type="submit" value="保存" onclick="return onverify();" class="btn btn-primary" />
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
