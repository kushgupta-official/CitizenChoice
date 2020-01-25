 <?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['passwd'];
$username=$_POST['username'];


if($fname==""||$lname==""||$email==""||$password=="")
	{
		echo "Please fill all fields";
	}
else
	{
		$con = mysqli_connect( "localhost","root","" );
		$db=mysqli_select_db( $con,"citizen_choice" );
		$query1 = " SELECT * FROM user WHERE username = '$username' ";
		$result = mysqli_query($con , $query1);
		$username_check = mysqli_num_rows($result);
        $row = mysqli_num_rows($result);
		
       
		
		if($username_check == 0 ) 
			{
	    $con = mysqli_connect( "localhost","root","" );
		$db=mysqli_select_db( $con,"citizen_choice" );
		$query3="INSERT INTO user(`first_name`, `last_name`,`email`,`username`, `password`) VALUES ('$fname','$lname','$email','$username','$password')";
		mysqli_query($con,$query3);
                
				header("Location:congo.html");
                
                // makes directory//
                
                $query4 = "SELECT * FROM user WHERE `username`='$username'" ; 
                $result = mysqli_query($con,$query4);
                $row1 = mysqli_fetch_array($result);
                $uid = $row1[0];
                $dir = "resource/users";
		$old = umask(0); //change umask
                $d1 = mkdir("$dir/$uid",0770,true);
		umask($old);//restore original value of umask
                mkdir("$dir/$uid/profile");
                mkdir("$dir/$uid/profile/images");
                mkdir("$dir/$uid/posts");
            
#to uplaod default image      
$_FILES["fileToUpload"]["name"]="def_profile.jpg";          
$target_dir = "resource/users/$uid/profile/images/def_profile.jpg";
copy($_FILES["fileToUpload"]["name"],$target_dir);
$img_name=basename( $_FILES["fileToUpload"]["name"]);

   if (basename($_FILES["fileToUpload"]["name"]) != "") 
   {
        $img_src = $img_name;
        $img_src="$target_dir";
   }
       $q="UPDATE user SET `photo`='$img_src' WHERE username='$username'";
       mysqli_query($con,$q);
            
			}
        else if($username_check==1 )
        {
            echo "This username is already reserved. Please choose another username.<br>";
            echo "<a href='sign-up.html'>CLICK HERE TO SIGN-UP AGAIN</a>";
        }
        
		
     
    }
    mysqli_close($con);
?>
