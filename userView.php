<? include ("dbconnect.php"); ?>

<!DOCTUPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My form</title>
</head>
<body>
<h1>User List</h1>
<p>The following users have registered on the site:</p>
<ul>
    <?
    $sql_query="SELECT*FROM users";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        $username = $row['username1'];
        $password = $row['password1'];
        $email = $_POST["email1"];
        $phoneNumber = $_POST["phoneNumber"];
        $typeOfUser = $_POST["typeOfUser"];
        echo "<li>{$username}   {$password}  {$email}   {$phoneNumber} {$typeOFUser}</li>";
    }
    ?>
</ul>

</body>
</html>