
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Black Ops One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Paytone One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>

    <title>Sign-up</title>
</head>
<body>
<?php
if(isset($_REQUEST['msg']))
echo $_REQUEST['msg'];
?>
    <header>
        <nav>
            <ul class="sidebar">
                <li onclick="hideSidebar()"><a href="#">
    
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg> -->
                
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="26" height="26" viewBox="0 0 1080 1080" xml:space="preserve">
                        <desc>Created with Fabric.js 5.2.4</desc>
                        <defs>
                        </defs>
                        <rect x="0" y="0" width="100%" height="100%" fill="transparent"></rect>
                        <g transform="matrix(1 0 0 1 540 540)" id="fb50415e-119e-4c21-b6fd-be9831b00fea"  >
                        <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke"  x="-540" y="-540" rx="0" ry="0" width="26" height="26" />
                        </g>
                        <g transform="matrix(1 0 0 1 540 540)" id="5ae5e0ae-f527-404d-9e7c-aa9b7c501235"  >
                        </g>
                        <g transform="matrix(1 0 0 1 540 540)" id="da39bb81-5d73-414d-8cf9-22b444baeb69"  >
                        <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-480, 480)" d="M 256 -200 L 200 -256 L 424 -480 L 200 -704 L 256 -760 L 480 -536 L 704 -760 L 760 -704 L 536 -480 L 760 -256 L 704 -200 L 480 -424 L 256 -200 Z" stroke-linecap="round" />
                        </g>
                        </svg>
    
    
    
                </a></li>
               <li><a href="#">Blog</a></li> 
               <li><a href="#">Products</a></li> 
               <li><a href="#">About</a></li> 
               <li><a href="#">Forum</a></li> 
               <li><a href="#">Login</a></li> 
            </ul>
            <ul>
                <li><div class="logo"><img src="https://i.postimg.cc/T3G1Y1Yz/new-logo.png"> </div></li>
               <li class="hideOnMobile"><a href="#">Blog</a></li> 
               <li class="hideOnMobile"><a href="#">Products</a></li> 
               <li class="hideOnMobile"><a href="#">About</a></li> 
               <li class="hideOnMobile"><a href="#">Forum</a></li> 
               <li class="hideOnMobile" id="account-btn"><button>ACCOUNT</button></li> 
               <li class="menu-button" onclick="showSidebar()"><a href="#">
                
                <!-- <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg> -->
            
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="26" height="26" viewBox="0 0 1080 1080" xml:space="preserve">
                    <desc>Created with Fabric.js 5.2.4</desc>
                    <defs>
                    </defs>
                    <g transform="matrix(1 0 0 1 540 540)" id="fb50415e-119e-4c21-b6fd-be9831b00fea"  >
                    <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke"  x="-540" y="-540" rx="0" ry="0" width="30" height="30" />
                    </g>
                    <g transform="matrix(1 0 0 1 540 540)" id="5ae5e0ae-f527-404d-9e7c-aa9b7c501235"  >
                    </g>
                    <g transform="matrix(1 0 0 1 540 540)" id="042e3925-0f1d-4fcf-9970-0f563a305646"  >
                    <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-480, 480)" d="M 120 -240 L 120 -320 L 840 -320 L 840 -240 L 120 -240 Z M 120 -440 L 120 -520 L 840 -520 L 840 -440 L 120 -440 Z M 120 -640 L 120 -720 L 840 -720 L 840 -640 L 120 -640 Z" stroke-linecap="round" />
                    </g>
                    </svg>
    
    
            </a></li>
            </ul>
        </nav>
        <script>
            function showSidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display = 'flex'
            }
            function hideSidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display = 'none'
            }
        </script>
        </header>

    <!-- <hr id="border-line"> -->


    <div class="center-block1">
        <div class="title">
            <h1>ERROR - 119 </h1><div class="dots">....................</div>
        </div>
        <style>
            .dots{
                font-family: 'Roboto';
                color: white;
                font-size: 4.2rem;
                position: relative;
                top: -25%;
                margin-left: 10px;
            }
            .title{
                display: flex;
            }

        </style>
        <div class="login-block">

            <div class="login-elements">

            <!-- <h3>Sign-up</h3> -->

            <div class="form-box">
            <form id="login" action="check_forget.php" method="post">
                <label id="fname" for="fname">Enter Verification Code</label> <br>
                <input type="text" id="fname" name="user_otp" ><br><br>

                <button type="submit" name="submit" id="submit-button"> Verify &nbsp;<i class="bi bi-check-circle-fill"></i></i></button> 
              </form>



            </div>



            </div>
        </div>
    </div>


    <div>

    

