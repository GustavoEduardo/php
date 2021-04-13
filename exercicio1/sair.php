<?php


unset($_SESSION['id']);
session_unset();
session_destroy();

header("Location:logar.php");


?>