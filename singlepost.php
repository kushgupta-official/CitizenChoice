<?php
session_start();
$postid = $_POST['postid'];
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"citizen_choice");
$q = "SELECT `Time` FROM articles WHERE `postid`='$postid'";
$res=mysqli_query($con,$q);
$row1 = mysqli_fetch_array($res);
$q="UPDATE articles SET Views=Views+1, Time='$row1[0]' WHERE `postid`='$postid'";
$result = mysqli_query($con,$q);
$q="UPDATE all_articles SET Views=Views+1, Time='$row1[0]' WHERE `postid`='$postid'";
$result = mysqli_query($con,$q);
$query = "SELECT * FROM articles WHERE `postid`='$postid'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$username=$row["username"];
mysqli_select_db($con,"citizen_choice_articles");
$q="UPDATE $username SET Views=Views+1, Time='$row1[0]' WHERE `postid`='$postid'";
$result = mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Single Post</title>

 
 


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">


 

 



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


<!--floting post button----->        
                <div class="fixed-bottom" style="margin:0px 10px 20px 0px !important;">
                  
                  <button style="float: right !important; border-radius:10px;" type="button" class="btn btn-info btn-rounded waves-effect"> Post </button>
                </div>
<!--floting post button ends here----->  




<!--jumbotron for large screen -->
 


<!--jumbotron for large screen ends here -->

<!--main content for large screen-->
<div class="hide-in-pc"><br><br><br><br></div>


                   <div class=" hide-in-phone container">
                        <div class="row">

                            
                                    <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px; background-color: white; ">
                  
                                      <h3 style="font-size:2.2vw;padding: 15px;font-family:Times New Roman,Times, serif; " ><?php echo $row["heading"]; ?></h3>
                    <?php  
                                        
                                        if($row['img_src']!="")
                                        {
                                            echo 
                                        '<img class="card-img-top" src="'.$row['img_src'].'"  alt="Card image cap">
                                     '; }
                                        
                                        ?>
                                <!---<img src="https://images.pexels.com/photos/1688504/pexels-photo-1688504.jpeg?cs=srgb&dl=architecture-buildings-burj-khalifa-1688504.jpg&fm=jpg" class="img-rounded" alt="Cinque Terre" width="90%" style="padding: 50px">
                                <!--- <h3 style="font-size: 26px;padding-left: 10px; " >Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading</h5> -->
                                      <p style="font-size:1.2vw; text-align: right;">by: <?php echo $row["username"]; ?></p>
                                      <hr>
                                      <p style="font-size: 1.4vw;padding: 1px;"><?php echo $row["content"]; ?>
                                        <br><br></p>
                                        <?php 
                                        if($row['youtube_link']!="NULL")
                                        {
                                            echo '
                                        <iframe width="100%"  src= '.$row["youtube_link"].' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';}
                                        ?>
                            <!---<iframe width="90%" heght="5vh" src="https://www.youtube.com/embed/rLsimrBoYXc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                    </div>
   
    <br>
    <br>
    <hr>
              


 

                         






                   </div>

                 


                   <hr>

                 </div>



                 <div class=" hide-in-pc container" style="padding: 0px 50px 0px 50px;">
                        <div class="row">

                            
                                    <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px; background-color: white; ">
                  
                                      <h3 style="font-size:6vw;padding: 15px;font-family:Times New Roman,Times, serif; " >tttttttttt<?php echo $row["heading"]; ?></h3>
                    <?php  
                                        
                                        if($row['img_src']!="")
                                        {
                                            echo 
                                        '<img class="card-img-top" src="'.$row['img_src'].'"  alt="Card image cap">
                                     '; }
                                        
                                        ?>
                                <!---<img src="https://images.pexels.com/photos/1688504/pexels-photo-1688504.jpeg?cs=srgb&dl=architecture-buildings-burj-khalifa-1688504.jpg&fm=jpg" class="img-rounded" alt="Cinque Terre" width="90%" style="padding: 50px">
                                <!--- <h3 style="font-size: 26px;padding-left: 10px; " >Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading</h5> -->
                                      <p style="font-size:3.5vw; text-align: right;">by:ttttttt <?php echo $row["username"]; ?></p>
                                      <hr>
                                      <p style="font-size: 3vw;padding: 1px;">ttttttttttttttttttttttttttttttt<?php echo $row["content"]; ?>
                                        <br><br></p>
                                        <?php 
                                        if($row['youtube_link']!="NULL")
                                        {
                                            echo '
                                        <iframe width="100%"  src= '.$row["youtube_link"].' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';}
                                        ?>
                            <!---<iframe width="90%" heght="5vh" src="https://www.youtube.com/embed/rLsimrBoYXc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                    </div>
   
    <br>
    <br>
    <hr>
              


 

                         






                   </div>

                 


                   <hr>

                 </div>

                 

                   













<!-----footer starts here-------> 
  <?php include("footer-body.php");?>

<!--  --footer  ends here ----->




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