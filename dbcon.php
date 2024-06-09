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
}
   ?>