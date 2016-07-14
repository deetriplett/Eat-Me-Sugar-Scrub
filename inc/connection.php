<?php
//Connect to the database
$servername= "localhost";

try {
  $db = new PDO('mysql:host= $servername; dbname=database.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection successful!";
} catch (Exception $e) {
  echo "Unable to connect";
  //echo $e->getMessage();
  exit;
}

try {
  results = $db->query("SELECT * FROM products");
  echo "Got the scrubs from the pantry!";
} catch (Exception $e) {
  echo "Unable to get Pantry door opened";
  exit;
}

// $PDO = new PDO("mysql:dbname=dbname;host=localhost");`
