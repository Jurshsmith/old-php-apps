<?php
include('conn.php');
$q = "SELECT * FROM users";
$r = mysqli_query($dbc, $q);
$email = $_POST['phpemail'];
$password = $_POST['phppassword'];
$boolean = 0;
while($user = mysqli_fetch_assoc($r)){
	if (($user['email'] == $email) and ($user['password'] == $password))
		$boolean = 1;
		
	
}
if  ($boolean == 1)
{
	session_start();
	while($user = mysqli_fetch_assoc($r)){
	if (($user['email'] == $email) and ($user['password'] == $password))
		$_SESSION['username'] = $user['name'];
}
	$res = "
	<script>
	$('#dashboard').click();
	</script>
	";
	
	echo $res;
	
	
	
}
else{
	$res = "Sign in Failed...Check your details!";
	echo $res;
}
?>