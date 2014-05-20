<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="assets/css/uploadfile.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/jquery.uploadfile.min.js"></script>



    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
		<script src="assets/external/jquery.hotkeys.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
		<link href="assets/css/editor.css" rel="stylesheet">
				<link href="assets/css/custom.css" rel="stylesheet">

    <script src="assets/js/bootstrap-wysiwyg.js"></script>
    
 <script type="text/javascript" >
    function div2form(id){
    
        var form=document.getElementById(id);
        if(!form){
            return;
        }
        var divs=document.getElementById('editor');
      
      
         
                var texta=document.createElement('TEXTAREA');
                texta.name='fullDesc';
               
                texta.value=divs.innerHTML;      
                texta.style.display='none';
                form.appendChild(texta);                
                           
        }          
    
    </script>
</head>

<body  > 

<div id="mainContainer" >
     <center>  <h1>اضافة فئة</h1></center>
     <form name = "addnewForm"  action="Catigory/insertCatigory" id  = "form" onsubmit="div2form('form')" method= "post"  >
     	<center>
<div class="input-group input-group-lg">
  <span class="input-group-addon">عنوان الفئة </span>
  <input type="text" class="form-control" name  =  "title" placeholder="عنوان الفئة">
</div>

</center>


 

  


    
]

<center>
    <button type="submit" class="btn btn-default">اضافة خبر </button>
</center>

</form>
</div>





  



</body>