<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "1234";
$databasename = "wecare";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $databasename);

if (!$conn) {

    die();

}

?>