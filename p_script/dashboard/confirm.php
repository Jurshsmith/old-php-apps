<?php
include '../data/conn.php';
session_start();
$thisUser = $_SESSION['username'];
$user = $_POST['phpuser'];
$payer = $_POST['phppayer'];
$q = "UPDATE `active` SET `confirmed` = 1 WHERE `active`.`name` = '$user' ";
$r = mysqli_query($dbc, $q);
$qq = "SELECT * FROM active WHERE name = '$thisUser'";
$rr = mysqli_query($dbc, $qq);
while ($this_user = mysqli_fetch_assoc($rr)){
	$done = $this_user['done'];
}
$done++;
$null ='';
$payerString = 'payer'.$payer;
$q1 = "UPDATE `active` SET `$payerString` = '$null' WHERE `active`.`name` = '$thisUser' ";
$r1 = mysqli_query($dbc, $q1);
$q2 = "UPDATE `active` SET `payto` = '$null' WHERE `active`.`name` = '$user' ";
$r2 = mysqli_query($dbc, $q2);
$qqq = "UPDATE `active` SET `done` = '$done' WHERE `active`.`name` = '$thisUser' ";
$rrr = mysqli_query($dbc, $qqq);
if ($done == 2){
	$qqqq = "DELETE FROM `active` WHERE `active`.`name` = '$thisUser'";
	$rrrr = mysqli_query($dbc, $qqqq);
}

$script1 = '
<font style = "text-align: center">Done</font><br><br>
<button id = "end1">End</button><br>

<script>
$("#end1").click(
function(){
	$("#confirm-response1").hide();
	$(".payer1").hide();
	$("#dash-loads").removeClass("blur");
	


});
</script>
';
$script2=
 '
<font style = "text-align: center">Done</font><br><br>
<button id = "end2">End</button><br>

<script>
$("#end2").click(
function(){
	$("#confirm-response2").hide();
	$(".payer2").hide();
	$("#dash-loads").removeClass("blur");
	


});
</script>
';
if ($payer == 1)
echo $script1;
if ($payer == 2)
echo $script2;

?>