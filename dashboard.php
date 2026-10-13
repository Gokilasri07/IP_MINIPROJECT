<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit();
}

include "db.php";

$result = $conn->query("SELECT COUNT(*) AS total FROM members");
$row = $result->fetch_assoc();
$total = $row['total'];

$basic = $conn->query("SELECT COUNT(*) AS total FROM members WHERE plan LIKE 'Basic%'")->fetch_assoc()['total'];
$standard = $conn->query("SELECT COUNT(*) AS total FROM members WHERE plan LIKE 'Standard%'")->fetch_assoc()['total'];
$premium = $conn->query("SELECT COUNT(*) AS total FROM members WHERE plan LIKE 'Premium%'")->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FitZone Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
    <h2>🏋 FitZone Admin</h2>

    <div>
        <a href="dashboard.php">Dashboard</a>
        <a href="members.php">Members</a>
        <a href="register.html">Add Member</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="section">

    <p class="small-title">ADMIN PANEL</p>
    <h1>Gym Management Dashboard</h1>

    <p>
        Welcome, <b><?php echo $_SESSION['admin']; ?></b>.
        Manage members and membership records from here.
    </p>

    <div class="dashboard">

        <div class="stat">
            <h3>Total Members</h3>
            <h1><?php echo $total; ?></h1>
        </div>

        <div class="stat">
            <h3>Basic Plans</h3>
            <h1><?php echo $basic; ?></h1>
        </div>

        <div class="stat">
            <h3>Standard Plans</h3>
            <h1><?php echo $standard; ?></h1>
        </div>

        <div class="stat">
            <h3>Premium Plans</h3>
            <h1><?php echo $premium; ?></h1>
        </div>

    </div>

    <br>

    <a class="main-btn" href="members.php">View All Members</a>
    <a class="main-btn" href="register.html">Add New Member</a>

</div>

</body>
</html>