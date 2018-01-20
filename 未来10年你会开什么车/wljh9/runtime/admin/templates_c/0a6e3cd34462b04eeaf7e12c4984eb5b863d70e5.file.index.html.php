<?php /* Smarty version Smarty-3.1.18, created on 2018-01-02 14:10:53
         compiled from "app\admin\view\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:304175a4b226d55cef9-60945857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6e3cd34462b04eeaf7e12c4984eb5b863d70e5' => 
    array (
      0 => 'app\\admin\\view\\Index\\index.html',
      1 => 1511233865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304175a4b226d55cef9-60945857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'server_url' => 0,
    'order' => 0,
    'goods' => 0,
    'user' => 0,
    'day_data' => 0,
    'day_datas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a4b226d6242a2_58516013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4b226d6242a2_58516013')) {function content_5a4b226d6242a2_58516013($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/morris.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/morris.css">
<style type="text/css">
.font18 {
	font-size: 14PX;
	font-weight: bold;
	margin-top: 3%;
}

.boxtu {
	padding-right: 0px;
	padding-left: 0px;
	margin-bottom: 0px;
}

.boxwe {
	height: 144px;
	text-align: center;
	margin: 0px !important
}

.boxtes {
	margin-bottom: 0px
}
</style>


<form name="aspnetForm" method="post" action=""
    id="aspnetForm">
    <div class="panel panel-default" style="margin-top: 15px;">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-shopping-cart"></i>
                网站信息
            </h3>
        </div>
        <div id="panel-collapse-4" class="collapse in"
            style="height: auto;">
            <div class="panel-body">
                <div id="DivMsg"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-6 breadcrumb warning">
                            <label class="control-label col-md-3">域名：</label>
                            <div class="col-md-9">
                                <a href="#" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['server_url']->value;?>
</a>
                            </div>
                        </div>
                        <div class="form-group col-md-6 breadcrumb warning">
                            <label class="control-label col-md-4">后台管理地址：</label>
                            <div class="col-md-8">
                                <a href="/">http://<?php echo $_smarty_tpl->tpl_vars['server_url']->value;?>
/sys/</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="col-md-4"
                            style="padding-right: 0px; padding-left: 2px;">
                            <div class="col-xs-6 boxtu">
                                <div class="tiles dribbble-tile text-center boxtes">
                                    <i class="fa fa-edit icon-lg-size"></i>
                                    <h4>
                                        <a>订单统计</a>
                                    </h4>
                                </div>
                            </div>
                            <div
                                class="col-xs-5 boxwe the-box default margin mansory-inner">
                                <div class="font18" style="margin-top: 2px">待付款订单: <?php echo $_smarty_tpl->tpl_vars['order']->value[0];?>
</div>
                                <div class="font18">待发货订单: <?php echo $_smarty_tpl->tpl_vars['order']->value[1];?>
</div>
                                <div class="font18">已完成订单: <?php echo $_smarty_tpl->tpl_vars['order']->value[2];?>
</div>
                                <div class="font18">退货订单: <?php echo $_smarty_tpl->tpl_vars['order']->value[3];?>
</div>
                            </div>
                        </div>
                        <div class="col-md-4"
                            style="padding-right: 0px; padding-left: 2px;">
                            <div class="col-xs-6 boxtu">
                                <div class="tiles linkedin-tile text-center boxtes">
                                    <i class="fa fa-cubes icon-lg-size"></i>
                                    <h4>
                                        <a>商品统计</a>
                                    </h4>
                                </div>
                            </div>
                            <div
                                class="col-xs-5 the-box default margin mansory-inner boxwe">
                                <div class="font18" style="margin-top: 2px" :>出售中的商品：
                                    <?php echo $_smarty_tpl->tpl_vars['goods']->value[0];?>
</div>
                                <div class="font18">下架区的商品: <?php echo $_smarty_tpl->tpl_vars['goods']->value[1];?>
</div>
                                <div class="font18">仓库中的商品: <?php echo $_smarty_tpl->tpl_vars['goods']->value[2];?>
</div>
                                <div class="font18">回收站中的商品: <?php echo $_smarty_tpl->tpl_vars['goods']->value[3];?>
</div>
                            </div>
                        </div> -->
                        <div class="col-md-4"
                            style="padding-right: 0px; padding-left: 2px;">
                            <div class="col-xs-6 boxtu">
                                <div class="tiles facebook-tile text-center boxtes">
                                    <i class="fa fa-file-text icon-lg-size"></i>
                                    <h4>
                                        <a>会员统计</a>
                                    </h4>
                                </div>
                                <!-- /.tiles .facebook-tile -->
                            </div>
                            <div
                                class="col-xs-5 the-box default margin mansory-inner boxwe">
                                <div class="font18">今天新增会员数: <?php echo $_smarty_tpl->tpl_vars['user']->value[0];?>
</div>
                                <div class="font18">总会员数: <?php echo $_smarty_tpl->tpl_vars['user']->value[1];?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    style="width: 100%; height: 40px; border-bottom: 1px solid #03761e; line-height: 40px; font-size: 15px; color: #03761e">
                    新增会员数:</div>
                <div class="table-toolbar">
                    <div id="container" style="height: 300px;"></div>
                </div>
                <!-- <div
                    style="width: 100%; height: 40px; border-bottom: 1px solid #0C9AAD; line-height: 40px; font-size: 15px; color: #0C9AAD">
                    订单:</div> -->
                <!-- <div class="table-toolbar">
                    <div id="OrderForm" style="height: 300px"></div>
                </div> -->
            </div>
        </div>
    </div>
    
</form>
       
<script>
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var day_data = eval(<?php echo $_smarty_tpl->tpl_vars['day_data']->value;?>
);
Morris.Line({
  element: 'container',
  data: day_data,
  xkey: 'period',
  ykeys: ['licensed'],
  labels: ['注册数量']
});
</script>
<script>
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var day_datas = eval(<?php echo $_smarty_tpl->tpl_vars['day_datas']->value;?>
);
Morris.Line({
  element: 'OrderForm',
  data: day_datas,
  xkey: 'period',
  ykeys: ['licensed'],
  labels: ['下单数量']
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
