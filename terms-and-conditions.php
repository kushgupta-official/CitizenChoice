<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

 
 


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">


 

 
    <title>termsandcondition</title>
    <style>
       body{
    background-color:rgb(240, 240, 240);
  } 

                                                                       /*styling for the grid in pc*/       
  .bigbox
{  display:grid;
   grid-template-columns:repeat(3, minmax(90px,1fr));
   min-height:250px;
   column-gap:5px;
   background-color:white;
  
}
.box1
{   
    height:50%;
    
}
.box2
{
    height:50%;
}
.box3
{
    height:30%;
}
.box4
{
    height:70%;
}
.box5
{
    height:60%;
}
.box6
{
    height:40%;
}
 
.img-cl
{
    display:block;
    height:100%;
    width:100%;
   
    padding: 2%;
    
}    .con {
  position: relative;

  
}

.con img {vertical-align: middle;}

.con .content {
  position: absolute;
  bottom: 2%;
   /* Fallback color */
 
  color: black;
  width: 100%;
  height: 15%;
  padding: 10px;
  text-align: center;
}                                                                       /*styling for the grid in pc ends here*/
 




   /*----header and footer style----*/

 <?php
if (!isset($_SESSION['flag']))
{ 
 include("headerfooter-head.php");
}
 else
{
 include("after/after-headerfooter-head.php");
}
?> 

 



    </style>
  </head>
  <body>



 <!--header -->

 <?php
if (!isset($_SESSION["flag"]))
{ 
include("header-body.php");
}
else
{
include("after/after-header-body.php");
}
?>



  

     
        



 
  

<div class="hide-in-pc">
  <br><br> <br> <br> <br> 
  <div class="container-fluid" style="background-color: navy;">
        <div class="terms" style="font-size: 7vw;color: white;">
          <b>Terms & Conditions</b>
        </div>
  </div>
  <br>

     <div class="terms1">
      <b> ACCEPTANCE OF TERMS </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" >This Privacy Policy forms part and parcel of the Terms of Use for the Services. Capitalized terms which have been used here but are undefined shall have the same meaning as attributed to them in the Terms of Use. The Company respects the privacy of the users of the Services and is committed to protect it in all respects.</p>
 
     </div>
     <br>
      <div class="terms1">
      <b> REGISTRATION DATA: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" >  This information includes basic contact information provided by you on our Website, your name, mobile number, address, e-mail address, gender, interests, preferences,. For example, the Company may collect Personal Information when you register on the Website, to subscribe to our Services or for requesting further information. <BR>
      <br>

      When you register using your other accounts like on Facebook, Twitter, Gmail, etc. we shall retrieve Information from such account to continue to interact with you and to continue providing the Services.<br><br>

      In case you choose to decline to submit Personal Information on the Website, the Company may not be able to provide certain sites/content/services/features to you. We will make reasonable efforts to notify you of the same at the time of opening your account. In any case, we will not be liable and or responsible for the denial of certain services to you for lack of you providing the necessary personal information.</p>
 
     </div> 
     <br>
     <div class="terms1">
      <b>  Your Account with Us: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside">To access or use some of our Services, you must create an account with us. When you create this account, you must provide accurate and up-to-date information. It is important that you maintain and promptly update your details and any other information you provide to us, to keep such information current and complete.<br><br>

    We may share your information with our employees, officers, for the purpose of processing Information on its behalf.,<br><br>

    We reserve the right to disable your user account at any time, including if you have failed to comply with any of the provisions of these Terms, or if activities occur on your account which, would or might cause damage to or impair the Services or infringe, or violate any applicable laws or regulations.<br><br>
  
      If you no longer want to use our Services again and would like your account deleted, we can take care of this for you. Please contact us via <a href="#">feedback@citizenchoice.in</a>, and we will provide you with further assistance and guide you through the process. Once you choose to delete your account, you will not be able to reactivate your account or retrieve any of the content or information you have added.</p>
 
     </div>
     <br>
      <div class="terms1">
      <b> Restricted Use of Content: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" > You may not copy, reproduce, distribute, publish, enter into a database, display, perform, modify, create derivative works from, transmit or in any way exploit any part of our site or any content thereon. You may not distribute any part of this site or any content thereon over any network, including, without limitation, a local area network, or sell or offer it for sale. In addition, these files may not be used to construct any kind of database.<br><br>

         You shall not host, display, upload, modify, publish, transmit, update or share any information on the Site, that belongs to another person and to which you do not have any right to<br><br>

       Citizen Choice grants you permission to only access and make personal use of the Site and You agree not to, directly or indirectly download or modify / alter / change / amend / vary / transform / revise / translate / copy / publish / distribute or otherwise disseminate any content on Citizen Choice site / Service, or any portion of it; or delete or fail to display any promotional taglines included in the Site / Service either directly or indirectly, except with the express consent of Citizen CHoice, or decompile, reverse engineer or disassemble any software or other products or processes accessible at the Sites<br><br>
       Citizen Choice forbids you from any attempts to resell or put to commercial use any part of the Site; any downloading or copying of account information for the benefit of any other merchant; any renting, leasing,displaying the name, logo, trademark or other identifier of another person (except for <a href="#">www.citizenchoice.in</a>) in such a manner as to give the viewer the impression that such other person is a publisher or distributor of the Service on the Site, or any data gathering or extraction tools; or any use of meta tags.</p>
 
     </div>
     <br>

     <div class="terms1">
      <b> No unlawful or prohibited use: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" >   As a condition of your use of the Services, you will not use the Services for any purpose that is unlawful or prohibited by these terms, conditions, and notices. You may not use the Services in any manner that could damage, disable, overburden, or impair our server, or interfere with any other party's use and enjoyment of any Services. You may not attempt to gain unauthorized access to any Services, other accounts, computer systems or to any of the Services, through hacking, password mining or any other means. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available through the Services.</p>
 
     </div>
     <br>
     <div class="terms1">
      <b> Safety: </b>
     </div>
 
     <div class="container">
          <hr>
      <p  class="content-inside" >  We advise that you never reveal any personal information about yourself or anyone else (for example telephone number, home address or email address). Please do not include postal addresses of any kind. If you have a helpful address to share, inform the host of the relevant community area using the ‘Contact Us’ link, and they will promote it if they see fit.</p>
 
     </div>
     <br>
     <div class="terms1">
      <b> General: </b>
     </div>
   
     <div class="container">
        <hr>
      <p  class="content-inside"> These terms may vary from time to time. Please ensure that you review these terms and conditions regularly as you will be deemed to have accepted any variation if you continue to use the site after it has been posted.<br><br>

          Although we will do our best to provide constant, uninterrupted access to <a href="#">citizenchoice.in</a>, we do not guarantee this. We accept no responsibility or liability for any interruption or delay. </p>
 
     </div>
     <br>

     <div class="terms1" >
      <b> Sensitive Personal Information: </b>
     </div>
     
     <div class="container">
      <hr>
      <p  class="content-inside" > Unless specifically requested, we ask that you not send us, and you shall not disclose, on or through the Services or otherwise to us, any sensitive personal information (e.g., information related to racial or ethnic origin, political opinions, religion, ideological or other beliefs, health, biometrics or genetic characteristics, national identification numbers, social security numbers, criminal background, trade union membership, or administrative or criminal proceedings and sanctions).</p>
 
     </div>
      

