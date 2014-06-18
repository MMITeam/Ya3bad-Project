<div class  ="container"  > 
	     <?php $c  = $this -> uri -> rsegment(1) ;  ?>
      
	
<form class="form-horizontal" method="post"  action =  "<?php   echo  base_url()?>admin/users/save<?php  $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->id : ""  ;echo "/".$val; ?>">
<fieldset>
<input type  =  "hidden"  name  = "submit" value  = "1"   >
  <!-- Form Name -->
<legend>اضافة المستخدم</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">الاسم الكامل</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="الاسم الكامل"  value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->name : ""  ;echo $val;?>" class="form-control input-md validate" required="">
  
  </div>
  <div id  =  "name_err" ></div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">رقم الجوال</label>  
  <div class="col-md-5">
  <input id="phone" value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->phone : ""  ;echo $val;?>" name="phone" type="text" placeholder="رقم الجوال" pattern="[0-9]{10}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">البريد الالكتروني</label>  
  <div class="col-md-5">
  <input id="email" value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->email : ""  ;echo $val;?>" name="email" type="email" placeholder="البريد الالكتروني" class="form-control input-md validate" required="">
     <div id  =  "email_err" ></div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">صلاحيات المستخدم</label>  
  <div class="col-md-5">
  	<select name="type" class="form-control">  
  	   <?php 
  	   $types[0] = "كامل الصلاحيات";
  	   $types[1] = "محرر اخبار";
  	   $types[2] = "مسؤول اعلانات";
  	   $types[3] = "مراسل";
	   
	   for($i = 0 ;  $i<4; $i++)
	   {
	   	?>
	   	<option value  = "<?php echo $i; ?>" <?php   $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->type : ""  ; if($val == $i) echo "selected";    ?>   >  <?php  echo $types[$i]; ?>   </option>
	   	<?php
	   }
  	     
  	   ?>
  	</select>
     <div id  =  "type_err" ></div>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">اسم المستخدم</label>  
  <div class="col-md-5">
  <input id="username" value  =  "<?php $val  =  isset(${$c}) && !empty(${$c}) ?   ${$c}->username : ""  ;echo $val;?>" name="username" type="text" placeholder="اسم المستخدم" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">كلمة المرور</label>  
  <div class="col-md-5">
  <input id="password" name="password" type="password" placeholder="كلمة المرور" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="submitbtn"    onclick="if(ary.length === 0){submit();}" name="submitbtn" class="btn btn-primary">اضافة المستخدم</button>
  </div>
</div>

</fieldset>
</form>
<?php

 echo  $this->session->flashdata('msg');  ?>
</div>