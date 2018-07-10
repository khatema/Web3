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
                     <h2>Book Category Registration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Edit Category Registration </strong>
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
				  <?php
				       $id = $_GET['update_id'];
				        include("../data/class.bookCategory.php");
						$categoryList = new bookCategory();
						
						$categorys = $categoryList->get_bookCategory($id);
					 ?>
                    <div class="row">
					  <form method="POST" action ="../business/business.edit_bookCategory.php?up_id=<?php echo $id; ?>" > 
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							   <div class="form-group">
								 <label>Category Name</label>
								  <input type="text" class="form-control" name='name' value="<?php echo $categorys['name']; ?>" placeholder="" />
							</div>
						
						   <br>
						   <div class="input-group">
							 <button type="submit" name="Edit" class="btn btn-success" >Edit</button>
						   </div>
						</div>
						</form> 
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
