<!--header for pc start here---->
                    <div class="header-pc">

                        <div class="header">         
                                        <nav class="mainheader">
                                    <a id="title" style="color:#1a1a1a; font-family:'Quicksand', sans-serif; font-size: 3vw;"><strong>Citizen Choice&nbsp<span style="font-size: 20px;color:#1a1a1a; font-family:'Quicksand', sans-serif;">Beta</span></strong></a>
                                    <ul class="mainlist">
                                        <li><a href="index.php" >Home</a></li>
                                        <li><a href="About Us/aboutus.php" >About</a></li>
                                        <li><a href="contactus.php" >Contact Us</a></li>
                                        
                                        <li> <a href="#" ><button class="btn btn-sm bor" data-toggle="modal" data-target="#myModal" class="login">Log In</button></a></li>
                                        </ul></nav>
                                
                                    <nav class="categories">
                                            <ul>
                                                    <li><a href="Categories/science.php">Science</a></li>
                                                    <li><a href="Categories/Technology.php">Technology</a></li>
                                                    <li><a href="Categories/Sports.php">Sports</a></li>
                                                    <li><a href="Categories/Entertainment.php">Entertainment</a></li>
                                                    <li><a href="Categories/Politics.php" class="1show">Politics</a></li>
                                                    <li><a href="Categories/Others.php"class="1show">Others</a></li>
                                                    </ul>
                                                </nav>
                                    
                                </div>
                      
                    </div>
<!---header for pc ends here--->







<!-----Header-phone------->

            <div class="header-phone fixed-top" style="padding: 10px;">
                   <nav class="navbar navbar-dark bg-light">

                         <button  class="btn btn-info my-2 my-sm-0 btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-user"></i></button>
                          
                           <span style="color:#1a1a1a; font-family:'Quicksand', sans-serif; font-size: 6vw;"><strong>Citizen Choice&nbsp<span style="color:#1a1a1a; font-family:'Quicksand', sans-serif;font-size: 3vw;">Beta</span></strong></span>


                    

                          
                         <button  class=" btn btn-info btn-md" type="button"  onclick="openNav()">
                         <span class="navbar-toggler-icon"></span></button>
                                    

                                                        <!--<div class="collapse navbar-collapse" id="navbarsExample01">
                                                                 

                                                                 <ul class="navbar-nav mr-auto">
                                                                    <li class="nav-item active">
                                                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                         <a class="nav-link" href="#">Link</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                          <a class="nav-link disabled" href="#">Disabled</a>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                                                           <div class="dropdown-menu" aria-labelledby="dropdown01">
                                                                             <a class="dropdown-item" href="#">Action</a>
                                                                             <a class="dropdown-item" href="#">Another action</a>
                                                                             <a class="dropdown-item" href="#">Something else here</a>
                                                                           </div>
                                                                    </li>
                                                                 </ul>
                                                                 
                                                                 <form class="form-inline my-2 my-md-0">
                                                                          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                                 </form>
                                                         </div>-->
                     </nav>       
               
                   
              
                              


          <!---sliding sidebar in phone--->       
                          <div id="mySidenav" class="sidenav">
                                      
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                      <a href="index.php">Home</a>
                                      
                                      
                                      <a  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Categories</a>     
                                        <div class="dropdown-menu" aria-labelledby="dropdown01" style="width:200px;" >
                                                     <a class="dropdown-item" href="Categories/science.php">Science</a>
                                                     <a class="dropdown-item" href="Categories/Technology.php">Technology</a>
                                                     <a class="dropdown-item" href="Categories/Entertainment.php">Entertainment</a>
                                                  
                                                     <a class="dropdown-item" href="Categories/Politics.php">Politics</a>
                                                     <a class="dropdown-item" href="Categories/Sports.php">Sports</a>
                                                        <a class="dropdown-item" href="Categories/Others.php">Others</a>
                                       </div>

                                       <a href="About Us/aboutus.php">About</a>
                                       <a href="contactus.php">Contact Us</a>
                                      
                          </div>            
<!---sliding sidebar in phone ends here--->                                    
                         
  

           </div>
  <!---header phone ends here---->




 




<!------pop up login----->
                                      

                                      <!-- The Modal -->
                                        <div class="modal fade" id="myModal">

                                            <div class="modal-dialog">

                                                <div class="modal-content">
                                                  <div  style="float: right !important;">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
                                                   
                                                    <center><i class="fas fa-user-circle fa-6x"></i>
                                                        </center>

                                                    <!-- Modal Header -->
                                                  <div class="justify-content-center">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" style="text-align: center;">Log In to Your Account</h3>

                                                    </div>
                                           
                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <form method="POST" action="connect.php">
                                                            <div class="form-group">
                                                                <label> <i class="fa fa-user fa-2x"></i>&nbsp&nbspUsername: </label>
                                                                <br>
                                                                <input type="text" name="a" class="form-control form-control" placeholder="Email or phone or username">
                                                            </div>

                                                            <div class="form-group">
                                                                <label> <i class="fa fa-lock fa-2x"></i>&nbsp&nbspPassword: </label>
                                                                <br>
                                                                <input type="password" name="b" class="form-control " placeholder="Password">
                                                            </div>
                                                          
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" value="">&nbspKeep me logged in </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                <a href="#">Forgot password ?</a>
                                                            </div>


                                                    </div>
                                                        
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer  justify-content-center ">
                                                    <input type="submit" class="btn btn-info btn-block" value="submit">                    
                                                    </div>
                                                    </form>
                                                       
                                                    <div class="modal-footer  justify-content-center">
                                                        <div style="text-align: center;"><h5>Need an account?&nbsp&nbsp<a href="final-sign-up.php" style="color: blue">Sign up</a></h5></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

<!------pop up login end here----->