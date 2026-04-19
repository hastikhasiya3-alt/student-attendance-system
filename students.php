<?php
include("db.php");

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $course = $_POST['course'];

    $query = "INSERT INTO students(name, rollno, course)
              VALUES('$name','$rollno','$course')";

    mysqli_query($conn, $query);

    echo "<p style='color:green;'>Student Added Successfully</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="style.css">
</head>
</div>
<body>
    <div class="container">

<h1>Add Student</h1>

<form method="post">

<input type="text" name="name" placeholder="Enter Name"><br><br>

<input type="text" name="rollno" placeholder="Enter Roll Number"><br><br>

<input type="text" name="course" placeholder="Enter Course"><br><br>

<input type="submit" name="save" value="Save Student">

</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>