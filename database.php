<?php
$servername = "ec2-52-63-157-205.ap-southeast-2.compute.amazonaws.com";
$username = "root";
$password = "team81";

try {
    $conn = new PDO("mysql:host=$servername;dbname=music_school", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>