<?php
$db_name = 'hoteldatabase';
$db_host = 'localhost:3307';
$db_user = 'root';
$db_pass = '';


$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
?>