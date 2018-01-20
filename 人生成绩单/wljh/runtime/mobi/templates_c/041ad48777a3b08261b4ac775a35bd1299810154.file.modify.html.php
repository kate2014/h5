<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 10:46:38
         compiled from "app\mobi\webview\Forget\modify.html" */ ?>
<?php /*%%SmartyHeaderCode:315295798208e2a3d16-99225003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '041ad48777a3b08261b4ac775a35bd1299810154' => 
    array (
      0 => 'app\\mobi\\webview\\Forget\\modify.html',
      1 => 1469587580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315295798208e2a3d16-99225003',
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
  'unifunc' => 'content_5798208e309639_48163354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798208e309639_48163354')) {function content_5798208e309639_48163354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/confirm.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/main.js" Charset="utf-8"></script>
<!--内容页开始-->
	<div class="content">
		<div class="zc_left">
			<div class="zc_lcon">
				<h1>修改密码</h1>
				<div id="err"></div>
				<form action="" method="post" id="aspnetForm" >
					<table>

						<tr>
							<td><font color="#ec4141">*</font>&nbsp;修改密码：</td>
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
							<td><input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" ></td>
							<td class="zx">请再次确认输入密码</td>
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
<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
