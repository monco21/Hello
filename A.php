<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 2.11.2016 г.
 * Time: 15:38
 */
include("dbconnect.php");
$sql_query = "SELECT*FROM marvelmovies";
$result = $db->query($sql_query);


while($row = $result->fetch_array()){
    echo "<p>".$row['title']."</p>";
    echo "<br>";
}



?>

</body>
</html>
