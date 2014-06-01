<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<header>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<link rel="stylesheet" media="screen" href="<?php echo  HTTP_CSS_PATH;  ?>app.css">
			<link rel="stylesheet" media="screen" href="<?php echo  HTTP_CSS_PATH;  ?>extra-style.css"> 
		<title>ya3bad</title>
	</header>
	<body>
		<div id="main_container">

			<div id="header">
				<div id="logo">
					&nbsp;
				</div>
				<div id="share_icons">
					<img src="<?php  echo  HTTP_IMG_PATH;   ?>/heade_find_us_f.png" />
					<img src="<?php  echo  HTTP_IMG_PATH;   ?>/heade_find_us_t.png" />
					<img src="<?php  echo  HTTP_IMG_PATH;   ?>/heade_find_us_y.png" />
					<img src="<?php  echo  HTTP_IMG_PATH;   ?>/heade_find_us_rss.png" />
				</div>
				<div id="header_menu">
					رؤيتنا   |   سياستنا   |   تواصل   |   فريقنا   |   للاعلان   |   الخريطة
				</div>
				<div id="ad1">

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
							<a href  = "<?php   echo  $menuItem->link;  ?>"  ><?php   echo  $menuItem->text;  ?></a>
							
						     </li>
							
							<?php
							$i++;
							if($i != $length)
								echo '|';
						}
						
						?>
						
						
					</ul>
				</div>
			</div >