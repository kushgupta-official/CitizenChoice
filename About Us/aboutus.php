
<?php session_start();
    ?>
<html>

<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>final_homepage.html</title>

 
 


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">




    <style>
        <?php
if (!isset($_SESSION["flag"]))
{ 
include("../headerfooter-head.php");
}
else
{
include("../after/after-headerfooter-head.php");
}
?>

        div {
            width: 100%;
        }
        
        span{
            float: left;
            background: inherit;
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
            align-content: center;
        }

        .info {
            background: linear-gradient(to right, rgba(31, 113, 186, 1) 10%, rgba(0, 66, 90, 1) 100%);
        }

        .heading {
            padding: 40px;
            font-size: 6vw;
            color: aliceblue;

        }

        .desc {
            padding: 40px;
            color: white;
            font-size: 2vw;
        }

        .companydesc {
            padding: 20px;
            color: black;
            font-size: 4vw;
        }

        .fname {
            font-size: 3vw;
            font-weight: bolder;
            color: aliceblue;
        }

        .fpos {
            font-size: 2vw;
            font-weight: bolder;
            color: aliceblue;
        }

        .collapsible {
            background-color: inherit;
            color: white;
            cursor: pointer;
            padding: 18px;
            border: none;
            text-align: left;
            outline: none;
            font-size: 2vw;
        }

        .collapsible:after {
            content: '\002B';
            color: white;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .content {
            display: none;
            overflow: hidden;
            background-color: black;
           
        }

        .fields {
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: 0px;
            font-size: 3vw;
            font-weight: bolder;
        }



       
    </style>
</head>

<body>
     <?php
if (!isset($_SESSION["flag"]))
{ 
 include("../header-body.php");
}
else
{
include("../after/after-header-body.php");
}
 ?>
    <div class="info">
        <p class="heading"> Who We Are</p>
    </div>
    <p class="companydesc"> Citizen Choice is a new social media platform. It's a platform commited to serve any one who want to experss his/her views in their respective field of interest.</p>
    <div class="info">
        <center> <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="20%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
"> Manas Srivastava</p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Founder</p>
            <button class="collapsible" style="
    padding-top: 0];
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </center>
    </div>
    
    
    
    
    <p class="fields"> Back-End Developers </p>

   
    
    
    <div class="info">
        <table>
        <tr>
        
       <th> <span style="white-space:nowrap">
  <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="30%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
"> Ritik Gupta </p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Back-End Developer</p>
            <button class="collapsible" style="
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </span> 
            
            </th>
        
            
            <th>
        <span>
  <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="30%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
"> Kush Gupta </p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Back-End Developer</p>
            <button class="collapsible" style="
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </span>
            
            </th>
            
            </tr>
            </table>
    </div>

    
    
    
    <p class="fields"> Front-End Developers </p>

   
    
    
    <div class="info">
        <table>
        <tr>
        
       <th> <span style="white-space:nowrap">
  <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="30%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
"> Sourodeep Ghosh </p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Front-End Developers</p>
            <button class="collapsible" style="
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc" s>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </span> 
            
            </th>
        
            
            <th>
        <span>
  <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="30%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
">  Ankur Maheshwari</p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Front-End Developers</p>
            <button class="collapsible" style="
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </span>
            
            </th>
            
            </tr>
            
            
             <tr>
        
       <th> <span style="white-space:nowrap">
  <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="30%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
"> Vibhuti Mandral </p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Front-End Developers</p>
            <button class="collapsible" style="
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </span> 
            
            </th>
        
            
            <th>
        <span>
  <img src="https://previews.123rf.com/images/theartofphoto/theartofphoto1308/theartofphoto130800052/21398859-attractive-young-man-looking-up-thinking-isolated-on-black-background.jpg" alt="Italian Trulli" width="30%" style="
    padding-top: 50px;
">
            <p class="fname" style="
    margin-bottom: 10px;
"> Simran Kapoor</p>
            <p class="fpos" style="
    margin-top: 0px;
    margin-bottom: 5px;
">Front-End Developers</p>
            <button class="collapsible" style="
    padding-top: 0px;
">Read More</button>
            <div class="content" style="display: none;">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </span>
            
            </th>
            
            </tr>
            
            </table>
    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

    </script>

 <?php include("../footer-body.php");?>
<!--footer ends here--->

</body>

</html>
