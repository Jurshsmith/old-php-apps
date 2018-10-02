<?php
include('../data/conn.php');
$q = "SELECT * FROM users";
$r = mysqli_query($dbc, $q);
$boolean = 0;
while($user = mysqli_fetch_assoc($r)){
	if (($user['email'] == $_POST['email']) and ($user['password'] == $_POST['password']))
		{$boolean = 1;
		session_start();
		$_SESSION['username'] = $user['name'];
		}
}
if ($boolean == 1){
	header("Location: ../dash.php");
}
?>