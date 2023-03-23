<?php
$servername = "localhost";
$dbusername = "lloyd";
$dbpassword = "1234";
$databasename = "wecare";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $databasename);

if (!$conn) {

    die();

}

?>