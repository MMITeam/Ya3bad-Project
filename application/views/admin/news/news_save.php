<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<script src="<?php  echo  HTTP_JS_PATH; ?>ckeditor.js"></script>



</head>
<body>
	

  


<form class="form-horizontal" method  = "post"  action  =   "<?php echo  base_url();  ?>admin/news/save">
<fieldset>
<input type   =  "hidden" name  = "submit"  value  =  "1"  > 
<!-- Form Name -->
<legend>خبر جديد</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="shortDesc">عنوان الخبر</label>  
  <div class="col-md-8">
  <input id="shortDesc" name="shortDesc" type="text" placeholder="عنوان الخبر" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="cat_id">الفئة</label>
  <div class="col-md-5">
    <select id="cat_id" name="cat_id" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<textarea  class="ckeditor" id = "editor1" name  =  "fullDesc" ></textarea>

<center>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">التالي</button>
    
  </center>
</fieldset>
</form>


		
      
   




</body>

