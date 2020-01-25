<?php
include 'login.php';
if(!isset($_SESSION["flag"]))
{
 header("location:../index.php");
} 
$username=$_SESSION["username"];
$_SESSION["postid"]=$_POST["postid"];
$postid=$_SESSION["postid"];
mysqli_select_db($con,"citizen_choice");
$query= "SELECT * FROM articles WHERE postid= '$postid' AND username = '$username' ";
$result=mysqli_query($con,$query);
$post=array();
$post= mysqli_fetch_assoc($result);
echo $post["category"];

$category=$post["category"];
$heading=$post["heading"];
$content=$post["content"];
$img_src=$post["img_src"];
$youtube_link=$post["youtube_link"];

    $cat     = $post["category"];
    $article = $post["content"];
    $heading = $post["heading"];
    $youtube_link= $post["youtube_link"];
?>

<!doctype html>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <h2 class="display-4 text-white">Edit Post</h2>

    <div class="container border shadow p-3 mb-5 bg-white rounded">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <br>
        <form class="form-inline " method="Post" action="edit_post_final.php" enctype="multipart/form-data">

            <div class="col">
                <div class="col-lg-6">
                    <h3>Choose Category </h3>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" 
                    name="category">
                        <option selected> <?php echo $category; ?></option>
                        <option value="Science">Science</option>
                        <option value="Technology">Technology</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Health">Health</option>
                        <option value="Politics">Politics</option>
                        <option value="Sports">Sports</option>
                        <option value="Others">Others </option>
                    </select>
                </div>

                <hr>


                <div class="was-validated col-lg-6">

                    <h3>Heading</h3>

                    <input type="text" name="head" value = "<?php echo $heading; ?>" class="form-control" required autofocus>
                </div>
                <hr>
                 <div class="was-validated col-lg-6">

                    <h3> Youtube Video Link </h3>

                    <input type="text" name="youtube_link" class="form-control" value ="<?php echo $youtube_link;?>"  autofocus>
                </div>
            </div>
            <hr>
            <div class="was-validated mb-3">

                <div class="was-validated col-lg-6">
                    <h3>&nbsp&nbspBody</h3>
                </div>


                <textarea rows="10%" cols="145%" class="form-control is-invalid was-validated" id="validationTextarea" name="art" required><?php echo $content; ?></textarea>
                <br>
                <div class="invalid-feedback">
                    <strong> Please enter your story in the above textarea.</strong>
                </div>
            </div>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>

            <button class="btn btn-outline-danger" id="post" type="submit" value="post" style="margin-bottom: 50px;">POST</button>

        </form>
        <a href="history.php"><button class="btn btn-outline-danger" style="margin-bottom: 50px;">Cancel</button></a>

        <hr>
        <!--  TEXT AREA -->
        <form class="was-validated" method="POST" action="edit_post_final.php">

        </form>
        <!--SUBMIT BUTTON -->
    </div>
    <br>
        </div>
    </div>
    <!-- End demo content -->

</body>
</html>
