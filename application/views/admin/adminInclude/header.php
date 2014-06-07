<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta charset = "utf-8"  >
		<script  src  =  "<?php echo HTTP_JS_PATH; ?>jquery-1.9.1.min.js" ></script>

		<link rel="shortcut icon" href="<?php echo HTTP_CSS_PATH; ?>favicon.png">
		<title>yabod- admin pannel</title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
		<script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
		<![endif]-->
		<link href="<?php echo HTTP_CSS_PATH; ?>fam-icons.css" rel="stylesheet">
		<?php $c = $this -> uri -> rsegment(1); ?>
		<script>

function Delete(id,txt)
{
if(txt  !=null && confirm(txt)){
$.post('<?php echo base_url(); ?>admin/<?php echo $c; ?>/delete', { 'id':id}, function(data) { //make ajax call to check_username.php
$('#tr'+id).hide(500);

});

}else if(txt  ==null ){
$.post('<?php echo base_url(); ?>admin/<?php echo $c; ?>/delete', { 'id':id}, function(data) { //make ajax call to check_username.php
$('#tr'+id).hide(500);

});

}

}
function Approve(id)
{
$.post('<?php echo base_url(); ?>admin/<?php echo $c; ?>/approve', { 'id':id}, function(data) { //make ajax call to check_username.php
window.location.reload(true);
});

}
function block(id)
{
$.post('<?php echo base_url(); ?>admin/<?php echo $c; ?>/block', { 'id':id}, function(data) { //make ajax call to check_username.php
window.location.reload(true);
});

}

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

$.post('<?php echo base_url(); ?>admin/<?php echo $c; ?>/validate', { 'name':name,'value':value }, function(data) { //make ajax call to check_username.php
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
		<?php $pg = $c; ?>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>">لوحة التحكم في موقع يعبد</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php echo  $pg =='home' ? 'class="active"' : '' ?>>
							<a href="<?php echo base_url(); ?>admin/">الرئيسية</a>
						</li>
						<!--
						<li <?php echo  $pg =='users' ? 'class="active"' : '' ?>>
							<a href="<?php echo base_url(); ?>admin/users">المستخدمين</a>
						</li>
						-->
						<li <?php echo  $pg =='category' ? 'class="active"' : '' ?>>
							<a href="<?php echo base_url(); ?>admin/category">الفئات</a>
						</li>
						
							<li <?php echo  $pg =='menu' ? 'class="active"' : '' ?>>
							<a href="<?php echo base_url(); ?>admin/menu">القوائم</a>
						</li>

						<li <?php echo  $pg =='news' ? 'class="active"' : '' ?>>
							<a href="<?php echo base_url(); ?>admin/news">الاخبار</a>
						</li>
						
							<li >
							<a href="<?php echo base_url(); ?>admin/news/logout">تسجيل خروج</a>
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
