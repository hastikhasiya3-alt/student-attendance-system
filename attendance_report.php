<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Report</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Attendance Report</h1>

<table border="1" align="center" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Student Name</th>
    <th>Date</th>
    <th>Status</th>
</tr>

<?php

$query = "SELECT * FROM attendance";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['student_name']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>

<?php
}
?>

</table>

<br><br>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>