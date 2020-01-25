<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="categories.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Document</title>
    <style>
      .square{
   
    
    border-width:2px;

  
    border-color:rgb(177, 197, 197);
  }



      .headline
{
    color:#0C95D8;
    font-family: calibri;
    font-weight:10px;
}

.para
{
    color:#847F7F;
    font-size: 1.2vw;
    
}
   
 .headline{
     font-size: 2.9vw;
}
.card-text {
     font-size: 1.6vw;
}

@media screen and (max-width: 500px)
{
    .headline{
         font-size: 3.4vw;
    }
    .para{
        font-size: 2.6vw;
    }
    .card-text {
     font-size: 2vw;
}
}

  
  
<?php
if (!isset($_SESSION["flag"]))
{ 
include("headerfooter-head.php");
}
else
{
include("after-headerfooter-head-categories.php");
}
?>
    </style>

</head>
<body style="background-color:white">


  <?php
if (!isset($_SESSION["flag"]))
{ 
 include("header-body.php");
}
else
{
include("after-header-body-categories.php");
}
 ?>


  <br><br>

    <?php
       $con= mysqli_connect("localhost","root","");
       mysqli_select_db($con,"citizen_choice");
       $query="Select * from articles where category = 'Sports' ORDER BY Time DESC";
         include 'categories_display.php';
    ?>





<!--js for sidebar menu in phone-->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
   
  document.body.style.backgroundColor = "rgba(0,0,0,0.2)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  
  document.body.style.backgroundColor = "white";
}
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>