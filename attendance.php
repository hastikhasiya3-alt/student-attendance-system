<?php
include("db.php");

if(isset($_POST['save']))
{
    $student_name = $_POST['student_name'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $query = "INSERT INTO attendance(student_name, date, status)
              VALUES('$student_name','$date','$status')";

    mysqli_query($conn, $query);

    echo "<p style='color:green;'>Attendance Saved Successfully</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance</title>
<link rel="stylesheet" href="style.css">
</head>
</div>
<body>
    <div class="container">

<h1>Mark Attendance</h1>

<form method="post">

<input type="text" name="student_name" placeholder="Enter Student Name"><br><br>

<input type="date" name="date"><br><br>

<select name="status">
<option value="Present">Present</option>
<option value="Absent">Absent</option>
</select><br><br>

<input type="submit" name="save" value="Save Attendance">

</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>