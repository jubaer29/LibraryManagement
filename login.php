  <?php
  require "config.php";
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];




    $query = "select * from usertable where email = '$email' and password = '$pass'";
    $res = mysqli_query($connect, $query);
    if (mysqli_num_rows($res) > 0) {
      
      header("Location: books.php");
      
    } else {
      echo "<script>alert('Wrong credentials')</script>";
    }
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="new css.css">

    <style>
      .signup {
        color: black;
        text-decoration: none;
        background-color: orange;
        padding: 10px 30px;
        border-radius: 30px;
        
      }
      .signup:hover {
        background-color: green;
      }
    </style>
  </head>

  <body>

    <div class="form" style="background: lightseagreen">

      <h1 class="login-here">Login Here</h1>
      <br>


      <form method="POST">
        <input type="email" name="email" placeholder="Enter Your Email Here"> <br>
        <br>
        <input type="password" name="password" placeholder="Enter Your password Here">


        <button class="l-button" type="submit">
          Login
        </button>



        <p>Don't have an account?</p>
        <br>
        <br>
        <br>
        <div>
        
            <a class="signup" href="./reg.php">SignUp Here</a>
          
        </div>

      </form>

    </div>

    <div align="right" style="margin-top: 50px; margin-right: 20px;">
      <img src="./pic/Importance-of-Books.jpg">
    </div>
  </body>

  </html>