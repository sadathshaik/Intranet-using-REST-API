<?
$file=$_FILES['myfile']['name'];
$user=$_POST['id'];
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['myfile']['name']); 
if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) 
{
    echo "The file ".  basename( $_FILES['myfile']['name']). 
    " has been uploaded";
   // header('Location: home.php');

} else
{
    echo "There was an error uploading the file, please try again!";
}


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
	$query_insert="insert into Record(id,share) values('$user','$file')";
       // $update_query="update Record set $share='$file' where $share='$file'; 
    if(mysql_query($query_insert))
    {
    	echo "<p style:'color:'green'' >
    		<b>ADDED SUCCESS FULLY</b></p>";
    }
    else
    {
       // mysql_query($update_query)
    	echo " <p style='colour:red'>not added</p>";
    }

}


mysql_close($con);
?>