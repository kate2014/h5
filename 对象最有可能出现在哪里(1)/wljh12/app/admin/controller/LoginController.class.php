<?php
class LoginController extends Controller {
    
    function index() {
		$y = date("Y");
        $this -> assign("y",$y);
        $this->display();
    }
    
    function vcode() {
        $vcode = new Vcode();
        $_SESSION['admlogin_vcode'] = $vcode->word();
        $vcode->create();
    }
    
    function login() {
        $admin = new AdminModel();
        if ($_POST) {    //前台账号密码登录
            $login_type = 'post';
            $account = $_POST['account'];
            $password = md5($_POST['password']);
            $keep = isset($_POST['keep'])?$_POST['keep']:'0';
            $flag = $admin->checkAdmin($account,$password);
        } else {    //cookie登录
        	if (isset($_COOKIE['admin_account'])) {
        	//	$this->loginByCookie();
            	$login_type = 'cookie';
           		$account = $_COOKIE['admin_account'];
            
           		$flag = $admin->getAdminByAccount($_COOKIE['admin_account']);
        	} else {
        		$flag = '';
        	}	
        }
        
        if ($flag) {

        	
            $_SESSION['isLogin'] = $_SESSION['isAdmin'] = 1;
            $_SESSION['admin_account'] = $account;
            $_SESSION['admin_id'] = $flag['id'];
            $_SESSION['admin_real_name'] = $flag['real_name'];
       //     $_SESSION['admin_sn'] = $flag['sn'];
            
            
            //设置cookie
            if ('post' == $login_type) {
                if (isset($_POST['keep'])) {
                    setcookie("admin_account", $account, time()+3600*24*1);//设置cookie保存1天
                } else {
                    setcookie("admin_account", $account, time()-3600);
                }
            }
            $to_url = '?c=index';
            $this->jump($to_url);
        } else {
            $to_url = '?c=login';
            $this->error('登录失败!',$to_url);
        }
    }
    
    function logout() {
    	$_SESSION = array();
    	setcookie("admin_account", '', time()-3600);
    	$to_url = '?c=login';
    	$this->error('退出成功！',$to_url);
    }
    
    function safeLogout() {
    	setcookie("admin_account", '', time()-3600);
    	$this->logout();
    }
    
    function ajax_logout(){
    	$_SESSION = array();
    }

    function loginCheck() {
    
    }
    
}