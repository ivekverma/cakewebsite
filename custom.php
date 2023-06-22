
<?php
session_start();
include "dbconnect.php";
$id=$_GET['id'];
$name=$_GET['name'];
$contact=$_GET['contact'];
$date=$_GET['date'];
$time=$_GET['time'];
$address=$_GET['address'];
$flavour=$_GET['flavour'];
$weight=$_GET['weight'];
$colour=$_GET['colour'];
// $occasion=$_GET['occasion'];
$shape=$_GET['shape'];
$message=$_GET['message'];


$flag=false;
$insertflag=false;
$final=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($id=="onlywatch"){
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $address=$_POST['address'];
        $flavour=$_POST['flavour'];
        $weight=$_POST['weight'];
        $colour=$_POST['colour'];
        // $occasion=$_POST['occasion'];
        $shape=$_POST['shape'];
        $message=$_POST['message'];
    }
    // $id=$_GET['id'];
    // echo $id;
    $rs=0;
    if($id=="onlywatch"){
        if($flavour=='Chocolate' || $flavour=='Butterscotch'){
            // echo "rs = 400";
            $rs=300;
        }
        else if($flavour=='Vanilla' || $flavour=='Black Forest'){
            // echo "rs = 600";
            $rs=500;
        }
        else if($flavour=='Strawberry' || $flavour=='Pineapple'){
            // echo " rs = 800";
            $rs=600;
        }
        else{
            $rs=700;
        }
        

        
        if($weight=="1/2kg"){
            $final=$rs+200;
        }
        else if($weight=="1kg"){
            $final=$rs+500;
        }
        else if($weight=="2kg"){
            $final=$rs+1200;
        }
        else if($weight=="3kg"){
            $final=$rs+2000;
        }
        else{
            $final=$rs+4000;
        }


        $flag=true;
        $id="insert";
        // header("location:#para");
    }
    else{
        // echo "aa gaya";
        $sql="INSERT INTO `customcake` (`name`,`contact`,`delivery_date`,`delivery_time`,`address`,`flavour`,`weight`,`colour`,`shape`,`message`) VALUES ('$name','$contact','$date','$time','$address','$flavour','$weight','$colour','$shape','$message')";
        $result=mysqli_query($connect,$sql);
        if($result){
            $insertflag=true;
        }
        else{
            // echo mysqli_error($connect);
            // echo " something wrong";
        }
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
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        fieldset{
            width: 500px;
            /* margin: auto auto; */
            /* margin-top:40px; */
            text-align: center;
            font-size: 20px;
            /* margin-bottom:50px; */
            margin:auto auto;
            background-color: #b2e4f3;
        }

        .container{
            /* margin-top: 20px; */
            /* margin-bottom:60px; */
            padding-top:50px;
            padding-bottom:60px;
            background-color:aqua;
            /* background-color: #d4f8f8; */
            background: linear-gradient(45deg, #dce557, #4eff3c);
        }
        input{
            padding: 10px;
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
            width: 276px;
        }
        .hidden{
            height: 50px;
            background-color: greenyellow;
            font-size: 20px;
            padding-top: 14px;
            

        }
        #para{
            margin-left:30px;
        }
        footer{
            background-color: black;
            color: white;
            /* margin-top: 70px; */
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
        #select{
            font-size: 20px;
    padding: 10px;
    width: 276px;
    /* text-align: center; */
    /* margin: 0px auto; */
    margin-left: 93px;
    margin-right: 96px;
    margin-bottom: 30px;
        }
        #message{
            margin-bottom:20px;
        }
        #para1{
            margin-left:334px;
        }
        #btn10{
            width: 6px;
    font-size: 10px;
    padding: 5px;
    padding-right: 12px;
    margin-left: 20px;
        }
        .detail{
            width: 900px;
    height: 47px;
    border-radius: 5px;
    font-size: 20px;
    margin: 0px auto;
    padding-left: 82px;
    padding-top: 10px;
    /* padding-bottom: 10px; */
    /* background-color: gray; */
    background-color:#f2ff07;;
    margin-bottom: 40px
        }
    </style>
</head>
<body>
    <?php include "nav.php";?>
            


            <?php
            if($flag){
            echo '
                <div class="hidden" >
                   <p id="para"> By viewing your description for cake we analyzed that, total cost for making cake is Rs.'.$final.' ,If you agree to pay mentioned amount then click on the bottom buy now button</p>
                </div>';
                // exit();
            }
            if($insertflag){
            echo '
                <div class="hidden" id="di">
                   <p id="para1" > Your data is submitted successfully and cake will be deliverde as mentioned date and time<button id="btn10" onclick="toggleHide()">X</button></p>
                </div>';
            }
            ?>
            <script>
                function toggleHide(){
                    para=document.getElementById(`para1`);
                    btn=document.getElementById(`btn10`);
                    di=document.getElementById(`di`);{
                        if(para.style.display!=`none`){
                            para.style.display=`none`;
                            di.style.display=`none`;
                        }
                        else{
                            para.style.display=`block`;
                        }
                    }
                }
            </script>

    <div class="container">
    <p class="detail">You can order the customized cake as per your wish, by giving certain details about the cake</p>
        <fieldset>
            <legend>Fill Details</legend>
            <?php
            // if($id=="insert"){
            //     $id="onlywatch";
            // }

            echo '
            <form action="/cake/custom.php?id='.$id.'&& name='.$name.'&& contact='.$contact.'&& date='.$date.'&& time='.$time.'&& address='.$address.'&& flavour='.$flavour.'&& weight='.$weight.'&& colour='.$colour.'&& shape='.$shape.'&& message='.$message.'" method="post">';
            ?>
                <label for="name" class="first">Name</label><br>
                <input type="text"  name="name"><br><br>
                <label for="contact">Contact No.</label><br>
                <input type="number" name="contact"><br><br>
                <label for="date">Delivery Date</label><br>
                <input type="date" name="date" class="date"><br><br>
                <label for="time">Delivery Time</label><br>
                <input type="time" name="time" class="date"><br><br>
                <label for="address">Address</label><br>
                <input type="text" name="address"><br><br>

                <select name="flavour" id="select">
                    <option value="">Cake_Flavour</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Black Forest">Black forest</option>
                    <option value="Pineappla">Pineapple</option>
                    <option value="Truffle">Truffle</option>
                    <option value="Red Velvet">Red Velvet</option>
                    <option value="Mix Fruit">Mix Fruit</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Butterscotch">Butterscotch</option>
                </select>
                <select name="weight" id="select">
                    <option value="">Cake_Weight</option>
                    <option value="1/2kg">1/2Kg</option>
                    <option value="1kg">1Kg</option>
                    <option value="2kg">2Kg</option>
                    <option value="3kg">3Kg</option>
                    <option value="5kg">5Kg</option>
                </select>
                <label for="colour">Cake_Colour</label><br>
                <input type="text" name="colour"><br><br>
                <label for="message" >Message On Cake</label><br>
                <input type="text" name="message" id="message"><br><br>               
                <select name="shape" id="select">
                    <option value="">Shape</option>
                    <option value="circle">Circle</option>
                    <option value="square">Square</option>
                    <option value="traingle">Traingle</option>
                    <option value="double_floor">Double Floor</option>
                    <option value="triple_floor">Triple Floor</option>
                </select>
                
                

                <button >Chech Price</button><br>
                
                <button>Buy Now</button>
            </form>
        </fieldset>
    </div>
    <footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>

</body>
</html>