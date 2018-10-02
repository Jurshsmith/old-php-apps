<?php

include('conn.php');
$q = "SELECT * FROM users";
$boolean = 1;
$r = mysqli_query($dbc, $q);
 while($users = mysqli_fetch_assoc($r)){
if (($_POST['phpname'] == $users['name']) or ($_POST['phpemail'] == $users['email']) or ($_POST['phpacctno'] == $users['acctno']) or
 ($_POST['phpacctname'] == $users['acctname']))
{
	$boolean = 0;

}
}
if ($boolean == 1){
		$res = "
		<script>
		$('#signin').click();
		</script>
		";
		echo $res;
		$q2 = "INSERT INTO users(name, email, acctname, bankname, acctno, password) VALUES ('$_POST[phpname]','$_POST[phpemail]','$_POST[phpacctname]','$_POST[phpbankname]','$_POST[phpacctno]','$_POST[phppassword]') ";
		$r2 = mysqli_query($dbc, $q2);
		exit;
		
}
else {
			echo "Check Your details well.You have made a mistake somewhere";
}
?>