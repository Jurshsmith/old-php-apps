<?php
$hostname = "localhost";
$username = "colony";
$password = "hello";
$dbname = "php_blog";

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("Could not connect because ".mysqli_connect_error());

?>