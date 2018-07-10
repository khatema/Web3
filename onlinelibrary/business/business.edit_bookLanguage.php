<?php

include("../data/class.bookLanguage.php");

include("class.paterns.php");

$data = new bookLanguage();
$paterns = new paterns();

$up_id = $_GET['up_id'];
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->update_bookLanguage($up_id,$data_array);
 }else{
	 header("location:../view/bookLanguageRegistration.php?error");
 }
 

?>