
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

<div class="page-header container">
  <h1><small>قائمة المستخدمين</small></h1>
</div>
    <div class="container">
 
 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading"> &nbsp;<span style='float:right; margin-top: -7px;'><a href='<?php echo  base_url() ?>admin/users/save' class="btn btn-info">اضافة مستخدم</a></span></div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>الاسم</th>
              <th>اسم المستخدم</th>
              <th>البريد الالكتروني</th> 
              <th>الحالة</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          	<?php 
          	if(isset($users))
          	 foreach ($users as $user) {
          		
				  ?>
			
            <tr id="tr<?php  echo  $user->id; ?>"  >
              <td><?php echo  $user->id;  ?></td>
              <td><?php echo  $user->name;  ?></td>
                <td><?php echo  $user->username;  ?></td>
              <td><?php echo  $user->email;  ?></td>
              <td><?php echo  $user->status;  ?></td>
              <td>
                 <a href='<?php echo  base_url(); ?>admin/users/save/<?php echo  $user->id;  ?>' title='Edit'><i class="fam-user-edit"></i></a>
                <a href='#' onclick  = "Approve(<?php  echo $user->id; ?>);"  title='Active'><i class="fam-user-green"></i></a>
                 <a href='#' onclick  = "block(<?php  echo $user->id; ?>);"  title='deActive'><i class="fam-user-gray"></i></a>
                 <a href='#' onclick  = "Delete(<?php  echo $user->id; ?>,null);" title='Delete' ><i class="fam-user-delete"></i></a>
              </td>
            </tr>
               <?php   }  
			  ?>
          </tbody>
        </table>
      </div>
 
<ul class="pagination">
        <li class="disabled"><a href="#"><<</a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">>></a></li>
     </ul>
    </div><!-- /.container -->
     <hr>