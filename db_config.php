
<?php
# db configuration
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('database','comment_system_by_mayank_joshi');
 
$conn = new mysqli(host, user, password);
$sql = "CREATE DATABASE comment_system_by_mayank_joshi";
$conn->query($sql);

$con = new mysqli(host, user, password,database);
if(!($con))
{
	die("error in connecting");
}
else{
	$sql1 = "CREATE TABLE IF NOT EXISTS comment(
    s_no     INT AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(255) NOT NULL,
	comment  VARCHAR(255) NOT NULL )";
	
	$con->query($sql1);
}
	
?>
