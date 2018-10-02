
			<?php
			
			include('../data/conn.php');
			include('dashfunctions.php');

			$thisUser =  $_POST['phpuser'];

			if (activeMember($dbc, $thisUser) == 1 and assigned($dbc, $thisUser) == 0)
				{
						assign($dbc, $thisUser);
						
				}
				if (confirmed($dbc,$thisUser) == 0 and activeMember($dbc, $thisUser) == 1 and assigned($dbc, $thisUser) == 0 and userAvailable($dbc, $thisUser) == 0)
				{
						echo 'Waiting to be assigned<br>';
						
				}
			if (activeMember($dbc, $thisUser) == 1 and assigned($dbc, $thisUser) == 1)
			{
					
					if (confirmed($dbc, $thisUser) == 0){

						displayPayTo($dbc, $thisUser);
						

					}

				
					if(confirmed($dbc, $thisUser) == 1 and payerComplete($dbc, $thisUser) >= 1)
					{
						displayPayers($dbc, $thisUser);
						
						
						
					}
					if (confirmed($dbc, $thisUser) == 1 and payerComplete($dbc, $thisUser) == 0){
						displayNoPayers();
					}
					// if (confirmed($dbc, $thisUser) == 1 and payerComplete($dbc, $thisUser) == 2 and done($dbc, $thisUser) == 2)
					// {
					// 	deactivate($dbc, $thisUser);
					// }
			}
			if (activeMember($dbc, $thisUser) == 0)
			{
				include('nonactive.php');//enables you to be on the active list
			}

			

			?>
<?php 
 echo payerComplete($dbc, $thisUser).'<br>';
  echo assigned($dbc, $thisUser).'<br>';
 echo confirmed($dbc, $thisUser).'<br>';
 echo activeMember($dbc, $thisUser).'<br>';
 echo done($dbc, $thisUser).'<br>';
 echo $thisUser;
?>