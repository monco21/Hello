<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 2.11.2016 г.
 * Time: 15:38
 */

$sql_query = "SELECT*FROM marvelmovies WHERE superpower LIKE '%aser%'";
$result = $db->query($sql_query);



?>
</p>
</body>
</html>
