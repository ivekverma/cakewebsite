<?php
session_start();
// echo $_SESSION['username'];
?>
<?php include "dbconnect.php";?>
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

        /* main{
            background-image: url("7.jpg");
            background-repeat: no-repeat;

            background-size: 1536px 1000px;
        } */
        header{
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 50px;
            background-color: orange;
        }
        /* .nav{
            width: 100%;
            background-color: orange;
            height: 50px;
        } */
        .nav li{
            display:inline-block;
            width: 140px;
            height: 50px;
            /* background-color: red; */
            text-align: center;
            justify-content: center;
            padding-top: 13px;
            font-size: 20px;
        }
        .main li{
            position: relative;
            cursor: pointer;
        }
        .option li{
            display: none;
            background-color: aquamarine;
        }
        .main li:hover{
            background-color: aqua;
        }
        .option{
            position: absolute;
            top: 100%;
            left: 0;
        }
        .option li:hover{
            background-color: greenyellow;
        }
        .main li:hover .option li{
            display: block;
            
        }
        a:link{
            color: red ;
            background-color: transparent;
            text-decoration: none;
            
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
            height: 550px;
            
        }
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
        }
        .most  div{
            /* border: 2px solid red; */
            margin: 25px;
            width: 300px;
            height: 370px;
            /* display: grid;
            grid-template-columns: repeat(3 ,2fr); */
        }
        .first{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            transition: transform 0.5s;
        }
        .first:hover{
            transform:translateY(-15px);
        }
        .min_img{
            width: 300px;
            height: 300px;
        }
        .second{
            display: flex;
            width: 1000px;
            border: 2px solid black;
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
            margin-left: 56px;
            margin-top: 20px;
            width: 80px;
            height:80px;
            border-radius: 400px;
        }
        .h2{
            margin-top:10px;
            text-align: center;
        }
        .para{
            text-align:center;
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
            font-size:24px;
            text-align:center;
            margin-top:2px;
        }
        .crate{
            font-size: 25px;
            margin-top: 5px;

        }
        .place{
            /* text-align: center; */
            border-radius:5px;
            padding: 5px;
            background-color: greenyellow;
            margin-top: 5px;
            cursor:pointer;
        }
        .place:hover{
            background-color:red;
        }
        .first span button{
            display:inline-block;
        }
        .atmost{
            display: grid;
            border:2px solid black;
            width: 1520px;            
            margin: auto auto;
            grid-template-columns: repeat(2, 2fr);            
        }
        .hr{
            width: 260px;
    height: 7px;
    background-color: red;
    border-radius: 10px;
    margin: -7px auto;
    margin-bottom: 30px;
        }
        .smallcontainer{
            
            max-width:1000px;
            /* border:2px solid black; */
            margin:50px auto;
            padding-left: 25px;
    padding-right: 25px;
        }
        .smallcontain{
            
            max-width:1200px;
            /* border:2px solid black; */
            margin:50px auto;
            /* padding-left: 25px; */
    /* padding-right: 25px; */
        }
        .row{
            display:flex;
            /* margin:20px auto; */
            align-items:center;
            /* border:2px solid black; */
            flex-wrap:wrap;
            justify-content:space-around;
        }
        .col6{
            flex-basis:30%;
            padding:30px 30px;
            justify-content:center;
            text-align:center;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            transition:transform 0.5s;
            border-radius: 30px
        }
        .col6:hover{
            transform:translateY(-15px);
        }
        .col6 img{
            width:70px;
            height:70px;
        border-radius:50%;  
        margin-top:20px;
              margin-bottom:20px;
        }
        .col6 p{
            color:gray;
        }
        .col5{
            flex-basis:30%;
            padding:30px 30px;
            justify-content:center;
            text-align:center;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            transition:transform 0.5s;
        }
        .col5 img{
            width:300px;
        }
        .col5:hover{
            transform:translateY(-15px);
        }
        
    </style>
</head>
<body>
    <?php include "nav.php";?>
   
    <div class="image">
            <img src="image/wallpaper.jpg" alt="why is not showing"  class="img1">
           
        </div>

    <div class="container">
        <h1 class="h1" id="h1">Best Seller Cakes</h1>
        <hr class="hr">
        <div class="most">
            <?php 

            $sql="SELECT * FROM `bestsale`";
            $result=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo '
            <div class="first">
                <a href="order1.php?cakeid='.$row['cake_id'].'&& imagenumber=9"><img src="image/'.$row['flavour'].'/'.$row['flavour'].'9.webp" alt="" class="min_img"></a>
                <h1 class="cname">'.$row['flavour'].' Cake</h1>
                <span><h1 class="crate">'.$row['half_price'].'</h1></span>
                <a href="order1.php?cakeid='.$row['cake_id'].'&& imagenumber=9"><button class="place">Place Order</button></a>
            </div>';
            }
            ?>                 
        </div>
    </div>

    



    
    <div class="container1" id="section1">
        <h1 class="h1" >Pick A Flavour</h1>
        <hr class="hr">
        <div class="most">
        <?php 

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

    <h1 class="h1">Shop By Price</h1>
        <hr class="hr">
    <div class="smallcontain">
        <div class="row">
            <?php
            for($i=1;$i<=3;$i++){
                if($i==1){
                    $rs="999";
                }
                else if($i==2){
                    $rs="1499";
                }
                else{
                    $rs="1999";
                }
                echo '
                <div class="col5">
                    <a href="flavour1.php?rs='.$rs.'"><img src="image/rs/rs'.$i.'.webp" alt=""></a>
                </div>';
            }
            ?>
            
            
        </div>
    </div>



    <h1 class="h1">Testimonials</h1>
        <hr class="hr">
    <div class="smallcontainer">
        <div class="row">
           
            <div class="col6">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione impedit enim quidem ipsa, maiores dolores assumenda similique iure natus </p>
                <img src="image/vanilla/0.jpeg" alt="mat dikha">
                <h4>VIvek Verma</h4>
            </div>
            <div class="col6">
                <p>Ipsa vel rem repellendus sed, inventore molestiae animi reprehenderit vitae ipsam dolorum ducimus reiciendis impedit in illo assumenda </p>
                <img src="image/vanilla/1.jpg" alt="mat dikha">
                <h4>Vovek Verma</h4>
            </div>
            <div class="col6">
                <p> odit, at exercitationem nam expedita quam dignissimos totam quaerat vitae excepturi fugiat saepe delectus! Numquam omnis sunt autem! Molestiae?</p>
                <img src="image/vanilla/2.jpg" alt="mat dikha">
                <h4>Vovek Verma</h4>
            </div>
        </div>
    </div>
    
<footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>
</body>
</html>