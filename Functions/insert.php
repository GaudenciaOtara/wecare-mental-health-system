<?php
include './Functions/connect.php';
$email=$_POST['email'];
$username=$_POST['username'];
$nationalid=$_POST['nationalid'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$terms=$_POST['terms'];

if ($conn->connect_error){
    die('Connection Failed!' .$conn->connect_error);
}
else{
    $statement= $conn->prepare("Insert Into test(email,username,nationalid,phonenumber,password,confirmpassword,terms) 
    values(?,?,?,?,?,?,?)");
    $statement->bind_param("ssiisss",$email,$username,$nationalid,$phonenumber,$password,$confirmpassword,$terms);
    $statement->execute();
    echo"Succesfully Registered!";
    $statement->close();
    $conn->close();
}


?>