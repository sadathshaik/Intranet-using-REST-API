<?php
$id=$_GET['id'];
$password=$_GET['password'];

//echo $name."<br>"
echo $password;

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user", $con);

if(!$con)
{
	echo "NOT CONNECTED";
}
else
{
	$query_insert="insert into login(id,password) values('$id','$password')";
    if(mysql_query($query_insert))
    {
    	echo "<p style:'color:'green'' >
    		<b>ADDED SUCCESS FULLY</b></p>";
    }
    else
    {
    	echo " <p style='colour:red'>not added</p>";
    }

}


mysql_close($con);
?> 