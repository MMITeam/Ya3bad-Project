
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset = "utf-8"  >
    <link rel="shortcut icon" href="<?php echo HTTP_CSS_PATH; ?>favicon.png">
    <script  src  =  "<?php echo  HTTP_JS_PATH;   ?>jquery.js" > </script>
    <title>yabod- admin pannel</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
     <link href="<?php echo HTTP_CSS_PATH; ?>fam-icons.css" rel="stylesheet">
     <?php $c  = $this -> uri -> rsegment(1) ;  ?>
<script>
Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

var ary = Array();

	$(document).ready(function(){
		
		$(".validate").keyup(function (e) { //user types username on inputfiled
   var name = $(this).attr('name'); //get the string typed by user
     var value = $(this).val(); //get the string typed by user
    
   $.post('<?php  echo  base_url();  ?>admin/<?php echo  $c;  ?>/validate', { 'name':name,'value':value }, function(data) { //make ajax call to check_username.php
   $("#"+name+"_err").html(data); //dump the data received from PHP page
      if(data==="غير متاح") {
      	ary.push(name);
      $("#submitbtn").attr('disabled','true') ;
      }  else {
      	ary.remove(name);
      	if(ary.length === 0){
      		  	$("#submitbtn").removeAttr('disabled') ;
      	}
      		
      	    

      	
      }
      
      
       });

    
	});
	
});
</script>
  </head>
<body>
    <?php
    $pg = isset($page) && $page != '' ?  $page :'users'  ;    
    ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">yabod Admin Panel</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php echo  $pg =='dash' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
            <li <?php echo  $pg =='users' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/users">Users</a></li>
            <li <?php echo  $pg =='news' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>contactus">News</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Change Password</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>admin/home/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">

 <style>
/*     .panel{
       margin-left: 55px;
       float: left;
    width: 500px;}
     */
     </style>