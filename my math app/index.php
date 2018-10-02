
<!DOCTYPE html>
<html>
<head>
<title>
My Math Web App - MWA
</title>
<script type = "text/javascript" src = "resource/jquery.js"></script>
<script type = "text/javascript" src = "resource/jquery.min.js"></script>
<script type = "text/javascript" src = "resource/jquery-ui.min.js"></script>
<script type = "text/javascript" src = "resource/resource/jquery-ui.js"></script>
<script type = "text/javascript" src = "resource/bootstrap.min.js"></script>
<script type = "text/javascript" src = "resource/bootstrap.js"></script>
<script type = "text/javascript" src = "custom/script.js"></script>


<link rel = "stylesheet" href = "resource/bootstrap.css">
<link rel = "stylesheet" href = "resource/bootstrap.min.css">
<link rel = "stylesheet" href = "resource/bootstrap-theme.min.css">
<link rel = "stylesheet" href = "resource/font-awesome.min.css">
<link rel = "stylesheet" href = "resource/font-awesome.css">
<link rel = "stylesheet" href = "custom/style.css">

<link rel = "icon" href = "images/logo-uk.png" type = "image/x-icon">
<style>
.math-buttons ul li{
	list-style-type: none;
	display: inline;

}
.screen {
	border: 2px solid grey;
	height: 130px;
	border-radius: 20px;
}
.screen ul li{
	list-style-type: none;
	display: inline;
}

</style>


</head>
<body class = "container">
	<br>
	<div class = "row">

		<div class = "screen col-sm-3">
			<br>
<div id = "prev1"></div>
<div id = "sign"></div>
<div id = "current"></div><!--important-->
<ul id = "input">
<li id = "space1"></li>
<li id = "space2"></li>
<li id = "space3"></li>
<li id = "space4"></li>
<li id = "space5"></li>
<li id = "space6"></li>
<li id = "space7"></li>
<li id = "space8"></li>
<li id = "space9"></li>
<li id = "space10"></li>
</ul>
<div id = "ans"></div>

		</div></div>
	<br>
	<div class = "math-buttons">
	<ul>
		<li><button id = "seven" class = "btn">7</button></li>
		<li><button id = "eight" class = "btn">8</button></li>
		<li><button id = "nine" class = "btn">9</button></li>
		<li><button id = "div" class = "btn">/</button></li>
		<li><button id = "mod" class = "btn">%</button></li>
	</ul>
	<ul>
		<li><button id = "four" class = "btn">4</button></li>
		<li><button id = "five" class = "btn">5</button></li>
		<li><button id = "six" class = "btn">6</button></li>
		<li><button id = "mult" class = "btn">*</button></li>
		<li><button class = "btn">1/x</button></li>
	</ul>
	<ul>
		<li><button id = "one" class = "btn">1</button></li>
		<li><button id = "two" class = "btn">2</button></li>
		<li><button id = "three" class = "btn">3</button></li>
		<li><button id = "minus" class = "btn">-</button></li>
		
	</ul>
	<ul> 
		<li><button id = "zero" style = "padding-right: 30px;padding-left: 30px;" class = "btn">0</button></li>
		<li><button id = "dec" class = "btn">.</button></li>
		<li><button id = "plus" class = "btn">+</button></li>
		<li><button id = "equal" style = "padding-right: 17px;padding-left: 17px;padding-top: 35px;padding-bottom: 35px;margin-top: -50px"  class = "btn">=</button></li>
		
	</ul>
	</div>
</body>
</html>

<script>
function check(){
	var counter = 1;
	while (counter <= 10){
		var detail = $('#space'+counter).text();
		if (detail.length == 0){
			return counter;
			counter = 88;
		}
		counter++;
	}
}
function no_of_ten(counter){

}
function setToPrev(){
	
	
		var x = '';
		x = $('#space1').text() + $('#space2').text()+ $('#space3').text()+ $('#space4').text()+ $('#space5').text()+ $('#space6').text()
		+ $('#space7').text()+ $('#space8').text() + $('#space9').text() + $('#space10').text();
		
		$('#prev1').html(x);

		$('#space1').html('') + $('#space2').html('')+ $('#space3').html('')+ $('#space4').html('')+ $('#space5').html('')+ $('#space6').html('')+ $('#space7').html('')
		+ $('#space8').html('')+ $('#space9').html('')+ $('#space10').html('');
		
	
}
function setTocurrent(){
	

		var x = '';
		x = $('#space1').text() + $('#space2').text()+ $('#space3').text()+ $('#space4').text()+ $('#space5').text()+ $('#space6').text()
		+ $('#space7').text()+ $('#space8').text() + $('#space9').text() + $('#space10').text();

		$('#current').html(x);

		$('#space1').html('') + $('#space2').html('')+ $('#space3').html('')+ $('#space4').html('')+ $('#space5').html('')+ $('#space6').html('')+ $('#space7').html('')
		+ $('#space8').html('')+ $('#space9').html('')+ $('#space10').html('');
		
	
	
}
$('#one').click(function(){
$('#space'+check()).html(1);
});$('#two').click(function(){
$('#space'+check()).html(2);
});$('#three').click(function(){
$('#space'+check()).html(3);
});$('#four').click(function(){
$('#space'+check()).html(4);
});$('#five').click(function(){
$('#space'+check()).html(5);});
$('#six').click(function(){
$('#space'+check()).html(6);
});$('#seven').click(function(){
$('#space'+check()).html(7);
});$('#eight').click(function(){
$('#space'+check()).html(8);
});
$('#nine').click(function(){
$('#space'+check()).html(9);
});
$('#zero').click(function(){
$('#space'+check()).html(0);
});
check();
$('#plus').click(function(){
	setToPrev();
	//displayPlus();
	$('#sign').html('+');
	
	
});
$('#minus').click(function(){
	setToPrev();
	//displayPlus();
	$('#sign').html('-');
	
	
});
$('#div').click(function(){
	setToPrev();
	//displayPlus();
	$('#sign').html('/');
	
	
});
$('#mult').click(function(){
	setToPrev();
	//displayPlus();
	$('#sign').html('*');
	
	
});
$('#mod').click(function(){
	setToPrev();
	//displayPlus();
	$('#sign').html('%');
	
	
});
$('#equal').click(function(){
	setTocurrent();
	//displayPlus();
	if ($('#sign').html() == '+')
	$('#ans').html(parseFloat($('#prev1').text()) + parseFloat($('#current').text()));
	
	if ($('#sign').html() == '-')
	$('#ans').html(parseFloat($('#prev1').text()) - parseFloat($('#current').text()));

if ($('#sign').html() == '/')
	$('#ans').html(parseFloat($('#prev1').text()) / parseFloat($('#current').text()));

if ($('#sign').html() == '*')
	$('#ans').html(parseFloat($('#prev1').text()) * parseFloat($('#current').text()));

if ($('#sign').html() == '%')
	$('#ans').html(parseFloat($('#prev1').text()) % parseFloat($('#current').text()));

$('#prev1').html('');
$('#sign').html('');
$('#current').html('');
});

</script>