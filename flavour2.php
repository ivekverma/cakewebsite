<?php
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
         .h1{
            text-align: center;
            margin-bottom: 10px;
            margin-top: 50px;
        }
        

        .most{
            /* border: 2px solid black; */
            display: grid;
            width: 1000px;
            
            margin: auto auto;
            grid-template-columns: repeat(3, 2fr);
            /* border:2px solid black; */
        }
        .first{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            transition: transform 0.5s;
            margin:20px;
        }
        .first:hover{
            transform:translateY(-15px);
        }
        .cname{
            font-size:24px;
            text-align:center;
            margin-top:2px;
            margin-bottom:7px;
        }
        .hr{
            width: 260px;
    height: 7px;
    background-color: red;
    border-radius: 10px;
    margin: -7px auto;
    margin-bottom: 50px;
        }
        .min_img{
            width: 314px;
            height: 314px;
        }
        footer{
            background-color: black;
            color: white;
            margin-top: 70px;
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    include "nav.php";
    ?>
<div class="container1">

        <h1 class="h1" >Pick A Flavour</h1>
        <hr class="hr">
        <div class="most">
        <?php 
            include "dbconnect.php";
            $sql="SELECT * FROM `flavour`";
            $result=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_assoc($result)){
                // echo $row['flavour'];
                $flavourid=$row['flavour_id'];
                echo '
            <div class="first">
                <a href="flavour.php?flavourid='. $flavourid.'"><img src="image/'.$row['flavour'].'/'.$row['flavour'].'.webp" alt="" class="min_img" ></a>
                <h1 class="cname">'.$row['flavour'].' Cake</h1>
                
                
            </div>';
            }
        ?>
            <!-- <div class="first">
                <img src="8.jpg" alt="" class="min_img">

            </div> -->
            
        </div>

       
    </div>
    <footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>
</body>
</html>