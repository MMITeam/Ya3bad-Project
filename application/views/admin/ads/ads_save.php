     <?php $c = $this -> uri -> rsegment(1); 

     
     ?>
<meta charset="utf-8">



<form class="form-horizontal" method  = "post" enctype='multipart/form-data'  action  =   "<?php echo base_url(); ?>admin/ads/save<?php  $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->id : ""  ;echo "/".$val; ?>">
<fieldset>
<input type   =  "hidden" name  = "submit"  value  =  "1"  > 
<!-- Form Name -->
<legend>اعلان جديد</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="shortDesc">عنوان الاعلان</label>  
  <div class="col-md-8">
  <input id="title" name="title" type="text" placeholder="عنوان الاعلان" class="form-control input-md" required=""   value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->title : ""  ; echo $val;?>"  >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="shortDesc">ملف الاعلان</label>  
  <div class="col-md-8">
  <input id="adsfile" name="adsfile" type="file" class="form-control input-md" <?php  $val  =  isset(${$c}) && !empty(${$c}) ?   "" : "required = '' "  ; echo $val;?>   >
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="type">الفئة</label>
  <div class="col-md-5">
    <select id="type" name="type" class="form-control">
    	
    	<?php 
    	$types[1] = "صورة";
		$types[2] = "فلاش";
    	for($i = 1 ; $i <=2 ;  $i++){ 
    	?>
      <option value="<?php  echo  $i ?>" <?php   $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->type : ""  ; if($val == $i) echo "selected";    ?>   ><?php  echo  $types[$i]; ?></option>
<?php   } ?>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="type">الموقع</label>
  <div class="col-md-5">
    <select id="pos" name="pos" class="form-control">
    	
    	<?php 
   
    	for($i = 1 ; $i <=10 ;  $i++){ 
    	?>
      <option value="<?php  echo  $i ?>" <?php   $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->pos : ""  ; if($val == $i) echo "selected";    ?>   ><?php  echo  $i; ?></option>
<?php   } ?>
    </select>
  </div>
</div>




<br>
<center>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">تخزين الاعلان</button>
    
  </center>
</fieldset>
</form>


		
      
   


