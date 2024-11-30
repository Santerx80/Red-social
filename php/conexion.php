<?php
$conex = mysqli_connect("localhost", "root", "", "login_register");

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
?>