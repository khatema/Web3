<?php

include("../data/class.bookPublisher.php");

include("class.paterns.php");

$data = new bookPublisher();
$paterns = new paterns();

$up_id = $_GET['up_id'];
 $valid = $paterns->namePaterns($_POST['name']);
 if($valid){
	 $data_array = array("name"=>$_POST['name']);
	 $data->update_bookPublisher($up_id,$data_array);
 }else{
	 header("location:../view/bookPublisherRegistration.php?error");
 }
 

?>