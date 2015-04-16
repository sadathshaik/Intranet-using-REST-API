<?
$target_path = "sharedfiles/";
$target_path = $target_path . basename( $_FILES['myfile']['name']); 
if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) 
{
    echo "The file ".  basename( $_FILES['myfile']['name']). 
    " has been shared";
   // header('Location: home.php');

} else
{
    echo "There was an error in sharing the file, please try again!";
}

?>