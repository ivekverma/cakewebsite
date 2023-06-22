<?php

include "dbconnect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    

    if(($_POST['name']=="vivek") && ($_POST['pass']=="vivek@5678")){
        session_start();
        $_SESSION['logedin']=true;
        $_SESSION['username']="Vivek";
       
        // echo "your data is true";
        // echo $_SESSION['username'];
        header("location: index.php?signinsuccess=true ");
    }
    else{
        header("location: index.php?signinsuccess=false");
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
         fieldset{
            width: 500px;
            margin: auto auto;
            text-align: center;
            font-size: 20px;
            border:2px solid black;
        }

        .container{
            min-height: 640px;
    padding-top: 60px;
    
    background: linear-gradient(45deg, #34fef3, #4beb52,#da49cb);
        }
        input{
            padding: 10px;
            font-size: 20px;
            border:2px solid black;
        }
        legend{
            margin-bottom: 40px;
        }
        label{
            /* color: blue; */
        }
        #btn0{
            padding: 10px 30px;
            font-size: 20px;
            margin-bottom: 35px;
            border:2px solid black;
            border-radius:5px;
            background-color:white;
            color:black;
            cursor:pointer;
        }
        #btn0:hover{
            /* background-color:black; */
            background-color:black;
            color:white;
        }
        .date{
            width: 276px;
        }
        footer{
            background-color: black;
            color: white;
            /* margin-top: 70px; */
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php include "nav.php"?>
    <div class="container">
        <fieldset>
            <legend>Login</legend>
            <form action="/cake/login.php" method="post">
                <label for="name" class="first">Username</label><br>
                <input type="text"  name="name"><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="pass"><br><br>
                
                <button id="btn0">Login</button>
            </form>
        </fieldset>
    </div>
    <footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>
</body>
</html>