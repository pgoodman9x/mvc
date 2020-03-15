<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php foreach($posts as $post) :
		?>
		<div class="posts">
			<div class="title"><?php echo $post['title'] ?></div>
			<div class="content"><?php echo $post['content'] ?></div>
			<div class="img">
				<img src=" <?php echo $post['img_url'] ?> " alt="" style="max-width:150px">
			</div>
		</div>
		
	<?php endforeach; ?>
</body>
</html>