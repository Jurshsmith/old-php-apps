<?php
$arrayNames = array("John", "Jeremiah", "Emmanuel", "Sean", "Mary", "Michael");
if (isset($_POST['phpname'])){
$name = $_POST['phpname'];
foreach ($arrayNames as $arrayName)
{
	if (stripos($arrayName, $name) !== false){
		echo $arrayName.'<br>';
		#strpos: case sensitive
		#stripos: case insensitive
	}
}
}

?>