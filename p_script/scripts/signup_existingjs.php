<script>
//for the name 
$('#name').keyup(function(){

var name =  $('#name').val();

$.post('data/signup_existing.php', {
	phpname : name
}, function(data){

	$('#name-res').html(data);
});

});
//name auth end

//email auth
$('#email').keyup(function(){
var email = $('#email').val();
$.post(
	'data/signup_existing.php', {
		phpemail : email
	},
	function(data){
		$('#email-res').html(data);
	}

	);
});
//email auth end

$('#acctname').keyup(function(){
var acctname = $('#acctname').val();
$.post(
	'data/signup_existing.php', {
		phpacctname : acctname
	},
	function(data){
		$('#acctname-res').html(data);
	}

	);
});


$('#acctno').keyup(function(){
var acctno = $('#acctno').val();
$.post(
	'data/signup_existing.php', {
		phpacctno : acctno
	},
	function(data){
		$('#acctno-res').html(data);
	}

	);
});
</script>