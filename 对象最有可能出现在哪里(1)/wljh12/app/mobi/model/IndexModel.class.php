<?php
class IndexModel extends BaseModel {
	public $db = null;
	public $prefix = 'siu_';
	public $table = null;

	function __construct() {
		global $db_config;
		parent::__construct();

	}

	function getCateList() {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE status=1 ";
		$sql .= " ORDER BY  sort ASC, id DESC";

		return $this -> db -> select($sql);

	}

	function getGoodsList($id,$page,$pages) {
		if ($id != '') {
			$sqls = " WHERE cate_id={$id} AND status=1 ";

		} else {
			$sqls = " WHERE status=1 ";
		}

		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods {$sqls} ORDER BY sort DESC LIMIT $page,$pages";
		//die($sql);
		return $this -> db -> select($sql);

	}
	function getGoodsList2($id,$page,$pages) {
		if ($id != '') {
			$sqls = " WHERE  status=1 and name like '%" . $id . "%'";

		} else {
			$sqls = " WHERE status=1 ";
		}

		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods {$sqls} ORDER BY sort DESC, id DESC LIMIT $page,$pages";
		return $this -> db -> select($sql);

	}
	function getCarouselList() {


		$sql = "SELECT * FROM " . TABLE_PREFIX . "carousel ORDER BY sort";

		return $this -> db -> select($sql);

	}


}
