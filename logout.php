<?php
require 'current_file.php';

session_destroy();

header('Location: loginform.php');

?>