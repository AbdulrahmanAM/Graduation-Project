<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c.t.m.s.";

$conn=  new mysqli($servername, $username, $password, $dbname);//creating a result array which should hold multiple result to the transaction



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
?>