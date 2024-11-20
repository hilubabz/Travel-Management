<?php
    include "head.php";
    ?>
<body>
<?php
    include "navbar.php";
    ?>
    
    <div class="choice">
        <div class="category">
            <select style="border: none;font-size: 1.5rem;">
                <option style="">Location</option>
                <option>Nepal</option>
                <option>Turkey</option>
                <option>Japan</option>
            </select>
        </div>
        <div class="category">Check In Date</div>
        <div class="category">Check Out Date</div>
        <div class="category">Number of Guests</div>
    </div>
    
    <div class="description" style="display:flex;gap:50px;justify-content:space-between">
        <div style="padding-top: 50px; font-size: 2rem; font-weight: bold;">
        Find the best hotels at your required destination as per your preference
        </div>
        <div style='margin-top: 50px; display:flex;gap:5px;border:1px black solid;padding:10px;border-radius:10px;align-items:center;'>
        <i class="fa-solid fa-filter"></i>
            <div>Filter</div>
        </div>
    </div>

    <div class="place-list">
        <?php
        include("database.php");

        $query = "SELECT * FROM booking LIMIT 5";
        $result = mysqli_query($conn, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
               
                $placeImage = $row['placeImage'];
                $name = $row['name'];
                $location = $row['location'];
                $star = $row['star'];
                $photo=$row['photo'];
                $user=$row['user'];
                $review=$row['review'];
            echo "
                <div class='places'>
        <div>
            <img src='Images/$placeImage' alt='' height='350px' width='100%'>
        </div>
        <div style='display: grid;'>
            <div style='font-weight: bold;'>$i.</div>
            <div style='display: flex; justify-content: space-between;'>
                <div style='font-size: 2rem; font-weight: bold;'>$name</div>
                <div style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; color: white;background-color:black; height:40px'>
                    Show Prices

                </div>
            </div>
            <div style='display: flex; gap: 5px;'>
                <i class='fa-regular fa-location-dot'></i>
                <p style='font-weight: bold;'>$location</p>
            </div>
            <div style='display:flex;gap:5px'>";
            for($j=0;$j<$star;$j++){
                echo
                "
                    <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                ";
            }
            echo"
            </div>
            <div style='display:grid;gap:10px;border:1px grey solid;padding:0 2px 0 2px; border-radius:10px;'>
                <div style='display:flex;align-items:center;gap:10px;padding-left:5px'>
                    <div class='hello'>
                    </div>
                    <div style='font-weight:bold;font-size:1.2rem'>$user</div>
                </div>
                <div>$review</div>
            </div>
        </div>
    </div>
            ";
            $i++;}}
        ?>
    </div>

    <div style="display: flex; align-items: center; justify-content: center">
        <div style="background-color: black;color: white;font-weight: bold; padding: 15px; border-radius: 10px; font-size: 1.3rem;margin-bottom: 30px;">SEE MORE</div>
    </div>

    <?php
    include "footer.php";
    include "logoutjs.php";
    ?>
    
</body>
</html>

<!-- vzlo mkjm qhdy fkgl -->