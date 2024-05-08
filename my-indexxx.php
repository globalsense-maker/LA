<html>
    <head>
        <title>welcome</title>
        <meta charset = "utf-8">
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
        box-sizing: border-box;
        }
        body{
            background-image: url("img/ht-gold22.JPG");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        
        .btn{
                background-color: #D35400;
                padding: 13px;
                width: 20%;
                border-radius:10px;
                position: absolute;
                bottom: 60px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:200px;
                box-shadow:2px 2px 2px 2px whitesmoke;
                cursor: pointer;

            }

            .k {
            color: yellow;
            font-weight: bolder;
            font-size: 15px;
            font-family: Georgia;
            position: absolute;
            bottom: 250px;
            left: 30px;
            inline-size: auto;
            line-height: 1.5;
        }

        .h{
                color: white;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 400px;
                left: 40px;
                text-shadow: 2px 2px 5px black;
            }
        




      
        .navbar {
            background-color: white;
            position: relative;
            z-index: 999;
            top:-10px;
            width:100%;
            
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background: whitesmoke;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: red;
            font-weight: bolder;
            font-size: 15px;
            font-family: Georgia;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        /* Style the dropdown menu */
        .navbar ul ul {
            position: absolute;
            top: 100%;
            display: none;
        }

        .navbar ul ul li {
            display: block;
        }

        .navbar li:hover ul {
            display: block;
        }

        /* Change the background color of dropdown links on hover */
        .navbar ul ul li a:hover {
            background-color: white;
        }
        .logo-align{
            position:absolute;
            right:100px;
            
        }
        .img-size{
            height:35px;
            position: relative;
            display: block;
            right: -100px;
            bottom: 10px;
        }

        .w-cont{
                padding: 50px;
                width:102%;
                background-color: #EEF0F7;
                position: absolute;
                top: 720px;
                height:50%;
               
               right: 2px;
            }
            .wh{
                color:#A92E0A;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: bolder;
                font: 4em;
                text-align: center;
                position: relative;
                bottom: -50px;
            }
            .wh1{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 1.5em;
                text-align: center;
                -ms-text-kashida-space: 10px;
                position: absolute;
                bottom: -100px;
                color: #0A204B;
            }
            .wh2{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 2.0em;
                text-align: center;
                left:550px;
                position: absolute;
                bottom: 500px;
                color: blue;
                text-shadow: black;
            }

            .wh3{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 1.5em;
                text-align: center;
                -ms-text-kashida-space: 10px;
                position: absolute;
                bottom: 450px;
                color: #000000;
            }
            .t-img{
                width:35%;
                position: relative;
                bottom: -45px;
                left:-70px;
            }

            .t-img2{
                width:36%;
                position: relative;
                bottom: -50px;
                left:-50px;
            }

            .t-img3{
                width:35%;
                position: relative;
                bottom: 220px;
                left:850px;
            }

            .w-cont2{
                padding: 100px;
                width:100%;
                background-color: #EFDDF5;
                position: absolute;
                top: 1115px;
                height:100%;
                right: 2px;
            }

            .a{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 1.3em;
                text-align: center;
                -ms-text-kashida-space: 5px;
                position: absolute;
                bottom: 140px;
                color: red;
                left: 150px;
            }
            .a1{
                
                font-weight: lighter;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 1.3em;
                text-indent: 0px;
                line-height: 1.0em;
                position: absolute;
                bottom: -1px;
                color: #000000;
                left:20px;
            
            }


    </style>  
         
    </head>
    <body>

                    <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="logo-align">
                            <a href="#"><img src="img/s-logoii.JPG" class="img-size" ></a>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>

                        <li><a href="#">About</a>
                      
                            <ul>
                                <li><a href="#">Who we are</a>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#">Service</a>
                            <ul>
                                <li><a href="#">Online Courses</a></li>
                                <li><a href="#">Tutoring Service</a></li>
                                <li><a href="#">Learning Resources</a></li>
                                <li><a href="#">Learning Community</a></li>
                            </ul>

                            
                        </li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </nav>



               <p class="h"> Learners Anchor?</p>
             
               <p class="k"><br>Learners Anchor is an educational platform <br>that offers a wide range of online courses, 
               <br>tutoring services, learning resources, <br>and community </br>engagement opportunities.</p>
             
                <button type="btn" class="btn" onclick = "window.location.href='pg2.php';"> BEGIN</button>


                <div class="w-cont">
                    <h1 class="wh"> Who we are </h1>
                    <p class="wh1">We are a dedicated team of passionate individuals who believe in the power of education to transform lives and shape a better future. We are committed to providing high-quality learning resources and services that empower learners of all ages and backgrounds to reach their full potential.</p>

                </div>


                <div class="w-cont2">
                    <p class="wh2">  Services we Offer</p>
                    <p class="wh3">We offer a comprehensive range of educational services designed to cater to the diverse needs of learners. Our services include:</p>
                    <img src="img/oc2.jpg" class="t-img"></img>
                    
                    <img src="img/ts6-bg.png" class="t-img2"></img>
                    <img src="img/lr2.jpg" class="t-img3"></img>

                    <p class="a"> <a href="online-courses.php"style="text-decoration:none;"> Online Courses </p>
                    <p class="a1">We provide a wide array of online courses on<br> various subjects, from academic disciplines<br> to professional development. Our courses are<br>developed by experienced educators <br> and industry  experts, ensuring that learners <br>receive relevant and up-to-date knowledge.</p>
                    
                    <p class="a3" > <a href="tutoring_service.php"style="text-decoration:none;"> Tutoring Services <a></p>
                    <p class="a4"> Our dedicated team of qualified tutors is available<br> to provide personalized and tailored support to learners.<br> Whether it's academic tutoring, test preparation,<br> or assistance with specific subjects, our tutors are here<br> to guide and mentor students on their educational journey.</p>
                    <p class="a5"> <a href="learning-resources.php"style="text-decoration:none;">Learning Resources</p>
                    <p class="a6"> We curate and develop a vast collection of learning<br>resources, including textbooks, study guides,<br> interactive materials, and educational apps.<br> These resources are designed to enhance learning<br> outcomes and provide learners with the tools they <br>need to succeed.</p>
                
                </div>
            
    </body>
    </html>
    