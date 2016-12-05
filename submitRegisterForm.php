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

$sql = "SELECT * FROM tbl_Freelancers WHERE username = '".$username."'";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>=1)//You are mixing the mysql and mysqli, change this line of code
{
    echo"name already exists";
}
else {

    $sql = "INSERT INTO users(username,password,email,phoneNumber,typeOfUser) VALUES ('$username','$password','$email','$phoneNumber','$typeOfUser')";

    if (mysqli_query($db, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
header("location:userView.php");




?>