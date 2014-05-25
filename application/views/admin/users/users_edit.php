<div class  ="container"  > 
<form class="form-horizontal" method="post"  action =  "<?php   echo  base_url()?>admin/users/edit">
<fieldset>
<input type  =  "hidden"  name  = "submit" value  = "1"   >
  <!-- Form Name -->
<legend>اضافة المستخدم</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">الاسم الكامل</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="الاسم الكامل" class="form-control input-md validate" required="">
  
  </div>
  <div id  =  "name_err" ></div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">رقم الجوال</label>  
  <div class="col-md-5">
  <input id="phone" name="phone" type="text" placeholder="رقم الجوال" pattern="[0-9]{10}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">البريد الالكتروني</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="email" placeholder="البريد الالكتروني" class="form-control input-md validate" required="">
     <div id  =  "email_err" ></div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">اسم المستخدم</label>  
  <div class="col-md-5">
  <input id="username" name="username" type="text" placeholder="اسم المستخدم" class="form-control input-md" required="">
    
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