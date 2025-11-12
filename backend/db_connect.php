<?php
require '../vendor/autoload.php'; // load MongoDB library

use MongoDB\Client;

// connect to MongoDB (default local)
$mongoClient = new Client("mongodb://localhost:27017");

// select your database
$db = $mongoClient->bms_db;

?>
