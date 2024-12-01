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
        <div class="category" style="background-color: black; color: white;"><a href="topattraction.php"
                style="color: white;">Top Attractions</a></div>
        <div class="category"><a href="cultural.php">Cultural & Historical</a></div>
        <div class="category"><a href="bucketlist.php">Bucket List</a></div>
    </div>

    <div class="description">
        <div style="padding-top: 50px; font-size: 2rem; font-weight: bold;">
            Top Attraction - World
        </div>
        <div style="font-family: 'Times New Roman', Times, serif;text-align:justify;">
            Top attractions are must-visit destinations that captivate visitors with their unique appeal, whether
            through natural beauty, historical significance, architectural marvels, or cultural importance. These sites
            often include iconic landmarks, national parks, historic cities, famous monuments, and popular museums. Top
            attractions offer unforgettable experiences, providing insight into the local culture, history, and natural
            environment. They serve as major draws for tourists, helping to define the identity of a place and
            contributing to its economic and social vibrancy. These attractions often become symbols of the regions they
            represent, offering opportunities for exploration, learning, and enjoyment.
        </div>
    </div>

    <div class="place-list">
        <?php
        include("database.php");

        $query = "SELECT * FROM bucketlist where tableName = 'topattraction'";
        $result = mysqli_query($conn, $query);
        $tableName = 'topattraction';
        $i = 1;

        include "display.php";

        ?>

    </div>
    <script>
        function bookmarkItem() {
            alert("hello")
        }
    </script>

    <?php
    include "footer.php";
    include "logoutjs.php";
    ?>

</body>

</html>