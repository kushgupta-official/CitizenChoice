<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>finalSignup</title>
    <style>
        body{
        
        }
		/*----header and footer style----*/

 <?php include("headerfooter-head.php");?>




        .bg {
 background-image:url("1.jpg");
 background-size: cover;
 background-repeat: no-repeat;
 background-position: center;
  
 
}
 




    </style>
</head>
<body>
    
































































<!---sign up content for phone-->
    <div class="container-fluid hide-in-pc bg" style="margin-top: 10px">


        <div class="row justify-content-center">

            <form class="form-group " method="POST" action="register.php" style="    ;background-color: rgba(0,0,0,0.5);padding:2.5em;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="col">

                    <h3 style="text-align: center;color: deepskyblue">Sign Up</h3>

                    <hr>
                    <div class="col-lg-14">
                        <label style="color: white;"> First name </label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter Your First Name" required="" autofocus="">
                    </div>
                    <div class="col-lg-14">
                        <label style="color: white;"> Last name </label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name" required="">
                    </div>

                    <div class="col-lg-14">
                        <label style="color: white;"> Email </label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email id" required="">
                    </div>
                    <div class="col-lg-14">
                        <label style="color: white;"> Username </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Your Unique Username" required="">
                    </div>

                    <div class="col-lg-14">
                        <label style="color: white;">Password</label>
                        <input type="password" name="passwd" class="form-control" placeholder="6 or more characters" required="">
                    </div>
                    <br>

                    <h5 style="font-size:1em;text-align: center;color:white;">By clicking Join now,agree to Citizen choice's<br><a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>and <a href="#">Cookie Policy</a></h5>
                   


                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-info btn-lg ">Join now</button>
                    </div>

                    <!--<div style="text-align: center;">
                        <h6 style="margin-top:0.6em; ">OR</h6>
                    </div>-->

                </div>


                <!--<div class="row justify-content-center">
                    <a href="https://en-gb.facebook.com/?stype=lo&amp;jlou=Afe4ZBeUqPPHziQXD2L393j_w-sGtZ2K5lQpcp1NJ-q8-kNlqwoqPuWX2-6h56oiMoG34c-mM4AEQeW86KtcLhJuEOByDhR2ZOAouQmdxJReMQ&amp;smuh=17986&amp;lh=Ac-AuB-kpWffG7-u"><button type="button" class="btn btn-outline-primary btn-lg "><i class="fab fa-facebook-f "></i> Continue with facebook</button></a>
                </div>

                <div style="text-align: center;">
                    <h6 style="margin-top:0.6em; ">OR</h6>
                </div>
                <div class="row justify-content-center">
                    <a href="https://accounts.google.com/AccountChooser/signinchooser?continue=http%3A%2F%2Fwww.google.com%2Fnonprofits%2Faccount%2Fhome%3Flocality%3Dus&amp;flowName=GlifWebSignIn&amp;flowEntry=AccountChooser">
                        <button type="button" class="btn btn-outline-danger btn-lg "> <i class="fab fa-google-plus-g"></i> Continue with Google</button> </a>
                </div>-->


                <h5 style="text-align: center; margin-top: 20px;color: white;">Already on Citizen Choice?&nbsp;<a href="index.php">Signed in</a></h5>




            </form>
        </div>
    </div>










    <!---sign up content for pc-->
    <div class="container-fluid hide-in-phone  bg" style="padding-top:40px ">
        <div class="container">


        <div class="row">
            <div class="col-6" style="
    padding-right: 0px;
">

              <div class="justify-content-center" style="background-color:rgba(256,256,256,0.5);height:97.8%;padding:5vw  ">
                 <div style="color: deepskyblue;font-size:3vw;">CITIZEN CHOICE  </div>

              </div>
        </div>

            

            <div class="col-6" style="
    padding-left: 0px;
    padding-right: 0px;
">

            <form class="form-group " method="POST" action="register.php" style="    ;background-color: rgba(0,0,0,0.7);padding:2.5em; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="col" style="
    padding-left: 0px;
    padding-right: 0px;
">

                    <h3 style="text-align: center;color: deepskyblue">Sign Up</h3>

                    <hr>
                    <div class="col-lg-14">
                        <label style="color: white;"> First name </label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter Your First Name" required="" autofocus="">
                    </div>
                    <div class="col-lg-14">
                        <label style="color: white;"> Last name </label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name" required="">
                    </div>

                    <div class="col-lg-14">
                        <label style="color: white;"> Email </label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email id" required="">
                    </div>
                    <div class="col-lg-14">
                        <label style="color: white;"> Username </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Your Unique Username" required="">
                    </div>

                    <div class="col-lg-14">
                        <label style="color: white;">Password</label>
                        <input type="password" name="passwd" class="form-control" placeholder="6 or more characters" required="">
                    </div>
                    <br>

                    <h5 style="font-size:1em;text-align: center;color: white">By clicking Join now,agree to Citizen choice's<br><a href="terms-and-conditions.php">Terms and conditions</a> , <a href="terms-and-conditions.php">Privacy Policy</a></h5>
                     


                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-info btn-lg ">Join now</button>
                    </div>

                    <!--<div style="text-align: center;">
                        <h6 style="margin-top:0.6em; ">OR</h6>
                    </div>-->

                </div>


                <!--<div class="row justify-content-center">
                    <a href="https://en-gb.facebook.com/?stype=lo&amp;jlou=Afe4ZBeUqPPHziQXD2L393j_w-sGtZ2K5lQpcp1NJ-q8-kNlqwoqPuWX2-6h56oiMoG34c-mM4AEQeW86KtcLhJuEOByDhR2ZOAouQmdxJReMQ&amp;smuh=17986&amp;lh=Ac-AuB-kpWffG7-u"><button type="button" class="btn btn-outline-primary btn-lg "><i class="fab fa-facebook-f "></i> Continue with facebook</button></a>
                </div>

                <div style="text-align: center;">
                    <h6 style="margin-top:0.6em; ">OR</h6>
                </div>
                <div class="row justify-content-center">
                    <a href="https://accounts.google.com/AccountChooser/signinchooser?continue=http%3A%2F%2Fwww.google.com%2Fnonprofits%2Faccount%2Fhome%3Flocality%3Dus&amp;flowName=GlifWebSignIn&amp;flowEntry=AccountChooser">
                        <button type="button" class="btn btn-outline-danger btn-lg "> <i class="fab fa-google-plus-g"></i> Continue with Google</button> </a>
                </div>-->


                <h5 style="text-align: center; margin-top: 20px;color: white;">Already on Citizen Choice?&nbsp;<a href="index.php">Signed in</a></h5>




            </form>
        </div>

        </div>
    </div>
    </div>

















































































































     <!-----footer starts here-------> 
  <?php include("footer-body.php");?>

<!--  --footer  ends here ----->
         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
 </html>