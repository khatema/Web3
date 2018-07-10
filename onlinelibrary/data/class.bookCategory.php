<?php
include_once "class.db.php";
class bookCategory extends db{
	
	function create_bookCategory($data){
		$name = $data['name'];
		if($name !=""){
		    $query = "INSERT INTO `book_category`(`name`) VALUES ('$name')";
			$result = mysqli_query($this->con, $query);
			if (!$result) {
				echo "You have problem with your SQL Query:".mysqli_error($this->con);
			}else{
				header("location:../view/bookCategoryRegistration.php?success");
			}
		}
	}
	function list_BookCategory(){
		$query = "Select * from book_category  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_bookCategory($id){
	    $query = "Select * from book_category where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$post = mysqli_fetch_assoc($result);
		return $post;
	}
	
	function delete_bookCategory($id){
	$sql = "DELETE FROM book_category WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookCategoryRegistration.php?success");
	}
}
function update_bookCategory($id,$data){
	$name = $data['name'];
	$sql = "UPDATE book_category SET name='$name' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookCategoryRegistration.php?success");
	}
}
}

?>