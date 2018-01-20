<?php /* Smarty version Smarty-3.1.18, created on 2016-09-22 17:55:17
         compiled from "app\mobi\webview\GoodsList\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2661757e3aa856555b2-69631220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd038a46b6363c7d7d8935a6826b3874ae6df360e' => 
    array (
      0 => 'app\\mobi\\webview\\GoodsList\\index.html',
      1 => 1469602449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2661757e3aa856555b2-69631220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_success' => 0,
    'v' => 0,
    'page' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e3aa857c0a83_78893242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e3aa857c0a83_78893242')) {function content_57e3aa857c0a83_78893242($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--内容页开始-->
	<div class="pj_list">
	<div class="content">
		<div class="crumb">
			<p><font color="#1178ca">您的位置</font>&nbsp;:&nbsp;案例中心></p>
		</div>
		<div class="p_list">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_success']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<li><a href="?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" width="278px" height="218px">
					<div class="p_msg">
						<h2><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h2>
						<p>其他收益:<?php echo $_smarty_tpl->tpl_vars['v']->value['describe'];?>
</p>
						<div class="lin1"></div>
						<table>
							<tr>
								<th><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['percent']);?>
%</th>
								<th>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['money'];?>
</th>
								<th>0天</th>
							</tr>
							<tr>
								<td>已筹得</td>
								<td>金额</td>
								<td>剩余时间</td>
							</tr>
						</table>
						<div class="jdt"><div class="jds" style="width:<?php echo $_smarty_tpl->tpl_vars['v']->value['percent'];?>
;border-radius: 5px;"></div></div>
					</div>
				</a></li>
				<?php } ?>
				<div class="clear"></div>
			</ul>
			
		</div>
		<div id="pager_div"></div>
	</div>
	</div>
	<!--内容结束-->
<input type="hidden" name="ctl00$contentHolder$Count" id="ctl00_contentHolder_Count" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['rowtotal'];?>
" />
<input type="hidden" name="ctl00$contentHolder$PageIndex" id="ctl00_contentHolder_PageIndex" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['nowpage'];?>
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
			BindCB();
		});

		//全选
		$("#ctl00_contentHolder_cbAllProductId").change(
				function() {
					$("input[type='checkbox']").prop("checked",
							$(this).is(':checked'));
				});
		function BindCB() {
			$(".table tbody input[type='checkbox']")
					.change(
							function() {
								if ($(".table").find(
										"tbody input[type='checkbox']:checked").length == $(
										".table").find(
										"tbody input[type='checkbox']").length) {
									$("#ctl00_contentHolder_cbAllProductId")
											.prop("checked", true);
								} else {
									$("#ctl00_contentHolder_cbAllProductId")
											.prop("checked", false);
								}
							});
		}
	</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/pagerView.js" ></script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
