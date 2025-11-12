<?php
require __DIR__ . '/../vendor/autoload.php'; // path to autoload.php

try {
    // Connect to MongoDB
    $client = new MongoDB\Client("mongodb://localhost:27017");

    // Select your database and collection
    $database = $client->bms_db;
    $usersCollection = $database->users;

} catch (Exception $e) {
    die("Error connecting to MongoDB: " . $e->getMessage());
}
?>