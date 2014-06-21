	<div id="sub_main_news_container">
		<div class="sub_main_news">
			<?php if (count($ads_location_2)): 
				if($ads_location_2[0]->type == 1): ?>
             <img src="<?php echo $ads_location_2[0]->adsfile;?>" border="0" target="_blank" alt="" title="" width="300" height="90">
				<?php else: ?>
					<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="300" height="90">
						<param name="movie" value="<?php echo $ads_location_2[0]->adsfile;?>">
						<param name="quality" value="High">
						<embed src="<?php echo $ads_location_2[0]->adsfile;?>"pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="300" height="90">
					</object>		
			<?php endif;endif;?>
		</div>
		<div class="sub_main_news">
			<?php if (count($ads_location_3)): 
				if($ads_location_3[0]->type == 1): ?>
             <img src="<?php echo $ads_location_3[0]->adsfile;?>" border="0" target="_blank" alt="" title="" width="300" height="90">
				<?php else: ?>
					<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="300" height="90">
						<param name="movie" value="<?php echo $ads_location_3[0]->adsfile;?>">
						<param name="quality" value="High">
						<embed src="<?php echo $ads_location_3[0]->adsfile;?>"pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="300" height="90">
					</object>		
			<?php endif;endif;?>
			</div>
		<div class="sub_main_news">
			<?php if (count($ads_location_4)): 
				if($ads_location_4[0]->type == 1): ?>
             <img src="<?php echo $ads_location_4[0]->adsfile;?>" border="0" target="_blank" alt="" title="" width="300" height="90">
				<?php else: ?>
					<object id="obj178" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="300" height="90">
						<param name="movie" value="<?php echo $ads_location_4[0]->adsfile;?>">
						<param name="quality" value="High">
						<embed src="<?php echo $ads_location_4[0]->adsfile;?>"pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj178" width="300" height="90">
					</object>		
			<?php endif;endif;?>
		</div>
	</div>
	