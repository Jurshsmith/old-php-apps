<div id = "dash-content"> 
<header style = "font-family: mistral; font-size: 25px;">Welcome <?php  session_start(); echo $_SESSION['username']; ?>, to P_SCRIPT</header>

<hr>

<section id = "status">

<?php
echo 'You Are Yet to Pick A Package<br>Pick One';
?>
</section>
<hr>
<div id = "dialog"></div>
<div id = "packages" class = 'row'>
	<br>
	<div class = "col-sm-offset-1 col-sm-3 package">
		<div class = "packagehead">100</div>
		<br>
		<center><button id = "p-100" class = "btn j-btn">Pick Me</button></center>
		<br><br>
	</div>
	<div class = "col-sm-offset-1 col-sm-3 package">
		<div class = "packagehead">50</div>
		<br>
		<center><button id = "p-50" class = "btn j-btn">Pick Me</button></center>
		<br><br>
	</div>
	<div class = "col-sm-offset-1 col-sm-3 package">
		<div class = "packagehead">25</div>
		<br>
		<center><button id = "p-25" class = "btn j-btn">Pick Me</button></center>
		<br><br>
	</div>

</div>
 </div><!--end of dash content-->
 <script>
$('#sure-box').hide();
				$('#done').hide();

				$('#p-100').click(function(){
			
				$('#dash-content').addClass('blur');
				$('#sure-box').show();
				$('#close-box').click(
					function(){
						$('#dash-content').removeClass('blur');
						$('#sure-box').hide();

					});
				$('#yes').click(
					function(){
						var plan = 100;
						$.post('dashboard/plan.php', {
							phpplan : plan,
						}, function(data){
							$('#dash-content').addClass('blur');
							$('#sure-box').show();
							$('#sure-box').html(data);

							$('#close-box').click(
					function(){
						
						$('#dash-content').removeClass('blur');
						$('#sure-box').hide();
						var user = <?php echo '\''.$_SESSION['username'].'\'';?>;
				$.post('dashboard/dashscript.php', {phpuser : user},function(data){$('#dashscript').html(data);});
				

					});
						
						});
					}
					);
		});
		

</script>

