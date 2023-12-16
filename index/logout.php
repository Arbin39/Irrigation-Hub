<?php

session_start();
unset($_SESSION[EMAIL]);
header("location:login.php")

?>