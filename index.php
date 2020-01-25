<?php
session_start();
if (isset($_SESSION["flag"]))
{
header("location:after.php");
}
else
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"citizen_choice");
$query1="SELECT * FROM articles WHERE category='Science' ORDER BY Time DESC";
$query2="SELECT * FROM articles WHERE category='Technology' ORDER BY Time DESC";
$query3="SELECT * FROM articles WHERE category='Sports' ORDER BY Time DESC";
$query4="SELECT * FROM articles WHERE category='Entertainment' ORDER BY Time DESC";
$query5="SELECT * FROM articles WHERE category='Politics' ORDER BY Time DESC";

$disp1=array();
$disp2=array();
$disp3=array();
$disp4=array();
$disp5=array();

$disp1=mysqli_fetch_all(mysqli_query($con,$query1),MYSQLI_BOTH);
$disp2=mysqli_fetch_all(mysqli_query($con,$query2),MYSQLI_BOTH);
$disp3=mysqli_fetch_all(mysqli_query($con,$query3),MYSQLI_BOTH);
$disp4=mysqli_fetch_all(mysqli_query($con,$query4),MYSQLI_BOTH);
$disp5=mysqli_fetch_all(mysqli_query($con,$query5),MYSQLI_BOTH);

$j=0;
$i=0;
$k=0;
$l=0;
$m=0;
}
?>




<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Citizen Choice Beta</title>

 
 


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">


 

 



<style> 
  body{
    background-color:rgb(240, 240, 240);
  } 

                                                                       /*styling for the grid in pc*/       
  .bigbox
{  display:grid;
   grid-template-columns:repeat(3, minmax(90px,1fr));
   min-height:250px;
   column-gap:5px;
   background-color:white;
  
}
.box1
{   
    height:50%;
    
}
.box2
{
    height:50%;
}
.box3
{
    height:30%;
}
.box4
{
    height:70%;
}
.box5
{
    height:60%;
}
.box6
{
    height:40%;
}
 
.img-cl
{
    display:block;
    height:100%;
    width:100%;
   font-size: 1vw !important;
    padding: 2%;
    
}    .con {
  position: relative;

  
}

.con img {vertical-align: middle;}

.con .content {
  position: absolute;
  bottom: 2%;
   /* Fallback color */
 
   
  width: 100%;
  height: 15%;
  padding: 10px;
  text-align: center;
  font-size:2vw;
  background-color: rgba(0,0,0,0.8);
   height:3.2vw ;
   color: white 
}                                                                       /*styling for the grid in pc ends here*/
 


 @media screen and(max-width: 500px)
 {
  .btm-heading{
    font-size: 1.7vw;
  }
  .btm-content{
    font-size:1.5vw; 
  }
 }
 @media screen and (min-width: 501px)
 {
   .btm-heading{
    font-size: 1.2vw;
  }
  .btm-content{
    font-size:1.09vw; 
  }
 }

/*----header and footer style----*/

 <?php include("headerfooter-head.php");?>

 

 


</style>

</head>
<body>
                                             


<!--header -->

<?php include("header-body.php");?>



  

     
        


 


<!--floting post button----->        
                <div class="fixed-bottom" style="margin:0px 10px 20px 0px !important;">
                  
                  <button style="float: right !important; border-radius:10px;" type="button" class="btn btn-info btn-rounded waves-effect"  data-toggle="modal" data-target="#myModal"> Post </button>
                </div>
<!--floting post button ends here----->

