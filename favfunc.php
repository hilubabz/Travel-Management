<?php
include "database.php";
session_start();
$username = $_SESSION['username'];
$sql = "select * from favourites";
$result1 = mysqli_query($conn, $sql);
for ($i = 1; $i <= 5; $i++) {
    if (isset($_POST["submit$i"])) {
        $tableNames = $_POST["tableName"];
        $tableIds = $_POST["tableId$i"];
        $sql1 = "SELECT * FROM favourites WHERE tableName='$tableNames' AND tableID=$tableIds AND username='$username'";
        $result2 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result2) > 0) {
            $sql3 = "update $tableNames set flag=0 where id=$tableIds";
            mysqli_query($conn, $sql3);
            $sql4 = "delete from favourites where tableName='$tableNames' AND tableId=$tableIds AND username='$username'";
            mysqli_query($conn, $sql4);
        } else {
            $sql2 = "insert into favourites values('$tableNames',$tableIds,'$username');";
            $result3 = mysqli_query($conn, $sql2);
            $sql5 = "update $tableNames set flag=1 where id=$tableIds";
            mysqli_query($conn, $sql5);
        }
    }
}
if (isset($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    // Fallback if HTTP_REFERER is not set
    header("Location: default_page.php"); // Replace with a default page
    exit;
}
?>