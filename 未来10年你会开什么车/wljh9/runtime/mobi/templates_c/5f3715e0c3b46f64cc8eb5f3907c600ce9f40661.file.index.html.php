<?php /* Smarty version Smarty-3.1.18, created on 2016-09-07 17:59:00
         compiled from "app\mobi\webview\Register\index.html" */ ?>
<?php /*%%SmartyHeaderCode:317357cfe4e43ba8c6-00343183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3715e0c3b46f64cc8eb5f3907c600ce9f40661' => 
    array (
      0 => 'app\\mobi\\webview\\Register\\index.html',
      1 => 1471924265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317357cfe4e43ba8c6-00343183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cfe4e4427ee8_44330235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cfe4e4427ee8_44330235')) {function content_57cfe4e4427ee8_44330235($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/confirm.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/main.js" Charset="utf-8"></script>
<!--内容页开始-->
	<div class="content">
		<div class="zc_left">
			<div class="zc_lcon">
				<h1>注册新用户</h1>
				<div id="err"></div>
				<form action="" method="post" id="aspnetForm" >
					<table>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;用户名：</td>
							<td><input type="text" name="account" class="zc_tx" id="SellerRegister_txtUserName" ></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="zx">请输入邮箱/用户名/手机号</td>
						</tr>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;设置密码：</td>
							<td><input type="password" id="SellerRegister_txtPassword" name="password" class="zc_tx" ></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="zx">6-20位，可以使用字母（区分大小写），数字和符号</td>
						</tr>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;确认密码：</td>
							<td><input type="password" id="SellerRegister_txtPassword2" name="" class="zc_tx" ></td>
						</tr>
						<tr>
							<td></td>
							<td class="zx">请再次确认输入密码</td>
						</tr>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;手机号：</td>
							<td><input type="text" name="phone" class="zc_tx" id="SellerRegister_txtPhone" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" ></td>
						</tr>
						<tr>
							<td></td>
							<td class="zx">建议使用常用手机</td>
						</tr>
						<tr>
							<td><font color="#ec4141">*</font>&nbsp;手机验证码：</td>
							<td>
								<div class="p_all"><input type="text" id="phone_tx" name="phone_tx" ><input type="button" id="msg_send" value="&nbsp;免费发送验证码&nbsp;" ></div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td class="zx"></td>
						</tr>
						<tr class="ta_yanz">
							<td><font color="#ec4141">*</font>&nbsp;验  证 码：</td>
							<td><input type="text" id="yzm_tx" name="code" ><img class="code" id="aa" src="?c=Register&act=vcode" onclick="bb('aa')" ></td>
						</tr>

						<tr>
							<td></td>
							<td class="js">
								<input type="checkbox" id="read"  ><label class="pro_cl">我已阅读并接受《<font color="#5dac00">三荣用户注册协议</font>》</label>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<a type="submit" class="zc_btn button-reg" id="zc_btn" value="注册" >注册</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>
		<div class="zc_right">
			<div class="zc_fcon">
				<div class="zc_fr_dl">
				<span>已经有账号？请直接登录</span>&nbsp;&nbsp;
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
				
				var username = $("#SellerRegister_txtUserName").val();

				var password = $("#SellerRegister_txtPassword").val();

				var agentpassword = $("#SellerRegister_txtPassword2").val();

				var phone = $("#SellerRegister_txtPhone").val();

				var search_str = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;

				var email_val = $("#SellerRegister_txtEmail").val();
				var read = $("#read").is(':checked');

				if (username == "") {

					$("#err").html("请输入用户名");

					$("#err").show();
				} else if ($("#SellerRegister_txtPhone").val().length != 11) {

					$("#err").html("请正确输入手机号码");

					$("#err").show();


				} else if (password == "") {

					$("#err").html("请输入密码");

					$("#err").show();


				} else if (password != agentpassword) {

					$("#err").html("两次密码输入不一致");

					$("#err").show();


				}else if(!read){
					$("#err").html("验证码不正确");

					$("#err").show();
				} else {

					$.post("?c=Register&act=reg", $("#aspnetForm").serialize(), function(data) {

						$("#err").html(data);

						$("#err").show();

						if (data == '注册成功!') {

							location.href = "?c=index";

						}

					});
				}

			});
			$("#aspnetForm input").click(function(){
				$("#err").html("");
				$("#err").show();
			});

			$('#SellerRegister_txtPhone').blur(function(){
				$.post("?c=Register&act=checkPhone", $("#aspnetForm").serialize(), function(data) {
					$("#err").html(data);

					$("#err").show();
				});
			});
			$('#phone_tx').click(function(){
				$.post("?c=Register&act=checkPhone", $("#aspnetForm").serialize(), function(data) {
					$("#err").html(data);

					$("#err").show();
				});
			});
		</script>
		<script type="text/javascript">
			var i = 120;
			$("#msg_send").click(function(){
				$('#msg_send').attr("disabled","disabled");
				remainTimess();
			});
		</script>
		<script type="text/javascript">
			$('#msg_send').click(function(){
				var phone = $("#SellerRegister_txtPhone").val();
				if ($("#SellerRegister_txtPhone").val().length != 11) {

					$("#err").html("请正确输入手机号码");

					$("#err").show();

				}else{
					$.post("?c=Register&act=send_message", $("#aspnetForm").serialize(), function(data) {
					$("#err").html(data);

					$("#err").show();
				});
				}
			});
		</script>

<div class="pro_hid">
	<div class="xy">
		<h1>众筹协议</h1>
		<p>
			协议内容
		</p>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
