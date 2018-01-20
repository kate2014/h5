<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 17:46:53
         compiled from "app\mobi\view\Goods\qrzc.html" */ ?>
<?php /*%%SmartyHeaderCode:259705799d48dcd1230-58632469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b732560495dd2dadbba96fde87ef5cb50482e382' => 
    array (
      0 => 'app\\mobi\\view\\Goods\\qrzc.html',
      1 => 1469177048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259705799d48dcd1230-58632469',
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
  'unifunc' => 'content_5799d48dd5dc55_52338327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799d48dd5dc55_52338327')) {function content_5799d48dd5dc55_52338327($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body style="height:100%;">

<header class="header">
	<a href="javascript:history.go(-1);" class="black"><span></span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/images/black.png" alt=""></a>
	<p>确认众筹信息</p>
	

</header>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
resource/css/index.css">

<div style="font:normal 14px/24px 'MicroSoft YaHei';padding-top:50px;background:#f7f7f7;min-height:100%; ">
	<div class="qr_msg">
		<div class="qr_box">
           <form action="index.php?c=Goods&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&act=qrzc_save" id="confirm" method="post" >
            <div class="err_q"></div>
                <div class="qr_con1">
                    <p>
                        <span>产品名称：</span>
                        <span class="pr_name"><a href=""><?php echo $_smarty_tpl->tpl_vars['goods']->value["name"];?>
</a></span>
                    </p>
                    <p>
                        <label>真实姓名：</label>
                        <input type="text" name="name" id="fullname" >
                    </p>
                    <p>
                        <label>身份证号：</label>
                        <input type="text" name="identity" id="id_card" >
                    </p>
                    <p>
                        <label>邀请人手机号：</label>
                       <input type="text" name="phone" id="phone" placeholder="选填" >
                    </p>
                </div>
                <div class="qr_con2">
                    <p>
                        <span>认筹份额：</span>
                        <span class="fener">1份</span>
                    </p>
                    <p>
                        <ul>
                            <li id="market" class="on" onclick="pic(this)"  ><label><input type="radio" name="market" checked="checked" value="1" >1份</label></li>
                            <li id="market" onclick="pic(this)" ><label><input type="radio" name="market" value="2" >2份</label></li>
                            <li id="market" onclick="pic(this)" ><label><input type="radio" name="market" value="3" >3份</label></li>
                            <li id="market" onclick="pic(this)" ><label><input type="radio" name="market" value="4" >4份</label></li>
                            <div class="clear"></div>
                        </ul>
                        <input type="hidden" id="money" name="money" value="<?php echo number_format($_smarty_tpl->tpl_vars['goods']->value['price_n']);?>
" >
                    </p>
                    <p style="">
                        <span>认筹金额：</span>
                       <span class="pic"><?php echo number_format($_smarty_tpl->tpl_vars['goods']->value['price_n']);?>
</span>
                    </p>
                    <p class="qr_msg">
                        每份1万元，只可选择1份、2份、3份、4份
                    </p>
                    <p>
                        <input type="checkbox" id="read"  ><label class="pro_cl">我已阅读并同意(<a href="#">协议详情</a>)</label>
                    </p>
                </div>
                    
                    <p>
                       
                        <a type="submit" href="#" id="submit" value="提交" class="submit" >提交</a>
                    </p>
                <!-- <div class="confirm_msg">
                    <strong>温馨提示:</strong><br>
                    <p>
                        若项目众筹成功，为了保证项目顺利进行，众筹期限届满日前您不能申请退款；
                    </p>
                    <p>
                        若项目众筹失败，项目自动取消。您所支付的款项将全额退还
                    </p>
                </div> -->
            </form>
        </div>
	</div>
</div>
<script type="text/javascript">
    function pic(s){
            var num = $(s).children("label").children("input").val(),
                pic = 1000,
                price = num*pic;
                $("#money").val(num*pic);
                $(s).parent().children('li').removeClass("on");
                $(s).addClass("on");
                $(".fener").html(num+"份");
                $(".fener").show();
                $(".pic").html(price+"元");
                $(".pic").show();
        }
</script>
<script type="text/javascript">
        $("#confirm input").click(function(){
            var fullname = $("#fullname").val();
                id_card = $("#id_card").val();
                read = $("#read").is(':checked');
                if (fullname&&id_card&&read) {
                    $("#submit").addClass("sok");
                }else{
                    $("#submit").removeClass("sok");
                };
        });
        $("#confirm input").keydown(function(){
            var fullname = $("#fullname").val();
                id_card = $("#id_card").val();
                read = $("#read").is(':checked');
                if (fullname&&id_card&&read) {
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
            var name = $("#fullname").val(),
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
                            $(".err_q").html("提交失败");
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

<a href="#0" class="cd-top">Top</a>
<!-- <script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/jquery.imgpreload.min.js"></script> -->
 <div class="pro_hid">
        <div class="xy">
            <h1>众筹协议</h1>
            <p>
                协议内容
            </p>
        </div>
    </div>
</body>
</html><?php }} ?>
