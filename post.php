<?php
session_start();
if(!isset($_SESSION['flag']))
{
 header("location:index.php");
}
if(isset($_POST['submit']))
{
# Getting the username
$uname = $_SESSION["username"];
#Opening the server
$con   = mysqli_connect("localhost", "root", "");
#Selecting the database
mysqli_select_db($con, "citizen_choice");
#reading input
    $cat     = $_POST['z'];
     $article = mysqli_real_escape_string($con, $_POST['art']);
    $heading = mysqli_real_escape_string($con, $_POST['head']);
    $uname   = $_SESSION["username"];
    $youtube_link= mysqli_real_escape_string($con,$_POST["youtube_link"]);
#check for Form is properly filled
if ($cat == "" || $article == "" || $heading == "") {
        echo "Please Fill all details";}
 else{
#Assingning post id
    $id = mt_rand(3000, 9999);
# Checking the userid of the username
$query       = "SELECT * FROM user WHERE username='$uname'";
$result      = mysqli_query($con, $query);
$uid         = mysqli_fetch_array($result);
/*if (!file_exists('C:/wamp/www/citizen choice 3/uploads/$_SESSION["postid"]')) 
{
    mkdir('C:/wamp/www/citizen choice 3/uploads/$_SESSION["postid"]', 0777, true);
}*/
if (!file_exists("resource/users/$uid[0]/posts/$id"))
{
    mkdir("resource/users/$uid[0]/posts/$id");
    mkdir("resource/users/$uid[0]/posts/$id/images");
    echo "file created<br>";
}

$target_dir  = "resource/users/$uid[0]/posts/$id/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk    = 1;

if (basename($_FILES["fileToUpload"]["name"]) != "") {
    $uploadOk      = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists, Please rename it.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $_SESSION["img_src"] = basename($_FILES["fileToUpload"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


#posting the article
if ($uploadOk != 0) {
    echo "<br><br>";
     $con = mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "citizen_choice_articles");
    $cat     = $_POST['z'];
    $article = mysqli_real_escape_string($con, $_POST['art']);
    $heading = mysqli_real_escape_string($con, $_POST['head']);
    $uname   = $_SESSION["username"];
     $youtube_link= $_POST["youtube_link"];
    if (basename($_FILES["fileToUpload"]["name"]) != "") {
        $img_src = $_SESSION["img_src"];
        $img_src="$target_dir$img_src";
    } else {
        $img_src =NULL;
        echo "No image inserted";
    }
     $con = mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "citizen_choice");    
    
        $query             = "SELECT * FROM articles WHERE postid='$id'";
        $result            = mysqli_query($con, $query);
        $uname_table_check = mysqli_num_rows($result);
        while ($uname_table_check == 1) {
            $id                = mt_rand(3000, 9999);
            $query             = "SELECT * FROM articles WHERE postid= '$id'";
            $result            = mysqli_query($con, $query);
            $uname_table_check = mysqli_num_rows($result);
        }
        if($youtube_link == "")
        {$query2 = "INSERT INTO articles (`postid`, `username`, `category`, `heading`,`content`,`img_src`) VALUES ('$id','$uname','$cat','$heading','$article','$img_src')";
        
         $query3 = "INSERT INTO all_articles (`postid`, `username`, `category`, `heading`,`content`,`img_src`) VALUES ('$id','$uname','$cat','$heading','$article','$img_src')";
        }
        
        else
        {
            $query2 = "INSERT INTO articles (`postid`, `username`, `category`, `heading`,`content`,`img_src`,`youtube_link`) VALUES ('$id','$uname','$cat','$heading','$article','$img_src','$youtube_link')";
            
            $query3 = "INSERT INTO all_articles (`postid`, `username`, `category`, `heading`,`content`,`img_src`,`youtube_link`) VALUES ('$id','$uname','$cat','$heading','$article','$img_src','$youtube_link')";
            
            
        }
        $_SESSION["postid"] = $id;
        mysqli_query($con, $query2);
        mysqli_query($con, $query3);        
        mysqli_close($con);
        
        
        
        $con = mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "citizen_choice_articles");
        $query = "INSERT INTO $uname (`postid`,`category`,`heading`,`content`,`img_src`,`youtube_link`) VALUES ('$id','$cat','$heading','$article','$img_src','$youtube_link')";
        $temp  = mysqli_query($con, $query);
        if ($temp == 0) 
        {
            $query2 = " CREATE TABLE `citizen_choice_articles`. $uname (`web_id` int(10) NOT NULL auto_increment,`postid` int(10) NOT NULL,`category` varchar(100) NOT NULL,`heading` text NOT NULL,`content` longtext NOT NULL,`img_src` varchar(200) default NULL,`youtube_link` varchar(200) default NULL,`Time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,PRIMARY KEY (`web_id`)) ";
            mysqli_query($con, $query2);
            
            if($youtube_link == "")
            {
                $query3 = "INSERT INTO $uname (`postid`, `category`, `heading`,`content`,`img_src`) VALUES ('$id','$cat','$heading','$article','$img_src')";
                $temp  = mysqli_query($con, $query3);
            }
            
            else
            {
                $query3 = "INSERT INTO $uname (`postid`,`category`, `heading`,`content`,`img_src`,`youtube_link`) VALUES ('$id','$cat','$heading','$article','$img_src','$youtube_link')";
                $temp  = mysqli_query($con, $query3);
            }
        }
        
        echo "Your article is posted<br> Your post id for future references is $id<br>";
        echo "<a href='index.php'>Go back to homepage</a>";
        mysqli_close($con);
    }
 }
 }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Post</title>
    <style>
        /*----header and footer style----*/

        <?php include("after/after-headerfooter-head.php");
        ?>

    </style>
