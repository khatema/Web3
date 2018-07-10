<?php

include("../data/class.user.php");


$data = new user();

$del_id = $_GET['del_id'];

 $data->delete_user($del_id);
 
?>