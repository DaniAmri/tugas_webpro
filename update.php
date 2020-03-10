<?php
include "koneksi.php";

$query_update = mysqli_query($conn, "UPDATE profile SET name = '" . $_POST["name"] . "', username = '" . $_POST["username"] . "', website = '" . $_POST["website"] . "' , bio = '" . $_POST["bio"] . "' , email = '" . $_POST["email"] . "' , phone = '" . $_POST["phone"] . "' , gender = '" . $_POST["gender"] . "' ");
$query_user = mysqli_query($conn, "UPDATE user SET username = '" . $_POST["username"] . "', email = '" . $_POST["email"] . "'");

session_start();

$_SESSION["user"]["username"] = $_POST["username"];
$_SESSION["user"]["email"] = $_POST["email"];

$_SESSION["profile"] = $_POST;

header('Location: profile.php');
?>