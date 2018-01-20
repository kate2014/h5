<?php
class SearchController extends BaseController {

	function __construct() {
		parent::__construct();

	}

	function index() {
		//get_r(array("s","page","order","set"));
		eval(get_arr(array("s","page","order","set")));
		$obj_search = new CommonModel();
		$obj_search -> table = 'goods';
		if ($page == null) {
			$page = 1;
		}
		$page_num = 20;
		//查询数
		$limit_x = ($page - 1) * $page_num;
		$limit_y = $limit_x + $page_num;
		if ($order == "sort-price") {
			if ($set == 1) {
				$sets = '-';
			}
			$orders = 'order by ' . $sets . 'sale_price' . USER_CATE . ' desc';
		}
		if ($order == "sort-added") {
			if ($set == 1) {
				$sets = '-';
			}
			$orders = 'order by ' . $sets . 'id desc';
		}
		$search_list = $obj_search -> getOther("name like '%$s%' AND status = 1 $orders LIMIT $limit_x , $limit_y");

		if ($search_list) {

			foreach ($search_list as $key => $value) {
				$search_list[$key] = $value;
				$search_list[$key]['sale_price'] = $value['sale_price' . USER_CATE];

			}

			$search_num = $obj_search -> getCount("name like '%$s%' AND status = 1 $orders ");

			$data['search_list'] = $search_list;
			$data['search_num'] = $search_num;
			$data['search_s'] = $s;

			$data['success'] = true;
		} else {
			$data['msg'] = "暂时没有找到任何信息";
			$data['success'] = false;
		}
		echo json_encode($data);

	}

}
