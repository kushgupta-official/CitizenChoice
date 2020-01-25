 <?php
 include 'login.php';
if(!isset($_SESSION['flag']))
{
 header("location:../index.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/ver-navbar.css">
    <?php include 'head.php' ?>
</head>

<body>
    <!-- Vertical navbar -->
    <?php include 'nav-bar.php' ?>
    <!-- End vertical navbar -->


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <script>
            $(function() {
                // Sidebar toggle behavior
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                });
            });

        </script>
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

        <!-- Demo content -->
        <h2 class="display-4 text-white">Post History</h2>
                    <?php

                    mysqli_select_db($con,"citizen_choice_articles");
                    $query=" SELECT * FROM `$username` ORDER BY Time DESC";

                    $posts=array();
                    $posts=mysqli_fetch_all(mysqli_query($con,$query),MYSQLI_BOTH);
                    $j=0;
                    while($j<sizeof($posts))
                    {  
   if($posts[$j]["img_src"] == "" && $posts[$j]["youtube_link"] == "")
		   {
		    echo '
     <div class="container">
            <div class="card" style="width:90%;padding:10px;">
               <h4 class="card-title">'.$posts[$j]["heading"].'</h4>
               <span style="float:left">'.$posts[$j]["Time"].'<span/>
			   <div class="card-body">
                    <p class="card-text">'.$posts[$j]["content"].'</p>
            <form method="POST" action="edit_post.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$posts[$j]["postid"].' name="postid" style="margin-bottom: 50px;">Edit</button>
            </form>
                </div>
            </div>
            <br>
        </div>';
			}
            else if($posts[$j]["youtube_link"] == "" )
            {                        
                echo '
     <div class="container">
            <div class="card" style="width:90%;padding:10px;">
               <h4 class="card-title">'.$posts[$j]["heading"].'</h4>
               <span style="float:left">'.$posts[$j]["Time"].'<span/>
               <img class="card-img-top" src="../'.$posts[$j]["img_src"].'" alt="Card image" style="width:100%">
                <div class="card-body">
                    <p class="card-text">'.$posts[$j]["content"].'</p>
                    <form method="POST" action="edit_post.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$posts[$j]["postid"].' name= "postid" style="margin-bottom: 50px;">Edit</button>
                        </form>
                </div>
            </div>
            <br>
        </div>';
               }
			else if($posts[$j]["img_src"] == "" )
			{
			 echo '
     <div class="container">
            <div class="card" style="width:90%;padding:10px;">
               <h4 class="card-title">'.$posts[$j]["heading"].'</h4>
               <span style="float:left">'.$posts[$j]["Time"].'<span/>
			   <div class="card-body">
                <iframe width="100%"  src="'.$posts[$j]["youtube_link"].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="card-text">'.$posts[$j]["content"].'</p>
            <form method="POST" action="edit_post.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$posts[$j]["postid"].' name="postid" style="margin-bottom: 50px;">Edit</button>
            </form>
                </div>
            </div>
            <br>
        </div>';
		    }
		
        else

        {
               
               echo '
     <div class="container">
            <div class="card" style="width:90%;padding:10px;">
               <h4 class="card-title">'.$posts[$j]["heading"].'</h4>
               <span style="float:left">'.$posts[$j]["Time"].'<span/>
               <img class="card-img-top" src="../'.$posts[$j]["img_src"].'"  alt="Card image" style="width:100%">
			   <div class="card-body">
                <iframe width="100%"  src="'.$posts[$j]["youtube_link"].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="card-text">'.$posts[$j]["content"].'</p>
            <form method="POST" action="edit_post.php">
                            <button class="btn btn-outline-danger" id="postid" type="submit" 
                            value= '.$posts[$j]["postid"].' name="postid" style="margin-bottom: 50px;">Edit</button>
            </form>
                </div>
            </div>
            <br>
        </div>';
        }
                        $j++;
                      }
                    ?>
            <br>
        </div>
    </div>
    <!-- End demo content -->
</body>

</html>
                     