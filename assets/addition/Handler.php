<?php
/*
Pure Uploader PHP Handler v1.0
Author : tQera
*Tested on Windows with PHP 5.2.7*
*/
//You can change the uploads and thumbnails folder below
define("_UPLOADS", "../uploads/");
define("_THUMBNAIL", "../uploads/thumbnails/");

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
	$id  =  $_POST['id'];
	mysql_query("insert into  media(news_id,path) values('$id','$id')");
	
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
	
	?>
   <script src  =  "<?php echo  HTTP_JS_PATH; ?>jquery.js">
  function  Postit(){
      $.post( "<?php echo  base_url();  ?>admin/news/save", { shortdesc: "mahomud", fullDesc: "<?php echo  $file; ?>" ,cat_id:"3",submit:"1"} ,  function( data ) {
});
}
Postit();

   </script>
   
   <?php 
}
else{
    echo "Server failed for file: ".$name;
    }
?>