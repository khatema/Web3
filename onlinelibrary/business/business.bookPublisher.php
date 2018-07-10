<?php

include("../data/class.bookPublisher.php");

include("class.paterns.php");

$data = new bookPublisher();
$paterns = new paterns();
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->create_bookPublisher($data_array);
 }else{
	 header("location:../view/bookPublisherRegistration.php?error");
 }
 

?>