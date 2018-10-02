<?php
 session_start();
 if (isset($_SESSION['username']))
	{}
else 
	header("Location: index.php");
if (isset($_GET['logout']) == true){
	session_destroy();
	header("Location: index.php");

}
if (isset($_GET['gohome']) == 1){

	header("Location: index.php");

}
include('data/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome To P_SCrIPT</title>

<?php include('scripts/js.php');?>


<?php include('css/css.php'); ?>
</head>

<body>
	<br>
	<div id = "dash-wrap" class = "row">
		<div id = "dash-nav" class = "col-sm-2">
			<ul>
				<li><a href = "#" id = "dashboard">Dashboard</a></li>
				<li><a href = "#" id = "profile">Profile</a></li>
				<li><a href = "#" id = "complain">Complain</a></li>
				<li><a href = "?gohome=1" id = "gohome">Pscript Home</a></li>
				<li><a href = "?logout=true" id = "logout">logout</a></li>

			</ul>

		</div>
<div id = "confirm-response1">
Are You Sure
<br><br>
<button id = "confirm-yes1" class = "btn">yes</button> <button class = "btn" id = "no1" style = "display: inline">no</button>
</div>
<div id = "confirm-response2">
Are You Sure
<br><br>
<button id = "confirm-yes2" class = "btn">yes</button> <button class = "btn" id = "no2" style = "display: inline">no</button>
</div>

		<div id = "dash-loads"  class = "col-sm-10">
<header style = "font-family: mistral; font-size: 25px;">Welcome <i id = "user"><?php echo $_SESSION['username'];?></i>, to P_SCRIPT</header>


<div id = "dashscript"></div>
			


	</div><!--end of dash loads-->

	</div><!--end of the wrap-->
	<div id = "sure-box">
		<h3 style = "font-family: mistral">Are You Sure You Want This Package?</h3>
		<br>
		<center><button id = "yes" class = "btn">Yes</button> <button id = "close-box" class = "btn">Close Box</button></center>

	</div>
<script>
$('#sure-box').hide();
$('#confirm-response1').hide();
$('#confirm-response2').hide();

</script>

</body>
</html>