<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$servername = "";
$username = "";
$password = "zaq1@WSX";
$dbname = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error) {
    die("Oops. Something went wrong in the database.");
}