<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 11:07:30
         compiled from "app\mobi\view\Register\index.html" */ ?>
<?php /*%%SmartyHeaderCode:172335798257212fea6-77435391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b9e39f36517301b1c63f992b776592972ac785d' => 
    array (
      0 => 'app\\mobi\\view\\Register\\index.html',
      1 => 1469516754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172335798257212fea6-77435391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57982572172531_12371365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57982572172531_12371365')) {function content_57982572172531_12371365($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="height:100%;">

<header class="header">
	<a href="?c=login" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
	<p>注册</p>
	

</header>
	<link rel="stylesheet" type="text/css" href="css/index.css">

<div style="text-align:center; font:normal 14px/24px 'MicroSoft YaHei';padding-top:50px;background:#fbf8e2;min-height:100%; ">
	<div class="c_msg">
		<div class="u_box">
			<div class="new-txt-err new-mg-b10"></div>
			<div id="err"></div>	
            <form action="" method="post" id="aspnetForm" >
                <table width="100%">
                    <tr>
                        <td class="zc_left">用户名：</td>
                        <td class="zc_right" colspan="2"><input name="account" type="text" id="SellerRegister_txtUserName" class="fullinput new-txt-err" placeholder="请输入邮箱/用户名/手机号"></td>
                    </tr>
                    <tr>
                        <td class="zc_left">设置密码:</td>
                        <td class="zc_right" colspan="2"><input type="text" id="SellerRegister_txtPassword" name="password" class="fullinput new-txt-err" placeholder="6-20位字母、数字和符号"></td>
                    </tr>
                    <tr>
                        <td class="zc_left">确认密码:</td>
                        <td class="zc_right" colspan="2"><input type="text" id="SellerRegister_txtPassword2" name="" class="fullinput new-txt-err"></td>
                    </tr>
                    <tr>
                        <td class="zc_left">手机号:</td>
                        <td class="zc_right" colspan="2"><input type="text" name="phone" class="fullinput new-txt-err" id="SellerRegister_txtPhone" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" ></td>
                    </tr>
                    <!-- <tr>
                        <td class="zc_left">邮箱：</td>
                        <td class="zc_right" colspan="2"><input name="email" type="text" id="SellerRegister_txtEmail" class="fullinput new-txt-err" placeholder="请输入常用邮箱" tip="请输入常用邮箱" regvaliditytxt="↑ 邮箱格式错误" errorlabel="emailError" notblank="notBlank" valuemissingtxt="↑ 邮箱不能为空"></td>
                    </tr> -->
                    <tr>
                        <td class="zc_left">验证码:</td>
                        <td class="zc_r1"><input type="text" id="yzm_tx" name="code"  class="fullinput"></td>
                        <td class="zc_y2"><img class="code" id="aa" src="?c=Register&act=vcode" onclick="bb('aa')" ></td>
                    </tr><tr>
                        <td class="zc_left">手机验证码:</td>
                        <td class="zc_r1"><input type="text" id="phone_tx" class="fullinput" placeholder=""></td>
                        <td class="zc_p2"><input type="button" id="msg_send" value="&nbsp;免费发送验证码&nbsp;"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="zc_js"><input type="checkbox" id="read" class="jieshou"><label class="pro_cl">&nbsp;<span>我已阅读并接受《<font color="#5dac00">三荣用户注册协议</font>》</span></label></td>
                    </tr>
                    <tr>
                        <td colspan="3"><a type="submit" class="zc_btn button-reg submit" id="zc_btn" value="注册" >注册</a></td>
                    </tr>
                </table>
            </form> 
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

					$.post("?c=register&act=reg", $("#aspnetForm").serialize(), function(data) {

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
				$.post("?c=register&act=checkPhone", $("#aspnetForm").serialize(), function(data) {
					$("#err").html(data);

					$("#err").show();
				});
			});
			$('#phone_tx').click(function(){
				$.post("?c=register&act=checkPhone", $("#aspnetForm").serialize(), function(data) {
					$("#err").html(data);

					$("#err").show();
				});
			});
		</script>
		<script type="text/javascript">
			var i = 60;
			$("#msg_send").click(function(){
				$('#msg_send').attr("disabled","disabled");
				remainTime();
			});
		</script>
            <div class="zc_login">已有账号？请直接登录<a href="?c=login">登录</a></div>     
        </div>
	</div>
</div>

<a href="#0" class="cd-top">Top</a>
</body>
</html>
	<?php }} ?>
