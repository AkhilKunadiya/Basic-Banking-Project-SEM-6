<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "money_bank"; 

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Could to the database due to the following error --> ".mysqli_connect_error());

    }
?>
