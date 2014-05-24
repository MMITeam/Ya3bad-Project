<div class  ="container"  > 
<div  style  =   "width:500px;height:30px;background-color:black;">  <div class = "arrow"  > ::after</div> </div>

<form class="form-horizontal" action  =  "<?php  echo base_url(); ?>admin/users/save" method  = "post" >
<fieldset>
<input type  = "hidden" value = "1" name  = "submit"  > 
<!-- Form Name -->
<legend>مستخدم جديد</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">الاسم الكامل </label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="الاسم الكامل " class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">رقم الجوال</label>  
  <div class="col-md-5">
  <input id="phone" name="phone" type="text" placeholder="قم الجوال" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">البريد الالكتروني</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="البريد الالكتروني" class="form-control input-md" required="">
    
  </div>
</div>
<input type  = "submit"  value =   "خزن " > 
</fieldset>
</form>
</div>