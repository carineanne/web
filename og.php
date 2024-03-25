<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        a{
            text-decoration: none;
            color: black;
        }
        .u:hover{
            background-color: skyblue;

        }
    </style>
</head>
<body style="background-image: url(bg.jpg);">
    <center>
        <h1>AVOID POUR FLOW</h1>
        <div class="ne"  style="height:230px; width: 200px;background-color:aliceblue;">
    <h2>Login</h2>
    <form action="wat.php" method="POST">
        <label for="username">Username/Email</label><br>
        <input type="text" id="username/email" name="username" required><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="LOGIN" class="u" required>&nbsp;&nbsp;&nbsp;<a href="cre.php">Create account</a>
    </form>
</div>
</center>
</body>
</html>
<?php
include 'conn.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    if ($sql) {
        echo "Login successful!";
    } 
    else {
        echo "Invalid username or password";
    }
}
$con->close();
?>