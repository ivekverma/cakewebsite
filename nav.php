

<?php include "dbconnect.php" ?>
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
        html{
            scroll-behavior:smooth;
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
        .main li:hover  li a{
            color:red;
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
            /* color: red ; */
            background-color: transparent;
            text-decoration: none;
            
        }
        /* a:hover{
            color:red;
        } */
        button:hover{
            background-color: aqua;
            color: white;
            
        }
        .end{
            /* position: absolute;
            right: 20px;
            top: 0px; */
            padding: 12px;
            font-size: 20px;
            margin-right: 20px;
            background-color:white;
            color:black;
            /* background-color: green; */
            
            
        }
        /* .end:hover{
            background-color:black;
            color:white;
        } */
        .success{
            height:40px;
            font-size:17px;
            background-color:rgb(212,237,218);
            padding:10px;
        }
        .failure{
            height:40px;
            font-size:17px;
            background-color:rgb(248,215,218);
            padding:10px;
        }
        #logo{
            color:brown;
            font-weight:bolder;
        }      
        #logo:hover{
            background-color:orange;
        }
       
        
     
    </style>
</head>
<body>
    <main>
        <header>
            <div class="nav">
                <ul class="main">
                    <li id="logo">iCake Shop</li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="flavour2.php">Flavour</a>
                        <ul class="option">
                        <?php
                        $sql="SELECT * FROM `flavour`";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                        // echo $row['flavour'];
                        $flavourid=$row['flavour_id'];
                        echo '
                        <li><a href="flavour.php?flavourid='.$row['flavour_id'].'">'.$row['flavour'].'</li></a>
                           ';
                        }

                        ?>
                        </ul>
                    </li>
                    <li><a href="custom.php?id=onlywatch&& name=&& contact=&& date=&& time=&& address=&& flavour=&& weight=&& colour=&& shape=&& message=">Custom Cake</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <?php
                    if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                        echo '
                        <li><a href="admin.php">View Order</a></li>
                        <li><a href="customdetail.php">Custom Order</a></li>';
                    }
                    ?>
                    
                </ul>
                
            </div>
            <div>
            <?php
            if(!isset($_SESSION['logedin']) || $_SESSION['logedin']==false){
                echo '<button class="end"><a href="login.php">Admin Login</a></button>';
            }
                    
                
                    if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                        echo '
                        <button class="end"><a href="logout.php">Admin Logout</a></button>';
                    }
                ?>
            </div>
        </header>
       
        
    </main>
    <!-- <?php
    
    
    if( isset($_SESSION['signinsuccess']) && $_GET['signinsuccess']=="true"){
        echo '    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> you are loged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        
    }
    else{
        echo '    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Success!</strong> you are loged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    
    ?> -->
  
  
  <script>
        // let para=document.getElementById(`para`);      
        function toggleHide(){
            btn=document.getElementById(`btn`);
            para=document.getElementById(`para`);
            if(para.style.display!=`none`){
            para.style.display=`none`;
            }
            else{
                para.style.display=`block`;
            }
        }
    </script>
   

    


</body>
</html>