<div>
    <div class="nav">
        <div>
            <a href="index.php"><img src="Images/Logo.png" alt="" height="100px" width="150px"></a>
        </div>
        <div class="nav-text">
            <div><a href="index.php">Home</a></div>
            <div><a href="topattraction.php">Trip Planner</a></div>
            <div>Booking</div>
            <div>Help</div>
            <div>About Us</div>
        </div>
        <div class="nav-icon">
            <!-- <i class="fa-regular fa-magnifying-glass" ></i>-->
            <a href='favourites.php'><i class="fa-regular fa-bookmark"></i></a>
            <?php
            if (isset($_SESSION['username'])) {
                echo "
                    <div style='position: relative'>
                    <div class='hello'>
                    <img src='" . $_SESSION['photo'] . "' style='object-fit:cover;'>
                    </div>
                    <div class='logout'>
                    <a href='logout.php' >Log Out</a>
                    </div>
                    </div>
                    ";

            } else {
                echo "<a href='login.php' align='center' class='login'>Log In</a>";
            }
            ?>
        </div>
    </div>

</div>
