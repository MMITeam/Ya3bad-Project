     <?php $c = $this -> uri -> rsegment(1); 
     $this->load->model('slider_model');
     
     ?>
<meta charset="utf-8">
	<script src="<?php echo HTTP_JS_PATH; ?>ckeditor.js"></script>




<form class="form-horizontal" method  = "post" enctype='multipart/form-data'  action  =   "<?php echo base_url(); ?>admin/news/save<?php  $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->id : ""  ;echo "/".$val; ?>">
<fieldset>
<input type   =  "hidden" name  = "submit"  value  =  "1"  > 
<!-- Form Name -->
<legend>خبر جديد</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="shortDesc">عنوان الخبر</label>  
  <div class="col-md-8">
  <input id="shortDesc" name="shortDesc" type="text" placeholder="عنوان الخبر" class="form-control input-md" required=""   value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->shortDesc : ""  ; echo $val;?>"  >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="shortDesc">الصورة الرئيسية  اللخبر</label>  
  <div class="col-md-8">
  <input id="mainphoto" name="mainphoto" type="file" class="form-control input-md" <?php  $val  =  isset(${$c}) && !empty(${$c}) ?   "" : "required = '' "  ; echo $val;?>   >
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="cat_id">الفئة</label>
  <div class="col-md-5">
    <select id="cat_id" name="cat_id" class="form-control">
    	<?php foreach($category as $cat ){ 
    	?>
      <option value="<?php echo $cat -> id; ?>" <?php   $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->cat_id : ""  ; if($val == $cat->id) echo "selected";    ?>   ><?php  echo $cat -> title; ?></option>
<?php   } ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="cat_id">خبر في السلايدر</label>
  <div class="col-md-5">
    <input type  = "checkbox"   name =  "slider"  value  = "1"  <?php if(isset($isSlider) and $isSlider > 0 ) echo  "checked='checked'";  ?> > اضافة للسلايدر
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="cat_id">خبر في السلايدر</label>
  <div class="col-md-5">
   <select name  = "pro" > 
   	  <option  value  =  "1"   >1</option>
   	  	  <option  value  =  "2"   >2</option>
   	  	  	  <option  value  =  "3"   >3</option>
   	  	  	  	  <option  value  =  "4"   >4</option>
   	  	  	  	  	  <option  value  =  "5"   selected>5</option>
   	
   	</select>
  </div>
</div>


<textarea  class="ckeditor" id = "editor1" name  =  "fullDesc" >
<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->fullDesc : ""  ;echo $val; ?>
	
</textarea>
<br>
<center>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">التالي</button>
    
  </center>
</fieldset>
</form>


		
      
   


