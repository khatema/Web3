<?php
include_once "class.db.php";
class userCategory extends db{
	
	function create_userCategory($data){
		$name = $data['name'];
		if($name !=""){
		    $query = "INSERT INTO `user_category`(`name`) VALUES ('$name')";
			$result = mysqli_query($this->con, $query);
			if (!$result) {
				echo "You have problem with your SQL Query:".mysqli_error($this->con);
			}else{
				header("location:../view/userCategoryRegistration.php?success");
			}
		}
	}
	function list_UserCategory(){
		$query = "Select * from user_category  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_userCategory($id){
	    $query = "Select * from user_category where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$data = mysqli_fetch_assoc($result);
		return $data;
	}
	
	function delete_userCategory($id){
	$sql = "DELETE FROM user_category WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/userCategoryRegistration.php?success");
	}
}
function update_userCategory($id,$data){
	$name = $data['name'];
	$sql = "UPDATE user_category SET name='$name' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/userCategoryRegistration.php?success");
	}
}
}

?>