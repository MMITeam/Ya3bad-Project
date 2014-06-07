<div id="top_area">
	<div id="sub_main_news_container">
		<div class="sub_main_news">
			<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="300" height="90">
	<param name="movie" value="http://www.wattan.tv/data/banners/be_178.swf?clickTAG=http://">
	<param name="quality" value="High">
	<embed src="http://www.wattan.tv/data/banners/be_178.swf?clickTAG=http://" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="300" height="90"></object>
		</div>
		<div class="sub_main_news">
		<object id="obj154" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="300" height="90">
	<param name="movie" value="http://www.wattan.tv/data/banners/be_154.swf?clickTAG=http://">
	<param name="quality" value="High">
	<embed src="http://www.wattan.tv/data/banners/be_154.swf?clickTAG=http://" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj154" width="300" height="90"></object>
		</div>
		<div class="sub_main_news">
		<object id="obj176" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="300" height="90">
	<param name="movie" value="http://www.wattan.tv/data/banners/be_176.swf?clickTAG=http://">
	<param name="quality" value="High">
	<embed src="http://www.wattan.tv/data/banners/be_176.swf?clickTAG=http://" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj176" width="300" height="90"></object>
	</div>
	</div>
	<div id="lastest_news_container">
		<div class="simple_block block_num_3" id="block-2">
			<div class="bt">
				<span>آخر الاخبار</span>
			</div>
			<div class="bc">
				<div class="block_2_container">

					<?php if(count($lastNews)): foreach ($lastNews as $news):
						
						$date = new DateTime($news->created);
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
	        	<?php if(count($slider)): for($i=0;$i<count($slider);$i++): ?>
	            <a href="<?php echo base_url().'home/details/'.$slider[$i]->id;?>" >
	                <img src="<?php echo HTTP_IMG_PATH.$slider[$i]->mainphoto; ?>" alt="<?php echo $slider[$i]->shortDesc;?>" />
	            </a>
	            <?php endfor; endif;?>
	        </div>
	        
    	</div>
	</div>
</div>

<div id="main_area">

	<div id="side-container">

		<div class="simple_wattan_block block_num_13" >
			<div class="bh">
				<div>
					<a href="<?php if(count($fourth_tital)): echo base_url().'home/lists/'.$fourth_tital[0]->id; endif;?>"> <?php if(count($fourth_tital)): echo $fourth_tital[0]->title; endif;?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($opi_news)): for($i=0;$i<count($opi_news);$i++):?>
					<a href="<?php echo base_url().'home/details/'.$opi_news[$i]->id;?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH.$opi_news[$i]->mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $opi_news[$i]->shortDesc;?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif;?>
				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
			<a href="<?php if(count($fifth_tital)): echo base_url().'home/lists/'.$fifth_tital[0]->id; endif;?>"> <?php if(count($fifth_tital)): echo $fifth_tital[0]->title; endif;?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($yabad_news)): for($i=0;$i<count($yabad_news);$i++):?>
					<a href="<?php echo base_url().'home/details/'.$yabad_news[$i]->id;?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH.$yabad_news[$i]->mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $yabad_news[$i]->shortDesc;?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif;?>
				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="<?php if(count($sixth_tital)): echo base_url().'home/lists/'.$sixth_tital[0]->id; endif;?>"> <?php if(count($sixth_tital)): echo $sixth_tital[0]->title; endif;?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($heb_news)): for($i=0;$i<count($heb_news);$i++):?>
					<a href="<?php echo base_url().'home/details/'.$heb_news[$i]->id;?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH.$heb_news[$i]->mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $heb_news[$i]->shortDesc;?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif;?>
				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="#">الطقس</a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<div class="weather" id="weatherfeed" > </div>
					</div>
				<div class="clear"></div>

			</div>

		</div>
		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="<?php if(count($seventh_tital)): echo base_url().'home/lists/'.$seventh_tital[0]->id; endif;?>"> <?php if(count($seventh_tital)): echo $seventh_tital[0]->title; endif;?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($most_news)): for($i=0;$i<count($most_news);$i++):?>
					<a href="<?php echo base_url().'home/details/'.$most_news[$i]->id;?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH.$most_news[$i]->mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $most_news[$i]->shortDesc;?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif;?>
				</div>
				<div class="clear"></div>

			</div>

		</div>

	</div>
	<div id="main-container">
		<div class="empty_container main_block">
<object id="obj151" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="645" height="90">
	<param name="movie" value="http://www.wattan.tv/data/banners/be_151.swf?clickTAG=http://">
	<param name="quality" value="High">
	<embed src="http://www.wattan.tv/data/banners/be_151.swf?clickTAG=http://" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj151" width="645" height="90"></object>
		</div>

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php if (count($first_tital)): echo base_url().'home/lists/'.$first_tital[0]->id; endif;?>"><?php  if(count($first_tital)): echo $first_tital[0] -> title; endif;?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<?php if(count($pal_news)):?>
					<a href="<?php echo base_url() . "home/details/" . $pal_news[0] -> id;  ?>">
					<img src="<?php echo HTTP_IMG_PATH.$pal_news[0]->mainphoto; ?>" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php  echo $pal_news[0] -> shortDesc; ?></h1>
						<div class="main_cat_news_body" >
							<?php  echo $pal_news[0] -> fullDesc; ?>
						</div>
					</div>
					</a>
					<?php endif;?>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($pal_news)) : for($i= 1;$i<count($pal_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $pal_news[$i] -> id; ?>"> 
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH.$pal_news[$i] ->mainphoto; ?>"
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
             <img src="http://www.wattan.tv/data/banners/be_179.jpg" border="0" target="_blank" alt="" title="" width="645" height="90">
		</div>

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php if (count($second_tital)): echo base_url().'home/lists/'.$second_tital[0]->id; endif;?>"><?php if (count($second_tital)): echo $second_tital[0] -> title; endif; ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<?php if(count($int_news)): ?>
					<a href="<?php echo base_url() . "home/details/" . $int_news[0] -> id; ?>">
					<img src="<?php  echo HTTP_IMG_PATH.$int_news[0]->mainphoto; ?>" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php  echo $int_news[0] -> shortDesc;  ?></h1>
						<div class="main_cat_news_body" >
							<?php  echo $int_news[0] -> fullDesc; ?>
						</div>
					</div>
					</a>
					<?php endif;?>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($int_news)) : for($i= 1;$i<count($int_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $int_news[$i] -> id; ?>">  
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH.$int_news[$i]->mainphoto; ?>"
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
					<a href="<?php if(count($third_tital)): echo base_url().'home/lists/'.$third_tital[0]->id;endif;?>"><?php if(count($third_tital)): echo $third_tital[0] -> title; endif; ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<?php if(count($spo_news)): ?> 
					<a href="<?php echo base_url() . "home/details/" . $spo_news[0] -> id;  ?>">
					<img src="<?php echo HTTP_IMG_PATH.$spo_news[0]->mainphoto;  ?>" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php  echo $spo_news[0] -> shortDesc;  ?></h1>
						<div class="main_cat_news_body" >
							<?php echo $spo_news[0] -> fullDesc;  ?>
						</div>
					</div>
					</a>
					<?php endif;?>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($spo_news)) : for($i= 1;$i<count($spo_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $spo_news[$i] -> id; ?>">
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH.$spo_news[$i]->mainphoto; ?> "
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
 $(document).ready(function () {
	$('#weatherfeed').weatherfeed(['26160']);
});</script>

</html>