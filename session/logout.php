<?php

session_start();

//unset($_SESSION['id']);Poderia usar para validar o login
session_unset();
session_destroy();

header("Location:index.php");

?>