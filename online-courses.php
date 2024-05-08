<?php
include('functions.php');
//include_once 'db_connect.php';
//include 'filesLogic.php';


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");
}
?>



<!DOCTYPE html>
<html lang="en">



  <head>
    
    <link rel="stylesheet" href="style.css">
    <title>online courses</title>
    <style>
         body{
                background-image: url("img/lrrr.jpg");
                background-repeat: repeat;
                background-size:contain;
           
            }
            .container{
                padding: 10px;
                background-color: blueviolet;
                height:40%;
                width:30%;
                position: absolute;
                left:1000px;
                border-radius: 10px;
                top:350px;

            }
            .img-size{
                width: 30%;
                height:30%;
            }
            .legit{
                position: relative;
                left:100px;
            }

            .a1{
                color:blue;
                font-size: 1.5em;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .a{
                color:red;
                font-size: 2.5em;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif; 
                position: relative;
                top:40px;
            }
            .bttn{
                padding: 10px;
                background-color: #03610D;
                border-radius: 5px;
                font-size: 1em;
                font-family: Georgia;
                position: absolute;
                left: 800px;
                color:white;
                cursor: pointer;
            }

            .hh{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:200px;
                text-shadow: 1px 1px 1px black;

            }

            .hh1{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:600px;
                text-shadow: 1px 1px 1px black;

            }

            .hh2{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:1000px;
                text-shadow: 1px 1px 1px black;

            }

            
            .hh3{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:1400px;
                text-shadow: 1px 1px 1px black;

            }
            .vng{
                padding:10px;
                width: 100%;
                height: 40px;
                background-color: #EED9D9;
                position:absolute;
                top: -20px;
            }
    

    </style>
  </head>
  <body>
        <nav class="vng"></nav>
                    <p class="hh"><a href="#"style="text-decoration:none;">Home </p></a>
                    <p class="hh1"><a href="#"style="text-decoration:none;"> About</p></a>
                    <p class="hh2"><a href="#"style="text-decoration:none;"> Service</p>
                    <p class="hh3"><a href="#"style="text-decoration:none;"> FAQ</p>
    <center>
                <p class="a"> Online Courses </p>
                <img src="img/oc2.JPG" class="img-size">
                <p class="a1">We provide a wide array of online courses on various subjects, from academic disciplines to professional development.<br> Our courses are developed by experienced educators and industry <br> experts, ensuring thatlearners receive relevant and<br> up-to-date knowledge.</p>
        
    </center>
                
      
    <button class="bttn" onclick = "window.location.href='online-c-subscr.php'"> Subscribe Here</button>
    <a href="https://accounts.google.com/v3/signin/confirmidentifier?continue=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&flowEntry=ServiceLogin&flowName=GlifWebSignIn&followup=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&ifkv=AXo7B7VHDjRh6Tpx9GUdelKckpWhWrjam_HCRocfqp3EE15shJLhIESAYF5-SMSNDM9f-rTPMGd0&passive=1209600&service=classroom&dsh=S1275232552%3A1692383286142144"> click</a>
</body>
</html>