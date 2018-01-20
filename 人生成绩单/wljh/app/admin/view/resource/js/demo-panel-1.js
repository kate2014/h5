$(document).ready(function(){
	/** DEMO PANEL **/
	$("#demo-panel").click(function(){
		"use strict";
		$(".box-demo").toggleClass("tugel");
	});
	$("#color-reset").click(function(){
		"use strict";
		RemoveClasses()
		$(".fa-meh-o").addClass("icon-primary");
		AddCookie("", "", "");
	});
	$("#btn-reset").click(function(){
		"use strict";
		RemoveClasses()
		$(".fa-meh-o").addClass("icon-primary");
		AddCookie("", "", "");
	});
	$("#bg-success").click(function(){
		"use strict";
		RemoveClasses()
		$(".login").addClass("bg-success");
		$(".fa-meh-o").addClass("icon-success");
		AddCookie("bg-success", "", "icon-success");
	});
	$("#bg-info").click(function(){
		"use strict";
		RemoveClasses()
		$(".login").addClass("bg-info");
		$(".fa-meh-o").addClass("icon-info");
		AddCookie("bg-info", "", "icon-info");
	});
	$("#bg-danger").click(function(){
		"use strict";
		RemoveClasses()
		$(".login").addClass("bg-danger");
		$(".fa-meh-o").addClass("icon-danger");
		AddCookie("bg-danger", "", "icon-danger");
	});
	$("#bg-warning").click(function(){
		"use strict";
		RemoveClasses()
		$(".login").addClass("bg-warning");
		$(".fa-meh-o").addClass("icon-warning");
		AddCookie("bg-warning", "", "icon-warning");
	});
	$("#bg-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".login").addClass("bg-dark");
		$(".fa-meh-o").addClass("icon-dark");
		AddCookie("bg-dark", "", "icon-dark");
	});
	
	function RemoveClasses() {
		"use strict";
		$(".login").removeClass("bg-success");
		$(".login").removeClass("bg-info");
		$(".login").removeClass("bg-danger");
		$(".login").removeClass("bg-warning");
		$(".login").removeClass("bg-dark");
		$(".fa-meh-o").removeClass("icon-primary");
		$(".fa-meh-o").removeClass("icon-success");
		$(".fa-meh-o").removeClass("icon-info");
		$(".fa-meh-o").removeClass("icon-danger");
		$(".fa-meh-o").removeClass("icon-warning");
		$(".fa-meh-o").removeClass("icon-dark");
	}
	function AddCookie(logobrand,topnavbar,sidebarleft) {
	    setCookie("logo-brand-logo", logobrand, 30);
	    setCookie("sidebar-left-logo", sidebarleft, 30);
	}
	function ShowCookie() {
	    $(".login").addClass(getCookie("logo-brand-logo"));
	    $(".fa-meh-o").addClass(getCookie("sidebar-left-logo"));
	}
	function getCookie(c_name) {
	    if (document.cookie.length > 0) {
	        var c_start = document.cookie.indexOf(c_name + "=");
	        if (c_start != -1) {
	            c_start = c_start + c_name.length + 1;
	            c_end = document.cookie.indexOf(";", c_start);
	            if (c_end == -1) c_end = document.cookie.length;
	            return unescape(document.cookie.substring(c_start, c_end));
	        }
	    }
	    return ""
	}
	function setCookie(c_name, value, expiredays) {
	    var exdate = new Date();
	    exdate.setDate(exdate.getDate() + expiredays);
	    document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString());
	}
	ShowCookie();
	/** END DEMO PANEL **/
});