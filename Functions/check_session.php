<?php
function check_session(){


if (!isset($_SESSION['user'])) {
    
    echo
    "<script>
        alert('you are not logged in ');
        window.location.replace('../patientlogin.php');                
    </script>";
    // return false;
}
// else {
//     return true;
// }

}
?>