<?php
    $conn = new mysqli('sql7.freesqldatabase.com','sql7580787','','QtJEkKaVaC')
    if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
?>