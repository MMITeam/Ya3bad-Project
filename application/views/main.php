
<div id="top_area">
	<div id="sub_main_news_container">
		<div class="sub_main_news">
			test
		</div>
		<div class="sub_main_news">
			test
		</div>
		<div class="sub_main_news">
			test
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
						
					<a href="<?php  echo base_url() . "home/details/" . $news -> id.'/'.$news->cat_id; ?>"> <span class="bit_frame block_2_bit">
						 <span class="btitle"><span class="d"><strong><?php echo $date -> format(' h') . ":" . $date -> format('i'); ?>
						 </strong><?php echo $date -> format('d') . " - " . $date -> format(' m'), " - " . $date -> format('y'); ?></span>
						 <span class="t"></span><?php echo $news->shortDesc?></span> <span class="clear"></span> </span> 
					</a>
					<?php endforeach;  endif; ?>
				</div>
			</div>
		</div>
		</dev>
	</div>
	<div id="slider_container">
 								 
      
	</div>
</div>

<div id="main_area">

	<div id="side-container">

		<div class="simple_wattan_block block_num_13" >
			<div class="bh">
				<div>
					<a href="http://www.wattan.tv/ar/news/blog"> أقلام وآراء </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data1.wattan.tv/image/70X40/04092322602070070200185066638213.jpg" title="الفرز الحاد - بقلم: حمدي فراج" alt="الفرز الحاد - بقلم: حمدي فراج" width="70" height="40"></span>الفرز الحاد - بقلم: حمدي فراج</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>

				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="http://www.wattan.tv/ar/news/blog">عين على يعبد </a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data1.wattan.tv/image/70X40/04092322602070070200185066638213.jpg" title="الفرز الحاد - بقلم: حمدي فراج" alt="الفرز الحاد - بقلم: حمدي فراج" width="70" height="40"></span>الفرز الحاد - بقلم: حمدي فراج</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>

				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="http://www.wattan.tv/ar/news/blog">الصحافة العبرية</a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data1.wattan.tv/image/70X40/04092322602070070200185066638213.jpg" title="الفرز الحاد - بقلم: حمدي فراج" alt="الفرز الحاد - بقلم: حمدي فراج" width="70" height="40"></span>الفرز الحاد - بقلم: حمدي فراج</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>

				</div>
				<div class="clear"></div>

			</div>

		</div>

		<div class="simple_wattan_block block_num_13">
			<div class="bh">
				<div>
					<a href="http://www.wattan.tv/ar/news/blog">الطقس</a>
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
					<a href="http://www.wattan.tv/ar/news/blog">الأكثر قرائة</a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="block_41_container blocklist_img_title">
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data1.wattan.tv/image/70X40/04092322602070070200185066638213.jpg" title="الفرز الحاد - بقلم: حمدي فراج" alt="الفرز الحاد - بقلم: حمدي فراج" width="70" height="40"></span>الفرز الحاد - بقلم: حمدي فراج</span> <span class="clear"></span> </span> </a>
					<a href="#"> <span class="bit_frame block_41_bit"> <span class="t"><span class="m"><img src="http://data3.wattan.tv/image/70X40/00056020381230484415821186567011.jpg" title="الرئيس ... وقتل المرأة .... وأدوات التغيير" alt="الرئيس ... وقتل المرأة .... وأدوات التغيير" width="70" height="40"></span>الرئيس ... وقتل المرأة .... وأدوات التغيير</span> <span class="clear"></span> </span> </a>

				</div>
				<div class="clear"></div>

			</div>

		</div>

	</div>
	<div id="main-container">
		<div class="empty_container main_block">

		</div>

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php echo base_url().'home/lists/'.$first_tital[0]->id;?>"><?php echo $first_tital[0] -> title; ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<a href="<?php  echo base_url() . "home/details/" . $pal_news[0] -> id; ?>">
					<img src="<?php  echo HTTP_IMG_PATH; ?>/sample.jpg" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php echo $pal_news[0] -> shortDesc; ?></h1>
						<p>
							<?php echo $pal_news[0] -> fullDesc; ?>
						</p>
					</div>
					</a>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($pal_news)) : for($i= 1;$i<count($pal_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $pal_news[$i] -> id; ?>"> 
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH; ?>/sample.jpg"
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

		</div>

		<div class="main_block cat_block" >
			<div class="bh">
				<div>
					<a href="<?php echo base_url().'home/lists/'.$second_tital[0]->id;?>"><?php echo $second_tital[0] -> title; ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<a href="<?php  echo base_url() . "home/details/" . $int_news[0] -> id; ?>">
					<img src="<?php  echo HTTP_IMG_PATH; ?>/sample.jpg" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php echo $int_news[0] -> shortDesc; ?></h1>
						<p>
							<?php echo $int_news[0] -> fullDesc; ?>
						</p>
					</div>
					</a>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($int_news)) : for($i= 1;$i<count($int_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $int_news[$i] -> id; ?>">  
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH; ?>/sample.jpg"
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
					<a href="<?php echo base_url().'home/lists/'.$third_tital[0]->id;?>"><?php echo $third_tital[0] -> title; ?></a>
				</div><span></span>
			</div>
			<div class="bc">
				<div class="main_cat_news">
					<a href="<?php  echo base_url() . "home/details/" . $spo_news[0] -> id; ?>">
					<img src="<?php  echo HTTP_IMG_PATH; ?>/sample.jpg" width="173" height="173"/>
					<div class="main_cat_news_words">
						<h1><?php echo $spo_news[0] -> shortDesc; ?></h1>
						<p>
							<?php echo $spo_news[0] -> fullDesc; ?>
						</p>
					</div>
					</a>
				</div>
				<div class="block_41_container blocklist_img_title">
					<?php if (count($spo_news)) : for($i= 1;$i<count($spo_news);$i++): ?>
					<a href="<?php  echo base_url() . "home/details/" . $spo_news[$i] -> id; ?>">
						<span class="bit_frame block_41_bit">
							 <span class="t">
							 	<span class="m">
							 		<img src="<?php  echo HTTP_IMG_PATH; ?>/sample.jpg"
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
	test
</div>
</div>
</body>
<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery-1.9.1.min.js" ></script>
<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery.zweatherfeed.js" ></script>
<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery.zweatherfeed.min.js" ></script>
 <script>
 $(document).ready(function () {
	$('#weatherfeed').weatherfeed(['26160']);
});</script>

</html>