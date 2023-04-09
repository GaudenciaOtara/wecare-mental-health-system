<?php
function check_session(){


if (!isset($_SESSION['user'])) {
    
    echo
    "<script>
        alert('you are not logged in ');
        window.location.replace('../doctorlogin.php');                
    </script>";
    // return false;
}
// else {
//     return true;
// }

}
?>