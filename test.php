<?php

include './Functions/connect.php';
if (isset($_POST['submit'])){
  $email=$_POST['email'];
  $username=$_POST['username'];
  $nationalid=$_POST['nationalid'];
  $phonenumber=$_POST['phonenumber'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
  $terms=$_POST['terms'];

// $SELECT= "SELECT email from test Where email = ? Limit 1";
// $INSERT= "INSERT Into test "
  
  if ($conn->connect_error){
      die('Connection Failed!' .$conn->connect_error);
  }
  else{
      $SELECT= "SELECT email from test Where email = ? Limit 1";
      $statement= $conn->prepare("Insert Into test(email,username,nationalid,phonenumber,password,confirmpassword,terms) 
      values(?,?,?,?,?,?,?)");
      $statement->bind_param("ssiisss",$email,$username,$nationalid,$phonenumber,$password,$confirmpassword,$terms);
      $statement->execute();
      // echo"Succesfully Registered!";
      $statement->close();
      $conn->close();
      // echo '.$email';
    echo "
    <script>
      location.replace('./Patient Pages/patientlogin.php');
    </script>
    ";

  }
}


?>

<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sign Up Form</title>
  <link rel="stylesheet" href="./css/test.css">
 </head>
 <body>
  <!-- <h1>WeCare</h1> -->
  <div class="container">
    <div class="form">
    <form 
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    method="POST">
    <h2>Sign Up</h2>
      <input type="text" placeholder="Email" required name="email"><br>
      <input type="text" placeholder="Username" required name="username"><br>
      <input type="number" placeholder="National ID" required name="nationalid"><br>
      <input type="tel" placeholder="Phone Number" required name="phonenumber"><br>

    <div class="password">
    <input type="password" placeholder="Password" id="password" name="password">
    <img src="css/images/eye-close.png" alt=""
     width="20px" height="25px" id="eyeicon"
     onclick= "show('eyeicon' , 'password')"
     >
    </div>
    
    <div class="password">
    <input type="password" placeholder="Confirm Password" id="cpassword" name="confirmpassword">
    <img src="css/images/eye-close.png" alt=""
    onclick= "show('ceyeicon' , 'cpassword')"
    width="20px" 
    height="25px" id="ceyeicon">
    </div> 
    <Label for="Terms">
    <input type="checkbox" class="checkbox" required name="terms">
    <a href="#">
     <p class="terms">I agree to all terms and conditions</p> </a> 
    </Label>
      <button name="submit">SUBMIT</button><br>
    
    
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
    ceyeicon.src= "css/images/eye-close.png";    
  }
  else if(cpassword.type == "password" ){
    cpassword.type ="text";
    ceyeicon.src= "css/images/eye-open.png";

  }
}
  </script>
 </body>
 </html>