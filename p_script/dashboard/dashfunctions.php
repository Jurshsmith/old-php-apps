<?php 

function activeMember($dbc, $user){

//returns 1 means he is an active member
	$q = "SELECT * FROM active WHERE name = '$user'";
	$r = mysqli_query($dbc, $q);
	if (is_null(mysqli_fetch_assoc($r)))
		$a = 0;
	else
		$a = 1;

	return $a;

}

function assigned($dbc, $user){
	$assigned = 0;
	//returns 1 means he has been assigned who to pay to
	$q = "SELECT * FROM active WHERE name = '$user'";
	$r = mysqli_query($dbc, $q);
	while($user = mysqli_fetch_assoc($r))
	{
		
		if ($user['assigned'] == 1)
			$assigned =  1;

	}
	return $assigned;
}

function assign($dbc, $user){
	$query = "SELECT * FROM active WHERE confirmed = 1";
	$run = mysqli_query($dbc, $query);
	$counter = 0;
	$boolean = 0;
	while($assignedUser = mysqli_fetch_assoc($run))
	{
		if ($counter == 0 and $assignedUser['name'] != $user and $assignedUser['payer1'] != $user)
		{
			$qq = "UPDATE `active` SET `payto` = '$assignedUser[name]' WHERE `active`.`name` = '$user' ";
			$rr = mysqli_query($dbc, $qq);
			$paycount = $assignedUser['paycount'];
			
			if (strlen($assignedUser['name']) > 1){
				$boolean = 1;
				$paycount++;
			if ($paycount == 1)
			{

			$qqq = "UPDATE `active` SET `paycount` = '$paycount', `payer1` = '$user' WHERE `active`.`name` = '$assignedUser[name]' ";
			$rrr = mysqli_query($dbc, $qqq);

			}
			if ($paycount == 2){
			$qqqq = "UPDATE `active` SET `paycount` = '$paycount',`confirmed` = 2, `payer2` = '$user' WHERE `active`.`name` = '$assignedUser[name]' ";
			$rrrr = mysqli_query($dbc, $qqqq);
			
		}
		}
		$q = "UPDATE `active` SET `assigned` = 1 WHERE `active`.`name` = '$user'";
			$r = mysqli_query($dbc, $q);

		}
		// if ($counter == 1)
		// {
		// 	$qq = "UPDATE `active` SET `payto` = '$assignedUser[name]' WHERE `active`.`name` = '$user' ";

		// } to have more paytos
		$counter++;
	}

}

function confirmed($dbc, $user){
	//checks if the users has been confirmed
	$query = "SELECT * FROM active WHERE confirmed >= 1 AND name = '$user'";
	$r = mysqli_query($dbc, $query);
	$confirmed = 0;
	if (is_null(mysqli_fetch_assoc($r)))
		$confirmed = 0;
	else
		$confirmed = 1;


	return $confirmed;

}

function displayPayers($dbc, $user){

$display = ' ';
$q = "SELECT * FROM active WHERE payto = '$user'";
$r = mysqli_query($dbc, $q);
$header = '
			<h1 style = "font-family: mistral; text-align: center">These Have Been Merged To Pay You</h1>
			<hr>
			';
$button = '
		<button class = "btn j-btn confirm" >
		Confirm
		</button>
		';
		$counter = 1;
echo $header;
while($payers = mysqli_fetch_assoc($r)){
	$button = '
		<button class = "btn j-btn confirm'.$counter.'"'.'>
		Confirm
		</button>
		';
	$display .= '<li class = "payer'.$counter.'">'.'<font id = "payer" style = "font-family: mistral">'.$payers['name'].'</font>'.'<br>'.$payers['acctname'].'<br>'.$payers['acctno'].'<br><br>'.$button.'</li>'.'<br>';

if ($counter == 1)
	$_SESSION['payer1'] = $payers['name'];
if (isset($_SESSION['payer1']))
	$_SESSION['payer2'] = $payers['name'];

$counter++;


 }

echo '<div id = "display-payers">'.$display.'</div>';

$payer1 = "'".$_SESSION['payer1']."'";
$payer2 = "'".$_SESSION['payer2']."'";



$script = '
		<script type="text/javascript">
$("#no1").click(
function(){
$("#confirm-response1").hide();
$("#dash-loads").removeClass("blur");

});

$("#no2").click(
function(){
$("#confirm-response2").hide();
$("#dash-loads").removeClass("blur");
});

$(".confirm1").click(function(){
$("#confirm-response1").show();
$("#dash-loads").addClass("blur");

$("#confirm-yes1").click(
	function(){
var user = '.$payer1.';
$.post("dashboard/confirm.php", {
	phpuser : user,
	phppayer : 1
}, function(data){
//$("#confirm-response1").hide();
//$("#dash-loads").removeClass("blur");
$("#confirm-response1").html(data);
});
	});

});

$(".confirm2").click(function(){
$("#confirm-response2").show();
$("#dash-loads").addClass("blur");

$("#confirm-yes2").click(
	function(){
var user = '.$payer2.';
$.post("dashboard/confirm.php", {
	phpuser : user,
	phppayer: 2
}, function(data){
//$("#confirm-response2").hide();
//$("#dash-loads").removeClass("blur");
$("#confirm-response2").html(data);
});
	});

});

</script>

';
echo $script;
	
}


function givePayer1(){

}
function givePayer2(){

}



function displayNoPayers(){
echo 'Sorry no Payers Available<br>';
}



function displayPayTo($dbc, $user){

	$q = "SELECT * FROM active WHERE payer1 = '$user' OR payer2 = '$user'";
	$r = mysqli_query($dbc, $q);
	$display = '';
	while($payto = mysqli_fetch_assoc($r)){
		$display .= $payto['name'].'<br>'.$payto['acctname'].'<br>'.$payto['acctno'].'<br><br>';
	}
	echo '<div id = "display-payto">'.$display.'</div>';
}


function payerComplete($dbc, $user){
	$q = "SELECT * FROM active WHERE payto = '$user'";
		$r = mysqli_query($dbc, $q);
	$counter = 0;
		while($payers = mysqli_fetch_assoc($r)){
			$counter++;
		}

		return $counter;
}

function done($dbc, $user){
$done = 0;
	//returns 1 means he has been assigned who to pay to
	$q = "SELECT * FROM active WHERE name = '$user'";
	$r = mysqli_query($dbc, $q);
	while($user = mysqli_fetch_assoc($r))
	{
		
		$done = $user['done'];

	}
	return $done;

}
function deactivate($dbc, $user){
echo "hello<br>";
}
function userAvailable($dbc, $user){
	$q = "SELECT * FROM active WHERE confirmed = 1";
	$r = mysqli_query($dbc, $q);
	if (is_null(mysqli_fetch_assoc($r)))
		return 0;
	else
		return 1;
}
?>