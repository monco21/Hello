<?php
/**
 * Created by PhpStorm.
 * User: Simeon
 * Date: 5.12.2016 г.
 * Time: 12:52
 */
include ("dbconnect.php");


$connected = mysqli_select_db("sms",$db);


$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$typeOfUser = $_POST["typeOfUser"];

$username = stripslashes($username);
$password = stripslashes($password);


$query = "SELECT * FROM users WHERE username ='$username'";
$result = mysqli_query($query);

$count = mysqli_num_rows($result);

if($count >=1 )
{
    echo"name already exists";
}
else
{
    $sql = "INSERT INTO users(username,password,email,phoneNumber,typeOfUser) VALUES ('$username','$password','$email','$phoneNumber','$typeOfUser')";
    echo "Registration success";
    if(mysqli_query($db,$sql)){
    } else{
        echo "Error: ".$sql."<br>".mysqli_error($db);
    }
}

?>