<?php
//Connect to the database

try {
  $db = new PDO("mysql:host=localhost;dbname=eatmesugar;port=3306", "user", "password");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
  echo "Unable to connect";
  exit;
}

try {
  $results = $db->query("SELECT * FROM products");
} catch (Exception $e) {
  echo "Unable to get Pantry door opened";
  exit;
}

$products = $results->fetchAll(PDO::FETCH_ASSOC);
