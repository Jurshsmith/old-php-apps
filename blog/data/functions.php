<?php

function get_page_content($dbc, $pageid){
	$q = "SELECT * FROM pages WHERE id = $pageid";
	$r = mysqli_query($dbc , $q);
	$page = mysqli_fetch_assoc($r);

	return $page['content'];
}

function get_time(){

$lagging_factor = 15;
$h = date("h") + $lagging_factor ;
$i = date("i");
$s = date("s");
$a = date("a");//for am or pm

if ($h > 12){
	$h_store = $h;
	$h %= 12;
	if ($h == 0)
	{
		if ($h_store / 12 == 1)
			$a = "am";
		if ($h_store / 12 == 2)
			$a = "pm";
	}
}
if ($h % 10 > 0)
$time =  $h.":".$i.":".$s." $a";
if ($h == 0)
$time =  "12:".$i.":".$s." $a";
else
$time = "0".$h.":".$i.":".$s." $a";


return $time;
}


function get_date()
{

$date = date("d M, Y");
return $date;
}
 ?>