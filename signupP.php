<?php
define('DB_SERVER','eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME','bf059db43a1be2');
define('DB_PASSWORD','a1369579');
define('DB_DATABASE','sms');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$db=new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'bf059db43a1be2',
    'a1369579',
    'sms'
);

$selected = mysqli_select_db("sms",$db);

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$typeOfUser = $_POST["typeOfUser"];

$username = stripslashes($username);
$password = stripslashes($password);


mysqli_query("INSERT INTO users (username,password,email,phoneNumber,typeOfUser) VALUES ('$username','$password','$email','$phoneNumber','$typeOfUser')");

echo("User created");

?>

/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 6.12.2016 г.
 * Time: 23:30
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="registerJS.js"></script>
    <link rel="stylesheet" type="text/css" href="registerHtml.css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-fixed-top navbar-absolute navbar-transparent big">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="https://github.com/scorpionhb/groupCS6app/blob/testBranch/LOGO1.png?raw=true"/>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="signupP.php" onsubmit="return myFunction()" method="post">

        <div class="container">
            <label class="username"><b>Enter Username:</b></label>
            <input  type="text" placeholder="enter username:" name="username" required>

            <label class="password"><b>Enter Password:</b></label>
            <input id="password1" type="password" placeholder="enter password:" name="password" required>

            <label class="repeatPassword"><b>Repeat Password:</b></label>
            <input id="password2" type="password" placeholder="repeat password:" name="psw" required>

            <label class="email"><b>Email:</b></label>
            <input  type="email" placeholder="email:" name="email" required>

            <label class="telephone"><b>Phone Number:</b></label>
            <input  type="tel"  placeholder="telephone:" name="phoneNumber">

            <label class="chooseUser"><b>Type of user:</b></label>

            <select class="dropDownForm" name="typeOfUser">
                <option value="choose">Choose:</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>

            <input class="checkboxNKPAG" type="checkbox" checked="checked"> Choose if you want to be NKPAG
<label class="adminValidation"><b>*Requires validation from site admin</b></label>
            <br><input class="checkboxTerms" type="checkbox" checked="checked"> I agree with terms and conditions</br>

            <input class="registerbtn" type="submit" value="Register">
            <button class="cancelbtn" type="button" class="cancelbtn">Cancel</button>
        </div>



    </form>

</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>


</html>
