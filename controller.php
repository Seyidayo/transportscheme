<?php session_start();
$_SESSION['price'] = isset($_POST['price']) ? $_POST['price'] : 0;

?>