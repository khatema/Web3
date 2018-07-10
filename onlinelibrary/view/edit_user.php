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
                     <h2>Edit  Registration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Edit  Registration</strong>
                        </div>
                       <?php include("_alerts.php"); ?>
                    </div>
                    </div>
                  <!-- /. ROW  --> 
				  
				    <?php
				       $id = $_GET['update_id'];
				        include("../data/class.user.php");
						$userlist = new user();
						
						$users = $userlist->get_user($id);
					 ?>
				 
                    <div class="row">
					  <form method="POST" action ="../business/business.edit_user.php" > 
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							   <div class="form-group">
								 <label> Name</label>
								  <input type="text" class="form-control" name='name' value="<?php echo $users['name']; ?>" placeholder="" />
							   </div>
							   
							   <div class="form-group">
								 <label> Father Name</label>
								  <input type="text" value="<?php echo $users['fname']; ?>" class="form-control" name='fname' placeholder="" />
							   </div>
							   
							   <div class="form-group">
								 <label> Last Name</label>
								  <input type="text" value="<?php echo $users['lname']; ?>" class="form-control" name='lname' placeholder="" />
							   </div>
							   
							   <div class="form-group">
								 <label> Email</label>
								  <input type="text" class="form-control" value="<?php echo $users['email']; ?>"  name='email' placeholder="" />
							   </div>
							   
							   <div class="form-group">
								 <label> Username</label>
								  <input type="text" class="form-control" value="<?php echo $users['username']; ?>" name='username' placeholder="" />
							   </div>
							   
							   <div class="form-group">
								 <label> Password</label>
								  <input type="password"  class="form-control" name='password' placeholder="" />
							   </div>
							   <div class="form-group">
								 <label> Category</label>
								 <select name="category_id" class="form-control">
								 <option value="">Select and option</option>
								 <?php
                                  include("../data/class.userCategory.php");
								  $userListCat = new userCategory();
								  $usersCat = $userListCat->list_UserCategory();
								   foreach($usersCat as $userCa){
									   if($user['category_id']==$userCa['id']){
										   echo "<option selected value=$userCa[id] >$userCa[name]</option>";
									   }else{
										   echo "<option value=$userCa[id] >$userCa[name]</option>";
									   }
								   }
								 ?>
								 </select>
							   </div>
						     <br>
						   <div class="input-group">
							 <button type="submit" name="submit" class="btn btn-success" >Save</button>
						   </div>
						</div>
						</form> 
                   </div>
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
