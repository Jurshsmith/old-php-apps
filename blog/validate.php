<?php
 include('data/setup.php'); 


 			
	$q = "SELECT * FROM users";
	$counter = 1;
	$r = mysqli_query($dbc, $q);
	 while($users = mysqli_fetch_assoc($r)){
	if (($_POST['name'] == $users['name']) and ($_POST['email'] == $users['email']))
	{
 		$counter = 0;
 	}
		else{
				$counter = 1;}
		
	}
	if ($counter == 1){
			$q2 = "INSERT INTO users(name, email, password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]') ";
			$r2 = mysqli_query($dbc, $q2);
			$signup = 1;
			header("Location: index.php?pageid=1&signup=1");//and sign up is true..no spacing btw the location  and the semi colon
			
			}


	
	else{
			$signup = 2;
			header("Location: index.php?pageid=2&signup=2");//and sign up is false..no spacing btw the location  and the semi colon
			
		}





?>