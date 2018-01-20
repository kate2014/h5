<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 11:34:56
         compiled from "app\mobi\view\Forget\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1386157982be055e3d1-88074188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb17a679018d6cb1e9827d54fc2673718956a22' => 
    array (
      0 => 'app\\mobi\\view\\Forget\\index.html',
      1 => 1469590403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386157982be055e3d1-88074188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57982be059cbe3_29231607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57982be059cbe3_29231607')) {function content_57982be059cbe3_29231607($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="height:100%;">

<header class="header">
	<a href="?c=login" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
	<p>找回密码</p>
	

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
                        <td class="zc_left">手机号:</td>
                        <td class="zc_right" colspan="2"><input type="text" name="phone" class="fullinput new-txt-err" id="SellerRegister_txtPhone" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" ></td>
                    </tr>
                    <tr>
                        <td class="zc_left">手机验证码:</td>
                        <td class="zc_r1"><input type="text" id="phone_tx" name="phone_tx" class="fullinput" placeholder=""></td>
                        <td class="zc_p2"><input type="button" id="msg_send" value="&nbsp;免费发送验证码&nbsp;"></td>
                    </tr>

                    <tr>
                        <td colspan="3"><a type="submit" class="zc_btn button-reg submit" id="zc_btn" value="提交" >提交</a></td>
                    </tr>
                </table>
            </form> 
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
							$("#err").html(data['msg']+data['fcode']);

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
            <div class="zc_login">已有账号？请直接登录<a href="?c=login">登录</a></div>     
        </div>
	</div>
</div>

<a href="#0" class="cd-top">Top</a>
</body>
</html>
	<?php }} ?>
