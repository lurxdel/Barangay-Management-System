<?php
require_once __DIR__ . '/config.php';

$email = 'admin@gmail.com';
$newPlain = 'admin123'; // change this if you prefer another password

$hashed = password_hash($newPlain, PASSWORD_BCRYPT);

$result = $usersCollection->updateOne(
    ['email' => $email],
    ['$set' => ['password' => $hashed]]
);

if ($result->getModifiedCount() > 0) {
    echo "✅ Password updated for {$email}. Login with: {$newPlain}\n";
} else {
    echo "⚠️ No document modified. Matched: " . $result->getMatchedCount() . "\n";
}
?>