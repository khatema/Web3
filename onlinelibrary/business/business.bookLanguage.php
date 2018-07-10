<?php

include("../data/class.bookLanguage.php");

include("class.paterns.php");

$data = new bookLanguage();
$paterns = new paterns();
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->create_bookLanguage($data_array);
 }else{
	 header("location:../view/bookLanguageRegistration.php?error");
 }
 

?>