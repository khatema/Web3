<?php

include("../data/class.bookCategory.php");

include("class.paterns.php");

$data = new bookCategory();
$paterns = new paterns();

$up_id = $_GET['up_id'];
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->update_bookCategory($up_id,$data_array);
 }else{
	 header("location:../view/bookCategoryRegistration.php?error");
 }
 

?>