</div>
 

 <!-----for pc----->
<div class="hide-in-phone container">
  <br> 


   <div class="container-fluid" style="background-color: navy;">
        <div class="terms" style="font-size: 7vw;color: white;">
          <b>Terms & Conditions</b>
        </div>
  </div>
  <br>

     <div class="terms1">
      <b> ACCEPTANCE OF TERMS </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" >This Privacy Policy forms part and parcel of the Terms of Use for the Services. Capitalized terms which have been used here but are undefined shall have the same meaning as attributed to them in the Terms of Use. The Company respects the privacy of the users of the Services and is committed to protect it in all respects.</p>
 
     </div>
     <br>
      <div class="terms1" >
      <b> REGISTRATION DATA: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" >  This information includes basic contact information provided by you on our Website, your name, mobile number, address, e-mail address, gender, interests, preferences,. For example, the Company may collect Personal Information when you register on the Website, to subscribe to our Services or for requesting further information. <BR>
      <br>

      When you register using your other accounts like on Facebook, Twitter, Gmail, etc. we shall retrieve Information from such account to continue to interact with you and to continue providing the Services.<br><br>

      In case you choose to decline to submit Personal Information on the Website, the Company may not be able to provide certain sites/content/services/features to you. We will make reasonable efforts to notify you of the same at the time of opening your account. In any case, we will not be liable and or responsible for the denial of certain services to you for lack of you providing the necessary personal information.</p>
 
     </div> 
     <br>
     <div class="terms1" >
      <b>  Your Account with Us: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside" >To access or use some of our Services, you must create an account with us. When you create this account, you must provide accurate and up-to-date information. It is important that you maintain and promptly update your details and any other information you provide to us, to keep such information current and complete.<br><br>

    We may share your information with our employees, officers, for the purpose of processing Information on its behalf.,<br><br>

    We reserve the right to disable your user account at any time, including if you have failed to comply with any of the provisions of these Terms, or if activities occur on your account which, would or might cause damage to or impair the Services or infringe, or violate any applicable laws or regulations.<br><br>
  
      If you no longer want to use our Services again and would like your account deleted, we can take care of this for you. Please contact us via <a href="#">feedback@citizenchoice.in</a>, and we will provide you with further assistance and guide you through the process. Once you choose to delete your account, you will not be able to reactivate your account or retrieve any of the content or information you have added.</p>
 
     </div>
     <br>
      <div class="terms1" >
      <b> Restricted Use of Content: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside"> You may not copy, reproduce, distribute, publish, enter into a database, display, perform, modify, create derivative works from, transmit or in any way exploit any part of our site or any content thereon. You may not distribute any part of this site or any content thereon over any network, including, without limitation, a local area network, or sell or offer it for sale. In addition, these files may not be used to construct any kind of database.<br><br>

         You shall not host, display, upload, modify, publish, transmit, update or share any information on the Site, that belongs to another person and to which you do not have any right to<br><br>

       Citizen Choice grants you permission to only access and make personal use of the Site and You agree not to, directly or indirectly download or modify / alter / change / amend / vary / transform / revise / translate / copy / publish / distribute or otherwise disseminate any content on Citizen Choice site / Service, or any portion of it; or delete or fail to display any promotional taglines included in the Site / Service either directly or indirectly, except with the express consent of Citizen CHoice, or decompile, reverse engineer or disassemble any software or other products or processes accessible at the Sites<br><br>
       Citizen Choice forbids you from any attempts to resell or put to commercial use any part of the Site; any downloading or copying of account information for the benefit of any other merchant; any renting, leasing,displaying the name, logo, trademark or other identifier of another person (except for <a href="#">www.citizenchoice.in</a>) in such a manner as to give the viewer the impression that such other person is a publisher or distributor of the Service on the Site, or any data gathering or extraction tools; or any use of meta tags.</p>
 
     </div>
     <br>

     <div class="terms1">
      <b> No unlawful or prohibited use: </b>
     </div>
     
     <div class="container">
          <hr>
      <p  class="content-inside">   As a condition of your use of the Services, you will not use the Services for any purpose that is unlawful or prohibited by these terms, conditions, and notices. You may not use the Services in any manner that could damage, disable, overburden, or impair our server, or interfere with any other party's use and enjoyment of any Services. You may not attempt to gain unauthorized access to any Services, other accounts, computer systems or to any of the Services, through hacking, password mining or any other means. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available through the Services.</p>
 
     </div>
     <br>
     <div class="terms1">
      <b> Safety: </b>
     </div>
 
     <div class="container">
          <hr>
      <p  class="content-inside" >  We advise that you never reveal any personal information about yourself or anyone else (for example telephone number, home address or email address). Please do not include postal addresses of any kind. If you have a helpful address to share, inform the host of the relevant community area using the ‘Contact Us’ link, and they will promote it if they see fit.</p>
 
     </div>
     <br>
     <div class="terms1">
      <b> General: </b>
     </div>
   
     <div class="container">
        <hr>
      <p  class="content-inside" > These terms may vary from time to time. Please ensure that you review these terms and conditions regularly as you will be deemed to have accepted any variation if you continue to use the site after it has been posted.<br><br>

          Although we will do our best to provide constant, uninterrupted access to <a href="#">citizenchoice.in</a>, we do not guarantee this. We accept no responsibility or liability for any interruption or delay. </p>
 
     </div>
     <br>

     <div class="terms1" >
      <b> Sensitive Personal Information: </b>
     </div>
     
     <div class="container">
      <hr>
      <p class="content-inside" > Unless specifically requested, we ask that you not send us, and you shall not disclose, on or through the Services or otherwise to us, any sensitive personal information (e.g., information related to racial or ethnic origin, political opinions, religion, ideological or other beliefs, health, biometrics or genetic characteristics, national identification numbers, social security numbers, criminal background, trade union membership, or administrative or criminal proceedings and sanctions).</p>
 
     </div>
      
  
</div>


 <!--footer -->

<?php include("footer-body.php");?>






<!--js for sidebar menu in phone-->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
   
  document.body.style.backgroundColor = "rgba(0,0,0,0.2)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  
  document.body.style.backgroundColor = "white";
}
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>