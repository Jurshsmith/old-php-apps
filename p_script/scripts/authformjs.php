<script type="text/javascript">
$('#sign-up').click(
	function()
	{
		var name = $('#name').val();
		var email = $('#email').val();
		var bankname = $('#bankname').val();
		var acctname = $('#acctname').val();
		var acctno = $('#acctno').val();
		var password = $('#password').val();

		$.post('data/authform.php', {
			phpname : name,
			phpemail : email,
			phpacctname : acctname,
			phpbankname : bankname,
			phpacctno : acctno,
			phppassword : password

		}, function(data){
			$('#form-res').scroll();
			$('#form-res').html(data);
			

		});
	});


</script>