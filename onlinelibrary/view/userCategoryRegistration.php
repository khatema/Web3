<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("head.php"); ?>
<body>

   <?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>User Category Registration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>User Category Registration</strong>
                        </div>
                       <?php include("_alerts.php"); ?>
                    </div>
                    </div>
                  <!-- /. ROW  --> 
				 
                    <div class="row">
					  <form method="POST" action ="../business/business.userCategory.php" > 
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							   <div class="form-group">
								 <label>Category Name</label>
								  <input type="text" class="form-control" name='name' placeholder="" />
							</div>
						
						   <br>
						   <div class="input-group">
							 <button type="submit" name="submit" class="btn btn-success" >Save</button>
						   </div>
						</div>
						</form> 
                   </div>
				  <hr>
				  
				  <div class="col-lg-12 col-md-12">
                        <h5>Book Author</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 
								  include("../data/class.userCategory.php");
								  $userList = new userCategory();
								  $users = $userList->list_UserCategory();
								  $i=0;
								   foreach($users as $user){
									   $i++;
									   echo  "<tr>
									             <td>$i</td>
									             <td>$user[name]</td>
									             <td><a href='edit_userCategoryRegistration.php?update_id=$user[id]' class='btn btn-warning' >Edit</a></td>
									             <td><a href='../business/business.delete_userCategory.php?del_id=$user[id]' class='btn btn-danger' >Delete</a></td>
									     </tr>";
								     }
								 ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
				  
                  <!-- /. ROW  --> 
              </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      <?php include("footer.php"); ?>
          
<?php  include("script.php"); ?>
   
</body>
</html>
