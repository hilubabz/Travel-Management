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
        <div class="category"><a href="cultural.php">Cultural & Historical</a></div>
        <div class="category" style="background-color: black; "><a href="bucketlist.php" style="color: white;">Bucket
                List</a></div>
    </div>

    <div class="description">
        <div style="padding-top: 50px; font-size: 2rem; font-weight: bold;">
            Bucket List - World
        </div>
        <div style="font-family: 'Times New Roman', Times, serif; text-align:justify;">
            A bucket list is a collection of experiences, adventures, and goals that individuals aspire to achieve in
            their lifetime. These often include visiting iconic destinations, engaging in thrilling activities, learning
            new skills, or reaching personal milestones. Items on a bucket list range from witnessing natural wonders
            and exploring world-famous cities to experiencing cultural festivals or undertaking life-changing
            challenges. A bucket list serves as a source of inspiration, encouraging people to pursue their dreams,
            embrace new experiences, and create lasting memories. It reflects personal aspirations and the desire to
            live life to the fullest, with each item representing a unique and meaningful achievement.
        </div>
    </div>

    <div class="place-list">
        <?php
        include("database.php");
        // include "favfunc.php";
        
        $query = "SELECT * FROM bucketlist LIMIT 5";
        $result = mysqli_query($conn, $query);
        $tableName = 'bucketlist';
        $i = 1;
        include "display.php";
        ?>
    </div>

    <div style="display: flex; align-items: center; justify-content: center">
        <div
            style="background-color: black;color: white;font-weight: bold; padding: 15px; border-radius: 10px; font-size: 1.3rem;margin-bottom: 30px;">
            SEE MORE</div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/js/bootstrap-select-country.min.js"></script>
    <?php
    include "footer.php";
    include "logoutjs.php";
    ?>

</body>

</html>