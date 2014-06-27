
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

<div class="page-header container">
  <h1><small>قائمة  القوائم</small></h1>
</div>
    <div class="container">
 
 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading"> &nbsp;<span style='float:right; margin-top: -7px;'><a href='<?php echo  base_url() ?>admin/menu/save' class="btn btn-info">اضافة قائمة</a></span></div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>الاسم</th>
              <th>الرايط</th>
               <th>  الحالة </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          	<?php 
          	if(isset($menu))
          	 foreach ($menu as $men) {
          		
				  ?>
			
            <tr id="tr<?php  echo  $men->id; ?>"  >
            	 <td><?php echo  $men->id;  ?></td>
              <td><?php echo  $men->text;  ?></td>
                <td><?php echo  $men->link;  ?></td>
             
              <td><?php echo  $men->status;  ?></td>
              <td>
                 <a href='<?php echo  base_url(); ?>admin/menu/save/<?php echo  $men->id;  ?>' title='Edit'><i class="fam-user-edit"></i></a>
                <a href='#' onclick  = "Approve(<?php  echo $men->id; ?>);"  title='Active'><i class="fam-user-green"></i></a>
                 <a href='#' onclick  = "block(<?php  echo $men->id; ?>);"  title='deActive'><i class="fam-user-gray"></i></a>
                 <a href='#' onclick  = "Delete(<?php  echo $men->id; ?>,'هل انت متاكد تريد حذف هذه الفئة ');" title='Delete' ><i class="fam-user-delete"></i></a>
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
