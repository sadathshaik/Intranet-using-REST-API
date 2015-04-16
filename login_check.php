<?php
	require './php/connect.php';
	require 'current_file.php';
	//require 'public_userid.php';
	
	if(isset($_POST['id'])&&isset($_POST['password']) )
		{
			$id=$_POST['id'];
			$password=$_POST['password'];
			if($id=="'or''='" || $password=="'or''='")
			{
				header('Location: hack.php');
			}
			else
			{

			if(!empty($id)&&!empty($password))
			{
				$query="select 'id' from login where id='".mysql_real_escape_string($id)."'and password='".mysql_real_escape_string($password)."'";
				if($query_run=mysql_query($query))
				{
					$query_num_rows=mysql_num_rows($query_run);
					if($query_num_rows==0)
					{
						echo "please enter a valid user name and id \n";
					}
					else if($query_num_rows==1)
					{
							//echo "user name and password are correct";
							//echo mysql_result($query_run,1,'id');
							$user_id=$id;
							$public_userid=$id;
							$_SESSION['user_id']=$user_id;
							//while($arr= mysql_fetch_array($query,MYSQL_BOTH))
							
							//{
								//$user_id=$arr['id'];
								echo $user_id;
							//}

							header('Location: home.php');
							//echo $user_id;

					}
				}

				

			}
			else
			{
				echo"please enter Id and Password";
			}
		}

		}
		else
		{

		}

?>