<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  </head>
  <body>

    <header>
      <div class="logo">
        <img src="https://i.postimg.cc/T3G1Y1Yz/new-logo.png" alt="Error-119 LOGO">
      </div>
      <button id="backtodashboard" onclick="location.href='Roadmap.php'"><i class="bi bi-caret-left-fill"></i> Back to Roadmaps </button>
    </header>


    <style>

      .logo{
        /* border: 1px solid white; */
        width: 15rem;
        margin-top: 1.5rem;
      }
      .logo img{
        width: 15rem;
      }
      header button{
        height: 3.5rem;
        width: 11rem;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px solid white;
        border-radius: 10px;
        font-family: 'Aldrich';
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;

      }
      header button:hover{
        transform: scale(1.1);
        z-index: 2;
        box-shadow: 0px 0px 20px white;
      }
      header{
        justify-content: space-between;
        display: flex;
        /* border: 1px dotted white; */
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        height: 10rem;
        padding-right: 5rem;
        padding-left: 2rem;
      }
  
      body{
        background-color: black;

      }
      
      .container{
        width: 120vh;
        height: 67.5vh;
        margin-top: 100px;
        margin-left: 60px;
        border: 1px solid white;
        box-shadow: 0px 0px 20px white;
        border-radius: 2.5%;

      }
      .heading h1{
        color: red;
      }
      </style>

    <div class="main-container">
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player" class="container"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '500px',
          width: '750px',
          videoId: 'pgW_xENE9fE',  // Replace with your video ID
          playerVars: {
            'playsinline': 1,
            'start': 0,  // Start the video from 0 seconds
            'end': 90    // End the video at 30 seconds
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 30000);  // 30 seconds = 30,000 milliseconds
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
        </script>
      <div class="text-container">
        <h1>Notes...</h1>
        <textarea></textarea>
        <button class="but-container">Save </button>
      </div>
  
      </div>
  </body>




    <style>
      .main-container{
        display: flex;
      }
      .text-container h1{
        color: white;
        text-align: center;
      }
      .text-container{
        margin: 60px;
        align-items: center;
      }
      .text-container textarea{
        width: 60vh;
        height: 56.5vh;
        background-color: #FFD700;
        /* box-shadow: 0px 0px 30px #1f51ff; */
        border-radius: 2.5%;
        font-size: 20px;
        padding: 5%;
      }
      .text-container button{
        display: flex;
        justify-content: ;
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
      .text-container button:hover{
        background-color: #FFD700;
        transform: scale(1.1);
      }















          /* --------------------------------------------------HEADER----------------------------------------------------------------------- */
    .block-line{
        background-color: white;
        width: 30vw;
        height: 2vw;
        margin-left: 65%;
        margin-right: 10%;
        position: absolute;
        top: 540px;
        border-radius: 0px 0px 0px 18px;
    }
    body{
            background: black;
        }
        
        #border-line{
            opacity: 50%;
            border-radius: 100%;
            width: 80%;
        }

    </style>
</html>
