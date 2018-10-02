<?php
#gain access  to the database
include ('data/setup.php');

session_start();

$user = $_SESSION['username'];
$post = str_replace('\'','',$_POST['post']);//removes the apostrophe issue

$q2 = "INSERT INTO posts(user,post,time) VALUES ('$user', '$post','$timestamp')";
$r2 = mysqli_query($dbc, $q2);
if ($r2)
header("Location: index.php?pageid=1");
else{
	echo $user.'<br>';
	echo $post.'<br>';
	echo $_SESSION['username'].'<br>';
	echo $_POST['post'].'<br>';

}




?>