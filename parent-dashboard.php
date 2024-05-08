<?php 
include('tutor-function.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Parent Dashboard</title>
    <link rel="stylesheet" href="css/loginn.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
        body{
            background-image: url('img/tutor1.JPG');
            background-repeat:repeat;
            background-size: contain;
        }

.wrapper-main{

        
background-size: cover;
background-repeat: repeat;

}

.wrapper-main{
position: absolute;
width: 100%;
padding: 200px 10px 200px 10px;
margin: 0 auto;

}



@media only screen and (max-width: 600px) {
.wrapper-main{
    width: 100%;
    
}

}
.container{

text-align: center;
margin-bottom : 2rem;
line-height: 0.5
}


@media only screen and (min-width: 601px) and (max-width: 768px){
.wrapper-main{
    width: 100%;

}

}

.navbar {
    background-color: #355A03;
    position: absolute;
    top:30px;
    right: 0px;
    width: 100%;
    padding: 10px 0px 0px 0px;
    margin: 0 auto;
    border: 0px solid rgba(7, 22, 92, 0.774);
    
    
}

.navbar-footer {
    background-color:  #0D1249;
    position: absolute;
    bottom:50px;
    right: 0px;
    width: 100%;
    padding: 100px 100px 100px 100px;
    margin: 0 auto;
    border: 0px solid rgba(7, 22, 92, 0.774);
    
    
}



.nvh{
    position: absolute;
    margin-left: 1px;
    margin-top: -40px;
}

.nva{
    position: absolute;
    margin-left: 100px;
    margin-top: -40px;
}

.nvs{
    position: absolute;
    margin-left: 200px;
    margin-top: -40px;
}


.navbar ul {
    list-style-type: none;
 
}

.navbar li {
    display: inline-block;
}

.navbar li a {
    color: white;
    font-weight: bolder;
    font-size: 15px;
    font-family: Georgia;
    display: block;
    padding: 10px;
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
.navbar ul li a:hover {
    background-color: whitesmoke;
    
}
.logo-align{
    position:absolute;
    right:100px;
    margin-top: -25px;

    
}
.img-size{
    height:35px;
    position: relative;
    display: block;
    right: -70px;
    bottom: 10px;
}
        .login-container{
            
            width: 90%;

        }
        .container{
        padding: 30px;
        height: 300px;
        
        width: 90%;
        background-color:#E3DDCE ;
        border-radius: 5px;
        position: relative;
       
        top:100px;
        position: absolute;
        left: 20px;
        color:black;
        
        }
    .form-input{
      background: whitesmoke;
      border: 1px solid #eeeeee;
      padding: 12px;
      width: 70%;
      left:50px;
      position: absolute;
      bottom:120px;
  }
  .form-footer{
      position: absolute;
      bottom:30px;
      left:50px;
      
  }
  .form-button{
      display: block;
      background: red;
      border: 1px solid #ddd;
      color: #ffffff;
      padding: 10px;
      width: 70%;
      text-transform: uppercase;
      left:50px;
      position: absolute;
      bottom:60px;
      cursor: pointer;
  }

  .btn{
                background-color:  #0A0434;
                padding: 10px;
                width: 35%;
                border-radius:6px;
                position: absolute;
                bottom: 500px;
                color: white;
                font-weight: bolder;
                font-size: 10px;
                font-family: Georgia;
                left:20px;
                cursor: pointer;
    }

    .btn1{
                background-color:  #E59E05;
                padding: 10px;
                width: 45%;
                border-radius:6px;
                position: absolute;
                bottom: 450px;
                color: white;
                font-weight: bolder;
                font-size: 10px;
                font-family: Georgia;
                left:50px;
                cursor: pointer;
            }

            .btn2{
                background-color:  blue;
                padding: 10px;
                width: 45%;
                border-radius:6px;
                position: absolute;
                bottom: 400px;
                color: white;
                font-weight: bolder;
                font-size: 10px;
                font-family: Georgia;
                left:100px;
                cursor: pointer;
            }

            .btn3{
                background-color:  black;
                padding: 10px;
                width: 45%;
                border-radius:6px;
                position: absolute;
                bottom: 350px;
                color: white;
                font-weight: bolder;
                font-size: 10px;
                font-family: Georgia;
                left:150px;
                cursor: pointer;
            }

            
            .btn4{
                background-color:  green;
                padding: 10px;
                width: 45%;
                border-radius:6px;
                position: absolute;
                bottom: 300px;
                color: white;
                font-weight: bolder;
                font-size: 10px;
                font-family: Georgia;
                left:200px;
                cursor: pointer;
            }

            .linear-container{
            padding: 30px;
            height: 300px;
            background-image: url('img/eyes1.JPG');
            width: 90%;
            background-color:#E3DDCE ;
            border-radius: 5px;
            position: relative;
            top:100px;
            position: absolute;
            left: 20px;
            color:black;
            padding-bottom: 22em;
            
            }
      
         
      </style>
</head>
<body>
<div class="wrapper-main"></div>
    <nav class="navbar">
                    <ul>
                        <li><a href="#" class="nvh">Home</a></li>
                        <li><a href="#" class="nva">About</a></li>
                        <li><a href="#" class="nvs">Service</a></li>
                        
                            
                     
                        <li class="logo-align">
                            <a href="#"><img src="img/s-logoii.JPG" class="img-size" ></a>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Online Courses</a></li>
                                <li><a href="#">Tutoring Service</a></li>
                                <li><a href="#">Learning Resources</a></li>
                                <li><a href="#">Learning Community</a></li>
                                <li><a href="#">FAQ</a></li>

                            </ul>

                                   
                              
                        </li>

    </nav>
    <nav class="navbar">
               

    </nav>


    


                <div class="linear-container">
                <nav class="navbar-footer"></nav>
                    
                <h3 align="center"><font size="5"><font color="#AD0BBD" ><b><font color="blue"><font size="5">Parent</font><br><font color="red"> DASHBOARD</font></b></a></h3>
				
            
                <button type="btn1" class="btn" ><a style="text-decoration:none";  href="get-a-tutor.php"><font color="white">Get A Tutor</font></button>
                <button type="btn2" class="btn1" ><a style="text-decoration:none";  href="calculator.php"><font color="white">Calculator</font></button>
                <button type="btn3" class="btn2" ><a style="text-decoration:none";  href="view_tutor.php"><font color="white">View Tutor</font></button>
                <button type="btn4" class="btn3" ><a style="text-decoration:none";  href="learning-resources.php"><font color="white">Resources</font></button>
                <button type="btn4" class="btn4" ><a style="text-decoration:none";  href="online-courses.php"><font color="white">Online Courses</font></button>
       
               

                </div>
				
            
                
                <!--Username Input-->
                
            
				
                
           

   
</body>
</html>
