<?php

include("../data/class.bookCategory.php");

include("class.paterns.php");

$data = new bookCategory();
$paterns = new paterns();
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->create_bookCategory($data_array);
 }else{
	 header("location:../view/bookCategoryRegistration.php?error");
 }
 

?>