<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )){
	include('db_config.php');
	
	if (!empty($_POST['name']) AND !empty($_POST['comment'])) {
		$name = mysql_real_escape_string($_POST['name']);
		$comment = mysql_real_escape_string($_POST['comment']);

		$sql2 = "INSERT INTO comment
			(name, comment)
			VALUES('{$name}', '{$comment}')";		
        
         $con->query($sql2);		
	}
}
?>

<div class="comment-item">
	<div class="comment-post">
		<h3><?php echo $name ?> <span>said....</span></h3>
		<p><?php echo $comment?></p>
	</div>
</div>
