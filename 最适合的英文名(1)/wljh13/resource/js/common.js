//重载验证码
function refresh_vcode(imgvcode_id){ 
	var nowtime = new Date().getTime();
	var img_src = '?act=vcode&'+nowtime;
	$('#'+imgvcode_id).attr('src',img_src);
}