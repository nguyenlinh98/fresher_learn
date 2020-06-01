<!DOCTYPE html>
<html>
<head>
    <title> FORM CƠ BẢN</title>
</head>
<body>
<form action="" method="post">
    <label>Name:</label>
    <input type="text" name ="name"><br>
    <label> Password:</label>
    <input type="password" name="password">
    <br>
    <input type="submit" name="btn_submit">
</form>
<?php
$name = $_POST['name'];
$pass =$_POST['password'];
if ($_SERVER["REQUEST_METHOD"]=='POST')
{
    // $_REQUEST lay tt $_POST
    echo "  xin chao ban:".$_REQUEST['name'];
}

?>