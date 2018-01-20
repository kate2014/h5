$(function(){
    $("#datalist tr").hover(
        function(){
            $(this).addClass("hover");
        },
        function(){
            $(this).removeClass("hover");
        }
    );
});


function update_pl()
{
	var id = join_checkbox();
	if(!id)
	{
		alert("请选择要操作的记录！");
		return false;
	}
	//获取执行操作的ID值
	var act = $("#act_plset").val();
	if(!act)
	{
		alert("请选择要执行的动作！");
		return false;
	}
	if(act == "del")
	{
		del_pl();
		return true;
	}
	else if(act == "taxis")
	{
		taxis_pl();
		return true;
	}
	else
	{
		var array = act.split(":");
		if(array[0] == "cate")
		{
			update_cate(array[1]);
			return true;
		}
		else if(array[0] == "copy")
		{
			copy_list(array[1]);
			return true;
		}
		else
		{
		    var url = '?c='+ctrl+'&act=ajaxBatchSet&field='+array[0]+'&val='+array[1]+'&id='+id;
		    var flag = $.ajax({url:url,async:false}).responseText;
			
		    if(!flag){
		    //	msg = "error: 操作非法";
				alert(msg);
				return false;
		    } 
            if (isNaN(flag)) {
                alert('失败：' + flag);
            }
            else {
            //    document.write(flag);
		    	alert('成功更新'+flag+'条记录！');
		    	location.reload();
		    }
			
		}
	}
}

function del_pl()
{
	var id = join_checkbox();
	if(!id)
	{
		alert("请选择要删除的记录");
		return false;
	}
	var qc = confirm("确定要删除这些信息【"+id+"】吗？删除后是不能恢复的");
	if(qc == "0")
	{
		return false;
	}
	
    var url = '?c='+ctrl+'&act=ajaxDel&id=' + id;
    var flag = $.ajax({url:url,async:false}).responseText;
    if(!flag){
    	msg = "error: 操作非法";
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
	
//更改权限状态
function status(id)
{
	if(!id)
	{
		alert("操作非法");
		return false;
	}
    var val = $('#status_'+id).attr('value');
    var new_val = (val == 1 ? 0 : 1);
    var url = '?c='+ctrl+'&act=ajaxChangeStatus&id='+id+'&status='+new_val;
    var msg = $.ajax({url:url,async:false}).responseText;
    if('ok' != msg){
		alert(msg);
		return false;
    } else {
        $('#status_'+id).attr('value', new_val);
        $('#status_'+id).attr('class','status_'+new_val);
    }
}

function select_all(id)
{
    var t = id && id != "undefined" ? $("#"+id+" input[type*=checkbox]") : $("input[type*='checkbox']");
    t.each(function(){
    $(this).prop("checked",true);});
}

function select_none(id)
{
    var t = id && id != "undefined" ? $("#"+id+" input[type*=checkbox]") : $("input[type*=checkbox]");
    t.each(function(){$(this).prop("checked",false);});
}

function select_anti(id)
{
    var t = id && id != "undefined" ? $("#"+id+" input[type*=checkbox]") : $("input[type*=checkbox]");
    t.each(function(){if($(this).prop("checked") == true){$(this).prop("checked",false);}else{$(this).prop("checked",true);}});
}

function join_checkbox(id,type)
{
    var cv = id && id != "undefined" ? $("#"+id+" input[type*=checkbox]") : $("input[type*=checkbox]");
    var idarray = new Array();
    var m = 0;
    cv.each(function()
    {
        if(type == "all"){idarray[m] = $(this).val();m++;}
        else if(type == "unchecked")
        {
            if($(this).prop("checked") == false){idarray[m] = $(this).val();m++;}
        }
        else
        {
            if($(this).prop("checked") == true){idarray[m] = $(this).val();m++;}
        }
    });
    var tid = idarray.join(",");
    return tid;
}
