<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Layout model</title>
        <meta charset="utf-8">
        <meta name="viewport" content="widith=device-widith, initial-scale=1.5">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.cdnfonts.com/css/astro" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/voltec" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Kode Mono' rel='stylesheet'>
        <link href="https://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    </head>
    <body>
        <section class="llay">
            <div class="heading">
                <h1>Choose the duration</h1>
                
            </div>
            <div class="container">
                
                    
                
                <div class="container2">
                    <button class="cta-button1" onclick="location.href='cd.php'"> 30 mins/day </button>
                    <button class="cta-button2">1 hr/day</button><br>
                    <button class="cta-button3">1.5 hr/day</button>
                    <button class="cta-button4">2 hr/day</button><br>
                </div>
            </div>
            <div class="container3">
                
            </div>
        </section>
        <style>
            @font-face{
    font-family: 'nothing';
    src:url("C:/Users/ak967/Downloads/webfonts_Dot-Matrix/Dot-Matrix.ttf");
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: "Arial", sans-serif;
}
body{
    background-color: black;
}
.llay{
    overflow: hidden;
}
.heading h1{
    color: #ff6347;
    font-size: 50px;
    text-align: center;
    margin-top: 35px;
    font-weight: bold;
    font-family: 'Kode Mono';
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width:80rem;
    height:15rem;
    margin:50px auto;
    /* border: 1px solid white; */
}

.container button{
    display: inline-block;
    background-color: transparent;
    color:white;
    width: 20rem;
    height: 8rem;
    /* margin: 5%; */
    border: 2px dashed white;
    margin-bottom: 3%;
    margin-left: 2%;
    border-radius: 10px;
    font-size: 2rem;
    transition: 0.5s;
    cursor: pointer;
    font-family: 'nothing';
}
.container button:hover{
    transform: scale(1.1);
    z-index: 2;
}
.container2{
    /* border: 1px solid white; */
    margin-top: 4rem;
    width: 60rem;
    padding-left: 8rem;
}
.container3{
    display: flex;
    justify-content: right;
    width: 77%;
}
.container3 button{
    display: inline-block;
    background-color: #FFD700;
    color: black;
    padding: 12px 24px;
    border-radius: 5px;
    font-size: 20px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
    
    margin: 10px;
}
.container3 button:hover{
    background-color: #FFD700;
    transform: scale(1.1);
}
        </style>
    </body>

</html>