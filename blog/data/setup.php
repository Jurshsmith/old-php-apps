<?php
$dbc = mysqli_connect('localhost','colony','hello','php_blog') OR die('Could not connect cuz '.mysqli_connect_error());

#functions
include('functions.php'); 

//to get pages
if (isset($_GET['pageid'])){
	$pageid = $_GET['pageid'];
}
else{
	$pageid = 1;
}

$page_content = get_page_content($dbc, $pageid);


			//getting scripted messages
			function get_message($signup){
				if ($signup == 1){
					$message = 'Sign up was successful';
				}
				if ($signup == 2){
					$message = "Error in Signing up";
				}
				else{
					$message = "";
				}
				return $message;
			}

$timestamp = get_time()." ".get_date();


			
function get_post($dbc){
	$q = "SELECT * FROM posts";
	$r = mysqli_query($dbc, $q);

	while($posts = mysqli_fetch_assoc($r))
	{
		$post = $posts['post'];
		$user = $posts['user'];
		$timestamp = $posts['time'];

		echo '<li>'.'<font id = "post-style">'.$post.'</font>'.'<br><br>';
		echo '@ '.$timestamp.' '.'<font id = "user-style" style = "display:inline">'.$user.'</font>'.'</li>';
	}
}

			

		
?>