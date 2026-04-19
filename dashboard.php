<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

$student_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));
$attendance_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM attendance"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Welcome, <?php echo $_SESSION['admin']; ?></h1>

<h2>Total Students: <?php echo $student_count; ?></h2>
<h2>Total Attendance Records: <?php echo $attendance_count; ?></h2>

<a href="students.php">Add Student</a><br><br>

<a href="report.php">View Students</a><br><br>

<a href="attendance.php">Mark Attendance</a><br><br>

<a href="attendance_report.php">Attendance Report</a><br><br>

<a href="logout.php">Logout</a>

</div>

</body>
</html>