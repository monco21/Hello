<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 3.11.2016 г.
 * Time: 13:57
 */

include ("db_connect.php");


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$power = $_POST["power"];

$sql = "INSERT INTO newusers(firstname,lastname,gender,power) VALUES ('$firstname','$lastname','$gender','$power')";

if(mysqli_query($db,$sql)){
    } else{
        echo "Error: ".$sql."<br>".mysqli_error($db);
    }
    header("location:viewusers.php");


?>