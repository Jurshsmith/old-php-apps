<script>
$('#password').keyup(
function(){
var password = $("#password").val();
var passwordLength = password.length;
var res = " ";
if (passwordLength <= 5)
	res = 'Weak';
if (passwordLength > 5 && passwordLength < 10 )
	res = "fair"; 
if (passwordLength > 10)
	res = "strong";  

$('#password-res').html(res);


});

$('#cpassword').keyup(function(){
var password = $('#password').val();
var cpassword = $('#cpassword').val();
var res = " ";
if (cpassword == password)
{
	res = "The passwords are a match";
}
else{
	res = "<font style = 'color:red'>The passwords don't match</font>";
}

$('#cpassword-res').html(res);


});

</script>