<?php
include_once "class.db.php";
class book extends db{
	
	function create_book($data_array){
		$name  = $data_array['name'];
		$category_id = $data_array['category_id'];
		$author_id   = $data_array['author_id'];
		$publisher_id = $data_array['publisher_id'];
		$language_id = $data_array['language_id'];
		$pages = $data_array['pages'];
		
		if($name !=""){
       $query = "INSERT INTO `book`(`name`,`pages`,`category_id`,`author_id`,`publisher_id`,`language_id`) VALUES ('$name','$pages','$category_id','$author_id','$publisher_id','$language_id')";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}else{
			header("location:../view/bookRegistration.php?success");
		}
		}
	}
	function list_book(){
		$query = "Select * from book  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_book($id){
	    $query = "Select * from book where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$post = mysqli_fetch_assoc($result);
		return $post;
	}
	
	function delete_book($id){
	$sql = "DELETE FROM book WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookRegistration.php?success");
	}
}
function update_book($id,$data_array){
	
	    $name      = $data_array['name'];
		$fname     = $data_array['fname'];
		$lname     = $data_array['lname'];
		$email     = $data_array['email'];
		$username  = $data_array['username'];
		$password  = $data_array['password'];
		$category_id=$data_array['category_id'];
		
	$sql = "UPDATE book SET name='$name',fname='$fname',lname='$lname',username='$username',password='$password',email='$email' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookRegistration.php?success");
	}
}


}


?>