<?php
include_once "class.db.php";
class bookLanguage extends db{
	
	function create_bookLanguage($data){
		$name = $data['name'];
		if($name !=""){
		    $query = "INSERT INTO `language`(`name`) VALUES ('$name')";
			$result = mysqli_query($this->con, $query);
			if (!$result) {
				echo "You have problem with your SQL Query:".mysqli_error($this->con);
			}else{
				header("location:../view/bookLanguageRegistration.php?success");
			}
		}
	}
	function list_BookLanguage(){
		$query = "Select * from language  ORDER BY id DESC";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_bookLanguage($id){
	    $query = "Select * from language where `id`= '$id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$data = mysqli_fetch_assoc($result);
		return $data;
	}
	
	function delete_bookLanguage($id){
	$sql = "DELETE FROM language WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to delete please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookLanguageRegistration.php?success");
	}
}
function update_bookLanguage($id,$data){
	$name = $data['name'];
	$sql = "UPDATE language SET name='$name' WHERE id='$id'";
	$result = mysqli_query($this->con,$sql);
	if(!$result){
		echo "Unable to Update please try again".mysqli_error($this->con);
	}else{
		header("location:../view/bookLanguageRegistration.php?success");
	}
}
}

?>