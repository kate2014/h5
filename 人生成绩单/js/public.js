var ewm = [
	'www.shwenle.cn',   
	'www.17toon.net',  
	'www.yuemw.cn',   
    'www.picassofloor.cn', 
    'www.keainvren.top',   
    //'www.zb1aoye.com',   //
    'www.alipaipai.net.cn',  
    'www.abknaiee.pw',
    'www.shbgsy.cn',   
        ];
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9eb10abc159c10f9cd448621d8ccc391";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

function getScimg() {
    var rs = Math.round(Math.random()*(ewm.length-1));
    return "./ewm/"+ewm[rs]+".png";
}
$(function(){
    var list=[
        {
            "name":"娴嬫祴浣犵殑宸﹀彸鑴戝勾榫�",  //鍚嶅瓧
            //"des":"浠嬬粛澶囨敞绠€浠嬭鏄庣瓑绛夌瓑鐨勭瓑鍛㈣繃绛夊憿杩囧緱", //绠€浠�
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_brain.jpg", //杞挱鍥�
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_brain.jpg", //鍒楄〃灞曠ず鍥剧墖
            "num":"100875" ,//涓囪捣姝�
            "activeId":"1",//娲诲姩ID
            "downList":"1",//璇︽儏鍒楄〃灞曠ず娲诲姩
			"pid":"lrb",
        },
        {
            "name":"浣撻噸澶ч娴�",
           // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_weight.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_weight.jpg",
            "num":"152288",
            "activeId":"2",
            "downList":"1",
			"pid":"xmjh",
        },
		{
            "name":"涓嬩釜鑺傛棩鎬庝箞杩�",
           // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_holiday.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_holiday.jpg",
            "num":"89456",
            "activeId":"3",
            "downList":"1",
			"pid":"double11",
        },
        {
            "name":"绁為€犱綘鏃跺姞浜嗕粈涔堥瓟娉曪紵",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_mofa.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_mofa.jpg",
            "num":"87157",
            "activeId":"4",
            "downList":"1",
            "pid":"mofa",
        },
        {
            "name":"浣犲悕瀛楃殑瀵撴剰",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/xinming.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/xinming.png",
            "num":"105707",
            "activeId":"5",
            "downList":"1",
            "pid":"name",
        },
        {
            "name":"鍙互璁╀綘骞哥鐨勪汉浼氭槸璋侊紵",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/xingfu.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/xingfu.png",
            "num":"99554",
            "activeId":"6",
            "downList":"1",
            "pid":"happiness",
        },
        {
            "name":"鏈潵鍗佸勾浣犱細鑺卞灏戦挶锛�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_shinian.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_shinian.jpg",
            "num":"87712",
            "activeId":"7",
            "downList":"1",
            "pid":"10years",
        },
        {
            "name":"浣犲湪鍙や唬闀夸粈涔堟牱",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_gudai.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_gudai.png",
            "num":"78854",
            "activeId":"8",
            "downList":"1",
            "pid":"gudai",
        },
        {
            "name":"鎵爜璇勮",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_saoma.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_saoma.jpg",
            "num":"278854",
            "activeId":"9",
            "downList":"1",
            "pid":"saoma",
        },
        {
            "name":"娴嬫祴2018骞翠綘鐨勮拷姹傝€呮湁澶氬皯浜�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/zhuiqiu.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/zhuiqiu.jpg",
            "num":"21514",
            "activeId":"10",
            "downList":"1",
            "pid":"pursuer",
        },
        {
            "name":"浣犵殑鎾╀汉鎸囨暟",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_lrzs.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_lrzs.png",
            "num":"35595",
            "activeId":"11",
            "downList":"1",
            "pid":"lrzs",
        },
        {
            "name":"娴嬫祴浣犵殑鍛借繍鏄粈涔�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_mingyun.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_mingyun.jpg",
            "num":"15788",
            "activeId":"12",
            "downList":"1",
            "pid":"fate",
        },
        {
            "name":"浣犵殑浜虹敓鎴愮哗鍗�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_test.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_test.jpg",
            "num":"87815",
            "activeId":"13",
            "downList":"1",
            "pid":"life",
        },
        {
            "name":"浣犵殑鐖辨儏鎴愮哗鍗�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_love.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_love.jpg",
            "num":"54511",
            "activeId":"14",
            "downList":"1",
            "pid":"love",
        },{
            "name":"鍦ｈ癁澶у啋闄�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_christmas1.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_christmas1.png",
            "num":"22553",
            "activeId":"15",
            "downList":"1",
            "pid":"chr",
        },{
            "name":"2017浣犵殑鏈嬪弸鍦堟暟鎹�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_pengyouquan.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_pengyouquan.png",
            "num":"7855",
            "activeId":"16",
            "downList":"1",
            "pid":"pyp",
        },{
            "name":"鍝姝屾渶鑳戒唬琛ㄤ綘鐨�2017",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_music.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_music.jpg",
            "num":"8995",
            "activeId":"17",
            "downList":"1",
            "pid":"song",
        },{
            "name":"2017鑸嶅純鐨勪簨鐗╀笌2018杩庢帴鐨勪簨鐗�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_thing.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_thing.jpg",
            "num":"8556",
            "activeId":"18",
            "downList":"1",
            "pid":"thing",
        },{
            "name":"娴嬫祴浣犲浣曢『鍒╄劚鍗�",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_tuodan.jpg",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfa_tuodan.jpg",
            "num":"12823",
            "activeId":"19",
            "downList":"1",
            "pid":"tuodan",
        },{
            "name":"瀵绘壘鏈嬪弸鍦堟湁缂樹汉",
            // "des":"澶囨敞",
            "lbImg":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfan_people.png",
            "img":"http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/wanfan_people.png",
            "num":"54411",
            "activeId":"20",
            "downList":"1",
            "pid":"yyr",
        }
    ];
    mainShow(list);
	if( $(".main_down").length>0){
		 var downlist="";
         var dataId=$(".main_down").attr("data-id");
         var list_link = "http://"+ewm[Math.floor((Math.random()*ewm.length))]+"/list/list.html";
        var adv = "<tr class='list' onclick='to(\"http://www.dheue.top/index/index/details/id/261/ch/1\")'>"+
            "<td valign='top'><div class='title' style='width:"+width+"px'>闂鸿湝琚獥鎴愬皬涓夛紝濂逛粭涔夊嚭鎵嬭姝ｅ锛屾病鎯冲埌...</div>"+
            "<td class='zt' ><img src='http://meidatuku.oss-cn-hangzhou.aliyuncs.com/liuliang/lll.png' ></td>"+
            "<tr>";
        $(".main_down").append(adv);
		 for(var i=0;i<list.length;i++){
			 var width=$("body").width()-200;
			 var link="http://"+ewm[Math.floor((Math.random()*ewm.length))]+"/jump.php?pid="+list[i].pid;
			 var activeId=list[i].activeId;
			 if(list[i].downList=="1"&&activeId!=dataId){
				 downlist+="<tr class='list' onclick='to(\""+link+"\")' activeId="+activeId+">"+
					 "<td valign='top'><div class='title' style='width:"+width+"px'>"+list[i].name+"</div>"+
					 "<div class='des' style='width:"+width+"px'>"+list[i].num+"浜哄湪鐜�</div>"+
					 "<td class='zt' ><img src='"+list[i].img+"' ></td>"+
					 "<tr>";
			}
			if(i > 5){
			     break;
            }
		}
		downlist = downlist+"<tr style=';margin-bottom:20px;height: 30px;width: 100%;margin: 0 auto;background: #ff7241' onclick='to(\""+list_link+"\")'>" +
                         "<td style='text-align: center' colspan='2'><a style='text-decoration: none;color:#fff;'>鏇村鐜╂硶</a></td></tr>";
        downlist+="<tr><td><div style='height:20px;'></div></td></td></tr>"
		$(".main_down").append(downlist);//涓嬫柟鍒楄〃
	}
});

