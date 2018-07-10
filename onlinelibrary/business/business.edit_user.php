<?php

include("../data/class.user.php");

include("class.paterns.php");

$id = $_GET['id'];

 $data        = new user();
 $paterns     = new paterns();
 $valid_name  = $paterns->namePaterns($_POST['name']);
 $valid_email = $paterns->emailPaterns($_POST['email']);
 $password    = md5($_POST['password']);
 $username    = $_POST['username'];
 $username    = $_POST['fname'];
 $username    = $_POST['lname'];
 $category_id = $_POST['category_id'];
 
 if($valid_name && $valid_email){
	 $data_array = array("name"=>$_POST['name'],'fname'=>$fname,'lname'=>$lname,'username'=>$username,'password'=>$password,'email'=>$email,'category_id'=>$category_id);
	 $data->update_user($id,$data_array);
 }else{
	 
	 header("location:../view/userRegistration.php?error");
 }
 

?>