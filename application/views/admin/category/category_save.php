<div class  ="container"  > 
	     <?php $c  = $this -> uri -> rsegment(1) ;  ?>
      
	
<form class="form-horizontal" method="post"  action =  "<?php   echo  base_url()?>admin/category/save<?php  $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->id : ""  ;echo "/".$val; ?>">
<fieldset>
<input type  =  "hidden"  name  = "submit" value  = "1"   >
  <!-- Form Name -->
<legend>اضافة فئة</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">اسم الفئة</label>  
  <div class="col-md-5">
  <input id="name" name="title" type="text" placeholder="اسم الفئة"  value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->title : ""  ;echo $val;?>" class="form-control input-md validate" required="">
  
  </div>
  <div id  =  "name_err" ></div>
</div>






<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="submitbtn"    onclick="if(ary.length === 0){submit();}" name="submitbtn" class="btn btn-primary">اضافة فئة</button>
  </div>
</div>

</fieldset>
</form>
<?php

 echo  $this->session->flashdata('msg');  ?>
</div>