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
        <a class="brand" href="#">Howdy! <?php echo $var ?></a>
        <ul class="nav">
         
          
        </up>
       <a href="myaccount.php" role="button" class="btn btn-inverse" style="text-align:left">MyAccount</a>
         <a href="logout.php" role="button" class="btn btn-inverse" style="text-align:left">Logout</a>
     </div>
  </div>
    <h3>Slice Of Headlines</h3>
  <div class="accordion" id="accordion2">
     <div class="accordion-group">
        <div class="accordion-heading">
         <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            general info:
         </a>
         </div>
         <div id="collapseOne" class="accordion-body collapse in">
          <div class="accordion-inner">
             you can post any important notice or any remainders etc etc here

            </div>
         </div>
        </div>



<table border="3">
<tr>
<td>

<?php

  if ($handle = opendir('directory')) {


    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {


      
  $thelist .= '<li><a href="directory/'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  
  }
?>
<h2>Download Repository:</h2>
<ul><?php echo $thelist; ?></ul>
</td>
</tr>
</table>

<h2>Share your files:</h2>

<form action='save.php' name='form' method='POST' enctype='multipart/form-data'>
   <input type='file' name='myfile' id='file'><p>
    
   <input type='submit' value='share'>
</form>

<table border="3">
<tr>
<td>

<?php

  if ($handler = opendir('sharedfiles')) {


    while (false !== ($file = readdir($handler))) 
{
      if ($file != "." && $file != "..") {


      
  $thelists .= '<li><a href="sharedfiles/'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handler);
  
  }
?>
<h2>Shared files:</h2>
<ul><?php echo $thelists; ?></ul>
</td>
</tr>
</table>







   <br> 
<div id="footer" style="background-color:skyblue;clear:both;text-align:center;">

Copyright @ Sadath Shaik</div>

</div>
</div>
  </body>




</html>