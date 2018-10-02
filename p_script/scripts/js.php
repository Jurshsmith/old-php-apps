<!--beginning of script-->
<script type = "text/javascript" src = "../resource/jquery.min.js"></script>
<script type = "text/javascript" src = "../resource/jquery.js"></script>
<script type = "text/javascript" src = "../resource/jquery-ui.min.js"></script>
<script type = "text/javascript" src = "../resource/bootstrap.min.js"></script>
<script type = "text/javascript" src = "../resource/bootstrap.js"></script>
<?php include('navjs.php'); ?>
<script> 
// var truepage = 0;
// if (document.location.pathname == "/php%20apps/p_script/index.php")
// 		{
// 			truepage = 1;
// 		}
// if (truepage == 0){
// 	$.get('index.php', function(data){ $('body').html(data);});
// }
 </script>
 <!--functional scripts-->
<script type="text/javascript">
		$(document).ready(
			function(){
				var user = <?php echo '\''.$_SESSION['username'].'\'';?>;
				$.post('dashboard/dashscript.php', {phpuser : user},function(data){$('#dashscript').html(data);});
					});
		</script>
<!--end of script-->