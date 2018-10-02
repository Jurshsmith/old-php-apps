<script type = "text/javascript">
<?php $pageid = 0; ?>
$(document).ready(
function(){

$('#home').click(
	function(){
		
		$.get('contents/home.php', function(data){$('#content').html(data);
		$('#home, #signup, #signin, #aboutus').removeClass('active');
		$('#home').addClass('active');
		
	});
		
	});

$('#signup').click(
	function(){
		
		$.get('contents/signup.php', function(data){$('#content').html(data);
		$('#home, #signup, #signin, #aboutus').removeClass('active');
		$('#signup').addClass('active');
		
	});
		
	});

$('#signin').click(
	function(){
		
		$.get('contents/signin.php', function(data){$('#content').html(data);
		$('#home, #signup, #signin, #aboutus').removeClass('active');
		$('#signin').addClass('active');});
		
	});

$('#aboutus').click(
	function(activepage){
		
		$.get('contents/aboutus.php', function(data){$('#content').html(data);
		$('#home, #signup, #signin, #aboutus').removeClass('active');
		$('#aboutus').addClass('active');

	});

	});



});
</script>