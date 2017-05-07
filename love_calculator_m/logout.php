<?php
session_start();
if ($_SESSION['access_check'] != '1') {header('location: index.html');} else {
$_SESSION = array();
header('location:index.html');
}
?>