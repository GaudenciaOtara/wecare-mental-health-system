<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community Login</title>
  <link rel="stylesheet" href="../css/login.css">
 </head>
 <body>

  <div class="container">
    <div class="form">
    <form action="">
    <h2>Log In</h2>
      <input type="email" placeholder="Email" required><br>

      <div class="password">
    <input type="password" placeholder="Password" id="password">
    <img src="../css/images/eye-close.png" alt=""
     width="20px" height="25px" id="eyeicon"
     onclick= "show('eyeicon' , 'password')"
     >
    </div>
    
    <div class="password">
    <input type="password" placeholder="Confirm Password" id="cpassword">
    <img src="../css/images/eye-close.png" alt=""
    onclick= "show('ceyeicon' , 'cpassword')"
    width="20px" 
    height="25px" id="ceyeicon">
    </div>

      <button>SUBMIT</button><br>
     <p><a href="#">Forgot Password?</a></p> 
      <p>Don't have an acoount? <a href="communitysignup.php">Signup</a></p>

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