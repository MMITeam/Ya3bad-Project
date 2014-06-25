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
 <select name  =  "pro" > 
   <?php 
   
   for($i =  1  ; $i<=5  ; $i++){
   	?>
	<option  value  = "<?php  echo  $i;  ?>" <?php  $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->pro : ""  ; if($val == $i) echo  "selected" ?>  >  <?php  echo  $i;  ?></option>
	<?php  
   }
   
   
   ?>
   	</select>
  </div>
</div>


<script type="text/javascript" src="<?php  echo HTTP_JS_PATH; ?>tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
         file_browser_callback: function(field_name, url, type, win) {
            if(type=='image') $('#my_form input').click();
        },
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>


    <textarea name="fullDesc" style="width:80%;height:300px;" ></textarea>

<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->fullDesc : ""  ;echo $val; ?>
	
</textarea>
<br>
<center>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">التالي</button>
    
  </center>
</fieldset>
</form>


		
      
   


