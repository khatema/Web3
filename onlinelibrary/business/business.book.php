<?php

include("../data/class.book.php");

include("class.paterns.php");

 $data        = new book();
 $paterns     = new paterns();
 $valid_name  = $paterns->namePaterns($_POST['name']);
 
 $category_id  = $_POST['category_id'];
 $publisher_id = $_POST['publisher_id'];
 $author_id    = $_POST['author_id'];
 $language_id  = $_POST['language_id'];
 $pages        = $_POST['pages'];
 
 if($valid_name){
	 $data_array = array("name"=>$_POST['name'],'category_id'=>$category_id,'publisher_id'=>$publisher_id,'author_id'=>$author_id,'language_id'=>$language_id,'pages'=>$pages);
	 $data->create_book($data_array);
 }else{
	 
	 header("location:../view/bookRegistration.php?error");
 }
 

?>