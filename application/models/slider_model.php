<?php
class Slider_model extends MY_ModelHOME {

	protected $_table_name = 'slider';

	// constructor
	function __construct() {
		parent::__construct();

	}

	public function getSliderNews() {
		$result = $this -> last(5, array('status' => 'approved'));
		$method = 'result';
		$this -> db -> where('id', $result[0] -> news_id);
		for ($i = 1; $i < count($result); $i++) {
			$this -> db -> or_where('id = ', $result[$i] -> news_id);
		}
		return $this -> db -> get('news') -> $method();
	}

}
