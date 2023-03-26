<?php

function session_check(){

if (isset($_SESSION['user'])){
Require "../../Functions/connect.php";
// echo $_SESSION['user'];
$user_query = mysqli_query($conn,"select * from admin where email='{$_SESSION["user"]}'");
$user_data = mysqli_fetch_assoc($user_query);
}

else {
    echo "<script>
            location.replace('../adminlogin.php');
        </script>";
}

}


?>
