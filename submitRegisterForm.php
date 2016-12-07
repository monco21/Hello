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

$sql=mysqli_query("SELECT FROM users (username, password, email) WHERE username=$username");

if(mysql_num_rows($sql)>=1)
{
    echo"name already exists";
}
else
{
    $sql = "INSERT INTO users(username,password,email,phoneNumber,typeOfUser) VALUES ('$username','$password','$email','$phoneNumber','$typeOfUser')";
    if(mysqli_query($db,$sql)){
    } else{
        echo "Error: ".$sql."<br>".mysqli_error($db);
    }
}






header("location:userView.php");




?>