<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 16:07:02
         compiled from "app\mobi\webview\Goods\qrzc.html" */ ?>
<?php /*%%SmartyHeaderCode:285875799bd2620a402-28994382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41bf460ff8d506ae2ddae27db8898e67bddadc0f' => 
    array (
      0 => 'app\\mobi\\webview\\Goods\\qrzc.html',
      1 => 1469693213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285875799bd2620a402-28994382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'id' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5799bd262ae529_21035039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799bd262ae529_21035039')) {function content_5799bd262ae529_21035039($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/confirm.css">
<!--内容页开始-->
	<div class="content">

		<div class="confirm">
			<div class="ar_title">
				<p>确认众筹信息</p>
			</div>
			<div class="err_q"></div>
			<form action="index.php?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&act=qrzc_save" id="confirm" method="post" >
				<table>
					<tr>
						<td>产品名称</td>
						<td><a href="index.php?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value["name"];?>
</a></td>
					</tr>
					<tr>
						<td>真实姓名</td>
						<td><input type="text" name="name" id="name" ></td>
					</tr>
					<tr>
						<td>身份证</td>
						<td><input type="text" name="identity" id="id_card" ></td>
					</tr>
					<tr>
						<td>邀请人手机号</td>
						<td><input type="text" name="phone" id="phone" placeholder="选填" ></td>
					</tr>
					<tr>
						<td>认筹份额</td>
						<td><input type="radio" name="market" id="market" checked="checked" onclick="pic(this)" value="1" ><label>1份</label><input type="radio" name="market" id="market" onclick="pic(this)" value="2" ><label>2份</label><input type="radio" name="market" id="market" onclick="pic(this)" value="3" ><label>3份</label><input type="radio" name="market" id="market" onclick="pic(this)" value="4" ><label>4份</label><p>每份<?php echo number_format($_smarty_tpl->tpl_vars['goods']->value['price_n']);?>
元，只可选1份、2份、3份、4份</p></td>
					</tr>
					<tr>
						<td>金额</td>
						<td><p class="pic"><?php echo number_format($_smarty_tpl->tpl_vars['goods']->value['price_n']);?>
元</p></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="checkbox" id="read"  ><label class="pro_cl">我已阅读并同意(<a href="#">协议详情</a>)</label></td>
					</tr>
					<tr>
						<td></td>
						<td><a type="submit" href="#" id="submit" value="提交" class="submit" >提交</a></td>
					</tr>
				</table>
				<input type="hidden" name="money" id="money" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price_n'];?>
" >
				<div class="confirm_msg">
					<strong>温馨提示:</strong><br>
					<p>
						若项目众筹成功，为了保证项目顺利进行，众筹期限届满日前您不能申请退款；
					</p>
					<p>
						若项目众筹失败，项目自动取消。您所支付的款项将全额退还
					</p>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		function fmoney(s, n) {  
		    n = n > 0 && n <= 20 ? n : 2;  
		    f = s < 0 ? "-" : ""; //判断是否为负数  
		    s = parseFloat((Math.abs(s) + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
		    var l = s.split(".")[0].split("").reverse(),  
		    r = s.split(".")[1];  
		    t = "";  
		    for(i = 0; i < l.length; i++ ) {  
		       t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");  
		    }  
		    return f + t.split("").reverse().join("") + r.substring(0,0);
		}
		function pic(s){
			var num = $(s).val(),
				pic = <?php echo $_smarty_tpl->tpl_vars['goods']->value['price_n'];?>
,
				price = fmoney(num*pic,3);
				$("#money").val(num*pic);
				$(".pic").html(price+"元");
				$(".pic").show();
		}
	</script>
	<script type="text/javascript">
		$("#confirm input").click(function(){
			var name = $("#name").val();
				id_card = $("#id_card").val();
				read = $("#read").is(':checked');
				if (name&&id_card&&read) {
					$("#submit").addClass("sok");
				}else{
					$("#submit").removeClass("sok");
				};
		});
		$("#confirm input").keydown(function(){
			var name = $("#name").val();
				id_card = $("#id_card").val();
				read = $("#read").is(':checked');
				if (name&&id_card&&read) {
					$("#submit").addClass("sok");
				}else{
					$("#submit").removeClass("sok");
				};
		});
	</script>
	<script type="text/javascript">
		
		var i = 3;  
		function remainTime(){  
		    if(i==0){  
		        location.href='?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';  
		    }  
		    document.getElementById('submit').innerHTML=i--;  
		    setTimeout("remainTime()",1000);  
		}
		
		$("#submit").click(function(){
			var name = $("#name").val(),
				id_card = $("#id_card").val(),
				isIDCard2 = /(^\d{15}$)|(^\d{17}(\d|X)$)/,
				read = $("#read").is(':checked');

				if (name=="") {
					$(".err_q").html("真实姓名不能为空");
					$(".err_q").show();
				}else if(id_card==""){
					$(".err_q").html("身份证不能为空");
					$(".err_q").show();
				}else if(!isIDCard2.test(id_card)){
					$(".err_q").html("身份证格式不对");
					$(".err_q").show();
				}else if(!read){
					$(".err_q").html("请仔细阅读众筹协议并勾选同意");
					$(".err_q").show();
				}else{
					$.post('index.php?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&act=qrzc_save',$('#confirm').serialize(),function(data){
						if (data['success']) {
							$(".err_q").html("提交成功");
							$(".err_q").show();
							remainTime();
						}else{
							$(".err_q").html(data['msg']);
							$(".err_q").show();
						}
					},'json');
				};
		});
		$("#confirm input").click(function(){
			$(".err_q").html("");
			$(".err_q").show();
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
	<!--内容结束-->
	<?php echo $_smarty_tpl->getSubTemplate ('Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
