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
$sql_query2 = "Select*FROM marvelmovies WHERE yearReleased > '2010'";
$result = $db->query($sql_query1, $sql_query);
$result2 = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo " $row[title] --------- $row[productionStudio]" ;
    echo "<br>";
}



?>

</body>
</html>
