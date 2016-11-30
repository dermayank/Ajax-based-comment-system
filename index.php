<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Comment System By Mayank Joshi</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div class="wrap">
		<h1>Comment System By Mayank Joshi</h1>
		<?php 
			$i = 0;
			for($i=0;$i<10;$i++)
				echo"<br><br>";
		?>
		<h2>Submit new comment:</h2><br>
		<!--comment form -->
		<form id="form" method="post">
			
			<label>
				<span>Your good name *</span>
				<input type="text" name="name" id="comment-name" placeholder="name...." required>
			</label>
			<label>
				<span>Your comment *</span>
				<textarea name="comment" id="comment" cols="30" rows="10" placeholder="comment ...." required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit Comment">
		</form>
	<?php
		
		include_once('db_config.php');
	?>
	
	
	<?php
		// retrive comments with post id
		$comment_query = $con->query("SELECT * FROM comment ORDER BY s_no");
	?>

		<h2><br>Comments.....</h2>
		<div class="comment-block">
		<?php while($comment = $comment_query->fetch_assoc()){ ?>
			<div class="comment-item">
				<div class="comment-post">
					<h3><?php echo $comment['name'] ?> <span>said....</span></h3>
					<p><?php echo $comment['comment']?></p>
				</div>
			</div>
		<?php }?>
		</div>

		
	</div>
</body>
</html>
