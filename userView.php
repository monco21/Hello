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
    $username = "monco21";
    $sql=mysqli_query("SELECT * FROM users WHERE username=$username");
    $sql_query="SELECT*FROM users";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        $username = $row['username'];

        echo "<li>{$sql} </li>>";
    }
    ?>
</ul>

</body>
</html>