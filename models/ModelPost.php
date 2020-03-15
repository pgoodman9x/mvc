<?php 
class ModelPost{
	public function getPosts(){
		$conn = new mysqli('localhost', 'root', '', 'mvc');
		$conn -> set_charset("utf8");
		if($conn->connect_errno){
			echo 'Error: ' .$conn->connect_error;
			exit();
		}

		$result = $conn->query('select * from posts');

		$posts = array();
		if($result->num_rows > 0){
			while($post = mysqli_fetch_assoc($result)){
				$posts[] = $post;
 			}

 			$result->free();
		}

		return $posts;
	}
}

 ?>