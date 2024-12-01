<?php
include "database.php";
session_start();

if (isset($_SESSION['username'])) {
    $id = $_GET['id'];
    $username = $_SESSION['username'];
    $sql= "SELECT * FROM favourites WHERE username='$username' and tableId = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
           $sql = "delete from favourites where username='$username' and tableId = $id";
        }else{
            $sql = "insert into favourites(tableId,username) values($id,'$username')";
        }
        $result = mysqli_query($conn, $sql);
}


if (isset($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    // Fallback if HTTP_REFERER is not set
    header("Location: default_page.php"); // Replace with a default page
    exit;
}