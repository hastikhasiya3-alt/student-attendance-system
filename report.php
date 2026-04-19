<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Students</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Student List</h1>

<table border="1" align="center" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll Number</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php

$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['rollno']; ?></td>
    <td><?php echo $row['course']; ?></td>
</tr>
<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

<?php
}
?>

</table>

<br><br>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>