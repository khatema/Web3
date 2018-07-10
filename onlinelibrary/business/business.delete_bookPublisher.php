<?php

include("../data/class.bookPublisher.php");


$data = new bookPublisher();

$del_id = $_GET['del_id'];

 $data->delete_bookPublisher($del_id);
 
?>