</head>

<body>


    <!--header body-->
    <?php include("after/after-header-body.php");?>


    <script src="Limit_input/hidden.js"></script>

    <div class="container border shadow p-3 mb-5 bg-white rounded">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <br>

        <form class="form-inline " method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="postform" enctype="multipart/form-data" onsubmit="return valiadateForm()">

            <div class="col">
                <div class="col-lg-6">
                    <h3>Choose Category </h3>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="z">
                        <option selected disabled>Category</option>
                        <option value="Science">Science</option>
                        <option value="Technology">Technology</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Politics">Politics</option>
                        <option value="Sports">Sports</option>
                        <option value="Others">Others </option>
                    </select>
                </div>

                <hr>


                <div class="was-validated col-lg-6">

                    <h3>Heading</h3>
                    <script>
                        
                        $("#heading").keyup(function() {
                                   var length = 0;
                            var maxLength = 10;
                            length = $(this).val().length;
                            length = maxLength - length;

                            if (length < 0) {
                                document.getElementById("length").style.color = "red";
                                $('#chars').text(length);
                            } else {
                                document.getElementById("length").style.color = "Green";
                                $('#chars').text(length);
                            }
                     
                        });

                    </script>
                    <input type="text" id="heading" name="head" class="form-control" required>
                    <br>
                    <span id="length" style="color: green"><span id="chars">10</span> characters remaining</span>
                </div>
                <hr>
                <div class="was-validated col-lg-6">

                    <h3> Yutube Video Link </h3>

                    <input type="text" name="youtube_link" class="form-control">
                </div>
            </div>
            <hr>
            <div class="was-validated mb-3">

                <div class="was-validated col-lg-6">
                    <h3>&nbsp&nbspBody</h3>
                </div>


                <textarea rows="10%" cols="145%" class="form-control is-invalid was-validated" id="validationTextarea" name="art" placeholder="Your Story..." required></textarea>
                <br>
                <div class="invalid-feedback">
                    <strong> Please enter your story in the above textarea.</strong>
                </div>
            </div>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button class="btn btn-outline-danger" id="post" type="submit" name="submit" value="post" style="margin-bottom: 50px;">POST</button>

        </form>
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["fname"].value;
                if (length < 0) {
                    alert("Heading Max Character Limit Exeeded");
                    return false;
                }
            }

        </script>



        <hr>

        <!--  TEXT AREA -->
        <form class="was-validated" method="POST" action="#">

        </form>
        <!--SUBMIT BUTTON -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
