<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "error1191");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}