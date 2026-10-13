<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$plan = $_POST['plan'];
$joining_date = $_POST['joining_date'];

$sql = "INSERT INTO members
(name, email, phone, gender, age, plan, joining_date)
VALUES
('$name', '$email', '$phone', '$gender', '$age', '$plan', '$joining_date')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Member registered successfully!');
        window.location='login.html';
    </script>";
} else {
    echo "Registration failed: " . $conn->error;
}

$conn->close();

?>