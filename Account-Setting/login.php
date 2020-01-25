<?php

    session_start();
    $username=$_SESSION["username"];
    $password=$_SESSION["password"];

    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"citizen_choice");
    $query="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);



    ?>
