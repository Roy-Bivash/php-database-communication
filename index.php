<?php
include "./class/DotEnv.php";
include "./class/Communication.php";
$envFile = new DotEnv('./.env');
$envFile->load();
// echo getenv('BDD_DNS');

$database = new Communication();

// echo json_encode($database->QUERY("SELECT * FROM projet WHERE id = ?;", [2176], ["response" => true]));

// echo json_encode($database->QUERY("SELECT * FROM projet WHERE id = ?;", [2171], ["response" => true]));


// // QUERY without parameters :
// $database->QUERY("SELECT id FROM users;");

// // QUERY with parameters :
// $database->QUERY("SELECT id FROM users WHERE login = ?;", ["jean"]);

// // QUERY with no returned values :
// $database->QUERY("UPDATE name FROM users WHERE id = ?;", [202], ["response" => false]);







?>