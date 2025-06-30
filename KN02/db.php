<?php
$mysqli = new mysqli("kn02b-db", "root", "root", "kn02");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected to database successfully!";
?>
