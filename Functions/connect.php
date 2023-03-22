<?php
$servername="localhost";
$dbusername="lloyd";
$dbpassword="1234";
$databasename="wecare";

$conn=mysqli_connect($servername,$dbusername,$dbpassword,$databasename);

if (!$conn){

    die();

    // If we care and come here thern > what do we do> there is so much we can do as a country 

// $conn = new mysqli ('localhost', 'root', '1234', 'WeCare');

// if ($conn->connect_error){
//     die('Connection Failed!' .$conn->connect_error);
// }
// else{
//     $statement= $conn->prepare("Insert Into test(email,username,nationalid,phonenumber,password,confirmpassword,terms) 
//     values(?,?,?,?,?,?,?)")
//     $statement->bind_param("")
}

?>