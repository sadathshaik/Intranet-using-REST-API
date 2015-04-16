<?php
require './php/connect.php'
echo $_POST['id'];

	/*if(isset($_POST['id'])&&isset($_POST['password']) )
		{
			$id=$_POST['id'];
			$password=$_POST['password'];

			if(!empty($id)&&!empty($password))
			{
				$query="select 'id' from login where id='$id'and password='$password'";
				if($query_run=mysql_query($query))
				{
					$query_num_rows=mysql_num_rows($query);
					if($query_num_rows==0)
					{
						echo "please enter a valid user name and id";
						else if($query_num_rows==1)
						{
							echo "user name and password are correct";
							$user_id=mysql_result($query_run,0,'id' );

						}
					}
				}

			}
			else
			{
				echo"please enter Id and Password";
			}

		}
	else
	{

	}

	
	*/
	

?>