<?php

include("../data/class.userCategory.php");

include("class.paterns.php");

$data = new userCategory();
$paterns = new paterns();

$up_id = $_GET['up_id'];
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->update_userCategory($up_id,$data_array);
 }else{
	 header("location:../view/userCategoryRegistration.php?error");
 }
 

?>