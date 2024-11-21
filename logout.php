<?php
include "database.php";
session_start();
$_SESSION = [];
$sql1 = "update bucketlist set flag=0 where flag=1;";
$sql2 = "update topattraction set flag=0 where flag=1;";
$sql3 = "update cultural set flag=0 where flag=1;";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
mysqli_query($conn, $sql3);
session_destroy();

header("Location: index.php");