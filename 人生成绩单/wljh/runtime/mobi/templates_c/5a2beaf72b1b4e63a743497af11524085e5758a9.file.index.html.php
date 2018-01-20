<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 14:48:49
         compiled from "app\mobi\webview\Forget\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26645579859514da953-69789920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a2beaf72b1b4e63a743497af11524085e5758a9' => 
    array (
      0 => 'app\\mobi\\webview\\Forget\\index.html',
      1 => 1469588605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26645579859514da953-69789920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57985951530860_40692593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57985951530860_40692593')) {function content_57985951530860_40692593($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/confirm.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/main.js" Charset="utf-8"></script>
<!--内容页开始-->
	<div class="content">
		<div class="zc_left">
			<div class="zc_lcon">
				<h1>找回密码</h1>
				<div id="err"></div>
				<form action="" method="post" id="aspnetForm" >
					<table>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;手机号：</td>
							<td><input type="text" name="phone" class="zc_tx" id="SellerRegister_txtPhone" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" ></td>
						</tr>
						<tr>
							<td></td>
							<td class="zx">&nbsp;</td>
						</tr>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;手机验证码：</td>
							<td>
								<div class="p_all"><input type="text" id="phone_tx" name="phone_tx" ><input type="button" id="msg_send" value="&nbsp;免费发送验证码&nbsp;" ></div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td class="zx">&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<a type="submit" class="zc_btn button-reg" href="#" id="zc_btn" value="提交" >提交</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>
		<div class="zc_right">
			<div class="zc_fcon">
				<div class="zc_fr_dl">
				<span>记得账号密码？请直接登录</span>&nbsp;&nbsp;
				<a type="submit" id="fr_btn" value="登录" >登陆</a>
				</div>
				<div class="zc_fr_tu"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/zc_icon.png"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<!--内容结束-->
	<script>
			$("#zc_btn").click(function() {

				var phone = $("#SellerRegister_txtPhone").val();
				var phone_tx = $("#phone_tx").val();

				if ($("#SellerRegister_txtPhone").val().length != 11) {

					$("#err").html("请正确输入手机号码");

					$("#err").show();


				}else if(phone_tx=""){
					$("#err").html("请输入手机验证码");

					$("#err").show();
				} else {

					$.post("?c=Forget&act=check", $("#aspnetForm").serialize(), function(data) {
						if (data['success']) {
							$("#err").html(data['msg']);

							$("#err").show();
							location.href='?c=Forget&act=modify&phone='+phone+'&mt='+data['mt'];

						}else{
							$("#err").html(data['msg']);

							$("#err").show();
						}

					},'json');
				}

			});
			$("#aspnetForm input").click(function(){
				$("#err").html("");
				$("#err").show();
			});

			$('#SellerRegister_txtPhone').blur(function(){
				$.post("?c=Forget&act=checkPhone", $("#aspnetForm").serialize(), function(data) {
					if (!data['success']) {
						$("#err").html(data['msg']);

						$("#err").show();
					};
					
				},'json');
			});
			
		</script>

		 <script type="text/javascript">
			var i = 120;
			$('#msg_send').click(function(){
				var phone = $("#SellerRegister_txtPhone").val();
				if ($("#SellerRegister_txtPhone").val().length != 11) {

					$("#err").html("请正确输入手机号码");

					$("#err").show();

				}else{
					$.post("?c=Forget&act=checkPhone", $("#aspnetForm").serialize(), function(data) {
					if (data['success']) {
						$.post("?c=Forget&act=send_forget", $("#aspnetForm").serialize(), function(msg) {
							if (msg['success']) {
								$("#err").html(msg['msg']);
								$("#err").show();
								$('#msg_send').attr("disabled","disabled");
								remainTimess();
							}else{
								$("#err").html(msg['msg']);
								$("#err").show();
							};
						},'json');
					}else{
						$("#err").html(data['msg']);
						$("#err").show();
					};
					
				},'json');
				}
			});
		 </script>
		<script type="text/javascript">
			var ii = 3;  
			function remainTimes(phone,mt){  
			    if(ii==0){  
			        location.href='?c=Forget&act=modify&phone='+phone+'&mt='+mt;  
			        return false;
			    }  
			    document.getElementById('zc_btn').innerHTML=ii--;  
			    setTimeout("remainTimes()",1000);  
			}
		</script>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
