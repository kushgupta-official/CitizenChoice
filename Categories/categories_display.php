<?php 
$posts=array();
        $posts=mysqli_fetch_all(mysqli_query($con,$query),MYSQLI_BOTH);
        $j=0;
        for ($j; $j<sizeof($posts) ; $j++) 
            {  
             /*if($j%2 == 0 && $j>0)
                   {
                   
                    $temp_id = mt_rand(0, sizeof($posts));
                    $temp_query="Select * from articles where web_id='$temp_id'";
                    $tpost=mysqli_fetch_assoc(mysqli_query($con,$query));
                    if($tpost != "")
                   
                    {
                     
                     if($tpost["img_src"] != "")
				    {
                    


                    echo  

                    '<div class="container" style="background-color: ">
                        <div class="card" style="width: 20vw;">
                                <img class="card-img-top" src="../'.$tpost["img_src"].'" alt="Card image cap">
                                <div class="card-body" style="
                                             padding-top: 10px;
                                             padding-left: 10px;
                                             padding-right: 10px;
                                             padding-bottom: 10px;
                                      ">
                                  <p class="card-text" style="color:black;font-size: 4vw;">'.$tpost["heading"].'</p>
                                </div>
                               
                              </div>
                            
                    </div>';
                    }
					else if($tpost["img_src"] == "")
				   {
                   
                    echo '<div class="col-3">
                        <div class="card" style="width: 20vw;">
                                <div class="card-body" style="
                                             padding-top: 10px;
                                             padding-left: 10px;
                                             padding-right: 10px;
                                             padding-bottom: 10px;
                                      ">
                                  <p class="card-text" style="color:black;font-size: 4vw;">'.$tpost["heading"].'</p>
                                </div>
                               
                              </div>
                            
                    </div>';
                  }	
				
                  }

                else 
                  {

                    echo '<div class="col-3">
                        <div class="card" style="width: 20vw;">
                            <div class="card-body" style="
                                             padding-top: 10px;
                                             padding-left: 10px;
                                             padding-right: 10px;
                                             padding-bottom: 10px;
                                      ">
                                  <p class="card-text" style="color:black;font-size:3vw;">'.$tpost["heading"].'</p>
                                </div>
                               
                              </div>
                            
                    </div>';
                    }

                 }*/
                 if($posts[$j]["img_src"] == "" && $posts[$j]["youtube_link"] == "")
                 {
            echo 
                 '<br>
                 <br>
                 <div class="container">
                    <div class="content square">
                            <h1 class="headline" style="color:black;font-size:4vw;">'.$posts[$j]["heading"].'</h1>
                            <p class="para"  style="height:10vw;overflow:hidden;">'.$posts[$j]["content"].'
	<form method="POST" action="../singlepost.php">
							<span style="float: left;"><button class="btn btn-secondary btn-sm" type="submit" value= '.$posts[$j]["postid"].' name="postid">Read More</button></span>
	</form>
							<span style="float:right;"><a style="float:right;display: inline; padding-right: 15px ">'.$posts[$j]["username"].'</a></span></p>
                                </div>
                             </div>';
                  }
            else if($posts[$j]["youtube_link"] == "" )
                  {          
             




    


































        /* yellow*/
              echo 
                 '    <br>
                 <br>
                  <div class="container ">
                               <div class="content square" style="background-color:white;">
                                      <img class="card-img-top" src="../'.$posts[$j]["img_src"].'" alt="Card image" style="width:25%;height:auto;margin:0px auto 0px;display:block;" >
                                      
                                      <h1 class="headline" style="color:black;font-size: 4vw">'.$posts[$j]["heading"].'</h1>
                            
                                      <p class="para" style="color:#283747; padding:20px;height:10vw;overflow:hidden;">'.$posts[$j]["content"].'
    
                                      <form method="POST" action="../singlepost.php">
							
                                      <span style="float: left;"><button class="btn btn-secondary btn-sm" type="submit" value= '.$posts[$j]["postid"].' name="postid">Read More</button></span>
	
                                      </form>
                                  
                                      <span style="float:right;"><a style="float:right;display: inline; padding-right: 15px ">'.$posts[$j]["username"].'</a></span>
                                      </p>
                                    
                              </div>
                       </div>';              
                 }










































            else if($posts[$j]["img_src"] == "" )
                  {
                 echo 
                 ' <br>
                 <br>
                 <div class="container">
                    <div class="content square">
                            <iframe width="100%"  src="'.$posts[$j]["youtube_link"].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <h1 class="headline" style="font-size: 4vw">'.$posts[$j]["heading"].'</h1>
                            <p class="para" style="height:10vw;overflow:hidden;">'.$posts[$j]["content"].'
    <form method="POST" action="../singlepost.php">
							<span style="float: left;"><button class="btn btn-secondary btn-sm" type="submit" value= '.$posts[$j]["postid"].' name="postid">Read More</button></span>
	</form>							
                                  <span style="float:right;"><a style="float:right;display: inline; padding-right: 15px ">'.$posts[$j]["username"].'</a></span></p>
                                </div>
                             </div>';
                  }
            
        
                   else
                  {
                
               echo 
                 '<br>
                 <br>
                 <div class="container">
                    <div class="content square">
                      <br>
                           <img class="card-img-top" src="../'.$posts[$j]["img_src"].'" alt="Card image" style="width:25%;height:auto;margin:0px auto 0px;display:block;"><br>
                             <h1 class="headline" style="font-size: 4vw;color:black; text-transform: uppercase;">'.$posts[$j]["heading"].'</h1>


                            <p class="para" style="height:12.5vw;overflow:hidden;">'.$posts[$j]["content"].'
                                     <form method="POST" action="../singlepost.php">
					                                		<span style="float: left;"><button class="btn btn-secondary btn-sm" type="submit" value= '.$posts[$j]["postid"].' name="postid">Read More</button></span>
	                                   </form>							
                                     <span style="float:right;"><a style="float:right;display: inline; padding-right: 15px ">'.$posts[$j]["username"].'</a></span></p>
                      </div>
                   </div>
                                
                            
                             ';              
                    }
                


                if($j%4 == 0 && $j>0)
                {
                    echo '
                      <br>
                      <br>
                    <div class="container jumbo" style="width:100%;
    height:12vw;
    background-image:linear-gradient(to right, #1367D9,#1EDCEA);
     
    text-align:center;

    font-family:calibri;">
                                <p style="margin-top:5vw ; font-size: 3vw;padding: 20px">Citizen Choice</p>
                                                                </div>';
                }
               
            # code...
        }
?>