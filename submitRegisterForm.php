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

$username = stripslashes($username);
$password = stripslashes($password);


/*$sql= mysqli_query("SELECT * FROM users WHERE Username = '$username'");

$result = mysqli_num_rows($sql);*/

$sql_query="SELECT*FROM users WHERE username = '$username'";
$result = $db->query($sql_query);
while($row = $result->fetch_array()) {
    $username = $row['username'];
    echo "<li>{$username} </li>";
}

if($result > 0)
{
    echo"name already exists";
}
else
{
    $sql = "INSERT INTO users(Username,password,email,phoneNumber,typeOfUser) VALUES ('$username','$password','$email','$phoneNumber','$typeOfUser')";
    if(mysqli_query($db,$sql)){
    } else{
        echo "Error: ".$sql."<br>".mysqli_error($db);
    }
}

header("location:userView.php");

?>


