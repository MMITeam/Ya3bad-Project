
	

		<div class="simple_wattan_block block_num_13" >
			<div class="bh">
			
					<a href="<?php if(count($fourth_tital)): echo base_url().'home/lists/'.$fourth_tital[0]->id; endif;?>"> <?php if(count($fourth_tital)): echo $fourth_tital[0]->title; endif;?> </a>
		<span></span>
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
				
					<a href="<?php if(count($sixth_tital)): echo base_url().'home/lists/'.$sixth_tital[0]->id; endif;?>"> <?php if(count($sixth_tital)): echo $sixth_tital[0]->title; endif;?> </a>
			<span></span>
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
 			<div class="bh" style="">
  			
			<a style="display: inline" href="javascript:void(0);" onclick="show('we');">الطقس</a>
			<a style="display: inline" href="javascript:void(0);" onclick="show('cu')">العملات</a>
  				<span></span>
  			</div>
  			<div class="bc">
  				<div class="block_41_container blocklist_img_title">
 				<!--<div class="weather" id="weatherfeed" > </div>-->
 						<div id='we'>
 							<iframe width="100%" height="116" frameborder="0" src="http://www.palweather.ps/temps/days/web_service_new" marginheight="0" marginwidth="0"></iframe>
 						</div>
 						<div id="cu" style="display: none;">
 							<iframe name="AmwalIFrame" src="http://www.amwal.ps/currancy_4sites.asp" width="100%" scrolling="no" border="0" frameborder="0" height="185">
 Your browser does not support inline frames or is currently configured not to display inline frames.
 </iframe>
 						</div>
 					</div>
 					
  				<div class="clear"></div>
  
  			</div>

  
  		</div>
 
 
 <script type="text/javascript">
 	function show (data) {
 	 
 	  if(data == 'we')
 	  {
   	 document.getElementById("we").style.display = 'block';
    		 document.getElementById("cu").style.display = 'none';
 	  }
 	  else if (data == 'cu')
 	  {
 	  	 document.getElementById("cu").style.display = 'block';
    		 document.getElementById("we").style.display = 'none';
   }
 	}
 </script>
		<div class="simple_wattan_block block_num_13">
			<div class="bh">
			
					<a href="<?php echo base_url().'home/lists/';  ?>"> <?php echo $seventh_tital;?> </a>
				<span></span>
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
