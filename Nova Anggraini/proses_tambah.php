<?php
include_once("koneksi.php");

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`,`last_name`,`email`,`phone`,`address`) VALUES ('$firstname','$lastname','$email','$phone','$address')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>