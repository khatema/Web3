<?php
include_once "class.db.php";
class user extends db{
	
	function create_user($data_array){
		$name  = $data_array['name'];
		$fname = $data_array['fname'];
		$lname = $data_array['lname'];
		$email = $data_array['email'];
		$username = $data_array['username'];
		$password = $data_array['password'];
		$category_id = $data_array['category_id'];
		
		if($name !=""){
       $query = "INSERT INTO `users`(`name`,`fname`,`lname`,`email`,`username`,`password`,`category_id`) VALUES ('$name','$fname','$lname','$email','$username','$password','$category_id')";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}else{
			header("location:../view/userRegistration.php?success");
		}
		}
	}
	function list_user(){
		$query = "Select * from users  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_user($id){
	    $query = "Select * from users where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$post = mysqli_fetch_assoc($result);
		return $post;
	}
	
	function delete_user($id){
	$sql = "DELETE FROM users WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/userRegistration.php?success");
	}
}
function update_user($id,$data_array){
	
	    $name      = $data_array['name'];
		$fname     = $data_array['fname'];
		$lname     = $data_array['lname'];
		$email     = $data_array['email'];
		$username  = $data_array['username'];
		$password  = $data_array['password'];
		$category_id=$data_array['category_id'];
		
	$sql = "UPDATE users SET name='$name',fname='$fname',lname='$lname',username='$username',password='$password',email='$email' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/userRegistration.php?success");
	}
}


}


?>