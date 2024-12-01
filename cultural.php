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
        <div class="category" style="background-color: black; color: white;"><a href="cultural.php"
                style="color: white;">Cultural & Historical</a></div>
        <div class="category"><a href="bucketlist.php">Bucket List</a></div>
    </div>

    <div class="description">
        <div style="padding-top: 50px; font-size: 2rem; font-weight: bold;">
            Cultural & Historical - World
        </div>
        <div style="font-family: 'Times New Roman', Times, serif;text-align:justify;">
Cultural places are locations that hold significant historical, artistic, or social value, reflecting the traditions, beliefs, and practices of a community or society. 
These places include museums, artgalleries, theaters, historical landmarks, religious sites, and cultural centers. They serve as repositories of cultural heritage, 
offering insights into the past and preserving the identity of a community. Cultural places also function as spaces for education, celebration, and the promotion 
of cultural exchange, fostering a deeper understanding and appreciation of diverse cultures.
        </div>
    </div>

    <div class="place-list">
        <?php
        include("database.php");

        $query = "SELECT * FROM bucketlist where tableName = 'cultural'";
        $result = mysqli_query($conn, $query);
        $tableName = 'cultural';
        $i = 1;

        include "display.php";

        ?>
    </div>

    <?php
    include "footer.php";
    include "logoutjs.php";
    ?>
</body>

</html>