<?php
function payto($dbc, $user){
$q = "SELECT * FROM active";
$r = mysqli_query($dbc, $q);
$details = "";
$paymedetails = "";

while($activeusers = mysqli_fetch_assoc($r)){
	if ($activeusers['status'] == 1 and $activeusers['paycount'] < 2)

		{	


			$activeusers['paycount']++;
			$paycount = $activeusers['paycount'];
			$activeuser = $activeusers['name'];
			$qqq = "SELECT * FROM active WHERE name = '$user'";
			$rrr = mysqli_query($dbc, $qqq);
			while($theuser = mysqli_fetch_assoc($rrr))
			{
				$paymedetails = $theuser['name'].'<br>'.$theuser['acctname'].'<br>'.$theuser['acctno'];
			}
			$q1 = "UPDATE `active` SET `payme` = '$paymedetails', `paycount` = '$paycount' WHERE `active`.`name` = '$activeuser'";
			$r1 = mysqli_query($dbc, $q1);
			
			$details = $activeusers['name'].'<br>'.$activeusers['acctname'].'<br>'.$activeusers['plan'].'<br>'.$activeusers['acctno'];//manipulate details here
			

			$qq = "UPDATE `active` SET `payto` = '$details', `payto1` = '$activeuser' WHERE `active`.`name` = '$user'";
			$rr = mysqli_query($dbc, $qq);






			}





}
if (strlen($details) < 2 and strlen($paymedetails) < 2)
	echo 'Sorry no active user yet';
else 
	echo $details;
}
?>