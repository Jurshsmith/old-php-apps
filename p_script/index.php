<?php session_start();
	$_SESSION['explore'] = 1;
	
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
<div id = "wrap">
<font style = "font-family: mistral; position: relative; top: 30px; left: 70px;font-size: 50px; ">THE &nbsp;&nbsp;P_SCRIPT</font>
	<nav id = "p-nav">
<ul>
<li><a id = "home" href = "#">Home</a></li>
<li><a id = "signup" href = "#">Sign Up</a></li>
<li><a id = "signin" href = "#">Sign in</a></li>
<li><a id = "aboutus" href = "#">About us</a></li>
</ul>
	</nav>
<hr>

<div id = "content">
<br>

<br>
</div>



</div>
<br>
</body>
<!--the functiona; diva-->
<div id = "dashboard"></div>
</html>