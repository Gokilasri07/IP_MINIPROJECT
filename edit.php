<?php

session_start();

if (!isset($_SESSION['admin'])) {

    header("Location: login.html");
    exit();

}

include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $plan = $_POST['plan'];
    $joining_date = $_POST['joining_date'];

    $sql = "UPDATE members SET

            name='$name',
            email='$email',
            phone='$phone',
            gender='$gender',
            age='$age',
            plan='$plan',
            joining_date='$joining_date'

            WHERE id=$id";

    $conn->query($sql);

    header("Location: members.php");

    exit();

}

$result = $conn->query(
    "SELECT * FROM members WHERE id=$id"
);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Member</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

    <h2>FitZone Admin</h2>

    <a href="dashboard.php">Dashboard</a>

    <a href="members.php">Members</a>

    <a href="logout.php">Logout</a>

</nav>

<div class="form-box">

    <h2>Edit Member</h2>

    <form method="POST">

        <label>Name</label>

        <input
            type="text"
            name="name"
            value="<?php echo $row['name']; ?>"
            required
        >

        <label>Email</label>

        <input
            type="email"
            name="email"
            value="<?php echo $row['email']; ?>"
            required
        >

        <label>Phone</label>

        <input
            type="text"
            name="phone"
            value="<?php echo $row['phone']; ?>"
            required
        >

        <label>Gender</label>

        <select name="gender">

            <option value="Male">Male</option>

            <option value="Female">Female</option>

            <option value="Other">Other</option>

        </select>

        <label>Age</label>

        <input
            type="number"
            name="age"
            value="<?php echo $row['age']; ?>"
            required
        >

        <label>Plan</label>

        <select name="plan">

            <option value="Basic">Basic</option>

            <option value="Standard">Standard</option>

            <option value="Premium">Premium</option>

            <option value="Annual">Annual</option>

        </select>

        <label>Joining Date</label>

        <input
            type="date"
            name="joining_date"
            value="<?php echo $row['joining_date']; ?>"
            required
        >

        <button type="submit" name="update">
            Update
        </button>

    </form>

</div>

</body>

</html>