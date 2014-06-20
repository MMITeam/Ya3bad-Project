<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class News extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		parent::index();
	}

	public function save($id = null) {
        $news_id = $id;
		if ($this -> input -> post("submit")) {

			$config['upload_path'] = "./assets/images/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = 'main' . time();

			$config['max_size'] = '1000000';
			$config['max_width'] = '10000';
			$config['max_height'] = '7680';
			$mainphoto = $this -> input -> post("mainphoto");

			$this -> load -> library('upload', $config);

			if (!$this -> upload -> do_upload('mainphoto')) {
				$error = array('error' => $this -> upload -> display_errors());
			//	echo $error['error'];
				//$this->load->view('admin/news/news_save', $error);
			} else {
				
				$data = array('upload_data' => $this -> upload -> data());

				$data['mainphoto'] = $data['upload_data']['file_name'];
				// create thumb
						$name = base_url()."assets/images/".$data['mainphoto'];//source
						$filename= "./assets/images/thumb/".$data['mainphoto'];//destination
						$new_w= "150";
						$new_h="150";
						$system = explode(".", $name);
                    $j = count($system)-1;
						if (preg_match("/jpg|jpeg|JPG|JPEG/", $system[$j])) {$src_img = imagecreatefromjpeg($name);
						}
						if (preg_match("/png/", $system[$j])) {$src_img = imagecreatefrompng($name);
						}
						$old_x = imageSX($src_img);
						$old_y = imageSY($src_img);
						if ($old_x > $old_y) {
							$thumb_w = $new_w;
							$thumb_h = $old_y * ($new_h / $old_x);
						}
						if ($old_x < $old_y) {
							$thumb_w = $old_x * ($new_w / $old_y);
							$thumb_h = $new_h;
						}
						if ($old_x == $old_y) {
							$thumb_w = $new_w;
							$thumb_h = $new_h;
						}
						$dst_img = ImageCreateTrueColor($thumb_w, $thumb_h);
						imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);
						if (preg_match("/png/", $system[1])) {
							imagepng($dst_img, $filename);
						} else {
							imagejpeg($dst_img, $filename);
						}
						imagedestroy($dst_img);
						imagedestroy($src_img); 
										
				//
			}
		}
		$fields = array("shortDesc", "fullDesc", "cat_id", "pro");
		$this -> load -> model('admin/category_model');
		$this -> load -> model('admin/slider_model');
		$data['category'] = $this -> category_model -> get();
		$data['isSlider'] = $this -> slider_model -> checkSlider($id);
		parent::save($fields, $id, $data);
        if( $this -> db -> insert_id() != 0)
		$news_id = $this -> db -> insert_id();
		$fields = $this -> news_model -> array_from_post(array("slider"));

		if ($this -> input -> post("submit")) {
			if ($id != null) {
				if (isset($fields['slider']) && $fields['slider'] == 1) {
					$this -> load -> model("admin/slider_model");
					$dataa['news_id'] = $id;
					$this -> slider_model -> save($dataa);

				} else {
					$this -> load -> model("admin/slider_model");

					$this -> slider_model -> delete($id);

				}
			} else {
				if (isset($fields['slider']) && $fields['slider'] == 1) {
					$this -> load -> model("admin/slider_model");
					$dataa['news_id'] = $news_id;
					$this -> slider_model -> save($dataa);
				}

			}
      
			redirect(base_url() . "admin/news/upload/" . $news_id);

		}

	}

	public function uploadhandler($id) {

		define("_UPLOADS", "./assets/images/");
		define("_THUMBNAIL", "./assets/images/thumb/");

		$img = file_get_contents('php://input');
		$temp = explode(',', $img);
		$img = $temp[1];
		$t = time();
		$name = $_SERVER['HTTP_UPLOADER_NAME'];
		$isThumb = $_SERVER['HTTP_UPLOADER_THUMB'];
		$data = base64_decode($img);
		$file = _UPLOADS . $t . $name;
		$imgname = $t . $name;
		$link = mysql_connect('yabod.db.11589867.hostedresource.com', 'yabad', 'a0595102001A@');
		mysql_select_db("yabad");
		mysql_query("insert into  media(news_id,path,type,user,status) values('$id','$imgname','1','$this->_userId','approved')");

		$success = file_put_contents($file, $data);

		if ($isThumb == true && stristr($_SERVER['CONTENT_TYPE'], "image") == true) {
			$thumbWidth = $_SERVER['HTTP_UPLOADER_THUMBWIDTH'];
			$thumbHeight = $_SERVER['HTTP_UPLOADER_THUMBHEIGHT'];

			$newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
			$thumbTemp = imagecreatefromstring($data);
			$thumb = imagecopyresampled($newThumb, $thumbTemp, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imagesx($thumbTemp), imagesy($thumbTemp));

			$thumbFile = _THUMBNAIL . $t . $name;
			imagejpeg($newThumb, $thumbFile, 90);
		}

		if ($success) {
			echo "ddd";

		} else {
			echo "Server failed for file: " . $name;
		}

	}

	public function delete() {
		parent::delete();

	}

	public function get_by() {

		$fields = array("id");
		parent::get_by($fields);
	}

	public function search_by() {

		$fields = array("title");
		parent::get_by($fields);
	}

	public function get_by_pagination() {
		$fields = array("title");
		parent::get_by($fields);

	}

	public function approve() {
		parent::approve();

	}

	public function archive() {
		parent::archive();

	}

}
?>