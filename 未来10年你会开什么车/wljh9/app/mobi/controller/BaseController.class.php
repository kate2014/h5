<?php

class BaseController extends Controller {

	protected $model;



	function __construct() {



		error_reporting(0);

		parent::__construct();



		$obj_wx = new CommonModel();

		$obj_wx -> table = 'wxconfig';

		$rs2 = $obj_wx -> getOne(1);

		$APPID = $rs2['APPID'];

		$APPSECRET = $rs2['APPSECRET'];

		define('APPID', $APPID);

		define('APPSECRET', $APPSECRET);



		$obj = new BaseModel();

		$mall = $obj -> getMall();

		//var_dump($mall);

		foreach ($mall as $key => $value) {

			$this -> assign('mall_' . $value['identifier'], $value['content']);

			//获得系统配置信息

		}



		$user = isset($_SESSION['username']) ? $_SESSION['username'] : null;

		if ($user) {

			$user_m = new CommonModel();

			$user_m -> table = 'user';

			$user_s = $user_m -> getOther("username = '{$user}'");



			foreach ($user_s[0] as $key => $value) {

				$this -> assign('user_' . $key, $value);

				//获得系统配置信息

			}



			$user_cate_m = new CommonModel();

			$user_cate_m -> table = 'user_cate';

			$user_cate_s = $user_cate_m -> getOne($user_s[0]['cate']);

			$this -> assign('user_cate_name', "(" . $user_cate_s['name'] . ")");

			$this -> assign('user_cate_name_goods', $user_cate_s['name']);



			define('USER_CATE', $user_s[0]['cate']);

		} else {

			define('USER_CATE', '43');

		}

		$user_cate_m = new CommonModel();

		$user_cate_m -> table = 'user_cate';

		$user_cate_s = $user_cate_m -> getOther("1 = 1");

		$GLOBALS['USER_CATE_LIST'] = $user_cate_s;

		$this -> assign('username', $user);



		$_SESSION['o_url'] = $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?" . $_SERVER["QUERY_STRING"];



		$_suid = get_data('suid');

		if (isset($_SESSION["isLoginUser"]) && $_SESSION["isLoginUser"] === 1 && $_SESSION['isUser']) {



			$suid = $_SESSION['user_id'];

			if (!$_suid) {

				if (preg_match("/(index|\s)/i", $_GET['c'])) {

					if ($_SERVER["QUERY_STRING"]) {



						header('location:http://' . $_SESSION['o_url'] . '&suid=' . $suid);

					} else {



						header('location:http://' . $_SERVER["HTTP_HOST"] . '/?suid=' . $suid);

					}



				}

			}

			$_suid = $_SESSION['user_id'];

		} else {

            

			if ($_suid) {



				if (is_wechat()) {



					//echo "0000000000000";

					//exit;



					$website = 'http://' . $_SERVER["HTTP_HOST"];

					$url = urlencode($website . '/?c=Index&suid=' . $_suid);

					//$url = urlencode($website . '/?c=Wx&act=getWxOpenid&suid=' . $_suid);

					//echo "0000000000000";



					//$this -> getCode($url);



				}

			}

		}

		$this -> assign('suid', $_suid);



		$obj_goods = new CommonModel();

		$obj_goods -> table = 'goods';

		$buyshops = isset($_COOKIE['buyshop']) ? $_COOKIE['buyshop'] : null;

		$obj = new CommonModel();

		$obj -> table = 'goods_cate';

		$buynum = count(explode(',', $buyshops)) - 1;

		//獲得購物車數量

		$this -> assign('buynum', $buynum);



		$catea = $obj -> getOther("status = 1 ORDER BY -sort DESC ");

		$i = 0;

		foreach ($catea as $key => $value) {

			$i++;

			$catea[$key] = $value;

			$catea[$key]['i'] = $i;

		}

		//以上查询分类导航列表



		$cates = $obj -> getOther("status = 1 ORDER BY sort ASC LIMIT 0,7");

		$i = 0;

		foreach ($cates as $key => $value) {

			$i++;

			$cates[$key] = $value;

			$row = $obj_goods -> getOther("status = 1 AND cate_id = '{$value['id']}' LIMIT 0,3");

			foreach ($row as $keys => $values) {//查询分类商品中的部分数据

				$row_a[$keys] = $values;

				$row_a[$keys]['name'] = mb_strcut($values['name'], 0, 12, 'utf-8');

			}

			$rows = $obj_goods -> getOther("status = 1 AND cate_id = '{$value['id']}' LIMIT 0,8");

			foreach ($rows as $keys => $values) {

				$row_b[$keys] = $values;

				$row_b[$keys]['name'] = mb_strcut($values['name'], 0, 24, 'utf-8');



			}

			// $cates[$key]['row'] = $row_a;

			// $cates[$key]['rows'] = $row_b;

			$cates[$key]['i'] = $i;

		}

		//以上查询分类列表



		$this -> assign('catea', $catea);

		$this -> assign('cates', $cates);



		$hots = $obj_goods -> getOther("status = 1 ORDER BY sales_volume DESC LIMIT 0,5");

		$i = 0;

		foreach ($hots as $key => $value) {

			$i++;

			$hots[$key] = $value;

			$hots[$key]['i'] = $i;

			$hots[$key]['name'] = mb_strcut($value['name'], 0, 24, 'utf-8');



			foreach ($GLOBALS['USER_CATE_LIST'] as $k_cate => $v_cate) {

				if (USER_CATE == $v_cate['id']) {//会员代理商价格

					$hots[$key]['sale_price'] = $value['sale_price' . USER_CATE];

				}

			}



		}

		$this -> assign('hots', $hots);

		//以上查询热门商品列表



		$click = $obj_goods -> getOther("status = 1 ORDER BY click DESC LIMIT 0,4");

		$i = 0;

		foreach ($click as $key => $value) {

			$i++;

			$click[$key] = $value;

			$click[$key]['i'] = $i;



			foreach ($GLOBALS['USER_CATE_LIST'] as $k_cate => $v_cate) {

				if (USER_CATE == $v_cate['id']) {//会员代理商价格

					$click[$key]['sale_price'] = $value['sale_price' . USER_CATE];

				}

			}

		}



		$this -> assign('click', $click);

		//以上查询大家都喜欢商品列表



		$page_config['title'] = '操作';

		$this -> assign('page_conf', $page_config);

		$mall_config = new CommonModel();



		$mall_config -> table = 'mall_config';



		$configs=$mall_config->getList('','','');



		$this->assign('configzz',$configs);


		$obj_goods = new CommonModel();

		$obj_goods->table='goods';

		$goods = $obj_goods->getList('','','status=1');
		$this->assign('goods',$goods);

		// $obj_f = new CommonModel();
		// $table=$obj_f ->table="eb_goods t1,eb_fund t2";
		// $where="t1.id=t2.goods_id";
		// $fund=$obj_f->getList2($count = 30, $start = 0, $table ,$where , $fields = 'SUM(t2.money)', $order_by = null);

		// $allmoney=$fund[0]['SUM(t2.money)'];

		// $price=$obj_goods->one('1','1','price');
		// $allprice=$price['price'];
		// $percent = (($allmoney/$allprice)*100).'%';
		// $this ->assign('fund',$fund);
		// $this ->assign('fund_percent',$fund_percent);
		// $this ->assign('percent',$percent);
		//var_dump($fund);exit();
		

	}



	/**

	 * 获得换取openid的code

	 */

	function getCode($url) {

		$url_code = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . APPID . "&redirect_uri=" . $url . "&response_type=code&scope=snsapi_base&state=1#wechat_redirect";

		//echo $url_code;

		//	return https_request($url_code);

        

		$this -> jump($url_code);

	}



}

