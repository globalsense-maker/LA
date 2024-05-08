<!doctype html>
<head>
    <title>responsive-page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/matters.css">
    <style>
        body{
            background-image: url("img/lr2.JPG");
            background-size: cover;
            background-repeat: repeat;
            color: white;
            text-align: center;
        }

        
        .wrapper-main{

        background-image: url("img/ayemiii12.JPG");
        background-size: cover;
        background-repeat: repeat;

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
            margin-left: -200px;
            margin-top: -40px;
        }

        .nva{
            position: absolute;
            margin-left: -80px;
            margin-top: -40px;
        }

        .nvs{
            position: absolute;
            margin-left: 30px;
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
      
    </style>
    

</head>
<body>
    <div class="wrapper-main">
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

       
        
        <button type="btn" class="btn" onclick = "window.location.href='pg2.php';"> Start</button>
    </div>
</body>
<html>