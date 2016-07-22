<?php
//For Cart
$currency = '$ '; 

$db_username = 'user';
$db_password = 'password';
$db_name = 'eatmesugar';
$db_host = 'localhost';

$shipping_cost      = 5.95; 

//connect to MySql
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
