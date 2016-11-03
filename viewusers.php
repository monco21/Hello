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
    $sql_query="SELECT*FROM newusers";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $gender = $row['gender'];
        $power = $row['power'];
        echo "<li>{$firstname}   {$lastname}  {$gender}   {$power}</li>>";
    }
    ?>
    </ul>

</body>
</html>