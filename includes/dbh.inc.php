<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "pwdpwd";
$dbName = "fundraiser";

// create connection
$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
// check connection
if($conn -> connect_error) {
    die("connection failed:".$conn->connect_error);
}