<?php
session_start();
include("db.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Admin Login</h1>

<form method="post">

<?php
if(isset($error))
{
    echo "<p style='color:red;'>$error</p>";
}
?>

<input type="text" name="username" placeholder="Enter Username"><br><br>

<input type="password" name="password" placeholder="Enter Password"><br><br>

<input type="submit" name="login" value="Login">

</form>

</div>

</body>
</html>