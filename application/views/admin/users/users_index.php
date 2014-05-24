
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

<div class="page-header container">
  <h1><small>Users</small></h1>
</div>
    <div class="container">
 
 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading">User List <span style='float:right; margin-top: -7px;'><a href='<?php echo  base_url() ?>admin/users/save' class="btn btn-info">Add User</a></span></div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>Email</th> 
              <th>Status</th>
              <th>Process</th>
            </tr>
          </thead>
          <tbody>
          	<?php  foreach ($users as $user) {
				  ?>
			
            <tr>
              <td><?php echo  $user->id;  ?></td>
              <td><?php echo  $user->name;  ?></td>
              <td><?php echo  $user->email;  ?></td>
              <td><?php echo  $user->status;  ?></td>
              <td>
                  <a href='#' title='View'> <i class="fam-zoom"></i></a>
                 <a href='#' title='Edit'><i class="fam-user-edit"></i></a>
                 <a href='#' title='active'><i class="fam-user-gray"></i></a>
                 <a href='#' title='Delete'><i class="fam-user-delete"></i></a>
              </td>
            </tr>
               <?php   }    ?>
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
