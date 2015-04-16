<?php
require 'current_file.php';
  if(isset($_SESSION['user_id'])&&!(empty($_SESSION['user_id'])))
  {
      //header('Location: home.php');
  $var=$_SESSION['user_id'];
  }
  else
  {
    header('Location: errors/error_pleaselogin.php');
    exit();
  }
?>
<html>
  <head>
    <title>
      home
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
     <script src="js/jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
   
    <div  class="container">

         <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="#">MyAccount</a>
        <ul class="nav">
          <li class="active"><a href="home.php">Home</a></li>
          
        </up>
       
         <a href="logout.php" role="button" class="btn btn-inverse" style="text-align:left">Logout</a>
     </div>
  </div>
    <h3>Welcome!</h3>
  <div class="accordion" id="accordion2">
     <div class="accordion-group">
        <div class="accordion-heading">
         
         </a>
         </div>
        </div>


<h2>Upload your files:</h2>

<form action='upload1.php' name='form' method='POST' enctype='multipart/form-data'>
   <input type='file' name='myfile' id='file'><p>
    <input type='hidden' name='id' value='<?php echo $var ?>'>
   <input type='submit' value='upload'>
</form>

<table border="3">
<tr>
<td>

<?php

  /*if ($handle = opendir('directory')) {
     while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {


      
  $thelist .= '<li><a href="directory/'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  
  }*/
?>
<h2>Download Repository:</h2>
<?php 
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user", $con);

$sql="SELECT * FROM Record where id='$var'";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
$v=$row['share'];
//$v=str_replace(' ','_',$v);
$v=str_replace(" ","%20",$v);
  echo "<ul><a href=uploads/".$v.">".$row['share']."</a></ul>";
 
  }



mysql_close($con);?>
</td>
</tr>
</table>
<?php
echo $a;
?>





   <br> 
<div id="footer" style="background-color:skyblue;clear:both;text-align:center;">

Copyright @ Sadath Shaik</div>

</div>
</div>
  </body>




</html>