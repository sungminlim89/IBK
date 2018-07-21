<?php
session_start();

// Get id and password from index.html
$user_id = $_POST['id'];
$user_pw = $_POST['password'];
$_SESSION['id'] = $user_id;
$_SESSION['pw'] = $user_pw;

// Connect with db
$host = "localhost";
$user = "root";
$db_password = "5853j00";
$db_name = "mysql";
$mysqli = mysqli_connect($host, $user, $db_password, $db_name);

$check = "select * from user_info where id='$user_id' and password='$user_pw'";
$res = $mysqli->query($check);
if($res->num_rows != 1)
{
    echo "Check your id or password again.";
    echo "<br>";
    echo "<a href=./login.html>Back To Login Page</a>";
    exit(); 
}  

?>