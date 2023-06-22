<?php include "dbconnect.php";

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
            height: 400px;
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
            font-size:24px;
            text-align:center;
            margin-top:10px;
        }
        .ccname{
            margin-top:5px;
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
            margin-top:30px;
        }
        .green{
            color:green;
        }
        .red{
            color:red;
        }
    </style>
</head>
<body>
    <?php include "nav.php";
//     $id=$_GET['flavourid'];
//    $sql="SELECT * FROM `flavour` WHERE `flavour_id`=$id";
//         $result=mysqli_query($connect,$sql);
//         $row=mysqli_fetch_assoc($result);
// echo '
//    <h1 class="center">Flavour : '.$row['flavour'].' cake</h1>';

   ?>

    <div class="container1">
        <h1 class="h1">Select Cake</h1>
        <div class="most">
        <?php 
            $rs=$_GET['rs'];
            for($i=1;$i<=9;$i++){            
            $sql="SELECT * FROM `flavour` WHERE `flavour_id`='$i'";
            $result=mysqli_query($connect,$sql);
            $row=mysqli_fetch_assoc($result);
            // echo $row['flavour'];
            
            $name=$row['flavour'];
            if($rs==1999){
                $sql1="SELECT * FROM `cakedetail` WHERE `half_price`>='$rs' AND `flavour`='$name' ";
            }
            else{
                $sql1="SELECT * FROM `cakedetail` WHERE `half_price`<='$rs' AND `flavour`='$name' ";
            }
            $result1=mysqli_query($connect,$sql1);
            $in=0;
            while($row1=mysqli_fetch_assoc($result1)){
                // echo $row['flavour'];
                $in=$in+1;
                $cakeid=$row1['cake_id'];
                $desc=substr($row1['description'],0,19);
                if($row1['veg']=="veg"){
                    $class="green";
                }
                else{
                    $class="red";
                }
                echo '
            <div class="first">
                <a href="order.php?cakeid='. $cakeid.' && imagenumber='.$in.' "><img src="image/'.$row['flavour'].'/'.$row['flavour'].''.$in.'.webp" alt="" class="min_img" ></a>
                <h1 class="cname">'.$desc.' ...</h1>
                <h3 class="ccname">Rs. '.$row1['half_price'].' </h3>  
                <h3 class="'.$class.'">'.$row1['veg'].' </h3>  

                
            </div>';            
            }
            }
        ?>          
            
        </div>       
    </div>


        
    

   

<footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>
</body>
</html>