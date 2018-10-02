<?php
include('loaderconn.php');
$php_counter = $_POST['php_counter'];

$q = "SELECT * FROM posts LIMIT $php_counter";
$r = mysqli_query($dbc, $q);

while($posts = mysqli_fetch_assoc($r)){
	echo $posts['post'].'<br><br>';
}

?>