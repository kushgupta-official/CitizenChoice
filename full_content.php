<?php
 session_start();
?>
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"citizen_choice");

$postid = $_POST["postid"];

$query = "SELECT * FROM articles WHERE postid='$postid'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

$img_src = $row["img_src"];

?>

<!DOCTYPE html>
<html>

    <head>
    
    <title>FULL CONTENT IS SHOW HERE</title>
    
    </head>
    
    <body>
    
        <pre><h1 style = "font-size:30px" ><strong>HERE IS THE FULL ARTICLE : </strong></h1></pre>
        <pre><h2 style = "font-size:25px" ><strong>CATEGORY : </strong><?php echo "<td>".$row["category"]."</td><br>"; ?></h2></pre>
        <pre><h2 style = "font-size:25px" ><strong>HEADING : </strong><?php echo "<td>".$row["heading"]."</td><br><br>"; ?></h2></pre>

       <!-- <img class="card-img-top" src="../'.$posts[$j]["img_src"].'" alt="Card image" style="width:100%">-->
     
        
       <?php echo '<img src='.$row["img_src"].'>'; ?>
        
        <pre style = "font-size:20px" ><?php echo "<td>".$row["content"]."</td><br>"; ?></pre> 
        <pre style = "font-size:20px"><u>Click here to know more >> </u>  <?php echo "<a href=<td>".$row["youtube_link"]."</td></a>"; ?></pre>
        <pre><mark>Posted on : <?php echo "<td>".$row["Time"]."</td><br>"; ?></mark></pre> 
        
    </body>


</html>