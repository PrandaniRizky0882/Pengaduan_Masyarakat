<?php 

session_start(); // memulai session
session_destroy(); // menghentikan session


header("Location: index.php");
?>