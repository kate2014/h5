<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 11:34:59
         compiled from "app\mobi\view\Forget\modify.html" */ ?>
<?php /*%%SmartyHeaderCode:349957982be35e7a33-48931346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7924451d16d5b2021a97740412ed37d6f94abb' => 
    array (
      0 => 'app\\mobi\\view\\Forget\\modify.html',
      1 => 1469590472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349957982be35e7a33-48931346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57982be362a0c3_85174316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57982be362a0c3_85174316')) {function content_57982be362a0c3_85174316($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                        <td class="zc_left">设置密码:</td>
                        <td class="zc_right" colspan="2"><input type="text" id="SellerRegister_txtPassword" name="password" class="fullinput new-txt-err" placeholder="6-20位字母、数字和符号"></td>
                    </tr>
                    <tr>
                        <td class="zc_left">确认密码:</td>
                        <td class="zc_right" colspan="2"><input type="text" id="SellerRegister_txtPassword2" name="" class="fullinput new-txt-err"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><a type="submit" class="zc_btn button-reg submit" id="zc_btn" value="注册" >提交</a></td>
                    </tr>
                </table>
                <input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" > 
            </form> 
           <script>
			$("#zc_btn").click(function() {
				
				var password = $("#SellerRegister_txtPassword").val();

				var agentpassword = $("#SellerRegister_txtPassword2").val();

				if (password == "") {

					$("#err").html("请输入密码");

					$("#err").show();


				} else if (password != agentpassword) {

					$("#err").html("两次密码输入不一致");

					$("#err").show();


				}else {

					$.post("?c=Forget&act=change_password", $("#aspnetForm").serialize(), function(data) {
						$("#err").html(data['msg']);

						$("#err").show();
						if (data['success']) {
							
							remainTimem();

						}

					},'json');
				}

			});
			$("#aspnetForm input").click(function(){
				$("#err").html("");
				$("#err").show();
			});		
		</script>	

<script type="text/javascript">
	var ii = 3;  
	function remainTimem(phone,mt){  
		if(ii==0){  
			location.href='?c=Login';  
			return false;
			}  
			document.getElementById('zc_btn').innerHTML=ii--;  
			setTimeout("remainTimem()",1000);  
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
