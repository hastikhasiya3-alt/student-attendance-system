<?php
include("db.php");

$id = $_GET['id'];

$query = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $course = $_POST['course'];

    $update = "UPDATE students 
               SET name='$name', rollno='$rollno', course='$course'
               WHERE id='$id'";

    mysqli_query($conn, $update);

    header("Location: report.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Student</h1>

<form method="post">

<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

<input type="text" name="rollno" value="<?php echo $row['rollno']; ?>"><br><br>

<input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>

<input type="submit" name="update" value="Update Student">

</form>

<br>
<a href="report.php">Back</a>

</body>
</html>