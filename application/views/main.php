<div id="top_area">
<?php include 'include/adsContainer.php';?>
	<div id="lastest_news_container">
		<div class="simple_block block_num_3" id="block-2">
			<div class="bt">
				<span>آخر الاخبار</span>
			</div>
			<div class="bc">
				<div class="block_2_container">

					<?php if(count($lastNews)): foreach ($lastNews as $news):
						
						$date = new DateTime();
						$date->setTimeStamp($news->created);
						
						?>
						
					<a href="<?php  echo base_url() . "home/details/" . $news -> id; ?>"> <span class="bit_frame block_2_bit">
						 <span class="btitle"><span class="d"><strong><?php echo $date -> format(' h') . ":" . $date -> format('i'); ?>
						 </strong><?php echo $date -> format('d') . " - " . $date -> format(' m'), " - " . $date -> format('y'); ?></span>
						 <span class="t"></span><?php echo $news->shortDesc?></span> <span class="clear"></span> </span> 
					</a>
					<?php endforeach;  endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="slider_container">
 		 <div id="sliderFrame">
	        <div id="slider">
	        	<?php if(count($slider)): for($i=count($slider);$i<-0;$i--): ?>
	            <a href="<?php echo base_url() . 'home/details/' . $slider[$i] -> id; ?>" >
	                <img src="<?php echo HTTP_IMG_PATH . $slider[$i] -> mainphoto; ?>" alt="<?php echo $slider[$i] -> shortDesc; ?>" />
	            </a>
	            <?php endfor; endif; ?>
	        </div>
	        
    	</div>
	</div>
</div>

