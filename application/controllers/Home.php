<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends MY_ControllerMain {

	public function __construct() {
		parent::__construct();
		$this -> load -> model("menu_model");
		$this -> load -> model('news_model');
		$this -> load -> model('media_model');
		$this -> load -> model('category_model');
		$this -> load -> model('slider_model');
	}

	public function index() {
		$data['menu'] = $this -> menu_model -> get();
		$data['slider']= $this -> slider_model -> getSliderNews();
		$where = array('status' =>'approved');
		$data['lastNews'] = $this -> news_model -> last(10,$where);
		$where = array('cat_id' => 1);
		$data['pal_news'] = $this -> news_model -> last(6, $where);
		$data['first_tital'] = $this -> category_model -> get_by(array("id" => 1));
		$where = array('cat_id' => 2);
		$data['int_news'] = $this -> news_model -> last(6, $where);
		$data['second_tital'] = $this -> category_model -> get_by(array("id" => 2));
		$where = array('cat_id' => 3);
		$data['spo_news'] = $this -> news_model -> last(6, $where);
		$data['third_tital'] = $this -> category_model -> get_by(array("id" => 3));
		$where = array('cat_id' => 9);
		$data['fourth_tital'] = $this -> category_model -> get_by(array("id" => 9));
		$data['opi_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 10);
		$data['fifth_tital'] = $this -> category_model -> get_by(array("id" => 10));
		$data['yabad_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 11);
		$data['sixth_tital'] = $this -> category_model -> get_by(array("id" => 11));
		$data['heb_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 12);
		$data['seventh_tital'] = $this -> category_model -> get_by(array("id" => 12));
		$data['most_news'] = $this -> news_model -> mostVisited(3);
		$this -> load -> templatemain("main.php", $data);
	}

	public function details($id='') {

		$data['menu'] = $this -> menu_model -> get();
		$news = $this -> news_model -> get_by(array('id' => $id));
		if(count($news)){
			$data['title'] = $this -> category_model -> get_by(array('id' => $news[0] -> cat_id));
			$data['last_news']= $this->news_model->last(4,array('cat_id'=>$news[0] -> cat_id,'id !='=>$id));	
		}else{
			$data['title'] = NULL;
			$data['last_news']= NULL;
		}
		$data['imgs'] = $this -> media_model -> get_by(array('news_id' => $id));
		$data['news'] = $news;
		$where = array('cat_id' => 9);
		$data['fourth_tital'] = $this -> category_model -> get_by(array("id" => 9));
		$data['opi_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 10);
		$data['fifth_tital'] = $this -> category_model -> get_by(array("id" => 10));
		$data['yabad_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 11);
		$data['sixth_tital'] = $this -> category_model -> get_by(array("id" => 11));
		$data['heb_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 12);
		$data['seventh_tital'] = $this -> category_model -> get_by(array("id" => 12));
		$data['most_news'] = $this -> news_model -> mostVisited(3);
		$this->news_model->visits($id);
		$this -> load -> templatemain("details.php", $data);
	
	}

	public function lists($id='', $start = '') {

		$data['menu'] = $this -> menu_model -> get();
		$where = array('cat_id' => $id);
		$data['title'] = $this -> category_model -> get_by(array('id' =>$id));
		$data['news'] = $this -> news_model -> get_by_pagination($where, FALSE, 10, $start);
		$where = array('cat_id' => 9);
		$data['fourth_tital'] = $this -> category_model -> get_by(array("id" => 9));
		$data['opi_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 10);
		$data['fifth_tital'] = $this -> category_model -> get_by(array("id" => 10));
		$data['yabad_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 11);
		$data['sixth_tital'] = $this -> category_model -> get_by(array("id" => 11));
		$data['heb_news'] = $this->news_model->last(3,$where);
		$where = array('cat_id' => 12);
		$data['seventh_tital'] = $this -> category_model -> get_by(array("id" => 12));
		$data['most_news'] = $this -> news_model -> mostVisited(3);
		//   pagination
		$this -> load -> library('pagination');
		$config['base_url'] = base_url() . "Home/lists/" . $id;
		$config['total_rows'] = $this -> news_model -> get_count($id);
		$config['per_page'] = 10;
		$config['num_links'] = 5;
		$config['uri_segment'] = 5;
		//$config['use_page_numbers'] = TRUE;//to show page number insted of row number
 
		$config['full_tag_open'] = '<div><ul class="pagination"><li>';
		$config['full_tag_close'] = '</li></ul></div>';

		$config['cur_tag_open'] = '&nbsp;<a href="'. base_url()."Home/lists/" . $id."/".'" >';
		$config['cur_tag_close'] = '</a>'; 
		
		$this -> pagination -> initialize($config);
		$data['pages'] = $this -> pagination -> create_links();
		// end pagination
		$this -> load -> templatemain("List.php", $data);
	}

    function  video()
	{
			$data['menu'] = $this -> menu_model -> get();
		
		
				$this -> load -> templatemain("video.php",$data);
		
		
	}

}
