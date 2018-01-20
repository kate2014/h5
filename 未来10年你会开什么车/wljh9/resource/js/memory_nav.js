/**
* memory navigation built on jQuery
**/

(function($){
	$(document).ready(function() {
		$('.sidebar-menu>li>a').click(function(){
            //当前节点所在父节点中的下标
            var nav1_idx = $(this).parent('li').index();
        //    alert(nav1_idx);
            createCookie('nav1', nav1_idx, 365);
            /*
            $('.sidebar-menu>li>a').each(function(i){
            //    alert($(this).index());
            });
            */
            /*
            var d=document.getElementById("menu").getElementsByTagName("a");
            if(!cl)
            {
                              writeCookie("hovers",c,222);
            }
            c=readCookie("hovers")?readCookie("hovers"):c;
            for(i=0;i<d.length;i++)
            {
                d[i].className=i==c?"hover":"";
            }
        
            
			switchStylestyle(this.getAttribute("rel"));
            */
		//	return false;
		});
        
		$('.sidebar-menu>li>ul>li>a').click(function(){
        
            var nav2_idx = $(this).parent('li').index();
            createCookie('nav2', nav2_idx, 365);
        //    return false;
        });
        
        var nav1 = readCookie('nav1');
        if (nav1) {
            $('.sidebar-menu>li').eq(nav1).addClass('active');
            $('.sidebar-menu>li').eq(nav1).children('ul').css('display','block');
        }
        var nav2 = readCookie('nav2');
        if (nav2) {
            $('.sidebar-menu>.active>ul>li').eq(nav2).addClass('active');
        }
        
        var nav2 = readCookie('nav2');
        
	//	var c = readCookie('style');
	//	if (c) switchStylestyle(c);
	});

	function switchStylestyle(styleName)
	{
		$('link[@rel*=style][title]').each(function(i) 
		{
			this.disabled = true;
			if (this.getAttribute('title') == styleName) this.disabled = false;
		});
		createCookie('style', styleName, 365);
	}
})(jQuery);
// cookie functions http://www.quirksmode.org/js/cookies.html
function createCookie(name,value,days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
function eraseCookie(name)
{
	createCookie(name,"",-1);
}
// /cookie functions
