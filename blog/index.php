<?php session_start(); ?>
<?php include('data/setup.php'); ?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title>Php Blog </title>

<!--script section-->
<?php include('script/js.php'); ?>


<!--css section-->
<?php include('stylesheet/css.php'); ?>


</head>
<body>
<h3>
		<?php 
	if (isset($_GET['signup'])) echo get_message($_GET['signup']).'<br>'; ?>
</h3>

<h2><?php if(isset($_GET['login'])) echo 'Login was not successful'; ?></h2>
	<?php include('template/header.php'); ?>
	
	<?php
	if($pageid == 1){
?>
<div id = "post-section">
	<ul>
		<h2 style = "color: blue; text-align: center; padding: 20px">Recent Posts</h2>
		<?php get_post($dbc); ?>
	</ul>
</div>
<?php } ?>
	<?php

	
	echo $page_content; ?>

<?php 



?>
	

</body>
</html>