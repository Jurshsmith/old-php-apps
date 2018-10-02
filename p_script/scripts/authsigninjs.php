<script>
$('#sign-in').click(
	function(){
		var email = $('#email').val();
		var password = $('#password').val();
		$.post('data/authsignin.php', {
			phpemail : email,
			phppassword : password,

		}, function(data){
			$('#signin-res').html(data);
		});

	});

</script>