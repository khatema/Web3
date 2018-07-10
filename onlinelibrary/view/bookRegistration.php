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
                     <h2>Book  Registration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Book  Registration</strong>
                        </div>
                       <?php include("_alerts.php"); ?>
                    </div>
                    </div>
                  <!-- /. ROW  --> 
				 
                    <div class="row">
					  <form method="POST" action ="../business/business.book.php" > 
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							   <div class="form-group">
								 <label> Name</label>
								  <input type="text" class="form-control" name='name' placeholder="" />
							   </div>
							   
							   <div class="form-group">
								 <label> Category Name</label>
								 <select name="category_id" class="form-control">
								 <option value="">Select and option</option>
								 <?php
                                 include("../data/class.bookCategory.php");
								  $categoryList = new bookCategory();
								  $categorys = $categoryList->list_BookCategory();
								  $i=0;
								   foreach($categorys as $category){
									   echo "<option value=$category[id] >$category[name]</option>";
								   }
								 ?>
								 </select>
							   </div>
							   
							  <div class="form-group">
								 <label> Language Name</label>
								 <select name="language_id" class="form-control">
								 <option value="">Select and option</option>
								 <?php
                                  include("../data/class.bookLanguage.php");
								  $languageList = new bookLanguage();
								  $languages = $languageList->list_BookLanguage();
								  
								  $i=0;
								   foreach($languages as $language){
									   echo "<option value=$language[id] >$language[name]</option>";
								   }
								 ?>
								 </select>
							   </div>
							   
							   <div class="form-group">
								 <label> Bublisher Name</label>
								 <select name="publisher_id" class="form-control">
								 <option value="">Select and option</option>
								 <?php
                                  include("../data/class.bookPublisher.php");
								  $publisherList = new bookPublisher();
								  $publisehrs = $publisherList->list_BookPublisher();
								  
								  $i=0;
								   foreach($publisehrs as $publisehr){
									   echo "<option value=$publisehr[id] >$publisehr[name]</option>";
								   }
								 ?>
								 </select>
							   </div>
							   
							   <div class="form-group">
								 <label> Author Name</label>
								 <select name="author_id" class="form-control">
								 <option value="">Select and option</option>
								 <?php
                                  include("../data/class.bookAuthor.php");
								  $authorList = new bookAuthor();
								  $authors = $authorList->list_BookAuthor();
								  
								  $i=0;
								   foreach($authors as $author){
									   echo "<option value=$author[id] >$author[name]</option>";
								   }
								 ?>
								 </select>
							   </div>
							   
							    <div class="form-group">
								 <label> Number Of Pages</label>
								  <input type="number" class="form-control" name='pages' placeholder="" />

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
                                        <th>Publisher</th>
                                        <th>Author</th>
                                        <th>Language</th>
                                        <th>Category</th>
                                        <th>Pages</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 
								/// error_reporting(0);
								  include("../data/class.book.php");
								  $bookList = new book();
								  $books = $bookList->list_book();
								  $i=0;
								   foreach($books as $book){
									   
									   $i++;
									   
									   $publisher_id = $book['publisher_id'];
									   $author_id    = $book['author_id'];
									   $language_id  = $book['language_id'];
									   $category_id  = $book['category_id'];
									   
									   $bookAuthor  = new bookAuthor();
									   $author      = $bookAuthor->get_bookAuthor($author_id);
									   
									   $bookPublisher  = new bookPublisher();
									   $publisehr      = $bookPublisher->get_bookPublisher($publisher_id);
									   
									   $bookLanguage  = new bookLanguage();
									   $language      = $bookLanguage->get_bookLanguage($language_id);
									   
									   $bookCategory  = new bookCategory();
									   $category      = $bookCategory->get_bookCategory($category_id);
									   
									   echo  "<tr>
									             <td>$i</td>
									             <td>$book[name]</td>
									             <td>$publisehr[name]</td>
									             <td>$author[name]</td>
									             <td>$language[name]</td>
									             <td>$category[name]</td>
									             <td>$book[pages]</td>
									             <td><a href='#' class='btn btn-warning' >Edit</a></td>
									             <td><a href='#' class='btn btn-danger' >Delete</a></td>
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
      <?php //include("footer.php"); ?>
          
<?php  include("script.php"); ?>
   
</body>
</html>
