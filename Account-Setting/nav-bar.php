    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center"><img src="../<?php echo $row["photo"]; ?>"   width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                <div class="media-body">
                    <h4 class="m-0" style="font-size: 3vh"><?php echo "<td>".$row["first_name"]."</td>"; ?>&nbsp;&nbsp;<?php echo "<td>".$row["last_name"]."</td>"; ?></h4>
                    <p class="font-weight-light text-muted mb-0"><?php echo "<td>".$row["username"]."</td>"; ?></p>
                    <button style="border: 2px solid #4CAF50;background-color: #4CAF50;color: white;" onclick="window.location.href='edit_profile.php'">Edit Profile</button>
                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

        <ul class="nav flex-column bg-white mb-0">
        	<li class="nav-item">
                <a href="../after.php" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Home Page
                </a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a href="history.php" class="nav-link text-dark font-italic">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    History
                </a>
            </li>
            
           
        </ul>
    </div>