<?php
require 'config.php';
if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
    $userId = $_SESSION["id"];
    $userDataQuery = mysqli_query($conn, "SELECT * FROM er1 WHERE id = '$userId'");
    $userData = mysqli_fetch_assoc($userDataQuery);
} else {
    echo "You are not logged in. Please log in to access this page.";
}
?>