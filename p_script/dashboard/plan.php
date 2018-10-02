<?php
session_start();
include('../data/conn.php');
$name = $_SESSION['username'];
$q = "SELECT * FROM users WHERE name = '$name'";
$r = mysqli_query($dbc, $q);
$name = '';
$acctname = '';
$acctno = '';
$plan = $_POST['phpplan'];
$q4 = "SELECT * FROM active";
$r4 = mysqli_query($dbc, $q4);
if (is_null(mysqli_fetch_assoc($r4)))
	$status = 1;
else 
	$status = 0;
while($user = mysqli_fetch_assoc($r)){
	$name = $user['name'];
	$acctname = $user['name'];
	$acctno = $user['acctno'];
}
$q3 = "SELECT * FROM active WHERE acctname = '$acctname'";
$r3 = mysqli_query($dbc, $q3);
if (is_null(mysqli_fetch_assoc($r3))){
$q2 = "INSERT INTO active(name, acctname, acctno, plan) VALUES ('$name', '$acctname', '$acctno', '$plan')";
$r2 = mysqli_query($dbc, $q2);
echo '<div id = "done">Done<br>
<center><button id = "close-box" class = "btn">Close Box</button></center>
</div>';}
else{
	echo '
<div id = "done">Failed<br>
<center><button id = "close-box" class = "btn">Close Box</button></center>
</div>
	';
}

?>