<?php
include 'login.php';
if(!isset($_SESSION['flag']))
{
 header("location:../index.php");
}

?>
<html>

<head>
    <link rel="stylesheet" href="css/ver-navbar.css">
    <?php include 'head.php' ?>
    <style type="text/css">
        
      p
      {
        text-transform: capitalize;
      }
    </style>
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
        <h2 class="display-4 text-white">Profile</h2>
      
        <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size: 5vh;">User Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                    <p style="text-transform: none;font-size: 5vh;"> <?php echo "<td>".$row["username"]."</td>"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size: 5vh;">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size: 5vh;"><?php echo "<td>".$row["first_name"]."</td>"; ?>&nbsp;<?php echo "<td>".$row["last_name"]."</td>"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size: 5vh;">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="text-transform: none;font-size: 5vh;"> <?php echo "<td>".$row["email"]."</td>"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size: 5vh;">Mobile Number</label>
                                            </div>
                                            <div class="col-md-6">
                                               <p style="font-size: 5vh;"> <?php echo "<td>".$row["mob_no"]."</td>"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size: 5vh;">Date of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                  <p style="font-size: 5vh;"> <?php echo "<td>".$row["DOB"]."</td>"; ?></p>
                                            </div>
                                        </div>
                            </div>
                            
            </div></div></div>
    <!-- End demo content -->
</body>

</html>