<!--Grid for phone-->
     

                 <div class="hide-in-pc">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active" >
                      <img  style="height: 300px" class="d-block w-100" src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2017/03/brindisi_italy/16854131-3-eng-GB/Brindisi_Italy.jpg" alt="First slide">
                       <div class="carousel-caption d-none d-block" style="background-color: rgba(0,0,0,0.45);">
                    <h5><?php echo "<td>".$disp1["heading"]."</td>"; ?></h5>
                           <p>Subheading Subheading Subheading</p>
                  </div>
                </div>

                    <div class="carousel-item">
                      <img style="height: 300px" class="d-block w-100" src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Second slide">
                      <div class="carousel-caption d-none d-block" style="background-color: rgba(0,0,0,0.45);">
                    <h5><?php echo "<td>".$disp2["heading"]."</td>"; ?></h5>
                    <p>Subheading Subheading Subheading</p>
                  </div>
                    </div>

                       
                    <div class="carousel-item">
                      <img style="height: 300px" class="d-block w-100" src="https://resize.indiatvnews.com/en/resize/gallery/835_-/2018/06/cover-1529558610.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-block" style="background-color: rgba(0,0,0,0.45);">
                    <h5><?php echo "<td>".$disp3["heading"]."</td>"; ?></h5>
                    <p>Subheading Subheading Subheading</p>
                  </div>
                    </div>
                  
                     <div class="carousel-item">
                      <a href="fhgh"><img style="height: 300px" class="d-block w-100" src="https://cdn.neow.in/news/images/uploaded/2018/03/1522313750_learn_to_code_new_story.jpg" alt="Third slide"></a>
                      <div class="carousel-caption d-none d-block" style="background-color: rgba(0,0,0,0.45);">
                    <h5><?php echo "<td>".$disp4["heading"]."</td>"; ?></h5>
                    <p>Subheading Subheading Subheading</p>
                  </div>
                    </div>
                       
                    <div class="carousel-item">
                        <img style="height: 300px" class="d-block w-100" src="https://cdn.vox-cdn.com/thumbor/CDwac_nCcPBl-4rmi1BKg6rhtRA=/0x0:3975x2640/1200x800/filters:focal(1670x1002:2306x1638)/cdn.vox-cdn.com/uploads/chorus_image/image/58641295/913011958.jpg.0.jpg" alt="...">
                         <div class="carousel-caption d-none d-block" style="background-color: rgba(0,0,0,0.45);">
                    <h5><?php echo "<td>".$disp5["heading"]."</td>"; ?></h5>
                    <p>Subheading Subheading Subheading</p>
                  </div>
                </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

              </div>
<!--grid for phone end here-->



<!--Grid or pc-->
             

<div class="hide-in-phone bigbox" style="padding:0% 1% 0% 1%;">
                       
                        <div class="col1">
                                  <div class="con box1">
                                      <img class="img-cl" src="1.jpg" alt="Nature" style="padding-right: 0px;padding-left: 0px;padding-top: 6px;">
                                     
                                      <div class="content" style="background-color: rgba(0,0,0,0.5);" >
                                        <h4 style="font-size:1em;color: white; ">POLITICS</h4>
                                      </div>
                                  </div>
                            
                             <div class=" box2" style="background-color: black;">
                                 
                                  <div class="">
                                        <span><h4 style="font-size:2vw; color: white; padding: 10%;  ">U.K. updates advisory for British nationals to be "vigilant" in J&K </h4></span>
                                      </div>
                              </div>
                        </div>
                        
                        <div class="col2">
                                 <div class="con box3">
                                      <img class="img-cl" src="4.jpg" alt="Nature" style="padding-right: 0px;padding-top: 6px;padding-left: 0px;">
                                      <div class="content" style="background-color: rgba(0,0,0,0.5);" >
                                        <h4 style="font-size:1em;color: white; ">ENTERTAINMENT</h4>
                                      </div>
                                  </div>
                                       
                                <div class="con box4">
                                  <img class="img-cl" src="3.jpg" alt="flower" style="padding-top: 3px;padding-left: 0px;padding-right: 0px;">
                                      <div class="content" style="background-color: rgba(0,0,0,0.5);" >
                                        <h4 style="font-size:1em; color: white;">SPORTS</h4>
                                      </div>
                              </div>
                        </div>
                                
                        <div class="col3">
                                 <div class="con box5">
                                      <img class="img-cl" src="1.jpg" alt="Nature" style="padding-top: 6px;padding-left: 0px;padding-right: 0px;">
                                      <div class="content" style="background-color: rgba(0,0,0,0.5);" >
                                        <h4 style="font-size:1em;color: white; ">TECHNOLOGY</h4>
                                      </div>
                                  </div>
                                       
                              <div class=" box6" style="background-color: black;padding-top: 0px;">
                                 
                                  <div class="">
                                        <span><h4 style="font-size:2vw; color: white; padding: 10%; ">Unnao rape case; CBI questions Kuldeep Singh urges Unnao survivor's family</h4></span>
                                      </div>
                              </div>
                        </div>
                </div> 


    
