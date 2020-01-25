<?php 
if(!isset($_SESSION['flag']))
{
 header("location:../index.php");
}
  include 'login.php';
  $uname = $_SESSION["username"];
    $postid =$_SESSION["postid"];
    $cat     = $_POST["category"];
    $article = $_POST["art"];
    $heading = $_POST["head"];
    $youtube_link= $_POST["youtube_link"];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"citizen_choice");
    $q="SELECT `user-id` FROM user WHERE `username`='$uname'";
    $res=mysqli_query($con,$q);
  $result=mysqli_fetch_array($res);
  $uid=$result[0];
   
   $uploadOk    = 1;
   if (!file_exists("../resource/users/$uid[0]/posts/$postid"))
{
    mkdir("../resource/users/$uid[0]/posts/$postid");
    mkdir("../resource/users/$uid[0]/posts/$postid/images");
    echo "file created";
}
if (basename($_FILES["fileToUpload"]["name"]) != "") {

$target_dir  = "../resource/users/$uid[0]/posts/$postid/images/";
$target_dir2="resource/users/$uid[0]/posts/$postid/images/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);


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
            $img_name=basename($_FILES["fileToUpload"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


#posting the article
  if ($uploadOk != 0) {
    $con   = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "citizen_choice");
    
   $username=$_SESSION["username"];
   $cat     = $_POST['category'];
    $article = $_POST['art'];
    $heading = $_POST['head'];
    $youtube_link= $_POST["youtube_link"];
    if (basename($_FILES["fileToUpload"]["name"]) != "") {
        $img_src =  $target_dir2.$img_name;
    } else {
        $img_src = NULL;
        echo "No image inserted";
    }
if (basename($_FILES["fileToUpload"]["name"]) != "")
{
    $q = "UPDATE articles SET `category`='$cat',`heading`='$heading',`content`='$article',`img_src`=
    '$img_src',`youtube_link`='$youtube_link' WHERE `postid`='$postid'";
}
      else if (basename($_FILES["fileToUpload"]["name"]) == "")
  {
    $q = "UPDATE articles SET `category`='$cat',`heading`='$heading',`content`='$article',`youtube_link`='$youtube_link' WHERE `postid`='$postid'";
      }
    mysqli_query($con, $q);
    mysqli_close($con);
    
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "citizen_choice_articles");
   if (basename($_FILES["fileToUpload"]["name"]) != "")
{
    $q = "UPDATE $username SET `category`='$cat',`heading`='$heading',`content`='$article',`img_src`=
    '$img_src',`youtube_link`='$youtube_link' WHERE `postid`='$postid'";
}
      else if (basename($_FILES["fileToUpload"]["name"]) == "")
  {
    $q = "UPDATE $username SET `category`='$cat',`heading`='$heading',`content`='$article',`youtube_link`='$youtube_link' WHERE `postid`='$postid'";
      }
    mysqli_query($con, $q);
    mysqli_close($con);
    
    header('Location:history.php');
  }
  else 
  {
   echo "yo";
     header('Location:history.php');
  }
?>