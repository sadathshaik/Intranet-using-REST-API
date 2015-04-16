<?php
	

	$connect_db=mysql_connect('localhost','root','');
	$select_db=mysql_select_db("user");


	if(!($connect_db) || !($select_db) )
	{
		die(mysql_error());
	}
	else
	{
		echo "connected";
	}

?>