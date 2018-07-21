<?php

require './login.php';

$id = $_POST['id'];
$pw = $_POST['password'];

if($id == null || $pw == null)
{
    echo "Blank is found";
    echo "<br>";
    echo "<a href=./signUp.html>Back To Sign Up Page</a>";
    exit();
}

$check = "select * from user_info where id='$id'";
$res = $mysqli->query($check);

if($res->num_rows == 1)
{
    echo "중복된 ID";
    echo "<br>";
    echo "<a href=./signUp.html>Back To Sign Up Page</a>";
    exit(); 
}

$insert = "insert into user_info (id, password) values ('$id', '$pw')";
$res = $mysqli->query($insert);
if($res)
{
    echo "Sign up success";
}
?>