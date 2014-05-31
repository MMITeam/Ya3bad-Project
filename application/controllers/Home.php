<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends MY_ControllerMain {

	public function __construct() {
		parent::__construct();
		$this -> load -> model("menu_model");
		$this -> load -> model('news_model');
		$this -> load -> model('category_model');
	}

	public function index() {

		$data['menu'] = $this -> menu_model -> get();
		$data['weather'] = $this->getWeather();
		$data['lastNews'] = $this -> news_model -> last(10);
		$where = array('cat_id' => 1);
		$data['pal_news'] = $this -> news_model -> last(6, $where);
		$data['first_tital'] = $this -> category_model -> get_by(array("id" => 1));
		$where = array('cat_id' => 2);
		$data['int_news'] = $this -> news_model -> last(6, $where);
		$data['second_tital'] = $this -> category_model -> get_by(array("id" => 2));
		$where = array('cat_id' => 3);
		$data['spo_news'] = $this -> news_model -> last(6, $where);
		$data['third_tital'] = $this -> category_model -> get_by(array("id" => 3));
		$this -> load -> templatemain("main.php", $data);
	}

	public function details() {

		$data['menu'] = $this -> menu_model -> get();

		$this -> load -> templatemain("details.php", $data);
	}

	public function lists($start = "") {

		$data['menu'] = $this -> menu_model -> get();
		$where = array('cat_id' => 1);
		$data['news'] = $this -> news_model -> get_by_pagination($where, FALSE, 10, $start);
		//
		$this -> load -> library('pagination');
		$config['base_url'] = base_url() . "Home/lists";
		$config['total_rows'] = $this -> news_model -> get_count();
		$config['per_page'] = 10;
		$config['num_links'] = 5;
		$config['uri_segment'] = 4;

		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';

		$config['cur_tag_open'] = '&nbsp;<a href="#" class="selectedPage">';
		$config['cur_tag_close'] = '</a>';

		$this -> pagination -> initialize($config);
		$data['pages'] = $this -> pagination -> create_links();
		//
		$this -> load -> templatemain("List.php", $data);
	}

	public function getWeather() {

		//I am using the DOM(Document Object Model) library to read the entire XML document into memory first.
		$doc = new DOMDocument();
		$doc -> load('http://weather.yahooapis.com/forecastrss?p=SFXX0044&u=c');
		//now I get all elements inside this document with the following name "channel", this is the 'root'
		$channel = $doc -> getElementsByTagName("channel");
		//now I go through each item withing $channel
		foreach ($channel as $chnl) {
			//I then find the 'item' element inside that loop
			$item = $chnl -> getElementsByTagName("item");
			foreach ($item as $itemgotten) {
				//now I search within '$item' for the element "description"
				$describe = $itemgotten -> getElementsByTagName("description");
				//once I find it I create a variable named "$description" and assign the value of the Element to it
				$description = $describe -> item(0) -> nodeValue;
				//and display it on-screen
				return $description;
			}
		}

	}

}
