<?php
if(ISSET($_POST['email'])){
    
    $server="localhost:3306";
    $username="root";
    $password="";
    $db="scraptodb1";    
    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con){
        die("connection to this database failes due to ". 
        mysqli_connect_error());

    }
    echo "success connecting to the db";
    $email=$_POST["email"];
    $sql=  "select * from `scraptodb1`.`admin`WHERE email='$email'";
    $rs=mysqli_query($con,$sql)  or die (mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        $otp=rand(111111,999999);
        echo "email found".$otp;
        $sql=  "update `scraptodb1`.`admin`set otp ='$otp' WHERE email='$email'";
        $rs=mysqli_query($con,$sql)  or die (mysqli_error($con));
        header("location:.php?msg=plese check your email and veriy OTP");
    }
    else{
        echo"email not found";
        header("location:sendotperr.php?msg=invalid OTP... plz check again your Email !");
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
            <div class="head-logo border">
                <div class="logo"></div>
                
            </div>
            <div class="word-logo ">
                
            </div>

            <a href="verify1.php">
            <div  class="pickup border" >
                <img src="pickup.jpeg" height="150px" width="325px" alt="">
 
            </div></a>
            
        </div>
        <ul>
            <li><a class="" href="scrapto.php">Home</a></li>
            <li><a href="whyus.php">Why us?</a></li>
            <li><a class="" href="verify1.php">schedule</a></li>
            <li><a href="rates.php">scrap rates</a></li>
            <li style="float:right"><a class="active" href="sendotp.php">admin</a></li>
          </ul>
    </header>
    

    <div class="alert alert-success my-0 md-0 " role="alert">
    <?php if(isset($_REQUEST['msg']))
    echo $_REQUEST['msg'];
    ?></div>
    <div class="show">
        <div class="verify center">
            <form method="post">
                <h1>Enter OTP</h1>
      <div class="input-box">
             <input type="INT" name="OTP" id="OTP" placeholder="OTP" required></div>
             
                <button type="submit" class="button button-dark"><strong>VERIFY OTP</strong></button>
            </form>
        </div>
        </div>
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