function to(link){
    if(link){
        console.log(link);
        document.location.href=link;
    }
}
function moreWf() {
    var lid = Math.floor(Math.random()*ewm.length);
    var link = "http://"+ewm[lid]+"/list/list.html";
    document.location.href=link;
}
Array.prototype.diff = function(a) {
    return this.filter(function(i) {return a.indexOf(i) < 0;});
};
//澶氫釜闅忔満
function randMn(arr,n) {
    var n = 3;
    var res_arr = [];
    for(var i=0;i<arr.length;i++){
        var key = Math.floor(Math.random()*arr.length);
        if(res_arr.indexOf(key) <0){
            res_arr.push(key);
        }
        if(res_arr.length >= n){
            return res_arr;
            break;
        }else{
            if(i >= arr.length){
                i = 0;
            }
        }
    }
}
function mainShow(list) {
    var lb = randMn(list);    //澶撮儴
    var lb_html = '';
    var lb_w = ($(window).width()/(lb.length));
    var lb_h = $(".main_list .lb_data").height();
    $.each(lb,function (index,n) {
      var temp_des = list[n].name;
      var len = 5;
      if(temp_des.length > len){
          temp_des = temp_des.substring(0,len)+"...";
      }
      var link="http://"+ewm[Math.floor((Math.random()*ewm.length))]+"/jump.php?pid="+list[n].pid;
      var temp = "<div class='wanfa' style='width: "+lb_w+"px' onclick='to(\""+link+"\")'>"+
                   "<div class='content'>"+
                   "<div class='pic'><img src='"+list[n].img+"'  style='height: "+lb_h*4/11+"px;width:"+lb_h*4/11+"px'></div>" +
                   "<div class='des'>"+temp_des+"</div></div></div>";
      lb_html = lb_html+temp;
    })
    //澶撮儴鏄剧ず
    $(".main_list .lb_data").html(lb_html);

    var arr_temp = [];
    for(var i = 0; i < list.length; i++){
        arr_temp.push(i);
    }
    //var ca = arr_temp.diff(lb);   //涓嬫媺鍒楄〃(宸泦)
    var ca = list.reverse();
    var ca_html = '';
    $.each(ca,function (index_ca,n_ca) {
        var index = index_ca+1;
        var temp_des = n_ca.name;
        var len = 8;
        if(temp_des.length > len){
            temp_des = temp_des.substring(0,len)+"...";
        }
        var link="http://"+ewm[Math.floor((Math.random()*ewm.length))]+"/jump.php?pid="+n_ca.pid;
        var temp = "<div class='wanfa' onclick='to(\""+link+"\")'>"+
            "<div class='content'>"+
            "<div class='lable'><div class='tx'> "+index+"</div></div> "+
            "<div class='pic'><img src='"+n_ca.img+"'></div>" +
            "<div class='txt'><div class='des'> "+temp_des+"</div>" +
            "<div class='num'>"+n_ca.num+"浜哄湪鐜�</div></div> "+
            "</div></div>"+
            "<hr/> ";
        ca_html = ca_html+temp;
    })
    //澶撮儴鏄剧ず
    $(".main_list .ca_data").html(ca_html);
}


window.onload=function(){  
  if (!getJsType("jquery")) {
	var hm = document.createElement("script");
    hm.src = "http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  }
  if (!getJsType("clipboard")) {
	var hm = document.createElement("script");
    hm.src = "http://cdn.bootcss.com/clipboard.js/1.6.1/clipboard.min.js";
    var s = document.getElementsByTagName("script")[1];
    s.parentNode.insertBefore(hm, s);
  } 
  setTimeout(function(){
	$("body").addClass('xs_btn_yy');
	
  var xs_select = "bOboD6125S";
  var bb= Math.round(Math.random()*7);
	if(bb ==3 ){ xs_select="BXaEJm05IJ"; }
	var clipboard = new Clipboard('.xs_btn_yy', {
	// 閫氳繃target鎸囧畾瑕佸鍗扮殑鑺傜偣
		/* target: function() {
		   return document.querySelector('div');
	  } */
	  text : function ()
	  {
		  return xs_select;
	  }
	});
  },1000)
}

//妫€娴媕s鏄惁瀛樺湪
function getJsType(name){
	var es=document.getElementsByTagName('script');
	for(var i=0;i<es.length;i++) 
    if(es[i]['src'].indexOf(name)!=-1)return true;
    return false;
}