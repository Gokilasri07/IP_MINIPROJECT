<?php

$conn = new mysqli(
    "localhost",
    "root",
    "Nila#115",
    "gym_management"
);

if ($conn->connect_error) {

    die("Database connection failed");

}

?>