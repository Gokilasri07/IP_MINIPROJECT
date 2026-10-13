<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit();
}

include "db.php";

$result = $conn->query("SELECT * FROM members ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gym Members</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
    <h2>🏋 FitZone Admin</h2>

    <div>
        <a href="dashboard.php">Dashboard</a>
        <a href="register.html">Add Member</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="section">

    <p class="small-title">MEMBER MANAGEMENT</p>
    <h1>Gym Members</h1>

    <p>
        View, update and delete registered gym members.
    </p>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Plan</th>
            <th>Joining Date</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>

        <tr>

            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['plan']; ?></td>
            <td><?php echo $row['joining_date']; ?></td>

            <td>
                <a class="action"
                   href="edit.php?id=<?php echo $row['id']; ?>">
                   Edit
                </a>
                |
                <a class="action"
                   href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this member?')">
                   Delete
                </a>
            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>