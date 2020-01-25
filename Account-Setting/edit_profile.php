<?php
session_start();
if(!isset($_SESSION['flag']))
{
 header("location:../index.php");
}
 include 'login.php';

     $uname=$row["username"];
     $fname=$row["first_name"];
     $lname=$row["last_name"];
     $profession=$row["profession"];
     $mob_no=$row["mob_no"];
     $email=$row["email"];
     $uid = $row["user-id"];
     $gender=$row["gender"];
     $DOB=$row["DOB"];
if(isset($_POST["submit"]))
{
#uploading image
$target_dir = "../resource/users/$uid/profile/images/";
$target_dir2 = "resource/users/$uid/profile/images/";
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
			$img_name=$_SESSION["img_src"];
        } else 
		{
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
if ($uploadOk!=0)
{
#editing profile
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"citizen_choice");
$efname=$_POST['efname'];
$elname=$_POST['elname'];
$eprofession=$_POST['eprofession'];
$emob_no=$_POST['emob_no'];
$eemail=$_POST['eemail'];
$egender=$_POST['egender'];
$eDOB=$_POST['eDOB'];
 if (basename($_FILES["fileToUpload"]["name"]) != "") {
       
        $img_src="$target_dir2$img_name";
    } else {
        $img_src = NULL;
        echo "No image inserted";
    }
	if (basename($_FILES["fileToUpload"]["name"]) != "")
	{
		$q = "UPDATE user SET `first_name`='$efname', `last_name`='$elname', `profession`='$eprofession',`mob_no`='$emob_no', `email`='$eemail',`photo`='$img_src',`DOB` = '$eDOB', `gender`= '$egender',`photo`='$img_src' WHERE `username`='$uname'";
    }
else
	{
		$q = "UPDATE user SET `first_name`='$efname', `last_name`='$elname', `profession`='$eprofession',`mob_no`='$emob_no', `email`='$eemail',`DOB`='$eDOB', `gender`= '$egender' WHERE `username`='$uname'";
	}
	$result=mysqli_query($con,$q);
        echo "<br>YOUR PROFILE HAS BEEN UPDATED";
        mysqli_close($con);
        header("Location:profile.php");
}
}   
?>


<!doctype html>
<html lang="en">

<head>
    <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/ver-navbar.css">
    <?php include 'head.php' ?>

    <title>Edit Profile</title>
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
            <form class="form-group" enctype="multipart/form-data" method="POST" action="#" style="    ;background-color: white;padding:2.5em;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: auto;">
                <div class="col">

                    <h3 style="text-align: center;color: deepskyblue">Edit Profile</h3>

                    <hr>
                    <div class="col-lg-14">
                        <label> First name </label>
                        <input type="text" name="efname" class="form-control" value="<?php echo "$fname"; ?>" required autofocus>
                        
                    </div>
                    <div class="col-lg-14">
                        <label> Last name </label>
                        <input type="text" name="elname" class="form-control" value="<?php echo "$lname"; ?>" required>
                    </div>
                   <br>
                    <div class="col-lg-14">
                    	<table>
                    	<tr>
                    	   <th style="width: 20%">
                        <label> Gender </label>
                              <th>
                         <br>
                        <th>
                          <input type="radio" name="egender" value="M"> Male<br>
                          <input type="radio" name="egender" value="F"> Female<br>
                        </th>
                          </tr>

                          </table>
                    </div>

                    <br>
                    <div class="col-lg-14">
                        <label> DOB </label>
                       
                          <input type="date" name="eDOB" value="<?php echo "$DOB"; ?>">
                    </div>
                          

                    <div class="col-lg-14">
                        <label> Profession </label>
                        <input type="text" name="eprofession" class="form-control" value="<?php echo "$profession"; ?>" >
                    </div>
                    
                    <div class="col-lg-14">
                        <label> Phone Number </label>
                        <input type="text" name="emob_no" class="form-control" value="<?php echo "$mob_no"; ?>" >
                    </div>

                    <div class="col-lg-14">
                        <label> Email </label>
                        <input type="email" name="eemail" class="form-control" value="<?php echo "$email"; ?>" required>
                    </div><br>
                     Select image to upload:
                     <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

              
                 
                    
                    <div class="row justify-content-center">
                        <button type="submit" name="submit" id="post" value="post" class="btn btn-info btn-lg ">Save</button>
                    </div>

                    <div style="text-align: center;">
                        <h6 style="margin-top:0.6em; "></h6>
                    </div>

                </div>


               

                <div style="text-align: center;">
                    <h6 style="margin-top:0.6em; "></h6>
                </div>
               



            </form>
            </div>
    
    <!-- End demo content -->
</body>
</html>
