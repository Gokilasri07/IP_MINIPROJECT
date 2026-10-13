<?php

session_start();

if (!isset($_SESSION['admin'])) {

    header("Location: login.html");
    exit();

}

include "db.php";

$id = $_GET['id'];

$conn->query(
    "DELETE FROM members WHERE id=$id"
);

header("Location: members.php");

exit();

?>