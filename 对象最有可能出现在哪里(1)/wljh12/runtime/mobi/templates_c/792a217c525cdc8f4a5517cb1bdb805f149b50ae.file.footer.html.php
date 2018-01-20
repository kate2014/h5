<?php /* Smarty version Smarty-3.1.18, created on 2016-09-22 17:55:22
         compiled from "app\mobi\webview\Public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2593057e3aa8a354e59-84521278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792a217c525cdc8f4a5517cb1bdb805f149b50ae' => 
    array (
      0 => 'app\\mobi\\webview\\Public\\footer.html',
      1 => 1469698226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2593057e3aa8a354e59-84521278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mall_wxqrcode' => 0,
    'mall_tell' => 0,
    'mall_qq' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e3aa8a374268_01275196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e3aa8a374268_01275196')) {function content_57e3aa8a374268_01275196($_smarty_tpl) {?><!--底部开始-->
	<div class="footer">
		<div class="foot">
			<div class="foot_l">
				<div class="foot_nav">
					<ul>
						<li><a href="?c=NoticeList&act=about&id=5">关于我们</a>|</li>
						<li><a href="?c=NoticeList&act=about&id=6">联系我们</a>|</li>
						<li><a href="?c=NoticeList&id=2">众筹问答</a>|</li>
						<li><a href="?c=NoticeList&act=about&id=7">用户协议</a>|</li>
						<li><a href="?c=NoticeList&act=about&id=8">免责声明</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="foot_c">
					<span>Copyright © 2004-2016 三才实业发展有限公司 版权所有</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span>投资有风险，购买需谨慎</span>
				</div>
			</div>
			<div class="foot_r">
				<div class="qrcode">
					<img src="<?php echo $_smarty_tpl->tpl_vars['mall_wxqrcode']->value;?>
">
					<span>微信公众号</span>
				</div>
				<div class="rx">
					<p>客服热线(工作日 9:00~18:00)</p>
					<h2><?php echo $_smarty_tpl->tpl_vars['mall_tell']->value;?>
</h2>
				</div>
				<div class="qq">
					<p>在线客服&nbsp;<span>(工作日 9:00~18:00)</span></p>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['mall_qq']->value;?>
&site=qq&menu=yes"  target=_blank ><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/qq_btn_2.png"></a>
				</div>
			</div>
		</div>
	</div>
		<!--底部结束-->
</body>
</html>
<?php }} ?>
