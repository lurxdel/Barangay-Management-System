<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $residentId = new MongoDB\BSON\ObjectId($_POST["resident_id"]);

    // Load the resident
    $resident = $residentsCollection->findOne(["_id" => $residentId]);

    if (!$resident) {
        die("Resident not found!");
    }

    // Delete the user login
    $usersCollection->deleteOne(["_id" => $resident->user_id]);

    // Delete the resident record
    $residentsCollection->deleteOne(["_id" => $residentId]);

    header("Location: ../pages/admin/admin_rec_residents.php?deleted=1");
    exit;
}
?>