<!--Grid for pc ends here-->



<br><br>

<!--jumbotron for large screen -->
 

                <div class="jumbotron " >
                  <div class="container-fluid" style="  background-color: #1F2833 ">

                 
                   <p><h1 style="color:#66FCF1;text-align: center;padding-top: 10px;font-family:'Quicksand', sans-serif;">Citizen Choice</h1>
                  <h3 style="color: white;padding: 27px 7px 15px 27px;font-family:'Quicksand', sans-serif;text-align: center;"> It is a new social media platform. It's a platform commited to serve any one who want to experss his/her views in their respective field of interest</h3> </p>
                    
                  </div>
                  
                </div>


<!--jumbotron for large screen ends here -->





<!--jumbotron for small screen not done yet -->
<!--jumbotron for small screen -->







<!--main content for both the screens screen-->


                   <div class=" container-fluid">
                        <div class="row">
                            <div class="col-md-9 blog-main">

                                       <div class="card-group">
                                              <div class="card" style="height: 330px;">
   
                                                    <div class="card-body" >
                                                          <h6 class="card-header bg-dark" style="color: white;font-size:24px;height: 77px;overflow: hidden;"><?php echo $disp1[$j]["heading"]; ?></h6>
                    
                                                          <p class="card-text" style="height:145px;overflow: hidden; margin-top: 8px !important; font-size:14px; ">  <?php echo $disp1[$j]["content"]; ?> </p>  
                                                   <div style="float: left"><?php echo '<form method="POST" action="singlepost.php">
                                                  <button class="btn btn-outline-danger btn-sm  ;" id="postid" type="submit"              
                                                         value= '.$disp1[$j]["postid"].' name="postid" style="margin-bottom: 50px;">Continue</button>
                                                               </form> ' ;
                                                    ?>
                                                  </div>    
                                                          
                                                        <p class="card-text " style="float: right"><small class="text-muted"><span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw "><?php echo $disp1[$j]["Views"];?> </span></span>&nbsp&nbsp&nbsp&nbsp 
                                                              
                                                              by:-<?php echo $disp1[$j]["username"];                                  

                                                               if($j<(sizeof($disp1)))
                                                                  
                                                                   { $j=$j+1;} ?></small></p>

                                                     </div>
                                              </div>
                                              <div class="card" style="height: 330px;">
   
                                                     <div class="card-body" >
                                                           <h6 class="card-header bg-dark" style="color: white;font-size: 24px;height: 77px;overflow: hidden;"><?php echo $disp2[$i]["heading"]; ?></h6>

                                   
                                                           <p class="card-text" style="height:145px;overflow: hidden; margin-top: 8px !important; font-size: 14px"><?php echo $disp2[$i]["content"]; ?></p>
                                                    <div style="float: left"><?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp2[$i]["postid"].' name="postid" style="margin-bottom: 50px;">Continue</button>
                             </form> ' ;
                                                    ?>    
                                                  </div>




                                                    <p class="card-text " style="float: right"><small class="text-muted"><span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw "><?php echo $disp2[$i]["Views"];?></span></span>&nbsp&nbsp&nbsp&nbsp  <?php echo $disp2[$i]["username"];
                                                               if ($i<sizeof($disp2))
                                                               { $i=$i+1; }?></small></p>
                                                      </div>
                                              </div>                       
                                         </div>  
                                          <br>
                                          <iframe class="hide-in-phone frame" style="margin-left: 90px; width:60vw; height:30vw" src="https://www.youtube.com/embed/WWtEuNuNzQo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                              </div>
                          
