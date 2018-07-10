<?php

include("../data/class.bookLanguage.php");


$data = new bookLanguage();

$del_id = $_GET['del_id'];

 $data->delete_bookLanguage($del_id);
 
?>