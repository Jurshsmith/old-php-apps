<?php
include('data/setup.php');
$q = "SELECT * FROM users";
$r = mysqli_query($dbc, $q);
$counter = 0;

while($users = mysqli_fetch_assoc($r)){

	if ($users['name'] === $_POST['name']  and $users['password'] == $_POST['password'])
	{
		header("Location: dashboard.php");
	$username = $_POST['name'];
	session_start();
	$_SESSION['username'] = $_POST['name'];
	$_SESSION['email'] = $_POST['email'];
		exit;
}
	else{
		header("Location: index.php?pageid=3&login=0");

	}
}


?>