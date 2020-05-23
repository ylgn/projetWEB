<?php
$db_type = 'mysql';
$host = 'localhost';
$db_name ='site_master';
$dsn = $db_type.':host='.$host.';dbname='.$db_name;
$username = 'master';
$password = 'master';
$connect= new PDO($dsn, $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>