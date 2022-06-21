<?php
require "config.php";
if(isset($_POST['email'])){
$email = $_POST['email'];
$pass = $_POST['psw'];
$conpass = $_POST['psw-repeat'];
if($pass !== $conpass){
  echo "<script>alert('Password does not match')</script>";
}
else {
  $email_check = "SELECT * FROM usertable WHERE email = '$email'";
  $res = mysqli_query($connect, $email_check);
  if(mysqli_num_rows($res) > 0){
    echo "<script>alert('email already exists!')</script>";
  } else {
    $query = "insert into usertable(email, password) values('$email', '$pass')";
    
    mysqli_query($connect, $query);
    echo "<script>alert('Registration successfull!')</script>";
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
    <title>registrtion</title>
</head>
<body>
<form method="POST">
  <div class="container">
    <h1 align="center">Registration</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" min=6 max=32 placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" min=6 max=32 placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
  </div>
</form>
<style>
* {box-sizing: border-box}

.container {
  padding: 16px;
  width: 30%;
  margin: 0 auto;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: orange;
  color: black;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}


.registerbtn:hover {
  background-color: green;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</body>
</html>