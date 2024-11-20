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
        <div class="category" style="background-color: black; color: white;"><a href="topattraction.php" style="color: white;">Top Attractions</a></div>
        <div class="category"><a href="cultural.php">Cultural & Historical</a></div>
        <div class="category"><a href="bucketlist.php">Bucket List</a></div>
    </div>

    <div class="description">
        <div style="padding-top: 50px; font-size: 2rem; font-weight: bold;">
            Top Attraction - World
        </div>
        <div style="font-family: 'Times New Roman', Times, serif;">
            Top attractions are must-visit destinations that captivate visitors with their unique appeal, whether through natural beauty, historical significance, architectural marvels, or cultural importance. These sites often include iconic landmarks, national parks, historic cities, famous monuments, and popular museums. Top attractions offer unforgettable experiences, providing insight into the local culture, history, and natural environment. They serve as major draws for tourists, helping to define the identity of a place and contributing to its economic and social vibrancy. These attractions often become symbols of the regions they represent, offering opportunities for exploration, learning, and enjoyment.
        </div>
    </div>

    <div class="place-list">
        <?php
            include("database.php");

            $query = "SELECT * FROM topattraction LIMIT 5";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                   
                    $placeImage = $row['placeImage'];
                    $placeName = $row['placeName'];
                    $locationName = $row['locationName'];
                    $locationDescription = $row['locationDescription'];
            
                    echo "
                    <div class='places'>
                        <div>
                            <img src='Images/{$placeImage}' alt='' height='350px' width='100%'>
                        </div>
                        <div style='display: grid;'>
                            <div style='font-weight: bold;'>{$i}.</div>
                            <div style='display: flex; justify-content: space-between;'>
                                <div style='font-size: 2rem; font-weight: bold;'>{$placeName}</div>
                                <div style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; color: grey; height:40px'>
                                    <i class='fa-regular fa-heart'></i>
                                    <p onclick=bookmarkItem()>SAVE</p>
                                </div>
                            </div>
                            <div style='display: flex; gap: 5px;'>
                                <i class='fa-regular fa-location-dot'></i>
                                <p style='font-weight: bold;'>{$locationName}</p>
                            </div>
                            <div style='font-size: 1.3rem;'>
                                {$locationDescription}
                            </div>
                            <div style='color: grey;'>
                                READ MORE
                                <i class='fa-solid fa-caret-down'></i>
                            </div>
                        </div>
                    </div>";
                    $i++;
                }
            }

        ?>
        
    </div>
<script>
    function bookmarkItem(){
        alert("hello")
    }
</script>
    <div style="display: flex; align-items: center; justify-content: center">
        <div style="background-color: black;color: white;font-weight: bold; padding: 15px; border-radius: 10px; font-size: 1.3rem;margin-bottom: 30px;">SEE MORE</div>
    </div>

    <?php
    include "footer.php";
    include "logoutjs.php";
?>

</body>
</html>