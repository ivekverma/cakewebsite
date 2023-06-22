<?php
session_start();
session_destroy();

// header("location : /cake.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn{
            /* padding:10px;
            font-size:15px;
            width:120px; */
        }
        #btn :hover{
            background-color:gray;
        }
        a{
            border:2px solid black;
            margin-top:20px;
            padding:7px 15px;
            font-size:20px;
            /* width:120px;  */
            border-radius:5px;
            text-decoration:none;
            color:black;
            cursor:pointer;
        }
        a:hover{
            background-color:black;
            color:white;
        }
        p{
            margin-bottom:30px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <p>You are logged Out Go back to Home Page</p>
    <!-- <button type="submit" id="btn"><a href="home.php"> Go Back </a></button> -->
    <a href="home.php">Go Back</a>
</body>
</html>
