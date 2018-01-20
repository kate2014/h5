$(document).ready(function(){
	/** DEMO PANEL **/
    $("#demo-panel").click(function () {
		"use strict";
		$(".box-demo").toggleClass("tugel");
	});
	$("#color-reset").click(function(){
		"use strict";
		RemoveClasses();
		AddCookie("", "", "");
	});
	$("#btn-reset").click(function(){
		"use strict";
		RemoveClasses();
		AddCookie("", "", "");
	});
	$("#change-color-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("white-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("white-color", "", "light-color");
	});
	$("#change-primary-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("primary-color");
		AddCookie("primary-color", "", "");
	});
	$("#change-info-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("info-color");
		AddCookie("info-color", "", "");
	});
	$("#change-success-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("success-color");
		$(".sidebar-left").removeClass("light-color");
		AddCookie("success-color", "", "");
	});
	$("#change-danger-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("danger-color");
		AddCookie("danger-color", "", "");
	});
	$("#change-warning-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("warning-color");
		AddCookie("warning-color", "", "");
	});
	$("#change-primary-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("primary-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("primary-color", "", "light-color");
	});
	$("#change-info-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("info-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("info-color", "", "light-color");
	});
	$("#change-success-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("success-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("success-color", "", "light-color");
	});
	$("#change-danger-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("danger-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("danger-color", "", "light-color");
	});
	$("#change-warning-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("warning-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("warning-color", "", "light-color");
	});
	$("#change-dark-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".sidebar-left").addClass("light-color");
		AddCookie("", "", "light-color");
	});
	
	$("#change-full-primary-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("primary-color");
		$(".top-navbar").addClass("primary-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("primary-color", "primary-color", "light-color");
	});
	$("#change-full-success-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("success-color");
		$(".top-navbar").addClass("success-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("success-color", "success-color", "light-color");
	});
	$("#change-full-info-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("info-color");
		$(".top-navbar").addClass("info-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("info-color", "info-color", "light-color");
	});
	$("#change-full-danger-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("danger-color");
		$(".top-navbar").addClass("danger-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("danger-color", "danger-color", "light-color");
	});
	$("#change-full-warning-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("warning-color");
		$(".top-navbar").addClass("warning-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("warning-color", "warning-color", "light-color");
	});
	$("#change-full-dark-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".top-navbar").addClass("dark-color");
		$(".sidebar-left").addClass("light-color");
		AddCookie("dark-color", "dark-color", "light-color");
	});
	
	$("#change-sidebar-primary-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("primary-color");
		$(".sidebar-left").addClass("primary-color");
		AddCookie("primary-color", "", "primary-color");
	});
	$("#change-sidebar-success-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("success-color");
		$(".sidebar-left").addClass("success-color");
		AddCookie("success-color", "", "success-color");
	});
	$("#change-sidebar-info-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("info-color");
		$(".sidebar-left").addClass("info-color");
		AddCookie("info-color", "", "info-color");
	});
	$("#change-sidebar-danger-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("danger-color");
		$(".sidebar-left").addClass("danger-color");
		AddCookie("danger-color", "", "danger-color");
	});
	$("#change-sidebar-warning-light").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("warning-color");
		$(".sidebar-left").addClass("warning-color");
		AddCookie("warning-color", "", "warning-color");
	});
	
	$("#change-full-primary-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("primary-color");
		$(".top-navbar").addClass("primary-color");
		$(".sidebar-left").addClass("dark-color");
		AddCookie("primary-color", "primary-color", "dark-color");
	});
	$("#change-full-success-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("success-color");
		$(".top-navbar").addClass("success-color");
		$(".sidebar-left").addClass("dark-color");
		AddCookie("success-color", "success-color", "dark-color");
	});
	$("#change-full-info-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("info-color");
		$(".top-navbar").addClass("info-color");
		$(".sidebar-left").addClass("dark-color");
		AddCookie("info-color", "info-color", "dark-color");
	});
	$("#change-full-danger-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("danger-color");
		$(".top-navbar").addClass("danger-color");
		$(".sidebar-left").addClass("dark-color");
		AddCookie("danger-color", "danger-color", "dark-color");
	});
	$("#change-full-warning-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("warning-color");
		$(".top-navbar").addClass("warning-color");
		$(".sidebar-left").addClass("dark-color");
		AddCookie("warning-color", "warning-color", "dark-color");
	});
	$("#change-full-primary").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("primary-color");
		$(".top-navbar").addClass("primary-color");
		$(".sidebar-left").addClass("primary-color");
		AddCookie("primary-color", "primary-color", "primary-color");
	});
	$("#change-full-success").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("success-color");
		$(".top-navbar").addClass("success-color");
		$(".sidebar-left").addClass("success-color");
		AddCookie("success-color", "success-color", "success-color");
	});
	$("#change-full-info").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("info-color");
		$(".top-navbar").addClass("info-color");
		$(".sidebar-left").addClass("info-color");
		AddCookie("info-color", "info-color", "info-color");
	});
	$("#change-full-danger").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("danger-color");
		$(".top-navbar").addClass("danger-color");
		$(".sidebar-left").addClass("danger-color");
		AddCookie("danger-color", "danger-color", "danger-color");
	});
	$("#change-full-warning").click(function(){
		"use strict";
		RemoveClasses()
		$(".logo-brand").addClass("warning-color");
		$(".top-navbar").addClass("warning-color");
		$(".sidebar-left").addClass("warning-color");
		AddCookie("warning-color", "warning-color", "warning-color");
	});
	$("#change-full-dark").click(function(){
		"use strict";
		RemoveClasses()
		$(".top-navbar").addClass("dark-color");
		AddCookie("", "dark-color", "");
	});
	
	function RemoveClasses() {
		"use strict";
		$(".logo-brand").removeClass("white-color");
		$(".logo-brand").removeClass("primary-color");
		$(".logo-brand").removeClass("info-color");
		$(".logo-brand").removeClass("success-color");
		$(".logo-brand").removeClass("danger-color");
		$(".logo-brand").removeClass("warning-color");
		$(".top-navbar").removeClass("primary-color");
		$(".top-navbar").removeClass("info-color");
		$(".top-navbar").removeClass("success-color");
		$(".top-navbar").removeClass("danger-color");
		$(".top-navbar").removeClass("warning-color");
		$(".top-navbar").removeClass("dark-color");
		$(".sidebar-left").removeClass("light-color");
		$(".sidebar-left").removeClass("primary-color");
		$(".sidebar-left").removeClass("info-color");
		$(".sidebar-left").removeClass("success-color");
		$(".sidebar-left").removeClass("danger-color");
		$(".sidebar-left").removeClass("warning-color");
	}

	function AddCookie(logobrand,topnavbar,sidebarleft) {
	    setCookie("logo-brand", logobrand, 30);
	    setCookie("top-navbar", topnavbar, 30);
	    setCookie("sidebar-left", sidebarleft, 30);
	}
	function ShowCookie() {
	    $(".logo-brand").addClass(getCookie("logo-brand"));
	    $(".top-navbar").addClass(getCookie("top-navbar"));
	    $(".sidebar-left").addClass(getCookie("sidebar-left"));
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
});
