<?php
// Include config class
include "config.php";

// database initialization
$db = new database;

// Authentication Check
$auth = new auth;
$auth->check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>This is homepage</h1>
    <?php
    $db->connect();

    ?>
</body>
</html>