
    <link href="<?php echo  HTTP_CSS_PATH;  ?>tQera.Uploader.Bootstrap.css" rel="stylesheet" />
    <link href="<?php echo  HTTP_CSS_PATH;  ?>app2.css" rel="stylesheet" />

        
		 <form class="row-fluid" id="dropper">
        <div class="text-center">
            <input id="fileInput" name="fileInput" type="file" class="btn btn-file hide" multiple />
        </div>
        <div style="padding-bottom: 20px">
        </div>
        <div class="row-fluid text-center">
            <div class="span12 drop-zone" id="dropPlace">
            </div>
            <button type="submit" class="btn btn-success"><i class="icon-white icon-arrow-up"></i>Start Upload</button>
        </div>
        <div class="row-fluid images" id="imageHolder">
        </div>
    </form>
  <script type="text/javascript" src="<?php  echo  HTTP_JS_PATH;  ?>tQera.Image.Uploader.js"></script>
    <script type="text/javascript" src="<?php  echo  HTTP_JS_PATH;  ?>bootstrap.js"></script>
    <script>
        var d = new tQEraUploader(
{
    drop: true,
    imageHolder: document.getElementById("imageHolder"),
    dragHoverClass: "drop_hover",
    image_thumb_width: 173,
    image_thumb_height: 173,
    dropPlace: document.getElementById("dropPlace"),
    form: document.getElementById("dropper"),
    fileInput: document.getElementById("fileInput"),
    file_closebutton_class: "btn btn-danger close",
    file_class: "list-i",
    file_filter: "",
    image_thumb: false,
	icon_path: "FileIcons/",
			icon_default: "FileIcons/_blank.png",
    limit: 0,
    ajax: {
        url: '<?php echo base_url();  ?>admin/news/uploadhandler/<?php echo  $id;  ?>',
       
      
        clearAfterUpload: true
    },
    watermark: {
        text: ""
    },
    html5Error:
        function (uploader) {

            uploader.settings.imageHolder.style.display = "none";
            //document.getElementById("dropper").removeChild(imageholder);

            uploader.settings.dropPlace.style.display = "none";
            var error = document.createElement("p");
            error.className = "text-center";
            error.appendChild(document.createTextNode("Your browser doesn't support HTML5, we can offer you a new browser from here ! click!"));
            uploader.settings.form.appendChild(error);
        },
    progress:
                 function (data) {
                     var template = document.getElementById(data.template);
                     console.log(data.template);
                     if (template) {
                         var progress = document.getElementById("progress_" + data.template);

                         if (progress) {
                             progress.style.width = data.percent + "%";
                         }
                         else {
                             var div = document.createElement("div");
                             div.className = "progress progress-striped active";

                             progress = document.createElement("div");
                             progress.id = "progress_" + data.template;
                             progress.className = "bar";
                             progress.style.width = data.percent + "%";
                             div.appendChild(progress);

                             template.appendChild(div);
                         }
                     }

                 },
    success:
  
        function (data) {
            console.log("Its uploaded ");
          
            
        }
       
        
});
    </script>

		
        <hr />
      <form class="form-horizontal" method  = "post"  action  =   "#">
<fieldset>
<input type   =  "hidden" name  = "submit"  value  =  "1"  > 
<!-- Form Name -->
<legend>فيديو جديد</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="shortDesc">فيديو الخبر</label>  
  <div class="col-md-8">
  <input id="path" name="path" type="text" placeholder="فيديو الخبر" class="form-control input-md" required="">
    
  </div>
</div>

<center>

    <button id="submitbtn"  onclick ="addvedio(<?php echo $id; ?>,document.getElementById('path').value);"    name="submitbtn" class="btn btn-primary">اضافة الفيديو</button>
</center>
<script>
	function  addvedio(news_id,path)
	{
		
		$.post('<?php echo base_url();  ?>admin/media/save',{'news_id':news_id,'path':path,'submit':"1","type":"2"},function(data) { //make ajax call to check_username.php
      alert(data);
     
   });
		
		
	}
	
</script>
</fieldset>

      </form>
      <br>
      <center>

    <button id="submitbtn"  onclick="window.location = '<?php echo  base_url()  ?>admin/news/save';"   name="submitbtn" class="btn btn-primary">انتهاء</button>
</center>
    </div>

</body>
</html>
