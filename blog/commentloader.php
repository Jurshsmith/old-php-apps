<?php include('loaderconn.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Comment loader</title>
<script type = "text/javascript" src = "jquery.min.js"></script>
<style>
#comment-area{
	height: auto;
	width: 500px;
	background-color: cyan;
	color: red;
	margin-left: 31.4%;
	font-family: monospace;
	padding: 20px;
}
</style>
</head>
<body>
<h3 style = "font-family: monospace; text-align: center; text-transform: uppercase; font-weight: 1800; letter-spacing: 0.8px">This is the comment box</h3>
<div id= "comment-area">


</div>
<br>
<center><button id = "load-btn">Load more</button></center>

<script type = "text/javascript">
	var java_counter = 0;
$('#load-btn').click(function(){
	java_counter += 2;
	$.post('loadpost.php',
{

	php_counter : java_counter
},

	 function(data){

		$('#comment-area').html(data);

	});
});
</script>
</body>
</html>