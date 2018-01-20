<?php /* Smarty version Smarty-3.1.18, created on 2017-12-19 14:08:57
         compiled from "app\admin\view\Kefu\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:10815a38acf900ab14-08567023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b285d4530920224839457aa56aca236fdfe7e725' => 
    array (
      0 => 'app\\admin\\view\\Kefu\\edit.html',
      1 => 1513663714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10815a38acf900ab14-08567023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'rs' => 0,
    'success' => 0,
    'failed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a38acf9191570_48533020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38acf9191570_48533020')) {function content_5a38acf9191570_48533020($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="resource/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="resource/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="resource/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="resource/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="resource/kindeditor/plugins/code/prettify.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/appointed/laydate.js"></script>

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

<form name="aspnetForm" method="post" action="?c=Kefu&act=save"
	id="aspnetForm">
	<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['rs']->value['id'])) {?> <?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
 <?php }?>"/>
	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-cubes"></i>
				客服管理
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
					<?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
					<div
						class="alert alert-success alert-block fade in alert-dismissable">
						<button type="button" class="close" data-dismiss="alert"
							aria-hidden="true">×</button>
						<strong><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</strong>
					</div>
					<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['failed']->value)) {?>
					<div
						class="alert alert-danger alert-block fade in alert-dismissable">
						<button type="button" class="close" data-dismiss="alert"
							aria-hidden="true">×</button>
						<strong><?php echo $_smarty_tpl->tpl_vars['failed']->value;?>
</strong>
					</div>
					<?php }?>
					<div class="tab-content form-horizontal" style="margin-top: 15px;">
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">标题</label>
								<div class="col-md-4">
									<input name="title" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">电话</label>
								<div class="col-md-4">
									<input name="phone" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="长度限制在1-30个字符之间" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['phone'];?>
" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">微信</label>
								<div class="col-md-4">
									<input name="weixin" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['weixin'];?>
"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">地址</label>
								<div class="col-md-4">
									<input name="dizhi" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['dizhi'];?>
"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">QQ号码</label>
								<div class="col-md-4">
									<input name="qq" type="text" maxlength="30" id="ctl00_contentHolder_txtTypeName" placeholder="" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['qq'];?>
"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-4 col-md-9">
								<input type="submit" value="保存" onclick="return onverify();"
									class="btn btn-primary" />
								<input type="button" value="返回" onclick="location='?c=Kefu'"
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
