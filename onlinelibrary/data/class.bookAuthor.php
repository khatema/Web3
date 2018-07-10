<?php
include_once "class.db.php";
class bookAuthor extends db{
	
	function create_bookAuthor(){
		$name = $_POST['name'];
		if($name !=""){
       $query = "INSERT INTO `book_author`(`name`) VALUES ('$name')";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}else{
			header("location:../view/bookAuthorRegistration.php");
		}
		}
	}
	function list_BookAuthor(){
		$query = "Select * from book_author  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_bookAuthor($id){
	    $query = "Select * from book_author where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$post = mysqli_fetch_assoc($result);
		return $post;
	}
	
	function delete_bookAuthor($id){
	$sql = "DELETE FROM book_author WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookAuthorRegistration.php");
	}
}
function update_bookAuthor($id){
	$name = $_POST['name'];
	$sql = "UPDATE book_author SET name='$name' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookAuthorRegistration.php");
	}
}


}



$bookAuthor = new bookAuthor();
//delete
if(isset($_GET['del_id'])){
	$id = $_GET['del_id'];
	$bookAuthor->delete_bookAuthor($id);
}
//update
if(isset($_GET['up_id'])){
	$id = $_GET['up_id'];
	$bookAuthor->update_bookAuthor($id);
}
//insetrt
if(isset($_POST['submit'])){
	$bookAuthor->create_bookAuthor();
}
?>