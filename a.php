<?php
    if(ISSET($_POST['email'])){
    $server="localhost:3305";
    $username="root";
    $password="";
    $db="scraptodb";    
    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con){
        die("connection to this database failes due to ". 
        mysqli_connect_error());

    }
    echo "success connecting to the db";
   
    $fname=$_POST["fname"];
    $mname=$_POST["mname"];
    $lname=$_POST["lname"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $pin=$_POST["pin"];
    $time=$_POST["time"];
    $date=$_POST["date"];
   // $message=[]


//if($_POST["email"]) {


//mail("$email", "Here is the subject line",


//$_POST["email"]. "From: anuragdayma04@gmail.com");


//}    
    $digits = 4;
    $OTP=rand(pow(10, $digits-1), pow(10, $digits)-1);
    echo $OTP;
    $q2 =  "INSERT INTO `scraptodb1`.`scraptodb` (`srno`, `firstname`, `middelname`, `lastname`, `mob`, `address`, `EMAIL`, `areapin`, `stime`, `date`, `dt`) VALUES (NULL, '$fname', '$mname', '$lname', '$phone','$address', '$email', '$pin', '$time', '$date', CURRENT_TIMESTAMP())";
    if($con->query($q2)== true)
    {
        echo"succesfully inserted";
    
    }
    else{
        echo"ERRROR:$q2 <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verify.css">
    <title>scrapto- homepage</title>
    <style>
    .box{
            font-size: 72px;
            text-align: center;
            background-color: red;
            color: white;
            display: none;
        }

        @media only screen and (max-width:300px){
            #box-1{
                display: block;
                background-color: cyan;
            }
        }

        @media only screen and (min-width: 300px) and (max-width:500px) {
            #box-2{
                display: block;
                background-color: blueviolet;
            }
        }

        @media (min-width: 500px) and (max-width:800px) {
            #box-3{
                display: block;
                color: black;
                background-color: yellow;
            }
        }

        @media (min-width: 800px)  {
            #box-4{
                display: block;
                background-color: green;
            }
        }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }
      
      li {
        float: left;
        border-right:1px solid #bbb;
      }
      
      li:last-child {
        border-right: none;
      }
      
      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      li a:hover:not(.active) {
        background-color: #111;
      }
      
      .active {
        background-color: #04AA6D;
      }

      </style>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="headbar">
            <div class="head-logo ">
                <div class="logo"></div>
                
            </div>
            <div class="word-logo ">
                
            </div>

            <a href="verify.php">
            <div  class="pickup">
                <img src="pickup.jpeg" height="150px" width="325px" alt="">
            </div></a>
            
        </div>
        <ul>
            <li><a class="" href="scrapto.php">Home</a></li>
            <li><a href="whyus.php">Why us?</a></li>
            <li><a class="active" href="verify1.php">schedule</a></li>
        
            <li><a href="rates.php">scrap rates</a></li>
            <li style="float:right"><a href="sendotp.php">admin</a></li>
          </ul>
    </header>
    

    <div class="alert alert-success my-0" role="alert">
  <strong>success!</strong> doorstep pickup of scrap will arrive on the submitted date. 
    </div>
    <div class="show">
        <div class="verify">
            <form method="post">
                
    <footer>
        <div class="foot-panal ">
        <a href="http://127.0.0.1:5500/scrapto.html">back to Home</a>
        </div>
        <div class="foot-panal2">
            <ul>
                <h3>get known</h3>
                <a>selling scrap</a>
                <a>buy</a>
                <a>location</a>
            </ul>
            <ul>
                <h3>selling process</h3>
                <a>1.open webpage</a>
                <a>2.sellect catagry</a>
                <a>3.singin</a>
                <a>4.sell scrap</a>
            </ul>
            </div>
            <div class="media">
                
            <a href="https://wa.me/+919309200244?text=hey%20i%20want%20an%20doorstep%20pickup%20of%20my%20scrap" ><div class="whatsapp shit"></div></a>
   
                <a href="#"> <div class="facebook shit"></div></a>
                <a href="#"><div class="twitter shit"></div></a>
                <a href="#"><div class="insta shit"></div></a>
                
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        
</body>
</html>