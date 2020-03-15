<?php 
class ControllerPost{

	public function getPosts(){
		require_once('models/ModelPost.php');
		require_once('views/ViewPost.php');
		$model = new ModelPost();
		$posts = $model-> getPosts();
		/*echo '<pre>' , var_dump($posts) , '</pre>';*/

		$view = new ViewPost();
		$view->showPosts($posts);

	}
}

 ?>