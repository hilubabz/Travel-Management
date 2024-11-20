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
                <option>World</option>
                <option>Nepal</option>
                <option>Turkey</option>
                <option>Japan</option>
            </select>
        </div>
        <div class="category"><a href="topattraction.php">Top Attractions</a></div>
        <div class="category" style="background-color: black; color: white;"><a href="cultural.php" style="color: white;">Cultural & Historical</a></div>
        <div class="category"><a href="bucketlist.php">Bucket List</a></div>
    </div>

    <div class="description">
        <div style="padding-top: 50px; font-size: 2rem; font-weight: bold;">
            Cultural & Historical - World
        </div>
        <pre style="font-family: 'Times New Roman', Times, serif;">
Cultural places are locations that hold significant historical, artistic, or social value, reflecting the traditions, beliefs, and practices of a community or society. 
These places include museums, artgalleries, theaters, historical landmarks, religious sites, and cultural centers. They serve as repositories of cultural heritage, 
offering insights into the past and preserving the identity of a community. Cultural places also function as spaces for education, celebration, and the promotion 
of cultural exchange, fostering a deeper understanding and appreciation of diverse cultures.
        </pre>
    </div>

    <div class="place-list">
        <?php
            include("database.php");

            $query = "SELECT * FROM cultural LIMIT 5";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                   
                    $placeImage = $row['placeImage'];
                    $placeName = $row['placeName'];
                    $locationName = $row['locationName'];
                    $locationDescription = $row['locationDescription'];
                    $duration=$row['duration'];
                    $people=$row['people'];
            echo "
            <div class='places'>
        <div>
            <img src='Images/$placeImage' alt='' height='350px' width='100%'>
        </div>
        <div style='display: grid;'>
            <div style='font-weight: bold;'>$i.</div>
            <div style='display: flex; justify-content: space-between;'>
                <div style='font-size: 2rem; font-weight: bold;'>$placeName</div>
                <div style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; color: grey; height:40px'>
                    <i class='fa-regular fa-heart'></i>
                    <p>SAVE</p>

                </div>
            </div>
            <div style='display: flex; gap: 5px;'>
                <i class='fa-regular fa-location-dot'></i>
                <p style='font-weight: bold;'>$locationName</p>
            </div>
            <div style='font-size: 1.3rem;'>
                $locationDescription
            </div>
            <div style='color: grey;'>
                READ MORE
                <i class='fa-solid fa-caret-down'></i>
            </div>
            <div style='font-weight: bold;'>Quick Facts</div>
            <div style='display: flex; gap: 20px;'>
                <div style='display: flex; gap: 5px; border: 1px solid black; align-items: center; padding: 10px; border-radius: 20px;'>
                    <i class='fa-regular fa-timer'></i>
                    <p>$duration</p>
                </div>
                <div style='display: flex; gap: 5px; border: 1px solid black; align-items: center; padding: 10px; border-radius: 20px;'>
                    <i class='fa-regular fa-people-group'></i>
                    <p>$people</p>
                </div>
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