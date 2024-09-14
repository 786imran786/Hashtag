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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<?php
  if (isset($_POST['video1'])) {
    $query = "SELECT * FROM cs01 WHERE 1";
    $result=mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row['video_link'];
}
?>
    <h1>Error-119 me apka swagat hai</h1>
    <a href="logout.php">logout</a>
    <form action="" method="post">
        <input type="submit" name="video1">
</form>
</body>
</html>