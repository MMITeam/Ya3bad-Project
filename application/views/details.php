<?php $days = array(
    'Sunday'=>'الاحد',
    'Monday'=>'الاثنين',
    'Tuesday'=>'الثلاثاء',
    'Wednesday'=>'الاربعاء',
    'Thursday'=>'الخميس',
    'Friday'=>'الجمعة',
    'Saturday'=>'السبت',
);?>
<div id="main_area" class="main_details_continater">

	<div id="side-container">

		<div class="sub_main_news block_num_13">
			test
		</div>
		<div class="sub_main_news block_num_13">
			test
		</div>
		<div class="sub_main_news block_num_13">
			test
		</div>

		<div class="simple_wattan_block block_num_13" >
			<div class="bh">
				<div>
					<a href="<?php
					if (count($fourth_tital)) : echo base_url() . 'home/lists/' . $fourth_tital[0] -> id;
					endif;
				?>"> <?php
					if (count($fourth_tital)) : echo $fourth_tital[0] -> title;
					endif;
				?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($opi_news)): for($i=0;$i<count($opi_news);$i++):?>
					<a href="<?php echo base_url() . 'home/details/' . $opi_news[$i] -> id; ?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH . $opi_news[$i] -> mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $opi_news[$i] -> shortDesc; ?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif; ?>
				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
			<a href="<?php
					if (count($fifth_tital)) : echo base_url() . 'home/lists/' . $fifth_tital[0] -> id;
					endif;
				?>"> <?php
					if (count($fifth_tital)) : echo $fifth_tital[0] -> title;
					endif;
				?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($yabad_news)): for($i=0;$i<count($yabad_news);$i++):?>
					<a href="<?php echo base_url() . 'home/details/' . $yabad_news[$i] -> id; ?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH . $yabad_news[$i] -> mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $yabad_news[$i] -> shortDesc; ?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif; ?>
				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="<?php
					if (count($sixth_tital)) : echo base_url() . 'home/lists/' . $sixth_tital[0] -> id;
					endif;
				?>"> <?php
					if (count($sixth_tital)) : echo $sixth_tital[0] -> title;
					endif;
				?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($heb_news)): for($i=0;$i<count($heb_news);$i++):?>
					<a href="<?php echo base_url() . 'home/details/' . $heb_news[$i] -> id; ?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH . $heb_news[$i] -> mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $heb_news[$i] -> shortDesc; ?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif; ?>
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
					<a href="<?php
					if (count($seventh_tital)) : echo base_url() . 'home/lists/' . $seventh_tital[0] -> id;
					endif;
				?>"> <?php
					if (count($seventh_tital)) : echo $seventh_tital[0] -> title;
					endif;
				?> </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<?php if(count($most_news)): for($i=0;$i<count($most_news);$i++):?>
					<a href="<?php echo base_url() . 'home/details/' . $most_news[$i] -> id; ?>">
						 <span class="bit_frame block_41_bit">
						 	 <span class="t">
						 	 	<span class="m">
						 	 		<img src="<?php echo HTTP_IMG_PATH . $most_news[$i] -> mainphoto; ?>" title="" alt="" width="70" height="40">
						 	 		</span><?php echo $most_news[$i] -> shortDesc; ?></span> 
						 	 		<span class="clear"></span> 
			 	 		</span> 
		 	 		</a>
		 	 		<?php endfor; endif; ?>
				</div>
				<div class="clear"></div>

			</div>


		</div>

	</div>
	<div id="main-container">

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php if(count($title)): echo base_url().'home/lists/'.$title[0]->id; endif; ?>"><?php
					if (count($title)) : echo $title[0] -> title;
					endif;
 ?></a>
				</div>
				<span></span>
			</div>
			<div class="bc">
				
				<div class="main_cat_news_words">
				    <div class="image_container">
				    	<div class="item_page_gallery_out"> 
				    		<?php if(count($news)):?>
				    		<a href="<?php echo HTTP_IMG_PATH . $news[0] -> mainphoto; ?>" rel="lightbox" title="test">
				    			<img src="<?php echo HTTP_IMG_PATH . $news[0] -> mainphoto; ?>" title="test" alt="test" width="300" height="200" style="border-width:0; margin:0; padding:0;">
				    		</a>
				    		<?php endif;?>
				    		
				    	</div>
				    	<div style="text-align: center">
				    		<?php
				    		$date = new DateTime($news[0]->modified);
							$day = date('l', $date->getTimestamp());
							echo $days[$day].'  '.$date ->format('d') . " - " . $date -> format(' m'), " - " . $date -> format('y').'  الساعة '.$date -> format(' h') . ":" . $date -> format('i');
							?>
				    	</div>
				    	<div class="clear">
				    			
				    	</div>
				    </div>
				    <div class="more_block cat_block" >
						<div class="bh">
							<div>
								<a href="<?php if(count($title)): echo base_url().'home/lists/'.$title[0]->id; endif; ?>"><?php
								if (count($title)) : echo $title[0] -> title;
								endif;
 ?></a>
							</div><span></span>
						</div>
						<div class="bc">
							
							<div class="block_41_container blocklist_img_title">
									<?php if(count($last_news)): for ($i=0; $i <count($last_news) ; $i++): ?>
								<a href="<?php echo base_url() . "home/details/" . $last_news[$i] -> id; ?>"> <span class="bit_frame block_41_bit">
									 <span class="t">
									 	<span class="m">
									 		<img src="<?php echo HTTP_IMG_PATH . $last_news[$i] -> mainphoto; ?>"
									 		title="" alt="" width="70" height="40">
									 </span><?php echo $last_news[$i] -> shortDesc; ?></span> 
									 <span class="clear"></span>
									  </span> 
									 </a>
								 <?php endfor; endif; ?>
							</div>
							<div class="clear"></div>

						</div>

					</div>
				    
				    <h1><?php
						if (count($news)) : echo $news[0] -> shortDesc;
						endif;
 ?></h1>
					<p><?php
						if (count($news)) : echo $news[0] -> fullDesc;
						endif;
 ?></p>
					
					<div id="menu">
						<?php if(count($imgs)): for($i=0;$i<count($imgs);$i++): if($imgs[$i]->type==1):?>
						<a class="fancybox" rel="gallery1" href="<?php echo HTTP_IMG_PATH . $imgs[$i] -> path; ?>" 
							title="<?php echo $news[0] -> shortDesc; ?>">
							<img src="<?php echo HTTP_IMG_PATH . $imgs[$i] -> path; ?>" alt="" />
						</a>
						<?php endif;endfor; endif; ?>
					</div>
					</div id="video">
					<?php if(count($imgs)): for($i=0;$i<count($imgs);$i++): if($imgs[$i]->type==2):?>
					<embed
							width="420" height="345"
							src="<?php echo $imgs[$i] -> path;?>"
							type="application/x-shockwave-flash">
					</embed>
					<?php endif;endfor; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>


<script type="text/javascript" src="<?php echo HTTP_JS_PATH . 'jquery.fancybox.js?v=2.1.5'; ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH . 'jquery.fancybox.css?v=2.1.5'; ?>"  media="screen" /> 
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH . 'jquery.fancybox-buttons.css?v=1.0.5'; ?>" />
<script type="text/javascript" src="<?php echo HTTP_JS_PATH . 'jquery.fancybox-buttons.js?v=1.0.5'; ?>"></script>
<script>
	$('.fancybox').fancybox({
		openEffect : 'none',
		closeEffect : 'none',

		prevEffect : 'none',
		nextEffect : 'none',

		closeBtn : false,

		helpers : {
			title : {
				type : 'inside'
			},
			buttons : {}
		},

		afterLoad : function() {
			this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
		}
	}); 
</script>
<script>
	$(document).ready(function() {
		$('#weatherfeed').weatherfeed(['26160']);
	}); 
</script>

</html>