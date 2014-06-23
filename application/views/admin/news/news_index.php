
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

<div class="page-header container">
  <h1><small>قائمة  الاخبار</small></h1>
</div>
    <div class="container">
 
 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading"> &nbsp;<span style='float:right; margin-top: -7px;'><a href='<?php echo  base_url() ?>admin/news/save' class="btn btn-info">اضافة خبر</a></span></div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>عنوان الخبر</th>
               <th>  الحالة </th>
                 <th>  عملية </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          	<?php 
          	if(isset($news))
          	 foreach ($news as $newsItem) {
          		
				  ?>
			
            <tr id="tr<?php  echo  $newsItem->id; ?>"  >
            	 <td><?php echo  $newsItem->id;  ?></td>
              <td><?php echo  $newsItem->shortDesc;  ?></td>
             
              <td><?php echo  $newsItem->status;  ?></td>
              <td>
                 <a href='<?php echo  base_url(); ?>admin/news/save/<?php echo  $newsItem->id;  ?>' title='Edit'><i class="fam-user-edit"></i></a>
                <a href='#' onclick  = "Approve(<?php  echo $newsItem->id; ?>);"  title='Active'><i class="fam-user-green"></i></a>
                 <a href='#' onclick  = "block(<?php  echo $newsItem->id; ?>);"  title='deActive'><i class="fam-user-gray"></i></a>
                 <a href='#' onclick  = "Delete(<?php  echo $newsItem->id; ?>,'هل انت متاكد تريد حذف هذا الخبر ؟  ');" title='Delete' ><i class="fam-user-delete"></i></a>
              </td>
            </tr>
               <?php   }  
			  ?>
          </tbody>
        </table>
      </div>
 
<ul class="pagination">
        <?php echo $pages;?>
     </ul>
    </div><!-- /.container -->
     <hr>