</div>

<div class="cursor"></div>
<script type="text/javascript">
 const cursor = document.querySelector(".cursor");
 var timeout;
 document.addEventListener("mousemove", (e) => {
     let x = e.pageX;
     let y = e.pageY;

     cursor.style.top = y + "px";
     cursor.style.left = x + "px";
     cursor.style.display = "block"

     function mouseStopped(){
         cursor.style.display = "none";
     }
     clearTimeout(timeout);
     timeout - setTimeout(mouseStopped, 1000);
 });
 document.addEventListener("mouseout", () => {
     cursor.style.display = "none";
 });
 </script>

<footer>
    <div class="footer-logo">
        <img src="https://i.postimg.cc/T3G1Y1Yz/new-logo.png">
        <p>Error-119 is a premier online learning platform that empowers individuals worldwide to unlock their potential through a diverse range of high-quality courses. Whether you're looking to develop new skills, advance your career, or explore your passions, Error-119 a comprehensive selection of​ courses to meet your learning needs.</p>
    </div>
    <div class="footer-office">
        <h3>Office</h3>
        <p>ITPL Road

            Whitefield, Bangalore
            
            Karnataka PIN 560066, India
            <br><br><br><br>
            <i class="bi bi-envelope-fill"></i> &nbsp; Error119@gmail.com
            <br><br><br>
            <i class="bi bi-telephone-fill"></i> &nbsp; +91 901233xxxx
        </p>
    </div>
    <div class="footer-links">
        <h3>Links</h3>
        <a href="#"> HOME </a> <br><br>
        <a href="#"> COURSES </a><br><br>
        <a href="#"> ABOUT US </a><br><br>
        <a href="#"> SIGN-UP </a><br><br>
        <a href="#"> CONTACT-US </a><br><br>
        
    </div>


    <div class="footer-joinus">
        <h3>JOIN US</h3>
        <div class="newsletter"><input id="email-input" placeholder="Enter Email" type="email" > <input id="joinnowbtn" type="submit" value="Join Now"> </div>
        <div class="social-icons">
            <i class="bi bi-facebook"></i> <i class="bi bi-twitter-x"></i> <i class="bi bi-instagram"></i> <i class="bi bi-youtube"></i>
        </div>
    </div>
</footer>

</script>
</body>


<style>
    .social-icons i{
        font-size: 1.5rem;
        padding-left: 1rem;
        transition: 0.1s;
        cursor: pointer;
    }
    .social-icons{
        width: 12rem;
        height:3rem;
        border: 1px solid white;
        padding-top: 20px;
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5rem;
    }
    .footer-joinus #joinnowbtn{
        height: 2.3rem;
        border-radius: 5px;
        border: none;
        width: 5rem;
        font-family: 'Aldrich';
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
    }
    .footer-joinus #joinnowbtn:hover{
        transform: scale(1.1);
        z-index: 2;
        box-shadow: 0px 0px 20px white;
    }
    .footer-joinus #email-input{
        width: 11rem;
        height: 2rem;
        background-color: transparent;
        border: 1px solid white;
        border-radius: 5px;
        padding-left: 10px;
        color: white;
        font-weight: bold;
        font-family: 'Lexend';
        letter-spacing: 1.5px;
    }
    #email-input::placeholder{
        color: white;
        font-weight: bold;
        font-family: 'Lexend';
        letter-spacing: 1.5px;
        opacity: 90%;
        
    }

    .footer-links a{
        text-decoration: none;
        color: white;
        font-family: 'Lexend';
        font-weight: bold;
        line-height: 1.6rem;
        transition: 0.2s;
        opacity: 90%;
    }
    .footer-links a:hover{
        transform: scale(2);
        z-index: 2;
    }
    
    footer{

        display: flex;
        margin-top: 10rem;
        border: 2.5px dotted white;
        height: 25rem;
        width: 95%;
        margin-left: auto;
        margin-right:   auto;
        border-radius: 100px 15px 15px 15px;
        color: white;
        padding-top: 5rem;
        /* box-shadow: 0px 0px 30px white; */
    }
    footer h3{
        font-family: 'Lexend', sans-serif;
        margin-bottom: 5rem;
        font-size: 1.5rem;
    }
    .footer-logo img{
        width: 15rem;
    }
    .footer-logo p{
        font-family: 'Aldrich';
        margin-top: 3rem;
    }
    .footer-logo{
        /* border: 1px solid white; */
        width: 20rem;
        margin-left: 2rem;
        /* margin-top: 4rem; */
        padding: 15px;
    }
    .footer-office, .footer-links, .footer-joinus{
        /* border: 1px solid white; */
        margin-left: 4rem;
        width: 18rem;
        padding: 20px;
        /* padding-left: 30px; */
    }
    .footer-office p, .footer-links p{
        opacity: 80%;
        font-family: 'Aldrich';
        font-size: 18px;
    }
    
