<?php

include("../data/class.userCategory.php");


$data = new userCategory();

$del_id = $_GET['del_id'];

 $data->delete_userCategory($del_id);
 
?>