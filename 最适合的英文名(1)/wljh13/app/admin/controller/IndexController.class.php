<?php
class IndexController extends BaseController {

	function index() {

		$obj_menu = new MenuModel();
		$sys_menu = $obj_menu -> getMenu();
		$this -> assign('sys_menu', $sys_menu);
		$left_menu = $obj_menu -> getMenu(2);
		

		$order_count = new BaseModel();
		$order_count -> table = "order";
		$order_count_1 = $order_count -> getCount("state = 1");
		$order[] = $order_count_1;
		$order_count_1 = $order_count -> getCount("state = 2");
		$order[] = $order_count_1;
		$order_count_1 = $order_count -> getCount("state = 3");
		$order[] = $order_count_1;
		$order_count_1 = $order_count -> getCount("state = 4");
		$order[] = $order_count_1;
		//以上查询订单统计

		$goods_count = new BaseModel();
		$goods_count -> table = "goods";
		$goods_count_1 = $goods_count -> getCount("status = 1");
		$goods[] = $goods_count_1;
		$goods_count_1 = $goods_count -> getCount("status = 0");
		$goods[] = $goods_count_1;
		$goods_count_1 = $goods_count -> getCount("status = 2");
		$goods[] = $goods_count_1;
		$goods_count_1 = $goods_count -> getCount("status = 3");
		$goods[] = $goods_count_1;
		//以上查询商品统计

		$user_count = new BaseModel();
		$user_count -> table = "user";
		$time = date('Y-m-d', strtotime("now"));
		$time_i = strtotime($time) - 86400;
		$time_is = strtotime($time) + 86400;
		$user_count_1 = $user_count -> getCount("reg_time BETWEEN '$time_i' and '$time_is'");
		$user[] = $user_count_1;
		$user_count_1 = $user_count -> getCount();
		$user[] = $user_count_1;
		//以上查询会员统计

		$day = 30;
		//查询日期数量
		for ($i = 0; $i < $day; $i++) {//查询注册时间
			$time_i_s = date('Y-m-d', strtotime("-{$i} day"));
			$time_i = strtotime($time_i_s) - 86400;
			$time_is = strtotime($time_i_s) + 86400;

			$li = $user_count -> getCount("reg_time BETWEEN '$time_i' and '$time_is'");
			if ($li < 1) {
				$li = 0;
			}
			$reg[$i]['licensed'] = $li;
			$reg[$i]['period'] = $time_i_s;
		}

		$day_data = json_encode($reg);

		for ($i = 0; $i < $day; $i++) {//查询下单时间
			$time_i_s = date('Y-m-d', strtotime("-{$i} day"));
			$time_i = strtotime($time_i_s) - 86400;
			$time_is = strtotime($time_i_s) + 86400;

			$li = $order_count -> getCount("add_time BETWEEN '$time_i' and '$time_is'");
			if ($li < 1) {
				$li = 0;
			}
			$order_time[$i]['licensed'] = $li;
			$order_time[$i]['period'] = $time_i_s;
		}

		$day_datas = json_encode($order_time);

		$this -> assign('server_url', $_SERVER['HTTP_HOST']);
		$this -> assign('order', $order);
		$this -> assign('day_data', $day_data);
		$this -> assign('day_datas', $day_datas);
		$this -> assign('user', $user);
		$this -> assign('goods', $goods);
		$this -> assign('left_menu', $left_menu);
		$this -> display();
	}

	function main() {
		$this -> assign('hello', 'Hello World!');
		$this -> display('Index/main.html');
	}

}