</style>

<!-- -----------------------------------------------------Footer CSS------------------------------------------------------ -->





<!-- -----------------------------------------------------Footer CSS------------------------------------------------------ -->








<!-- ------------------------------------------------------SWITCH BUTTON SCRIPT---------------------------------------------------------- -->

<script>
    var x = document.getElementById("login")
    var y = document.getElementById("signup")
    var z = document.getElementById("btn")
    var signupbtn = document.getElementById("signupbtn");
    var loginbtn = document.getElementById("loginbtn");

    function signup(){
        x.style.top = "-300px";
        y.style.top = "-210px";
        z.style.left = "112px";
        signupbtn.style.color = "black";
        loginbtn.style.color = "white";
    }
    function login(){
        x.style.top = "60px";
        y.style.top = "300px";
        z.style.left = "0px";
        loginbtn.style.color = "black";
        signupbtn.style.color = "white"
    }
</script>

<!-- ------------------------------------------------------SWITCH BUTTON SCRIPT---------------------------------------------------------- -->

<style>
    .title{
        height: 5rem;
        /* border: 1px solid white; */
        margin-top: auto;
        margin-bottom: auto;

    }
    #loginbtn{
        color: black;
    }
    #signupbtn{
        color: white;
    }
    .form-box{
        overflow: hidden;
        /* border: 1px solid black; */
        height: 30rem;
        width: 24rem;
    }

    #login{
        position:relative;
        top: 60px;
        /* top:-300px; */
    }
    #signup{
        position: relative;
        top: 300px;
        /* top: -170px; */
    }
    #btn{
        /* left: 105px; */
    }



    /* ------------------------------------------------------Login - Sign-up Button------------------------ */
    .button-box{
            box-shadow: 0 0 30px 5px black;
            margin-top: 10%;
            width: 14rem;
            height: 2.8rem;
            
            border-radius: 10px;
            transform: translateX(50%);
            position: relative;
            left: -10%;
            /* border: 1px solid black; */
            
        }
        .toggle-btn{
            height: 2.5rem;
            color: white;
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
            font-size: rem;
            font-family: 'Lexend';
        }
        #btn{
            top: 0;
            /* left: 0; */
            position: absolute;
            width: 7rem;
            height: 100%;
            background-color: white;
            /* background: linear-gradient(to right, white, black); */
            border-radius: 10px;
            transition: 0.5s;
        }

.cursor{
   z-index: 999;
   position: fixed;
   background: #2696E8;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    pointer-events: none;
    box-shadow: 0 0 20px #2696E8,
                0 0 60px #2696E8,
                0 0 100px #2696E8;
    animation: colors 5s infinite;
    transform: translate(-50%, -50%);
    display: none;
}
@keyframes colors{
   0%{
    filiter: hue-rotate(0deg);
   } 
   100%{
    filter: hue-rotate(360deg);
   }
}


