<?php
include '../Functions/connect.php';
if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $username = $_POST['username'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $confirmpassword = $_POST['confirmpassword'];
  $terms = $_POST['terms'];

  if ($conn->connect_error){
    die('Connection Failed!' .$conn->connect_error);
  }
  else{
    // Check for existing email and phone number
    $check_query = "SELECT * FROM patient WHERE email='$email' OR phonenumber='$phonenumber'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
      // Display error message if email or phone number already exists
      if ($row = mysqli_fetch_assoc($check_result)) {
        if ($row['email'] == $email) {
          echo "<p style='color:red;'>Email already exists</p>";
        }
        if ($row['phonenumber'] == $phonenumber) {
          echo "<p style='color:red;'>Phone number already exists</p>";
        }
      }
    }
    else {
      // Insert new patient details into database
      $statement = $conn->prepare("INSERT INTO patient(email,username,phonenumber,password,confirmpassword,terms,firstname, lastname ,adress) VALUES(?,?,?,?,?,?,?,?,?)");
      $statement->bind_param("ssissssss",$email,$username,$phonenumber,$password,$confirmpassword,$terms ,$firstname , $lastname ,$address);
      $statement->execute();
      echo "<p style='color:green;'>Successfully Registered!</p>";
      $statement->close();
      $conn->close();
      echo "
        <script>
          location.replace('patientlogin.php');
        </script>
      ";
    }
  }
}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Sign Up</title>
  <link rel="stylesheet" href="../css/test.css">
 </head>
 <body>

  <div class="container">
    <div class="form">
    <form 
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    method="POST">
    <h2>Sign Up</h2>
      <input type="email" placeholder="Email" required name="email"><br>
      <input type="text" placeholder="Username" required name="username"><br>
      <input type="text" placeholder="First Name" required name="firstname"><br>
      <input type="text" placeholder="Last Name" required name="lastname"><br>
      <input type="text" placeholder="Address" required name="address"><br>
       <!-- <input type="text" placeholder="National ID" required><br> -->
      <input type="tel" placeholder="Phone Number" required name="phonenumber"><br>

      <div class="password">
    <input type="password" placeholder="Password" id="password" name="password">
    <img src="../css/images/eye-close.png" alt=""
     width="20px" height="25px" id="eyeicon"
     onclick= "show('eyeicon' , 'password')"
     >
    </div>
    
    <div class="password">
    <input type="password" placeholder="Confirm Password" id="cpassword" name="confirmpassword">
    <img src="../css/images/eye-close.png" alt=""
    onclick= "show('ceyeicon' , 'cpassword')"
    width="20px" 
    height="25px" id="ceyeicon">
    </div>

      <Label for="Terms">
    <input type="checkbox" class="checkbox" required name="terms">
    <a href="terms.php">
     <p class="terms">I agree to all terms and conditions</p> </a> 
    </Label>
    <button name="submit">SUBMIT</button><br>
      <p>Already have an acoount? <a href="patientlogin.php">Login</a></p>
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