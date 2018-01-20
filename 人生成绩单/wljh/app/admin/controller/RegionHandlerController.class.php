<?php
class RegionHandlerController extends BaseController {
	function getRegions() {
		$pid = get_data('pid');
		
		$r_m = new RegionsModel();
		$regions= $r_m->selList('pid=' . $pid, 'id, name', 'sort ASC, id ASC');
		$rs['status'] = 'ok';
		$rs['regions'] = $regions;
		
		echo json_encode($rs);
	}
}