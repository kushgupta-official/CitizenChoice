<?php
session_start();
?>
<html><head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ec1.html</title>

 
 


  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap" rel="stylesheet">


 

 



<style> 
  body{
    background-color:rgb(240, 240, 240);
  }
 

 <?php
if (!isset($_SESSION["flag"]))
{ 
include("headerfooter-head.php");
}
else
{
include("after/after-headerfooter-head.php");
}
?>

 


</style>

</head>
<body>


   <?php
if (!isset($_SESSION["flag"]))
{ 
 include("header-body.php");
}
else
{
include("after/after-header-body.php");
}
 ?>
<br><br><br>

     <!--------- Contact Us --------->
    
               
             
             
             
    
    
    
    
    
              <div class="container border shadow p-3 mb-5 bg-white rounded">
      
      <br>
<form class="form-inline " id="postform" action="#" method="POST">
   <p style="font-size: 40px;padding: 30px;font-family:Times New Roman,Times, serif; "><strong>Contact Us</strong></p>
              <p style="font-size: 30px;font-family:Times New Roman,Times, serif;">(Fell free to contact us via form below for more information.)</p>  
             


  <div class="col">
    <div class="col-lg-6">
             <h3>Your Name </h3>
                     <input name="name" class="form-control" autofocus="" required="" type="text">
</div>
<hr>
 

<div class="was-validated col-lg-6">

  <h3>E-mail Id</h3>
   
<input name="email" class="form-control" autofocus="" required="" type="text">
</div>
<hr>
</div>
<hr>
<div class="was-validated mb-3">
    
    <div class="was-validated col-lg-6"><h3>&nbsp;&nbsp;Message</h3></div>


    <textarea name="message" class="form-control is-invalid was-validated" id="validationTextarea" required="" rows="10" cols="110" laceholder="Your Message..."></textarea>
        <br>
    <div class="invalid-feedback">
    <strong> Please enter your message in the above textarea.</strong>
    </div>
  </div>
   <button class="btn btn-outline-danger" id="post" style="margin-bottom: 50px;" type="submit" name="submit" value="post">SUBMIT</button>
</form>
                  
<hr>



   
    <!--  TEXT AREA -->
<form class="was-validated" action="#" method="POST">
  
</form>
        <!--SUBMIT BUTTON -->
      </div>

<?php
if (isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"citizen_choice");
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$query="INSERT INTO `queries` ( `name`, `email`, `query`) VALUES ('$name', '$email', '$message')";
mysqli_query($con,$query);
mysqli_close($con);
}
?>
   
 
 
















     <!--------- Contact Us ends ----------->



  

       <br> <br>    






 <?php include("footer-body.php");?>
<!--footer ends here--->
         





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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script>



</body></html>