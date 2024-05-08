<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        * {
        box-sizing: border-box;
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
            padding: 20px 20px;
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
            right:120px;
            
        }
        .img-size{
            height:35px;
            position: relative;
            display: block;
            right: -70px;
            bottom: 10px;
        }





            .btn{
                background-color: #D35400;
                padding: 13px;
                width: 20%;
                border-radius:10px;
                position: absolute;
                bottom: 70px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:10px;
                box-shadow:2px 2px 2px 2px whitesmoke;
                cursor: pointer;

            }

.mid-way {
background-image: url("img/lr3.jpg");
background-size: cover;
background-position: center;
background-repeat: no-repeat;
padding: 100px;

float: left;
width: 100%; /* The width is 20%, by default */

}

.left {
background-image: url("img/ht-gold2.JPG");
background-size: cover;
background-position: center;
background-repeat: no-repeat;
padding:100px;
float: left;
width: 100%; /* The width is 20%, by default */

}


        

.main {
  background-color: #F3E4F9;
  padding: 100px;
  float: left;
  width: 100%; /* The width is 60%, by default */
  position: absolute;
  bottom:-300px;
}

.right {
  background-color: #FDF2E9;
  padding:500px 0px 0px 0px;
  float: left;
  width: 100%; /* The width is 20%, by default */
  position: absolute;
  bottom: -800px;
  height: 100px;
}

.wh{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 1.5em;
                text-align: center;
                -ms-text-kashida-space: 10px;
                position: absolute;
                bottom: 200px;
                right: 80px;
                color: red;
}
.wh1{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 0.8em;
                text-align: center;
                right:20px;
                position: absolute;
                bottom: 50px;
                color: blue;
                text-shadow: black;
}

.kk{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                position: absolute;
                bottom: 450px;
                color: yellow;
                left: 1px;
                text-align: center;
                margin-left: auto;
                
}

.ke{
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                position: absolute;
                bottom: 530px;
                left: 20px;
                color: white;
                text-align: center;
                text-shadow: 2px 2px 5px black;
                
}
.se{
    position: absolute;
    bottom:300px;
    margin-left: 1px;
}

            .t-img{
             

            background-image: url("img/oc2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding:200px;
            
            float: left;
            width: max-content;
            width: 80%;
       

            }
                            

            .t-img2{
                width:35%;
                position: relative;
                bottom: -200px;
                left:-1px;
            }

            .t-img3{
                width:35%;
                position: relative;
                bottom: -200px;
                left:450px;
            }
            .mumu{
                width:35%;
                position: absolute;
                bottom:-100px;
            }
            .mumu2{
                width:35%;
                position: absolute;
                bottom:-100px;
                right:100px;
            }
            .mumu3{
                width:35%;
                position: absolute;
                bottom:-250px;
                
            }
            .mumu4{
                width:35%;
                position: absolute;
                bottom:-250px;
                right:100px;
            }

            .a3{
                color: #0A204B;
                font-size: medium;
                font-weight: bolder;
                font-family: Georgia;
                position: absolute;
                bottom:-135px;
            }

            .a4{
                color: #0A204B;
                font-size: medium;
                font-weight: bolder;
                font-family: Georgia;
                position: absolute;
                bottom:-135px;
                right:70px;
            }





/* Use a media query to add a break point at 800px: */
@media screen and (max-width: 800px) {
  .mid-way, .left, .main, .wh, .wh1,  .right, .ke, .se,.kk, .t-img{
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
</style>
</head>
<body>

            <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li>
                            <a href="#">Service</a>
                                    <ul>

                                    <li><a href="#">Online Courses</a></li>
                                    <li><a href="#">Tutoring Service</a></li>
                                    <li><a href="#">Learning Resources</a></li>
                                    <li><a href="#">Learning Community</a></li>
                                        
                                    </ul>
                    
                        </li>
                        <li class="logo-align">
                            <a href="#"><img src="img/s-logoii.JPG" class="img-size" ></a>
                            <ul>
                                <li><a href="#">About</a></li>
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
                        </li>

                                            
                            <ul>
                                <li><a href="#">Who we are</a>
                                
                            </ul>
                        </li>

                     
                </nav>


              
                
                

        <div class="mid-way">
            <h1 class="ke">Learners Anchor?</h1>
        
        <p  class="kk">
        Learners Anchor is an educational platform that offers a wide range of online courses, 
        tutoring services,learning resources, and community engagement opportunities.
        </p>


        </div>
               
        <div class="left">
            
              <button type="btn" class="btn" onclick = "window.location.href='pg2.php';"> BEGIN</button>

        </div>

        <div class="main">
        
        
        <p ><h1><font color="red"><font size="15px">We are</font></h1><font size="3.5px"><font color="blue">we are a dedicated team of passionate individuals who believe in the <br>ower of education to transform lives and shape a better future. <br>We are committed to providing high-quality learning resources and services <br>that empower learners of all ages and backgrounds to reach their full potential.</p></font>
 
        
        </div>

        <div class="right">
            <div class="se">
                <p><b><font color="black"><font size="6px">Our Services</font></b></p><font size="4.0px"><font color="red">We offer a comprehensive range of educational services<br> designed to cater to the diverse needs of learners.<br> Our services include:</p></font>
                <img src="img/oc2.jpg" class="mumu"><p class="a3">Online Courses</p></img>
                <img src="img/ts6-bg.png" class="mumu2"><p class="a4">Tutoring Services</p></img>

                <img src="img/oc2.jpg" class="mumu3"><p class="a5"></p></img>
                <img src="img/ts6-bg.png" class="mumu4"><p class="a6"></p></img>

            
            </div>         
        </div>

      

        </body>
        </html>

