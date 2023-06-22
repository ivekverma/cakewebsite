<?php include "dbconnect.php";
session_start();
$alert=false;
// $error=false;
$id=$_GET['cakeid'];
$imagenumber=$_GET['imagenumber'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $delivery_date=$_POST['date'];
    $delivery_time=$_POST['time'];
    $address=$_POST['address'];
    $weight=$_POST['weight'];
    $sql="INSERT INTO `order` (`name`,`contact`,`delivery_date`,`delivery_time`,`address`,`cake_id`,`cake_weight`,`buying_time`) VALUES ('$name','$contact','$delivery_date','$delivery_time','$address','$id','$weight',current_timestamp())";
    $result=mysqli_query($connect,$sql);
    if($result){
        $alert=true;

    }
    else{
        echo mysqli_error($connect);
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
        
        fieldset{
            width: 500px;
            margin: auto auto;
            text-align: center;
            font-size: 20px;
        }

        .container{
            margin-top: 80px;
        }
        input{
            padding: 10px;
            width:350px;
            font-size: 20px;
        }
        legend{
            margin-bottom: 40px;
        }
        label{
            /* color: blue; */
        }
        button{
            padding: 10px 30px;
            font-size: 20px;
            margin-bottom: 35px;
        }
        .date{
            width: 350px;
        }
        
        .another{
            /* border: 2px solid black; */
            display: grid;
            width: 850px;
            height:400px;
            margin: 30px auto;
            grid-template-columns: repeat(2, 2fr);
        }
        .another .first .second{
            width:400px;
            height:400px;
            /* border:2px solid black; */
            /* border:2px solid black; */
            /* border: 2px solid red; */
        }
        .im1{
            width:400px;
            height:400px;
        }
        .space{
            margin-bottom: 40px;
    color: red;
    font-size: 50px;        }
        .also{
            margin-top: -10px;
            display: flex;
            flex-direction: row;
            width: 250px;
            justify-content: space-around;
            /* border: 2px solid black; */
        }
        
        .im2{
            width:100px;
        }
        .fir{
            width: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* border: 2px solid black; */
        }
        .firtext{
            /* margin-left: 30px; */
            margin-top: 5px;
        }
        .sectext{
            margin-top: 0px;
            color:red;
        }
        .pick{
            margin-bottom:20px;
        }
        p{
            margin-bottom: 20px;
    font-size: 28px;
    color: #0e0aff;
    font-weight: bolder;        }
        footer{
            background-color: black;
            color: white;
            margin-top: 70px;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            
        }
        footer p{
            margin-bottom:0px;
        }
        .veg{
            margin-top:30px
        }
        .select{
            width:350px;
            font-size: 20px;
            padding:10px;
            margin-bottom:40px;
            margin-top:15px;
        }
        .hidden{
            height: 50px;
            background-color: greenyellow;
            font-size: 20px;
            padding-top: 14px;
        }
        
        #para{
            margin-left:334px;
        }
        #btn10{
            width: 6px;
    font-size: 10px;
    padding: 5px;
    padding-right: 12px;
    margin-left: 20px;
        }
        .green{
            color: green;
    margin-top: 30px;
    background-color: #d9f7d7;
    width: 100px;
    padding-left: 16px;
    padding-bottom: 3px;
    border-radius: 4px;
        }
        .red{
            color: red;
    margin-top: 30px;
    background-color: #fae2e2;
    width: 100px;
    padding-left: 16px;
    padding-bottom: 3px;
    border-radius: 4px;
        }
        .end{
            color:white;
        }
        #btn{
            background-color:white;
            color:black;
            border-radius:5px;
        }
        #btn:hover{
            background-color:black;
            color:white;
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
   <?PHP include "nav.php";?>

    <?php
    
    if($alert){
        echo '
        <div class="hidden" id="di">
           <p id="para" onclick="toggleHide()"> Your data is submitted successfully and cake will be deliverde as mentioned date and time<button id="btn10" onclick="toggleHide()">X</button></p>
           
           </div>';
        }
?>
<script>
        // let para=document.getElementById(`para1`);      
        function toggleHide(){
            btn=document.getElementById(`btn10`);
            para=document.getElementById(`para`);
            id=document.getElementById(`di`);
            if(para.style.display!=`none`){
            para.style.display=`none`;
            di.style.display=`none`;
            }
            else{
                para.style.display=`block`;
            }
        }
    </script>
        <?php
    $sql="SELECT * FROM `cakedetail` WHERE `cake_id`=$id";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result); 
    // echo $imagenumber;
    if($row['veg']=="veg"){
        $class="green";
    }
    else{
        $class="red";
    }
    echo '
    <div class="another">
        <div class="first">            
            <img src="image/'.$row['flavour'].'/'.$row['flavour'].''.$imagenumber.'.webp" alt="not displayed" class="im1">         
        </div>

        <div class="second">
            <p>'.$row['description'].'</p>
            <h1 class="space">'.$row['half_price'].'</h1>
            <h2 class="pick">Pick an upgrade</h2>
            <div class="also">
            
                <div class="fir">
                    <img src="image/'.$row['flavour'].'/'.$row['flavour'].''.$imagenumber.'.webp" class="im2" alt="">
                    <h3 class="firtext">1 Kg</h3>
                    <h3 class="sectext">'.$row['onekg_price'].'</h3>
                </div>
                <div class="fir">
                    <img src="image/'.$row['flavour'].'/'.$row['flavour'].''.$imagenumber.'.webp"class="im2"  alt="">
                    <h3 class="firtext">2 Kg</h3>
                    <h3 class="sectext">'.$row['twokg_price'].'</h3>
                </div>
            </div>
            <h3 class="'.$class.'">'.$row['veg'].'</h3>
        </div>
        
    </div>';
    ?>


    <div class="container">
        <fieldset>
            <legend>Fill Details</legend>
            <?php
                echo '<form action="/cake/order.php?cakeid='. $id.' && imagenumber='.$imagenumber.'" method="post">';
            ?>
                <label for="name" class="first">Name</label><br>
                <input type="text"  name="name"><br><br>
                <label for="contact">Contact No.</label><br>
                <input type="number" name="contact"><br><br>
                <label for="date">Delivery Date</label><br>
                <input type="date" name="date" class="date"><br><br>
                <label for="time">Delivery Time</label><br>
                <input type="time" name="time" class="date"><br><br>
                <label for="address">DeliveryAddress</label><br>
                <input type="text" name="address"><br><br>
                <select class="select" name="weight" >
                <option value="">Cake Weight</option>
                <option value="1/2Kg">1/2Kg</option>
                <option value="1Kg">1kG</option>
                <option value="2Kg">2Kg</option>
                </select>
                <button id="btn">Buy Now</button>
            </form>
        </fieldset>
    </div>

    

<footer>
    Copyright iCake Shop | All Rights Reserved
</footer>
</body>
</html>