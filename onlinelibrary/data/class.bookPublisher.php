<?php
include_once "class.db.php";
class bookPublisher extends db{
	
	function create_bookPublisher($data){
		$name = $data['name'];
		if($name !=""){
		    $query = "INSERT INTO `book_publisher`(`name`) VALUES ('$name')";
			$result = mysqli_query($this->con, $query);
			if (!$result) {
				echo "You have problem with your SQL Query:".mysqli_error($this->con);
			}else{
				header("location:../view/bookPublisherRegistration.php?success");
			}
		}
	}
	function list_BookPublisher(){
		$query = "Select * from book_publisher  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_bookPublisher($id){
	    $query = "Select * from book_publisher where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$data = mysqli_fetch_assoc($result);
		return $data;
	}
	
	function delete_bookPublisher($id){
	$sql = "DELETE FROM book_publisher WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookPublisherRegistration.php?success");
	}
}
function update_bookPublisher($id,$data){
	$name = $data['name'];
	$sql = "UPDATE book_publisher SET name='$name' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookPublisherRegistration.php?success");
	}
}
}

?>