<!-----sidebar (This bar goes down in small screen)-->
                            <aside class="col-md-3 blog-sidebar" style="padding-right:20px !important; ">
                                                 <div class=" mb-3 bg-light rounded" style="padding: 10px;">
                                                     <h4 class="font-italic btm-heading "  >About</h4>
                                                     

                                                     <p class="mb-0 btm-content"><em><strong><span style="color: deepskyblue;">Citizen Choice</span></strong></em> is a new social media platform. It's a platform commited to serve any one who want to experss his/her views in their respective field of interest</p>
                                                 </div>


                                            
                                                 <div class="row   border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="padding: 5px;">
                                                      <div class="col-8  d-flex flex-column ">
                                                
                                                            <h5 class="mb-0 btm-heading " style="font-size:15px ;height:35px ;overflow: hidden;" >
                                                              <?php echo $disp3[$k]["heading"]; ?></h5>       
                                                            <span style="height:44px; overflow: hidden;">
                                                              

                                                            <p class="card-text mb-auto btm-content" style="font-size: 13px;"><?php echo $disp3[$k]["content"]; 
                                                               ?></p>
                                                            </span>
                                                   <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp3[$k]["postid"].' name="postid" style=" text-decoration: none; ">Continue</button>
                             </form> ' ; if($k<sizeof($disp3))
                                                                { $k=$k+1; } 
                                                    ?>                                                       
													</div>
                                                       
                                                       <div class="col-4"  > 

                                                        
                                                        
                                                        <img class="iimg" src="<?php echo $disp1[$j]["img_src"]; ?>" style="margin-top:15px">

                                                                     
                                                       </div>
                                                 </div>
                                                 <div class="row   border rounded overflow-hidden flex-md-row mb-4 shadow-sm  position-relative" style="padding: 5px;">
                                                      <div class="col-8   d-flex flex-column   ">
                                                
                                                            <h5 class="mb-0 btm-heading"   style="font-size:15px ;height:35px ;overflow: hidden;" ><?php echo 
                                                            $disp4[$l]["heading"]; ?></h5>       
                                                            <span style="height:44px; overflow: hidden;">
                                                            <p class="card-text mb-auto btm-content" style="font-size: 13px;" ><?php echo $disp4[$l]["content"]; 
                                                                ?></p>
                                                            </span>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp4[$l]["postid"].' name="postid" style="text-decoration:none;">Continue</button>
                             </form> ' ;if($l<sizeof($disp4))
                                                                   { $l=$l+1;}
                                                    ?>                                                                                                              </div>
                                                       
                                                       <div class="col-4"  > 

                                                        
                                                        
                                                        <img class="iimg" src="<?php echo $disp1[$j]["img_src"]; ?>" style="margin-top:15px">

                                                                     
                                                       </div>
                                                 </div>
                                                 <div class="row   border rounded overflow-hidden flex-md-row mb-4 shadow-sm  position-relative" style="padding: 5px;">
                                                      <div class="col-8   d-flex flex-column   ">
                                                
                                                            <h5 class="mb-0 btm-heading"  style="font-size:15px ;height:35px ;overflow: hidden;" >
                                                              <?php echo $disp5[$m]["heading"]; ?></h5>       
                                                            <span style="height:44px; overflow: hidden;">
                                                            <p class="card-text mb-auto btm-content" style="font-size: 13px;"><?php echo $disp5[$m]["content"];
                                                                 
                                                                ?></p>
                                                            </span>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp5[$m]["postid"].' name="postid" style="text-decoration:none;">Continue</button>
                             </form> ' ;if ($m<sizeof($disp5))
                                                               { $m=$m+1; }
                                                    ?>                                                                                                              </div>
                                                       
                                                       <div class="col-4"  > 

                                                        
                                                        
                                                        <img class="iimg" src="<?php echo $disp1[$j]["img_src"]; ?>" style="margin-top:1vw">

                                                                     
                                                       </div>
                                                 </div>
                                                 <div class="row   border rounded overflow-hidden flex-md-row mb-4 shadow-sm  position-relative" style="padding: 5px;">
                                                      <div class="col-8   d-flex flex-column   ">
                                                
                                                            <h5 class="mb-0 btm-heading"  style="font-size:15px ;height:35px ;overflow: hidden;"  >
                                                              <?php echo $disp1[$j]["heading"];?></h5>       
                                                            <span style="height:44px; overflow: hidden;">
                                                            <p class="card-text mb-auto btm-content" style="font-size: 13px;" ><?php echo $disp1[$j]["content"]; 
                                                               ?></p>
                                                            </span>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp1[$j]["postid"].' name="postid" style="text-decoration:none;">Continue</button>
                             </form> ' ;
                                          if($j<(sizeof($disp1)))
                                                                   { $j=$j+1;}           ?>                                                                                                              </div>
                                                       
                                                       <div class="col-4"  > 

                                                        
                                                        
                                                        <img class="iimg" src="<?php echo $disp1[$j]["img_src"]; ?>" style="margin-top:15px">

                                                                     
                                                       </div>
                                                 </div>


                                              





                                      


                 
                                </aside>
