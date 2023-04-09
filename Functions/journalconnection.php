<?php 
include_once "../../Functions/check_session.php";
// require "../../Patient Pages/Patient Dashboard/index.php";
require "connect.php";

if (isset($_POST['create-journal'])){
$date_time=new DateTime();
$date_time_string=$date_time->format('Y-m-d H:i:s');
$journal_content=$_POST['journal'];

if ($conn->connect_error){
    die('Connection Failed!' .$conn->connect_error);
}
else{
    $statement= $conn->prepare("Insert Into Journals(date_time,journal) 
    values(?,?)");
    $statement->bind_param("ss",$date_time_string,$journal_content);
    $statement->execute();
    // $statement->close();
    // $conn->close();
}
}
?>