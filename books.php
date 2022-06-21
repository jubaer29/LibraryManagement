<?php

if(isset($_POST["logout"])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

</head>

<body>

    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            background-color: thistle;

        }

        body {
            width: 100%;
            min-height: 100vh;
        }

        img {
            align-items: center;
            width: 200px;
            height: auto;
            margin: 5px;
            border: double black;
            margin-top: 100px;
            margin-left: 15px;
        }
        .nav {
            padding: 10px 50px;
            display: flex;
            justify-content: flex-end;
        }
        .logout {
            background-color: orange;
            color: green;
            padding: 10px 30px;
            border:none;
            border-radius: 30px;
            cursor: pointer;
        }
    </style>

<form class="nav" method="POST">
    <button type="submit" name="logout" class="logout">Logout</button>
</form>

    <div>
        <a href="#">
            <img src="./pic/history.jpg">
        </a>
        <a href="#">
            <img src="./pic/fiction.jpg">
        </a>
        <a href="#">
            <img src="./pic/food.jpg">
        </a>
        <a href="#">
            <img src="./pic/politics.jpg">
        </a>
        <a href="#">
            <img src="./pic/self.jpg">
        </a>
        <a href="#">
            <img src="./pic/children.png">
        </a>
        <br>
        <br>
        <br>
        <br><br><br><br>

        <h1 style="text-align: center; background-color: antiquewhite; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Thank You!</h1>

    </div>



</body>

</html>