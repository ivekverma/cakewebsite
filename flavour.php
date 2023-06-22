<?php include "dbconnect.php";
session_start();
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
     
       body{
        /* background-color:pink; */
       }
       
        button:hover{
            background-color: red;
            color: white;
        }
        .end{
            /* position: absolute;
            right: 20px;
            top: 0px; */
            padding: 12px;
            font-size: 20px;margin-right: 20px;
            /* background-color: green; */
            
        }
        .img1 {
            width: 100%;
            height: 700px;
            
        }
        .h1{
            /* text-align: center; */
            /* margin-bottom: 30px; */
            margin-top: 30px;
            color:green;
            margin-left:274px;
        }
        

        .most{
            /* border: 2px solid black; */
            display: grid;
            width: 1000px;
            
            margin: auto auto;
            grid-template-columns: repeat(3, 2fr);
        }
        .most  div{
            /* border: 2px solid red; */
            margin: 25px;
            width: 300px;
            height: 428px;
            /* display: grid;
            grid-template-columns: repeat(3 ,2fr); */
        }
        /* .first:hover{
            top:10px;
        }
        .most:hover{
            top:10px;
        } */
        .first{
            transition: transform 0.5s;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
        }
        .first:hover{
        transform: translateY(-15px);
        }

        .min_img{
            width: 297px;
            height: 300px;
        }
        .second{
            display: flex;
            width: 1000px;
            /* border: 2px solid black; */
            justify-content: space-around;
            /* margin-bottom: 50px; */
            margin: auto auto;
        }
        .secondflex{
            width: 200px;
            height: 250px;
            border:2px solid black;
        }
        .testimg{
            /* margin: 5px auto; */
            margin-left: 45px;
            margin-top: 10px;
            width: 100px;
            border-radius: 400px;
        }
        .h2{
            /* text-align: center; */
            color:red;
            margin-left:274px;
            margin-top:30px;
        }
        footer{
            background-color: black;
            color: white;
            margin-top: 70px;
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
        .cname{
            text-align: center;
    margin-top: 10px;
    color: #8f8989;
    font-size: 20px
        }
        .ccname{
            margin-top: 5px;
    font-size: 25px;
    margin-bottom: 5px;
        }
        .crate{
            font-size: 25px;
            margin-top: 5px;

        }
        .place{
            /* text-align: center; */

            padding: 5px;
            background-color: greenyellow;
            margin-top: 5px;
        }
        .center{
            text-align:center;
            padding-top:30px;
        }
        .green{
            color:green;
        }
        .red{
            color:red;
        }
        .last{
            color: #0828fa;
    background-color: #e1ddf7;
    padding: 3px;
    width: 200px;
    margin-top: 6px;
    margin-left: 0px;
    padding-left: 10px;
    border-radius: 3px;
    font-size: 14px;
        }
        /* .color{
            background-color: #e8c2ea;
                } */
    </style>
</head>
<body>
    <?php include "nav.php";?>
    <div class="color">
    <?php
    $id=$_GET['flavourid'];
   $sql="SELECT * FROM `flavour` WHERE `flavour_id`=$id";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($result);
echo '
   <h1 class="center">Flavour : '.$row['flavour'].' cake</h1>';

   ?>

    <div class="container1">
        <h1 class="h1">Select Cake</h1>
        <div class="most">
        <?php 
            $id=$_GET['flavourid'];
            $sql="SELECT * FROM `cakedetail` WHERE `flavour_id`=$id ";
            $result=mysqli_query($connect,$sql);
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                // echo $row['flavour'];
                $i=$i+1;
                $cakeid=$row['cake_id'];
                $desc=substr($row['description'],0,19);
                if($row['veg']=="veg"){
                    $class="green";
                }
                else{
                    $class="red";
                }
                echo '
            <div class="first">
                <a href="order.php?cakeid='. $cakeid.' && imagenumber='.$i.' "><img src="image/'.$row['flavour'].'/'.$row['flavour'].''.$i.'.webp" alt="" class="min_img" ></a>
                <h1 class="cname">'.$desc.' ...</h1>
                <h3 class="ccname">Rs. '.$row['half_price'].' </h3>  
                <h3 class="'.$class.'">'.$row['veg'].' </h3> 
                <h3 class="last"> Same Day Delivery</h3> 

                
            </div>';            
            }
        ?>          
            
        </div>       
    </div>


        
    

        </div>

<footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>
</body>
</html>