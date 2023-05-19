<?php
include_once("koneksi.php");

$id = $_GET["id"];

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$result = mysqli_query($conn, "UPDATE `customer` SET first_name='$firstname',last_name='$lastname',email='$email',phone='$phone', address='$address' WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>