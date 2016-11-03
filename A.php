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
$sql_query1 = "SELECT*FROM marvelmovies WHERE productionStudio LIKE '%Marvel Studio%'";
$sql_query2 = "Select*FROM marvelmovies WHERE yearReleased > '2010' AND productionStudio LIKE '%Marvel Studio%'";
$sql_query3 = "SELECT*FROM marvelmovies WHERE title LIKE '%X-Men%'";
$result = $db->query($sql_query1);
$result1 = $db->query($sql_query);
$result2 = $db->query($sql_query2);
$result3 = $db->query($sql_query3);


        while($row = $result2->fetch_array()) {
            echo " $row[title]$row[productionStudio]----$row[yearReleased]";
            echo "<br>";
        }

while($row = $result3->fetch_array()){
    echo "$row[title]";
    echo "<br>";
}



?>

</body>
</html>
