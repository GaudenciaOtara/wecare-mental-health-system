<?php 
session_start();

// function logging_out(){
    if(isset($_SESSION['user'])){

        
        unset($_SESSION['user']);       
        session_destroy();
        echo " 
    <script>
        alert('you will be logged out');
        window.location.replace('../doctorlogin.php');                
    </script>
    
    ";
    }
    else {
        unset($_SESSION['user']);       
        session_destroy();
        echo "
    <script>
        alert('you will be logged out');
        window.location.replace('../doctorlogin.php');                                            
    </script>
    
    ";
    }

    // header("Location: ../Patient Pages/Patient Dashboard/index.php");

    echo "
    <script>
        alert('you will be logged out');
        window.location.replace('../doctorlogin.php');                                             
    </script>
    ";
// }


?>