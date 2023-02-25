<?php
session_start();
include '../Functions/connect.php';


if (isset($_POST['submit'])){
  echo $_POST['email'];
  echo $_POST['password'];

  $user_query = mysqli_query($conn,"select * from patient where email='{$_POST["email"]}' and password='{$_POST["password"]}'");
  $user_data = mysqli_fetch_assoc($user_query);

  if(empty($user_data)){
    echo "user not found";
  }else{
    $_SESSION["user"] = $user_data;
    echo("
      <script>
        window.location.replace('patientsignup.php');
      </script>
    ");
  }

}

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Login</title>
  <link rel="stylesheet" href="../css/login.css">
 </head>
 <body>

  <div class="container">
    <div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"    >
    <h2>Log In</h2>
      <input type="email" placeholder="Email" required name="email"><br>
      <div class="password">
    <input type="password" placeholder="Password" id="password" name = "password">
    <img src="../css/images/eye-close.png" alt=""
     width="20px" height="25px" id="eyeicon"
     onclick= "show('eyeicon' , 'password')"
     >
    </div>
    
    <!-- <div class="password">
    <input type="password" placeholder="Confirm Password" id="cpassword">
    <img src="../css/images/eye-close.png" alt=""
    onclick= "show('ceyeicon' , 'cpassword')"
    width="20px" 
    height="25px" id="ceyeicon">
    </div> -->
      <button name="submit">SUBMIT</button><br>
     <p><a href="#">Forgot Password?</a></p> 
      <p>Don't have an acoount? <a href="patientsignup.php">Signup</a></p>

    </form>
    </div>
  <div class="color">
    
  </div>

  </div>
  <script>

function show(eyeiconid , passwordid){

  let ceyeicon= document.getElementById(eyeiconid);
  let cpassword= document.getElementById(passwordid);

  if(cpassword.type == "text" ){
    cpassword.type ="password";
    ceyeicon.src= "../css/images/eye-close.png";    
  }
  else if(cpassword.type == "password" ){
    cpassword.type ="text";
    ceyeicon.src= "../css/images/eye-open.png";

  }
}
  </script>
 </body>
 </html>