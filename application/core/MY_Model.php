<?php
class MY_Model extends CI_Model {

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
		 $ret  =  $this -> db -> get($this -> _table_name) -> $method();
		 	$q = $this -> db -> affected_rows();
			if ($q > 0) {
				return $ret;
			} else {
				return  NULL;
			}
	}

	public function get_by($where, $single = FALSE, $per_page = 1, $start = 0) {
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
		$this -> db -> limit($per_page, $start);
		return $this -> search_by($where, $single = FALSE);
	}

	public function save($data, $id = NULL) {

		// Set timestamps
		if ($this -> _timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}

		// Insert
		if ($id === NULL) {
			!isset($data[$this -> _primary_key]) || $data[$this -> _primary_key] = NULL;

			$data['status'] = "pennding";
			$this -> db -> set($data);
			$this -> db -> insert($this -> _table_name);
			//echo $id = $this->db->id;
			//die;
			//$id = $this->db->insert_id();
			$q = $this -> db -> affected_rows();
			if ($q > 0) {
				$this -> session -> set_flashdata('msg', 'Record Saved Succefully');
			} else {
				$this -> session -> set_flashdata('error_msg', 'Record did not Saved Succefully');
			}
			
		}
		// Update
		else {
			$filter = $this -> _primary_filter;
			$id = $filter($id);
			$this -> db -> set($data);
			$this -> db -> where($this -> _primary_key, $id);
			$this -> db -> update($this -> _table_name);
			//print_r($this->db->last_query());
			//die;
			$q = $this -> db -> affected_rows();
			if ($q > 0) {
				$this -> session -> set_userdata('msg', 'Record Updated Succefully');
			} else {
				$this -> session -> set_userdata('error_msg', '0 Records Updated');
			}
		}
		return $id;
	}

	public function delete($id) {
		$filter = $this -> _primary_filter;
		$id = $filter($id);

		if (!$id) {
			return FALSE;
		}
		$this -> db -> where($this -> _primary_key, $id);
		//$this->db->limit(1);
		$this -> db -> delete($this -> _table_name);
		$q = $this -> db -> affected_rows();
		if ($q > 0) {
			$this -> session -> set_userdata('msg', 'Record Deleted Succefully');
		} else {
			$this -> session -> set_userdata('error_msg', 'Record did not Deleted Succefully');
		}
	}

	public function archive($id) {
		$filter = $this -> _primary_filter;
		$id = $filter($id);

		if (!$id) {
			return FALSE;
		}

		$now = date('Y-m-d H:i:s');
		$this -> db -> set('archiveDate', $now);
		$this -> db -> set('archivedBy', 1);

		$this -> db -> set('status', 'archive');
		$this -> db -> where($this -> _primary_key, $id);
		$this -> db -> limit(1);
		$this -> db -> update($this -> _table_name);
		$q = $this -> db -> affected_rows();
		if ($q > 0) {
			$this -> session -> set_userdata('msg', 'Record Archived Succefully');
		} else {
			$this -> session -> set_userdata('error_msg', 'Record did not Deleted Succefully');
		}
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
	
	public function last ($number,$where){
			$this->db->order_by("id", "desc");
            $this->db->limit($number);
			$this->db->where($where);
			$singel = $number == 1 ? True : False;
            return $this->get(null,$singel);
	}

}
