<?php 
session_start();
if (isset($_SESSION['cookiess'])){
	$_SESSION['cookiess'] += 1;//a global array associated with times a person visits a 
}
else{
	$_SESSION['cookiess'] = 1; 
}
$msg = 'You have visited this page '. $_SESSION['cookiess'] ;
$msg .= ' no of times';
?>
<html>
<head>
	<title>Testing Sessions</title>
</head>
<body>
<?php echo $msg;
?>
</body>

</html>