.cursor:before{
    content: '';
    position: absolute;
    background: #2696E8;
    width: 50px;
    height: 50px;
    opacity: 0.2;
    transform: translate(-30%, -30%);
    border-radius: 50%;
}







    /* ------------------------------------------------------Login - Sign-up Button------------------------ */






    /* -------------------------------------------------{center - block }--------------------------------------------------------- */
    .center-block1 h1{
        color: white;
        font-family: 'Black ops one';
        font-size: 4rem;
        margin: auto 0px 0px auto;
        
    }
    .center-block1{
        display: flex;
        /* border: 1px solid white; */
        justify-content: space-around;
        width: 80rem;
        /* width: 90vw;
        height: 34.5rem;
        margin-top: 6%; */
        margin-left:auto;
        margin-right: auto;
        margin-top: 5rem;

    }
    .login-block{
        border: 2px solid white;
        width: 29rem;
        color: white;
        height: 20rem;
        /* padding-top: 1rem; */
        /* padding-left: 20px; */
        /* margin-left: 31%; */
        border-radius: 20px;
        background-color: transparent;
        /* box-shadow: 0px 0px 40px rgb (208, 203, 203); */
    }
    .login-block h3{
        /* color: white; */
        font-family: 'Paytone One';
        font-size: 2rem;
        /* padding-left: 2rem; */
        
    }
    .login-block #forgot-passcode{
        font-family: 'lexend';
        text-decoration: underline;
        color: black;
        margin-left: 5rem;
        cursor: pointer;
    }
    .login-block #forgot-passcode:hover{
        
    }
    .login-elements #submit-button{
        margin-top: 10px;
        height: 3.2rem;
        border:none;   
        cursor: pointer;
     }
    


    /* -----------------------------Login elements----------------------------------- */
    .login-elements{
        /* border: 1px solid black; */
        width: 20.5vw;
        margin-left: 2.5rem;
        margin-right: 2.5rem;
        
        
        
    }

    .login-elements input{
        width: 22.2rem;
        background-color: transparent;
        height: 3rem;
        border-radius: 10px;
        border: 2px dotted rgb(111, 109, 109);
        margin-top: 1rem;
        font-family: 'Lexend';
        font-weight: bold;
        padding-left: 10px;
        font-size: 1rem;
        color: white;
        padding-left: 20px
    }
    .login-elements label{
        opacity: 80%;
        font-family: 'lexend';
        font-weight: bold;
        
    }

    .login-elements #submit-button{
        width: 7rem;
        border-radius: 8px;
        background-color: white;
        color: black;
        font-family: 'lexend';
        font-weight: bold;
        transition: 0.2s;
        margin-left: 10px;
    }
    .login-elements #submit-button:hover{
        transform: scale(1.1);
        z-index: 2;
        box-shadow: 0px 0px 20px white;
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
 /* -------------------------------------------[Header]----------------------------------------- */




        /* ------------------------------------------------------------[LOGO]--------------------------------------- */
        .logo img{
            width: 70%;
            padding-left: 20px;
        }

        /* ------------------------------------------------------------[LOGO]--------------------------------------- */

        #account-btn button{
            width: 8rem;
            height: 3rem;
            border-radius: 10px;
            font-family: 'Lexend';
            font-weight: bold;
            border:none;
            margin-top: 2rem;
            cursor: pointer;
            transition: 0.3s;
            margin-right: 18px;
        }
        #account-btn button:hover{
            transform: scale(1.1);
            z-index: 2;
            box-shadow: 0px 0px 20px white;;
        }


    body{
        background-color: black;
    }
    header *{
    padding: 0;
    padding: 0;
    }
    nav{
    background-color: black;
    box-shadow: 3px 3px 5px rgba(255, 129, 129, 0.1);
    width: 90%;
    margin: 0px 5% 0px 5%;
    height: 9rem;
    border: 2px dotted white;
    border-radius: 15px;
    
}
nav ul{
    width: 100%;
    list-style: none;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
nav li{
    height: 7rem;
    font-family: 'Lexend';
}

nav a{
    height: 100%;
    padding: 0 30px;
    text-decoration: none;
    display: flex;
    align-items: center;
    color: white;
    transition: 0.2s;
}
nav a:hover{
    transform: scale(1.2);
    z-index: 2;
    text-shadow: 0px 0px 2rem white;
}
nav a:hover{
    background-color: transparent;
}
nav li:first-child{
    margin-right: auto;
}
.sidebar{
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 250px;
    z-index: 999;
    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    margin-right: 2rem;
    display: none;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
}
.sidebar li{
    width: 100%;
}
.sidebar a{
    width: 100%;
}
.menu-button{
    display: none;
}
@media(max-width: 800px){
    .hideOnMobile{
    display: none;
    }
    .menu-button{
        display: block;
    }
}
@media(max-width: 400px){
    .sidebar{
        width: 100%;
    }
}

</style>

</html>