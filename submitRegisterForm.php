<?php
/**
 * Created by PhpStorm.
 * User: Simeon
 * Date: 5.12.2016 г.
 * Time: 12:52
 */
include ("dbconnect.php");


$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$typeOfUser = $_POST["typeOfUser"];

$sql = "INSERT INTO users(username,password,email,phoneNumber,typeOfUser) VALUES ('$username','$password','$email','$phoneNumber','$typeOfUser')";

if(mysqli_query($db,$sql)){
} else{
    echo "Error: ".$sql."<br>".mysqli_error($db);
}
header("location:userView.php");




?>