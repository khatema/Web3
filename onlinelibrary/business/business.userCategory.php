<?php

include("../data/class.userCategory.php");

include("class.paterns.php");

$data = new userCategory();
$paterns = new paterns();
 $valid = $paterns->namePaterns($_POST['name']);

 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->create_userCategory($data_array);
 }else{
	 header("location:../view/userCategoryRegistration.php?error");
 }
 

?>