<div id="main_area"> 
<?php include 'include/sideContainer.php'; ?>
	<div id="main-container">
		<div class="empty_container main_block new_slider_container">
			<ul class="new_slider">
				<li>
 			<div class="new_leastest_news">
				<a href="http://localhost/yabod/home/details/161">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
					 	 		<img src="http://localhost/yabod/assets/images/thumb/main14.jpg" title="" alt="" width="80" height="70">
						 	 	</span>
						 	 	<h1 class="tt">خبر جديد عين على يعبد  </h1>
					 	 </span>
						 	 <span class="d"><strong> 08:08	 </strong>08 -  06 - 14</span> 
					 	 <span class="clear"></span> 
			 	 		</span> 
		 	 	</a>
		</div>
		</li>
		<li>
			<div class="new_leastest_news">
			<a href="http://localhost/yabod/home/details/161">
						 <span class="bit_frame block_41_bit">
					 	 <span class="t">
						 	 	<span class="m">
					 	 		<img src="http://localhost/yabod/assets/images/thumb/main14.jpg" title="" alt="" width="80" height="70">
					 	 		</span><h1 class="tt">خبر جديد عين على يعبد  </h1></span>
					 	 		<span class="d"><strong> 08:08						 </strong>08 -  06 - 14</span> 
					 	 		<span class="clear"></span> 
		 	 		</span> 
	 	 		</a>
		</div>
		</li>
		<li>
		<div class="new_leastest_news">
				<a href="http://localhost/yabod/home/details/161">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="http://localhost/yabod/assets/images/thumb/main14.jpg" title="" alt="" width="80" height="70">
						 	 		</span><h1 class="tt">خبر جديد عين على يعبد  </h1></span>
						 	 		<span class="d"><strong> 08:08						 </strong>08 -  06 - 14</span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
			</div>
		</li>
		<li>
		<div class="new_leastest_news">
				<a href="http://localhost/yabod/home/details/161">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="http://localhost/yabod/assets/images/thumb/main14.jpg" title="" alt="" width="80" height="70">
						 	 		</span><h1 class="tt">خبر جديد عين على يعبد  </h1></span>
						 	 		<span class="d"><strong> 08:08						 </strong>08 -  06 - 14</span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
			</div>
		</li>
		</ul>
		</div>
		<div class="empty_container main_block">
		<?php if (count($ads_location_5)): 
				if($ads_location_5[0]->type == 1): ?>
             <img src="<?php echo $ads_location_5[0]->adsfile;?>" border="0" target="_blank" alt="" title="" width="645" height="90">
				<?php else: ?>
					<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="649" height="90">
						<param name="movie" value="<?php echo $ads_location_5[0]->adsfile;?>">
						<param name="quality" value="High">
						<embed src="<?php echo $ads_location_5[0]->adsfile;?>" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="649" height="90">
					</object>		
			<?php endif;endif;?>


		</div>

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php
					if (count($first_tital)) : echo base_url() . 'home/lists/' . $first_tital[0] -> id;
					endif;
				?>"><?php
				if (count($first_tital)) : echo $first_tital[0] -> title;
				endif;
				?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<?php if(count($pal_news)):?>
					<a href="<?php echo base_url() . "home/details/" . $pal_news[0] -> id; ?>">
					<img src="<?php echo HTTP_IMG_PATH . $pal_news[0] -> mainphoto; ?>" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php  echo $pal_news[0] -> shortDesc; ?></h1>
						<div class="main_cat_news_body" >
							<?php  echo substr($pal_news[0] -> fullDesc, 0, 200); ?>
						</div>
					</div>
					</a>
					<?php endif; ?>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($pal_news)) : for($i= 1;$i<count($pal_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $pal_news[$i] -> id; ?>"> 
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH . $pal_news[$i] -> mainphoto; ?>"
							 	 	title="" alt="" width="70" height="40">
								 </span><?php echo $pal_news[$i] -> shortDesc; ?></span> 
							 <span class="clear"> 	
							 </span>
					    </span> 
					 </a> 
					 <?php endfor; endif; ?>

				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="empty_container main_block">
			<?php if (count($ads_location_6)): 
				if($ads_location_6[0]->type == 1): ?>
             <img src="<?php echo $ads_location_6[0]->adsfile;?>" border="0" target="_blank" alt="" title="" width="645" height="90">
				<?php else: ?>
					<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="649" height="90">
						<param name="movie" value="<?php echo $ads_location_6[0]->adsfile;?>">
						<param name="quality" value="High">
						<embed src="<?php echo $ads_location_6[0]->adsfile;?>"pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="649" height="90">
					</object>		
			<?php endif;endif;?>		
		</div>

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php
					if (count($second_tital)) : echo base_url() . 'home/lists/' . $second_tital[0] -> id;
					endif;
				?>"><?php
				if (count($second_tital)) : echo $second_tital[0] -> title;
				endif;
 ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<?php if(count($int_news)): ?>
					<a href="<?php echo base_url() . "home/details/" . $int_news[0] -> id; ?>">
					<img src="<?php  echo HTTP_IMG_PATH . $int_news[0] -> mainphoto; ?>" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php  echo $int_news[0] -> shortDesc; ?></h1>
						<div class="main_cat_news_body" >
							<?php  echo substr($int_news[0] -> fullDesc, 0, 200); ?>
						</div>
					</div>
					</a>
					<?php endif; ?>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($int_news)) : for($i= 1;$i<count($int_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $int_news[$i] -> id; ?>">  
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH . $int_news[$i] -> mainphoto; ?>"
							 	 	title="" alt="" width="70" height="40">
								 </span><?php echo $int_news[$i] -> shortDesc; ?></span> 
							 <span class="clear"> 	
							 </span>
					    </span> 
					 </a> 
					 <?php endfor; endif; ?>

				</div>
				<div class="clear"></div>

			</div>

		</div>
		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php
					if (count($third_tital)) : echo base_url() . 'home/lists/' . $third_tital[0] -> id;
					endif;
				?>"><?php
				if (count($third_tital)) : echo $third_tital[0] -> title;
				endif;
 ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<?php if(count($spo_news)): ?> 
					<a href="<?php echo base_url() . "home/details/" . $spo_news[0] -> id; ?>">
					<img src="<?php echo HTTP_IMG_PATH . $spo_news[0] -> mainphoto; ?>" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php  echo $spo_news[0] -> shortDesc; ?></h1>
						<div class="main_cat_news_body" >
							<?php echo substr($spo_news[0] -> fullDesc, 0, 200); ?>
						</div>
					</div>
					</a>
					<?php endif; ?>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($spo_news)) : for($i= 1;$i<count($spo_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $spo_news[$i] -> id; ?>">
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH . $spo_news[$i] -> mainphoto; ?> "
							 	 	title="" alt="" width="70" height="40">
								 </span><?php echo $spo_news[$i] -> shortDesc; ?></span> 
							 <span class="clear"> 	
							 </span>
					    </span> 
					 </a> 
					 <?php endfor; endif; ?>

				</div>
				<div class="clear"></div>

			</div>

		</div>
	</div>
</div>
<div id="bottom_area">
	&nbsp;
</div>
</div>
</body>


<link href="<?php echo HTTP_CSS_PATH; ?>js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="<?php echo HTTP_JS_PATH; ?>js-image-slider.js" type="text/javascript"></script> 
    

 <script>
	$(document).ready(function() {
		$('#weatherfeed').weatherfeed(['26160']);
	});
</script>

</html>