
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

		<?php include 'include/adsContainer.php';?>
		<div class="clear">
				    			
				    	</div>
		<?php include 'include/sideContainer.php'; ?>
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
						    <span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_googleplus_hcount' displayText='Google +'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<span class='st_email_hcount' displayText='Email'></span>

		    <div  class = "newsTitle" ><?php
						if (count($news)) : echo $news[0] -> shortDesc;
						endif;
 ?></div>
				<div class="main_cat_news_words">
				    <div class="image_container">
				    	<div class="item_page_gallery_out"> 
				    		<?php if(count($news)):?>
				    		<a class="fancybox" rel="gallery1" href="<?php echo HTTP_IMGHQ_PATH . $news[0] -> mainphoto; ?>" rel="lightbox" title="test">
				    			<img src="<?php echo HTTP_IMGHQ_PATH . $news[0] -> mainphoto; ?>" title="test" alt="test" width="300" height="200" style="border-width:0; margin:0; padding:0;">
				    		</a>
				    		<?php endif;?>
				    		
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
		
		
 
 	<div style="text-align: right">
				    		<?php
				    		
				    		$date = new DateTime();
							$date->setTimestamp($news[0]->modified);
							$day = date('l', $date->getTimestamp());
							echo $days[$day].'  '.$date ->format('d') . " - " . $date -> format(' m'), " - " . $date -> format('y').'  الساعة '.$date -> format(' h') . ":" . $date -> format('i');
							?>
				    	</div>
					<p><?php
						if (count($news)) : echo $news[0] -> fullDesc;
						endif;
 ?></p>
 
 <center>
<!-- Begin Hsoub Ads Ad Place code -->
<script type="text/javascript"><!--
hsoub_adplace = 1406335673535518;
hsoub_adplace_size = '468x60';
//--></script>
<script src="http://ads2.hsoub.com/show.js" type="text/javascript"></script>
<!-- End Hsoub Ads Ad Place code -->
</center>

					<div id="menu">
						<?php if(count($imgs)): for($i=0;$i<count($imgs);$i++): if($imgs[$i]->type==1):?>
						<a class="fancybox" rel="gallery1" href="<?php echo HTTP_IMGHQ_PATH . $imgs[$i] -> path; ?>" 
							title="<?php echo $news[0] -> shortDesc; ?>">
							<img src="<?php echo HTTP_IMGHQ_PATH.$imgs[$i] -> path; ?>" alt="" />
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
					<center>
					<div class="fb-comments" data-href="<?php echo base_url()."home/details/".$news[0]->id; ?>" data-numposts="5" data-colorscheme="light"></div>
					</center>
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