<?php

include("../data/class.bookCategory.php");


$data = new bookCategory();

$del_id = $_GET['del_id'];

 $data->delete_bookCategory($del_id);
 
?>