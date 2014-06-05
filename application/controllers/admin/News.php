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

	

	public function save($id=null) {
     	if ($this -> input -> post("submit")) {

		
		$config['upload_path'] = "./assets/images/";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = 'allllli';
		
		$config['max_size']	= '1000000';
		$config['max_width']  = '10000';
		$config['max_height']  = '7680';
       $mainphoto =  $this->input->post("mainphoto");
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload(  'mainphoto' ))
		{
			$error = array('error' => $this->upload->display_errors());
            echo $error['error'];
			//$this->load->view('admin/news/news_save', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$data['mainphoto'] =  $data['upload_data']['file_name'];
		}
		}
		$fields = array("shortDesc", "fullDesc", "cat_id"  );
		$this->load->model('category_model');
		$data['category'] =  $this->category_model->get();
		parent::save($fields,$id,$data);

		if ($this -> input -> post("submit")) {
		redirect(base_url() . "admin/news/upload/" . $this -> db -> insert_id() );

		}
		

	}
		
	
   public  function  uploadhandler($id)
   {
   
   	define("_UPLOADS", "./assets/images/");
define("_THUMBNAIL", "<?php echo  base_url();  ?>assets/uploads/");


$img = file_get_contents('php://input');
$temp = explode(',', $img);
$img = $temp[1];
$t = time();
$name = $_SERVER['HTTP_UPLOADER_NAME'];
$isThumb = $_SERVER['HTTP_UPLOADER_THUMB'];
$data = base64_decode($img);
$file = _UPLOADS.$t.$name;
	$link = mysql_connect('localhost', 'root', '');
	mysql_select_db("yabad");
	mysql_query("insert into  media(news_id,path,type) values('$id','$t.$name','1')");
	
$success = file_put_contents($file, $data);

if($isThumb == true && stristr($_SERVER['CONTENT_TYPE'], "image") == true){
    $thumbWidth = $_SERVER['HTTP_UPLOADER_THUMBWIDTH'];
    $thumbHeight = $_SERVER['HTTP_UPLOADER_THUMBHEIGHT'];

    $newThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
    $thumbTemp = imagecreatefromstring($data);
    $thumb = imagecopyresampled($newThumb, $thumbTemp, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imagesx($thumbTemp), imagesy($thumbTemp));

    $thumbFile = _THUMBNAIL.$t.$name;
    imagejpeg($newThumb, $thumbFile, 90);
}

if($success){
echo  "ddd";
  
}
else{
    echo "Server failed for file: ".$name;
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