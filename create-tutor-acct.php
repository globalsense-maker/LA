<?php include('tutor-function.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create  Tutor Account</title>
    
    <meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <style>

body{
        

    background-image: url("img/creat-acct.avif");
    background-size: cover;
    background-repeat: repeat;
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
            background-color: whitesmoke;
            position: absolute;
            top:0px;
            right: 0px;
            width: 100%;
            padding: 10px 0px 0px 0px;
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
            color: red;
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
        .container{
            position: absolute;
            top:-100px;
        }

        .form-input{
        background: #EFF0F7;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 90%;
        }
        
        .form-button{
        display: block;
        background: #BA0483;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 90%;
        text-transform: uppercase;
        cursor: pointer;
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


        <form class="login-form" action="tutor-login.php" method="post">


            <div class="container">
             
            
            </div>    
                                            
                                    
             <!--Username Input-->
                <div class="form-group"> 
                <h3><font size="6"><font color="#444BB8 "><b>Create Tutor Account </b></a></h3>
                <input type="text" class="form-input" name="username" placeholder="username" required="Invalid Username">
                </div>

				<!--Email Input-->
                <div class="form-group"> 
                <input type="text" class="form-input" name="email" placeholder="email" required="Email Username">
                </div>

                <!--Password Input-->
                <div class="form-group"> 
                <input type="password" class="form-input" name="password_1" placeholder="Your PIN" required="Wrong Password">
                </div>

                <!--confirm Password -->
                <div class="form-group">
                <input type="password" class="form-input" name="password_2" placeholder="Confirm PIN" required="Wrong Password">
                </div>

                <!--Login Button-->
                <div class="form-group">
                    <button class="form-button" type="submit" name="register_btn"><b><font size="3">Create</a></b></button>
                <p>
                <div class="form-footer">
                <font color="red">Already Have Account? <a href="tutor-login.php"><font size="3"><b>SIGN IN</b></a>
                </div>
                </p>
          
                </div>
           
            
        </form>

</body>
</html>