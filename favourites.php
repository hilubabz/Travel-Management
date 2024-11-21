<?php
include "database.php";
include "head.php";
include "navbar.php";
// session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql = "select * from favourites where username='$username'";
    $results = mysqli_query($conn, $sql);
    echo "<div class='place-list'>";
    $i = 1;
    while ($rows = mysqli_fetch_assoc($results)) {

        $tableName = $rows['tableName'];
        $tableId = $rows['tableId'];

        $sql = "select * from $tableName where id=$tableId";
        $result = mysqli_query($conn, $sql);

        include "display.php";

    }
    echo "</div>";
} else {
    echo "
        <div style='display:flex;justify-content:center;font-size:2rem;font-weight:bold;'>Login to see your favourites</div>
    ";
}
include "footer.php";
?>