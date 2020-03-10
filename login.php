<?php
include "koneksi.php";
$query_login = mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'");
$login = mysqli_fetch_assoc($query_login);
$query_profile = mysqli_query($conn, "SELECT * FROM profile WHERE username = '" . $login["username"] . "'");
$profile = mysqli_fetch_assoc($query_profile);

session_start();

if (count($login) > 0) {
	$_SESSION["user"] = $login;
	$_SESSION["profile"] = $profile;
	header('Location: profile.php');
} else {
	header('Location: index.html');
}
?>