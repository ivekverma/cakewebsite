<?php
session_start();
include "dbconnect.php";
$flag=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $query=$_POST['concern'];

    $sql="INSERT INTO `query` (`name`,`contact`,`query`,`query_time`) VALUES ('$name','$contact','$query',current_timestamp())";
    $result=mysqli_query($connect,$sql);
    if($result){
        $flag=true;
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
            box-sizing:border-box;
        }
        fieldset{
            width:500px;
            margin:auto auto;
            text-align:center;
            background-color:#bcfdfd;
            padding: 40px;
            border-radius:5px;
        }
        input{
            color: blue;
    font-size: 20px;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border-radius: 10px;
        }
        label{
            color:red;
            font-size:20px;
        }
        .para{
            font-size:20px;
            padding: 50px;
    text-align: center;
        }
        .body{
            background-color:#48ffd859;
        }
        footer{
            background-color: black;
            color: white;
            margin-top: 70px;
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
        .container{
            min-width:548px;
        }
        #concern{
            height:250px;
        }
        .btn{
            background-color:#48ffd859;
            padding:10px;
            width: 115px;
    border-radius: 7px;
    margin-top: 10px;
    cursor:pointer;
        }
        .btn:hover{
            background-color:aqua;
            color:black;
        }
        legend{
            font-size:30px;
        }
        .concern{
        width: 270px;
        border: 2px solid black;
        border-radius: 10px;
        margin-bottom: 20px;
        font-size: 20px;
        }
        .hidden{
            height: 50px;
            background-color: greenyellow;
            font-size: 20px;
            padding-top: 14px;
            

        }
        #para1{
            margin-left:370px;
        }
    </style>
</head>
<body>
    <div class="body">
    <?php include "nav.php";
    if($flag){
        echo '
                <div class="hidden" id="di">
                   <p id="para1" > Your concern is submitted successfully and Owner of the Cake Shop contact you as soon as possible.<button id="btn10" onclick="toggleHide()">X</button></p>
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
    <p class="para">If You have any queries than please fill this form so that we try to resolve your problem</p>
    <div class="container">
        <fieldset>
            <legend>Your Issue</legend>
            <form action="/cake/contact.php" method="post">
                <label for="name">Name</label><br>
                <input type="text" name="name"><br>
                <label for="contact">Contact</label><br>
                <input type="number" name="contact"><br>
                <!-- <input type="text"> -->
                <label for="">Your Concern</label><br>
               
                <textarea name="concern" id="" cols="50" rows="10" class="concern"></textarea><br>
                <button type="submit" class="btn">Submit</button>
            </form>
        </fieldset>
        </div>
<footer>
    <p>Copyright iCake Shop | All Rights Reserved</p>
</footer>
</body>
</html>
    </div>
    