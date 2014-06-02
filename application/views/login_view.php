<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>تسجيل الدخول لموقع يعبد</title>
 </head>
 <body>
   <h1>تسجيل الدخول لموقع يعبد</h1>
   <?php echo validation_errors(); ?>
   
    <form name   = "verify" action  = "http://127.0.0.1/yabod/verifylogin" method  = "post"    > 

     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
 </body>
</html>
