<?php
session_start();

unset($_SESSION['clinica']);
header("Location: ../index.php");

?>