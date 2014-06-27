
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

<div class="page-header container">
  <h1><small>قائمة  الفئات</small></h1>
</div>
    <div class="container">
 
 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading"> &nbsp;<span style='float:right; margin-top: -7px;'><a href='<?php echo  base_url() ?>admin/category/save' class="btn btn-info">اضافة فئة</a></span></div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>الاسم</th>
               <th>  الحالة </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          	<?php 
          	if(isset($category))
          	 foreach ($category as $cat) {
          		
				  ?>
			
            <tr id="tr<?php  echo  $cat->id; ?>"  >
            	 <td><?php echo  $cat->id;  ?></td>
              <td><?php echo  $cat->title;  ?></td>
             
              <td><?php echo  $cat->status;  ?></td>
              <td>
                 <a href='<?php echo  base_url(); ?>admin/category/save/<?php echo  $cat->id;  ?>' title='Edit'><i class="fam-user-edit"></i></a>
                <a href='#' onclick  = "Approve(<?php  echo $cat->id; ?>);"  title='Active'><i class="fam-user-green"></i></a>
                 <a href='#' onclick  = "block(<?php  echo $cat->id; ?>);"  title='deActive'><i class="fam-user-gray"></i></a>
                 <a href='#' onclick  = "Delete(<?php  echo $cat->id; ?>,'هل انت متاكد تريد حذف هذه الفئة ');" title='Delete' ><i class="fam-user-delete"></i></a>
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
