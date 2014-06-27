<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<header>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<link rel="stylesheet" media="screen" href="<?php echo HTTP_CSS_PATH; ?>app.css">
			<link rel="stylesheet" media="screen" href="<?php echo HTTP_CSS_PATH; ?>extra-style.css"> 
			<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery-1.9.1.min.js" ></script>
			<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery.zweatherfeed.js" ></script>
			<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery.zweatherfeed.min.js" ></script>
		<title>ya3bad</title>
		<script type="text/javascript" language="JavaScript">
			$(document).ready(function() {
				
							

var cur = 1;
var max = $(".new_slider li").length;
setInterval(function () {
       if (cur+4 > max) {
    cur=1;
           $("#panel").animate({
        marginLeft: "0",
    }, 1000);
      return false;
     }
    cur++; 
     $("#panel").animate({
        marginLeft: "-=206px",
    }, 1000);
    },3000);
$(".arrowLeft").click(function(){
	 if (cur+4 > max) {
    cur=1;
           $("#panel").animate({
        marginLeft: "0",
    }, 1000);
      return false;
     }
    cur++; 
     $("#panel").animate({
        marginLeft: "-=206px",
    }, 1000);
});

$(".arrowRight").click(function(){
	    if (cur == 1 && cur < max){
	    	cur=1;
                $("#panel").animate({
        marginLeft: "0",
    }, 1000);
      return false;
      }
       cur--;

     $("#panel").animate({
        marginLeft: "+=206px",
    }, 1000);
});
				$('#fb_share_icons').hover(function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_f_active.png');
					}, function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_f.png');
				});

				$('#tw_share_icons').hover(function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_t_active.png');
					}, function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_t.png');
				});
			
				$('#yt_share_icons').hover(function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_y_active.png');
					}, function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_y.png');
				});
			
				$('#rss_share_icons').hover(function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_rss_active.png');
					}, function() {
					$(this).attr('src', '<?php  echo HTTP_IMGHQ_PATH; ?>heade_find_us_rss.png');
				});



	});
		</script>
	</header>
	<body>
		<div id="main_container">

			<div id="header">
				<div id="logo">
					&nbsp;
				</div>
				<div id="share_icons">
					<img id="fb_share_icons" src="<?php  echo HTTP_IMGHQ_PATH; ?>/heade_find_us_f.png" />
					<img id="tw_share_icons" src="<?php  echo HTTP_IMGHQ_PATH; ?>/heade_find_us_t.png" />
					<img id="yt_share_icons" src="<?php  echo HTTP_IMGHQ_PATH; ?>/heade_find_us_y.png" />
					<img id="rss_share_icons" src="<?php  echo HTTP_IMGHQ_PATH; ?>/heade_find_us_rss.png" />
				</div>
				<div id="header_menu">
					<ul>
		<li>		رؤيتنا   </li>|
		<li>   	   سياستنا  </li> |
		<li>	      تواصل  </li> |
		<li>         فريقنا  </li> |
		<li>          للاعلان  </li> |
		<li>              الخريطة</li>
					<ul>
				</div>
				<div id="ad1">
					<?php if (count($ads_location_1)): 
						if($ads_location_1[0]->type == 1): ?>
		             <img src="<?php echo HTTP_ADS_PATH.$ads_location_1[0]->adsfile;?>" border="0" target="_blank" alt="" title="" width="728" height="90">
						<?php else: ?>
							<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="728" height="90">
								<param name="movie" value="<?php echo $ads_location_1[0]->adsfile;?>">
								<param name="quality" value="High">
								<embed src="<?php echo HTTP_ADS_PATH.$ads_location_1[0]->adsfile;?>"pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="728" height="90">
							</object>		
					<?php endif;endif;?>	
				</div>

				<div id="main_menu" >
					<ul>
						<?php  
						if(isset($menu))
						$length =  count($menu);
						$i = 0; 
						foreach($menu as $menuItem)
						{
							?>
							<li>

							<a href  = "<?php   echo  base_url().$menuItem->link;  ?>"  ><?php   echo  $menuItem->text;  ?></a>


							
						     </li>
							
							<?php
							$i++;
							if ($i != $length)
								echo '|';
							}
						?>
						
						
					</ul>
				</div>
			</div >