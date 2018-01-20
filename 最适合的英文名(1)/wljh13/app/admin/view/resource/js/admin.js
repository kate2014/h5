//jquery点击按钮后禁用该按钮
$('.submit').click(
    function(event) {
		var tg = $(event.target);//目标DOM
		$(tg).unbind('click');//$(tg)将其转换成jQuery对象
	}
);
		 
//删除一条数据
function del_one(id){
	if (confirm("确定要删除这条数据吗？")) {
		var url = '?c='+ctrl+'&act=ajaxDel&id=' + id;
		var flag = $.ajax({url:url,async:false}).responseText;
		if(!flag || flag == -1){
			msg = "操作非法";
			alert(msg);
			return false;
		}
        if (isNaN(flag)) {
			alert('失败：' + flag);
        }
		else
		{
			alert('成功删除'+flag+'条记录！');
			location.reload();
		}
	}
	return true;
}

function ajax_del(id, ctrl, row_id){
	if (confirm("删除后将不可恢复，确定要永久删除这条数据吗？")) {
        var now_tr = $('#'+row_id);
        ajax_del_one(id,ctrl,now_tr);
	}
}

function ajax_del_one(id,ctrl,now_tr){
	var url = '?c='+ctrl+'&act=ajaxDel&id=' + id;
	var flag = $.ajax({url:url,async:false}).responseText;
	if(!flag || flag == -1){
		alert('系统繁忙，请稍后再试！');
		return false;
	}
    if (isNaN(flag)) {
        alert('失败：' + flag);
    }
	else
	{
		now_tr.remove();
		return true;
	}
}


function goback(){
	history.back();
}

//重载验证码
function refresh_vcode(imgvcode_id){ 
	var nowtime = new Date().getTime();
	var img_src = '?c=login&act=vcode&'+nowtime;
	$('#'+imgvcode_id).attr('src',img_src);
}

function ajax(url,param,async)
{   
    if(param){
        method = 'post';
    }else{
        method = 'get';
    }
    if(async){
        async = true;
    }else{
        async = false;
    }
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    xmlhttp.open(method,url,async);
    if('post' == method)
    {
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    }
    xmlhttp.setRequestHeader("X-Requested-With","XMLHttpRequest");//ajax发送一个头信息，区分是否是ajax请求,仿JQUERY
    xmlhttp.send(param);
    if(true == async)
    {
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //run code
                callback(xmlhttp.responseText);
            }
        }
    }
    else
    {
        //run code
        callback(xmlhttp.responseText);
    }
    
}
function callback(data){
    document.getElementById("myDiv").innerHTML=data;
}
