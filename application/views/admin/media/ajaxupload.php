	<script src = "<?php echo  HTTP_JS_PATH;  ?>jquery.js">
	
	
		
	

</script>

<script>
		$.post('<?php echo base_url();  ?>admin/media/save',{'news_id':"2",'path':"2",'submit':"1","type":"1"},function(data) { //make ajax call to check_username.php
      alert(data);
     
   });
		
</script>