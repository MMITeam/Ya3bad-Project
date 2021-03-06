<?php
class MY_ModelHOME extends CI_Model {

	protected $_table_name = '';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	//protected $_order_by = '';
	public $rules = array();
	protected $_timestamps = TRUE;

	function __construct() {
		parent::__construct();
	}

	public function array_from_post($fields) {
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this -> input -> post($field);
		}
		return $data;
	}

	public function array_from_get($fields) {
		$data = array();
		foreach ($fields as $field) {
			if ($this -> input -> get($field)) {
				$data[$field] = $this -> input -> get($field);
			}
		}
		return $data;
	}

	public function get($id = NULL, $single = FALSE) {

		if ($id != NULL) {
			$filter = $this -> _primary_filter;
			$id = $filter($id);
			$this -> db -> where($this -> _primary_key, $id);
			$method = 'row';
		} elseif ($single == TRUE) {
			$method = 'row';
		} else {
			$method = 'result';
		}

		/*if (!count($this->db->ar_orderby)) {
		 $this->db->order_by($this->_order_by);
		 }*/
		$ret = $this -> db -> get($this -> _table_name) -> $method();
		$q = $this -> db -> affected_rows();
		if ($q > 0) {
			return $ret;
		} else {
			return NULL;
		}
	}

	public function get_by($where, $single = FALSE, $per_page = 1, $start = 0) {
		$where['status']='approved';
		$this -> db -> where($where);
		return $this -> get(NULL, $single);
	}

	public function search_by($where, $single = FALSE, $per_page = 1, $start = 0) {
		foreach ($where as $k => $v) {
			if (is_string($v)) {
				$this -> db -> like($where);
			} else {
				$this -> db -> where($where);
			}
		}
		return $this -> get(NULL, $single);
	}

	public function get_by_pagination($where, $single = FALSE, $per_page = 10, $start = 0) {
		$this -> db -> order_by("id", "desc");
		$this -> db -> limit($per_page, $start);
			$where['status']='approved';
		return $this -> search_by($where, $single = FALSE);
	}

	function get_count() {
		$this -> db -> from($this -> _table_name);
		$c = $this -> db -> count_all_results();

		return $c;
	}

	function get_approved_count() {
		$this -> db -> where('status', 'approved');
		$this -> db -> from($this -> _table_name);
		$c = $this -> db -> count_all_results();

		return $c;
	}

	public function last($number = 1, $where = null) {
		$this -> db -> order_by("id", "desc");
		$this -> db -> limit($number);
		if ($where != null) {
			$where['status']='approved';
			$this -> db -> where($where);
		}

		$singel = $number == 1 ? True : False;
		return $this -> get(null, $singel);
	}

}
