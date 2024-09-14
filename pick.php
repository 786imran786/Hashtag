<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3x3 Grid View</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <link href='https://fonts.googleapis.com/css?family=Share Tech Mono' rel='stylesheet'>
</head>
<body>
    <div class="title">
        <h1>Pick your interest <?php echo $userData['username']; ?></h1>
    </div>
    <?php
  if (isset($_POST['pic'])) {
    $course = $_POST['pic'];
    $userId = $_SESSION["id"];
    $query = "UPDATE er1 SET course1 = '$course' WHERE id = '$userId'";
    mysqli_query($conn, $query);
    header("location: duration.php");
}
    ?>
    <div class="grid-container">
            <!-- <input type="submit" name="pic" value="c1"> -->
        <a href=# method="post" name="pick"> 
        <div class="grid-item">
            <div class="image"> <img id="img1" src="https://i.postimg.cc/4NVT14Jz/c-programming.png"></div>
            <div class="button-container1">
            <form method="post" action="pick.php" >
            <input type="submit" name="pic" class="livenow" id="livenow" value="JOIN"></input>
            </form>
        </div>
        </div>

        </a>
        <a href=#>
        <div class="grid-item">
            <div class="image"> <img id="img1" src="https://i.postimg.cc/kXF3xwCn/Python.png"></div>
            <div class="button-container2">
                <button class="livenow" id="coming-soon">Coming Soon &nbsp;<i class="bi bi-clock-fill"></i> </button>
            </div>
            <!-- <h2>Title 1</h2> -->
            <!-- <p>Description for block 1</p> -->
        </div>
        </a>    
        <div class="grid-item">
            <div class="image"> <img id="img3" src="https://i.postimg.cc/prvw5npG/Java.png"></div>
            <button class="livenow" id="coming-soon">Coming Soon &nbsp;<i class="bi bi-clock-fill"></i> </button>
            <!-- <h2>Title 1</h2> -->
            <!-- <p>Description for block 1</p> -->
        </div>
        <div class="grid-item">
            <div class="image"> <img id="img4" src="https://i.postimg.cc/CKLRymY7/android.png"></div>
            <button class="livenow" id="coming-soon">Coming Soon &nbsp;<i class="bi bi-clock-fill"></i> </button>
            <!-- <h2>Title 1</h2> -->
            <!-- <p>Description for block 1</p> -->
        </div>
        <div class="grid-item">
            <div class="image"> <img id="img5" src="https://i.postimg.cc/VvzT4rXJ/php.png"></div>
            <button class="livenow" id="coming-soon">Coming Soon &nbsp;<i class="bi bi-clock-fill"></i> </button>
            <!-- <h2>Title 1</h2> -->
            <!-- <p>Description for block 1</p> -->
        </div>
        <div class="grid-item">
            <div class="image"> <img id="img6" src="https://i.postimg.cc/8cC6Mv1p/c-logo.png"></div>
            <button class="livenow" id="coming-soon">Coming Soon &nbsp;<i class="bi bi-clock-fill"></i> </button>
            <!-- <h2>Title 1</h2> -->
            <!-- <p>Description for block 1</p> -->
        </div>
    </div>
</body>

<style>
    /* ------------------------------------------------------------{LIVE NOW BTN}------------------------------------------------- */
    .griditem #livenow{
        border: 1px solid;
    }
    .grid-item .livenow{
        font-family: 'Lexend';
        /* background-color: red; */
        color: white;
        width: 8rem;
        height: 2rem;
        font-weight: bold;
        border-radius: 6px;
        border: none;
    }
    .grid-item #coming-soon{
        background-color: transparent;
        border: 1px solid white;
        opacity: 80%;
        width: 9rem;
    }
    .grid-item #livenow{
        background-color: red;
    }

    .button-container2{
        margin-top: 0.4rem;
    }

    .title h1{
        color: white;
        font-family: 'Share tech mono';
        font-size: 3rem;
        /* border: 1px solid white; */
        text-align: center;
    }
    .title{
        margin-top: 12rem;
    }






    /* ------------------------------------------------------------{LIVE NOW BTN}------------------------------------------------- */




    body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    background-color: black;
}

.grid-container {
    /* border: 1px solid white; */
    position: relative;
    /* top: 25%; */
    left: 8%;
    right: 7%;
    width: 80%;
    color: white;
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns with equal width */
    gap: 60px; /* Gap between grid items */
    padding: 20px;
    height: 100%;
}

.grid-item {
    background-color: transparent;
    padding: 20px 5px 10px 0px;
    text-align: center;
    border: 4px dotted #706c6c;
    border-radius: 25px;
    height: 20rem;
    transition: 0.5s;
    cursor: pointer;
}
.grid-item:hover{
    transform: scale(1.1);
    z-index: 2;
}

.grid-item h2 {
    margin-top: 2%;
    font-family: 'Lexend';
    font-weight: bold;
}

.grid-item p {
    margin-bottom: 0;
}
    
.image img{
    width: 20rem;
}
.image #img1{
    /* width: 90%; */
}
.image #img3{
    width: 25rem;
    margin-bottom: 1.2rem;
}
.image #img4{
    width: 14.5rem;
    margin-bottom: 2rem;
}
.image #img5{
    width: 18rem;
    margin-top: 10%;
    margin-bottom: 4rem;
    
}
.image #img6{
    width: 12rem;
    margin-top: 13px;
    margin-bottom: 2rem;
}

</style>
</html>
