<?php

session_start();
$x=$_POST['a'];
$y=$_POST['b'];

$_SESSION["username"] = $x;
$_SESSION["password"] = $y;

if ($x==""||$y=="")
{
 echo "Please fill all details";
}
 else
{

 $con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"citizen_choice");
 $q="SELECT `user-id` FROM user WHERE username='$x' AND password='$y'";
 $res=mysqli_query($con,$q);
 $i=mysqli_fetch_array($res);
 $id=$i[0];
 $query="SELECT * FROM user WHERE username='$x' AND password='$y'";
 $result=mysqli_query($con,$query);
 $check=mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
 if($check == 0)
 {
    echo "User don't Exists<br>";
    echo "<a href='final-sign-up.php'>CLICK HERE TO SIGN-UP</a>";
 }
  else if ($check!=0)
 { 
/*if(!empty($_SERVER['HTTP_CLIENT_IP']))
 	{
 		$ip=$_SERVER['HTTP_CLIENT_IP'];
 	}
 	else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
 		{
 			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
 		}
 		else
 		{
 			$ip=$_SERVER['REMOTE_ADDR'];
 		}
echo $ip;
*/
  $_SESSION["flag"]=1;
 	$con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"citizen_choice");
  $q2="INSERT INTO user_session (`user-id`,`username`) VALUES ('$id','$x')";
  mysqli_query($con,$q2);
   $_SESSION["username"]=$row["username"];
   $_SESSION["first_name"]=$row["first_name"];
   $_SESSION["last_name"]=$row["last_name"];
   $_SESSION["profession"]=$row["profession"];
   $_SESSION["mob_no"]=$row["mob_no"];
   $_SESSION["email"]=$row["email"];
 	header("Location:after.php");
 
   }
}
?>