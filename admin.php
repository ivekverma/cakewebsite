<?php
    include "dbconnect.php";
    session_start();
    // echo $_SESSION['username'];
    // echo $_SESSION['username'];
    
    
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
            margin:0px;
            padding:0px;
            box-sizing:border-box;
            /* background-color: aquamarine; */
        }
        body{
            background-color:aquamarine;
        }
        .tb th{
          padding: 10px;
          width: 200px;
        }
        .tb td{
          padding: 10px;
        }
        .tb{
          margin-top:190px;
          /* background-color: red; */
          margin: auto auto;
          margin-bottom: 100px;
          background-color:aqua;
          border-color:red;
        }
        .t1{
            text-align:center;
        }
        .right{
            position:absolute;
            right:20px;
            top:40px;
        }
        .right1{
            position:absolute;
            right:200px;
            top:40px;
        }
        a{
            text-decoration:none;
        }
        .btn23{
            width: 150px;
            height: 40px;
            border-radius: 20px;
            margin-bottom: 30px;
            background-color:white;
            /* color:black; */
        }
        .btn23 a{
            color:black;
        } 
        .btn23:hover{
            background-color:black;
            /* color:white; */
            cursor: pointer;
            
        }
        .btn23:hover a{
            color:white;
        }
        .t2{
            margin-top:30px;
            margin-bottom:40px;
        }
        
    </style>
</head>
<body>
    <?php include "nav.php";
    // session_start();
    echo "<h1 class='t1 t2'> Welcome ". $_SESSION['username']." to the Admin Page</h1>";
    ?>
    <!-- <button class="right btn23"><a href="/projectCopy/login1.php">Login</a></button>
    <button class="right1 btn23"><a href="/projectCopy/signup1.php">Sign Up</a></button> -->

    <table border="1" class="tb">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Date</th>
            <th>Time</th>
            <th>Address</th>
            <th>cake Weight</th>
            <th>Cake ID</th>
            <th>Buying Time</th>
            <!-- <th>Cake ID</th> -->
        </tr>
    <?php
    $sql="SELECT * FROM `order`";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){      
    echo '
        <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['contact'].'</td>
            <td>'.$row['delivery_date'].'</td>
            <td>'.$row['delivery_time'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['cake_weight'].'</td>
            <td>'.$row['cake_id'].'</td>
            <td>'.$row['buying_time'].'</td>
        </tr>       
    ';
    }
?>
</table>
  
  

</body>
</html>