<?php

include('conn.php');

$q = "SELECT * FROM users";
$r = mysqli_query($dbc, $q);
$boolean = 0;
while ($users = mysqli_fetch_assoc($r))
{
	if(isset($_POST['phpname'])){
	if ($users['name'] == $_POST['phpname'])
		{
			$boolean = 1;

			}
		}


	if (isset($_POST['phpemail'])){
	if ($users['email'] == $_POST['phpemail'])
	{
		$boolean = 2;
	}
	}

	//for the acct name
	if (isset($_POST['phpacctname'])){
	if ($users['acctname'] == $_POST['phpacctname'])
	{
		$boolean = 3;
	}
	}

	//for the acctno
	if (isset($_POST['phpacctno'])){
	if ($users['acctno'] == $_POST['phpacctno'])
	{
		$boolean = 4;
	}
	}
	
}
if ($boolean == 1)
	{echo "Sorry that name already exists";
	exit();}

if ($boolean == 2)
{
	echo "Sorry the email address is taken";exit();}

if ($boolean == 3)
	{echo "Sorry the account name has already been taken";exit();}
if ($boolean == 4)
	{echo "Sorry the account already exists";exit();}
else{
	echo "You are good to go";
}

?>