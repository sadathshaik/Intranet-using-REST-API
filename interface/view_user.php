<?php
//$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user", $con);

$sql="SELECT * FROM login";

$result = mysql_query($sql);

echo "<table class='table-striped' border='1'>
<tr class='success'>
<th>Roll</th>
<th>Pass</th>
<th>Name</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr class='success'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
 // echo "<td>" . $row['Age'] . "</td>";
  //echo "<td>" . $row['Hometown'] . "</td>";
  //echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "<input type='button' class='btn btn-primary' value='Close List' id='close_list' onclick='close_list()'>";

mysql_close($con);
?> 