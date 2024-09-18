<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "wisata_ticket";

$connect = mysqli_connect($server, $user, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

function getData($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [] ;
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

