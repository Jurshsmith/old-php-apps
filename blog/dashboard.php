
<?php include('data/dashboard_setup.php'); ?>
<?php include('data/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to Your dashboard</title>
<!--script section-->
<?php include('script/js.php'); ?>


<!--css section-->
<?php include('stylesheet/css.php'); ?>

</head>
<body>
<div id = "menu-bar" class = "col-sm-3" >
	<font style = "color : blue; font-weight: 400px; font-family: monospace; margin-left: 40px">
	 <?php 
	 
	echo $_SESSION['username'];

	?>, Welcome to php blog!</font>
	<br><br><br>

<ul>
	<li><a href = "?dash_page=1">Go to dashboard</a></li>
	<li><a href = "?dash_page=2">Posts</a></li>
	<li><a href = "?dash_page=3" >Comments</a></li>
</ul>
</div>
<div class = "col-sm-1">
</div>

<div id = "task-area" class = "col-sm-8">
	<div id = "dynamic-section">
		<form  action = "posting.php" method = "post">
<input name = "post" type = "text"  style = "width : 500px; height: 200px" placeholder = "Post Something on php blog"><br>
<button type = "submit"  id = "post-button">
Post
</button>
		</form>
	</div>
</div>

</body>
</html>