<!----sidebar ends  -->

 

                        </div>






                   </div>
<!--main content for both the screens screen ends here-->




                   <hr>


<!--content below the youtube frame only for large screen-->

                   <div class="hide-in-phone">
                   <div class=" container-fluid" style="padding:1px 70px 1px 70px; ">
                    <div class="row">
                      <div class="col-7" >
                        <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px; background-color: white; ">
                          <h3 style="font-size:1.7vw;padding-top: 25px;padding-left: 10px;" ><?php echo $disp2[$i]["heading"]; ?></h3>
                          <h3 style="font-size:1.2vw;padding-top: 15px;padding-left: 10px;font-family: didot,serif;" >Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading</h3>
                          <p style="font-size: 17px; text-align: right;"><span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw "><?php echo $disp2[$i]["Views"]; ?></span></span>&nbsp&nbsp&nbsp&nbsp <?php echo $disp2[$i]["username"]; ?></p>
                          <hr>
                          <p style="font-size:0.95vw;padding-right: 20px;"><?php echo $disp2[$i]["content"]; 
                               if($i<(sizeof($disp2)))
                                 { $i=$i+1;}?>
                            <br><br>
                          </p>
                          
                        </div>
                         
                      </div>
                      <div class="col-5 no-gutters">












                        <div class="col">
                            
                          
                          
                            <div class="col-12" >
                                   <h3 style="font-size: 1.6vw;overflow: hidden;height: 60px;"><?php echo $disp4[$l]["heading"]; ?></h3>
                                   
                                   <p style="font-size: 1vw;overflow: hidden;height:12vw ;"><?php echo $disp4[$l]["content"]; ?></p>
                              
                                   <?php echo '<form method="POST" action="singlepost.php">
                                                   <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" value= '.$disp4[$l]["postid"].' name="postid" style="font-size:17px;float: right !important; text-decoration: none; ">Continue</button>
                                               </form> ' ;?>
                                           <p style="font-size: 1.3vw;"><?php echo $disp4[$l]["username"];
                                           ?>&nbsp&nbsp&nbsp&nbsp <span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw "><?php echo $disp4[$l]["Views"]; 
                                                          if($l<(sizeof($disp5)))
                               { $l=$l+1;}?> </span></span>
                                                
                                           </p>
                                                      <hr>
                            </div>


                           <div class="col-12">
                            <h3 style="font-size: 1.6vw;overflow: hidden;height: 60px;"><?php echo $disp3[$k]["heading"]; ?></h3>
                            <p style="font-size: 1vw;overflow: hidden;height: 12vw;"><?php echo $disp3[$k]["content"]; ?></p>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp3[$k]["postid"].' name="postid" style="font-size:17px;float: right !important; text-decoration: none;">Continue</button>
                             </form> ' ;
                                                    ?>                                                                                 
                                                      <p style="font-size: 1.3vw;"><?php echo $disp3[$k]["username"];
                                if($k<sizeof($disp3))
                                { $k=$k+1; }?>&nbsp&nbsp&nbsp&nbsp <span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw "><?php echo $disp3[$k]["Views"]; 
                                                          if($k<(sizeof($disp5)))
                               { $k=$k+1;}?> </span></span></p>
                            <hr>
                            
                          </div>
                           <div class="col-12">
                            <h3 style="font-size: 1.6vw;overflow: hidden;height: 60px;"><?php echo $disp5[$m]["heading"]; ?></h3>
                            <p style="font-size: 1vw;overflow: hidden;height: 12vw;"><?php echo $disp5[$m]["content"]; ?></p>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$disp5[$m]["postid"].' name="postid" style="font-size:17px;float: right !important; text-decoration: none;">Continue</button>
                             </form> ' ;
                                                    ?>                                                                                  
                                                     <p style="font-size: 1.3vw;"><?php echo $disp5[$m]["username"]; 
                               ?>&nbsp&nbsp&nbsp&nbsp <span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw ">
                               <?php echo $disp5[$m]["Views"]; 
                                                          if($m<(sizeof($disp5)))
                               { $m=$m+1;}?> </span></span></p>
                            
                          </div>
                           


                        </div>
                        


                        
                      </div>
                      
                    </div>
                     
                   </div>
                   <hr>

                   <div class="container-fluid">
                    <div class="row">
                       <div class="col-8">
                        <div class="col">
                        <div class="col-12">
                          <h3 style="font-size:1.7vw;" ><?php echo $disp2[$i]["heading"]; ?></h3>
                         <!-- <h3 style="font-size: 18px;" >Sub Heading Sub Heading Sub Heading Sub Heading Sub Heading</h5>-->
                          
                          <p style="font-size:1vw; text-align: right;padding-right: 20px;"><span style="margin-left:0vw "><i class="fas fa-eye"></i> <span  style="font-size:1.2vw "><?php echo $disp2[$i]["Views"]; ?></span></span>  &nbsp&nbsp&nbsp&nbsp By:<?php echo $disp2[$i]["username"]; ?></p>
                          <hr>
                          <p style="font-size:0.95vw;padding: 1px;"><?php echo $disp2[$i]["content"];  if ($i<sizeof($disp2))
                                                               { $i=$i+1; }?>
                            <br><br>
                          </p>
                           
                        </div>
                        <hr>
                        <br><br><br>

                          <div class="col-12">
                          <div class="row">
                            <div class="col-6">
                              


                              <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px;background-color: gainsboro; padding: 10px;height:20vw ">

                                         <h3 style="font-size: 1.7vw;overflow: hidden;height:2vw;"><?php echo $disp1[$j]["heading"]; ?></h3>
                                          <p style="font-size:1vw ; height:9.9vw;overflow: hidden;"><?php echo substr($disp1[$j]["content"],0,300); ?> </p>
                                                  <span style="float: left">

                                                    <?php echo '<form method="POST" action="singlepost.php">
                                        <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                                       value= '.$disp1[$j]["postid"].' name="postid" style="margin-bottom: 5px; ">Continue</button>
                                        </form> ' ;
                                                    ?>
                                                      
                                                    </span> 

                                         <span style="float: right;padding-right: 20px;"> <p style="font-size:1.5vw; ">By:<?php echo $disp1[$j]["username"];
                                

                                           if($j<(sizeof($disp1)))
                                                  { $j=$j+1;} ?></p>
                                         </span>
                               </div>
                          <br>

                           <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px;background-color: gainsboro; padding: 10px ;height:20vw;">
                            <h3 style="font-size: 1.7vw;overflow: hidden;height:2vw;"><?php echo $disp3[$k]["heading"]; ?></h3>
                            <p style="font-size:1vw;height: 9.9vw;overflow: hidden;"><?php echo substr($disp3[$k]["content"],300); ?></p>
                                                  <span style="float: left">
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp3[$k]["postid"].' name="postid" style="margin-bottom: 50px;">Continue</button>
                             </form> ' ;
                                                    ?>
                                                    </span>                                                                                   
                                                     <span style="float: right;padding-right: 20px;"><p style="font-size: 1.5vw;">By:<?php echo $disp3[$k]["username"];
                                if($k<sizeof($disp3))
                                { $k=$k+1; }?></p>
                            </span>

                          </div>
                            
                            
                              
                            </div>
                            <div class="col-6 ">
                              <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px;background-color: gainsboro; padding: 10px;height:20vw; ">


                              <h3 style="font-size: 1.7vw;overflow: hidden;height:2vw;"><?php echo $disp4[$l]["heading"]; ?></h3>
                            <p style=" font-size:1vw;height: 9.9vw;overflow: hidden;"><?php echo substr($disp4[$l]["content"],0,300); ?></p>
                                                  <span style="float: left"><?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp4[$l]["postid"].' name="postid" style="margin-bottom: 50px;">Continue</button>
                             </form> ' ;
                                                    ?> 
                                                    </span>                                                                                 
                                                     <span style="float: right;padding-right: 20px;"><p style="font-size:1.5vw;">By:  <?php echo $disp4[$l]["username"];
                                if($l<sizeof($disp4))
                                { $l=$l+1; } ?></p></span>
                          </div>
                          <br>
                          <div class="container" style="border-bottom:solid grey 1px;border-right:solid  grey 1px;background-color: gainsboro; padding: 10px;height:20vw;  ">



                              <h3 style="font-size: 1.7vw;overflow: hidden;height:2vw;"><?php echo $disp5[$m]["heading"]; ?></h3>
                            <p style=" font-size:1vw;height: 9.9vw;overflow: hidden;"><?php echo substr($disp5[$m]["content"],0,300); ?></p>
                                                <span style="float: left">
                                                   <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger btn-sm" id="postid" type="submit" 
                            value= '.$disp5[$m]["postid"].' name="postid" style="margin-bottom: 50px;">Continue</button>
                             </form> ' ;
                                                    ?>    </span>                                                                             
                                                     <span style="float: right;padding-right: 20px;">  <p style="font-size:1.5vw;">By: <?php echo $disp5[$m]["username"]; 
                                if($m<sizeof($disp5))
                                { $m=$m+1; }
                                ?></p>
                              </span>
                          </div>
                            
                            

                            
                              
                            </div>
                          </div>
                          
                        </div>
                       
                       </div>
                     </div>




                      <div class="col-4 ">

                         <div class="col">
                          <div class="col-12">
                              
                                    


                   <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php echo $disp1[$j]["img_src"]; ?>" class="card-img" >

                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 1.5vw;height:78px;overflow: hidden;" ><?php echo $disp1[$j]["heading"]; ?></h5>
                              <p class="card-text" style="font-size: 1vw;height: 10vw;overflow:hidden;" ><?php echo $disp1[$j]["content"]; ?></p>
                                      
                            <p style="font-size: 1vw;float: left">By: <?php echo $disp1[$j]["username"];
                                ?></p>
                                <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$disp1[$j]["postid"].' name="postid"  style="font-size:17px;float: right !important;color: red;text-decoration: none;margin-bottom: 8px;">Continue</button>
                             </form> ' ;
                                if($j<sizeof($disp1))
                                { $j=$j+1;}
                                                    ?>                                                                                   
                            </div>
                          </div>
                        </div>

                      </div>
                       <div class="card mb-3" style="max-width: 540px;">

                      <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php $disp1[$j]["img_src"] ?>" class="card-img" >
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 1.5vw;height: 78px;overflow: hidden;" ><?php echo $disp1[$j]["heading"]; ?></h5>
                              <p class="card-text" style="font-size: 1vw;height: 10vw;overflow: hidden;"><?php echo $disp1[$j]["content"]; ?></p>
                                
                            <p style="font-size: 1vw;float: left">By: <?php echo $disp1[$j]["username"];
                               ?></p>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$disp1[$j]["postid"].' name="postid"   style="font-size:17px;float: right !important;color: red;text-decoration: none;margin-bottom: 8px;">Continue</button>
                             </form> ' ; if($j<(sizeof($disp1)))
                                { $j=$j+1;} 
                                                    ?>                                                                                   </div>
                          </div>
                        </div>
                      </div>
                       <div class="card mb-3" style="max-width: 540px;">

                      <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php echo $disp2[$i]["img_src"] ?>" class="card-img" >
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 1.5vw;height: 78px;overflow: hidden;" ><?php echo $disp2[$i]["heading"]; ?></h5>
                              <p class="card-text" style="font-size: 1vw;height: 10vw;overflow: hidden;"><?php echo $disp2[$i]["content"]; ?></p>
                                       
                            <p style="font-size: 1vw;float: left">By: <?php echo $disp2[$i]["username"]; 
                                ?></p>
                                                  <?php echo '<form method="POST" action="singlepost.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$disp2[$i]["postid"].' name="postid"  style="font-size:17px;float: right !important;color: red;text-decoration: none;margin-bottom: 8px;">Continue</button>
                             </form> ' ;
                                          if ($i<sizeof($disp2))
                                { $i=$i+1; }           ?>                                                                                   
                            </div>
                          </div>
                        </div>
                      </div>
     


                            
                            











                         </div>
                        
                      </div>
                     
                      
                    </div>
                     
                   </div>
                 </div>
               </div>

<!--content below the youtube frame end here-->






                  















 <br><br><br>






 







<!-----footer starts here-------> 
  <?php include("footer-body.php");?>

<!--  --footer  ends here ----->
         




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