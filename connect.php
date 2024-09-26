<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "wisata_ticket";

$connect = mysqli_connect($server, $user, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

function getTable($table) {
    global $connect;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function change($data, $id, $table) {
    global $connect;

    $tablesPlace = ['place', 'visitor', 'booking'];

    if (in_array($table, $tablesPlace)) {
        if ($table === 'place') {
            $name = htmlspecialchars($data["name"]);
            $location = htmlspecialchars($data["location"]);
            $price = htmlspecialchars($data["price"]);

            $query = "UPDATE place SET name='$name',
                                       location='$location', 
                                       price='$price'
                                       WHERE id=$id";

        } else if ($table === 'visitor') {
            $name = htmlspecialchars($data["name"]);
            $contact = htmlspecialchars($data["contact"]);
            $amount = htmlspecialchars($data["amount"]);

            $query = "UPDATE visitor SET name='$name', 
                                         contact='$contact', 
                                         amount='$amount' 
                                         WHERE id=$id";
        } else if ($table === 'booking') {
            $visitor = htmlspecialchars($data["visitor"]);
            $tourist = htmlspecialchars($data["tourist"]);
            $date = htmlspecialchars($data["date"]);

            $query = "UPDATE booking SET visitor='$visitor', 
                                         tourist='$tourist', 
                                         date='$date' 
                                         WHERE id=$id";
        }

        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    } else {
        return 0;
    }
}
function add($data, $table) {
    global $connect;

    $tablesPlace = ['place', 'visitor', 'booking'];

    if (in_array($table, $tablesPlace)) {
        if ($table === 'place') {
            $name = htmlspecialchars($data["name"]);
            $location = htmlspecialchars($data["location"]);
            $price = htmlspecialchars($data["price"]);

            $query = "INSERT INTO place (name, location, price) 
                             VALUES ('$name', '$location', '$price')";
            mysqli_query($connect, $query);

        } else if ($table === 'visitor') {
            $name = htmlspecialchars($data["name"]);
            $contact = htmlspecialchars($data["contact"]);
            $amount = htmlspecialchars($data["amount"]);

            $query = "INSERT INTO visitor (name, contact, amount) 
                             VALUES ('$name', '$contact', '$amount')";
            mysqli_query($connect, $query);
                 
        } else if ($table === 'booking') {
            $visitor = htmlspecialchars($data["visitor"]);
            $tourist = htmlspecialchars($data["tourist"]);
            $date = htmlspecialchars($data["date"]);

            $query = "INSERT INTO booking (visitor, tourist, date) 
                             VALUES ('$visitor', '$tourist', '$date')";
            mysqli_query($connect, $query);

        }
       if(mysqli_affected_rows($connect) > 0 ){
        echo "<script>
        alert ('Complete input data!')
        document.location.href = 'index.php'
             </script>";
       }else{
        echo "Failed nput data!";
       }
}
}

function deleteAll($id, $table) {
    global $connect;
 
    $tables = ['place', 'visitor', 'booking'];
    
    if (in_array($table, $tables)) {
       $query = "DELETE FROM $table WHERE id = $id";
       mysqli_query($connect, $query);
       return mysqli_affected_rows($connect);
    } else {
       return 0;
    }
 }
 
function showData($id, $table) {
    global $connect;
    $query = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }   
    return $rows;
}

