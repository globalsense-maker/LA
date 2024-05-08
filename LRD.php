<html>
    <head>
        <title>Learning-Resources-DASHBOARD</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/son.css">
 
        
        <style>
        body{
            background-image: url("img/lr3.JPG");
            background-size: contain;
            background-repeat: repeat;
            color: white;
            text-align: center;
            width:100%;
        }
        .btn3{
        display: block;
        width: fit-content;
        color:white;
        padding: 9px 9px;
        margin:auto;
        font-size: 2.0rem;
        box-shadow:2px 2px 2px 2px rgba(7, 22, 92, 0.774);
        cursor: pointer;
        width:30%;
        background-color: red;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 50px;
        left: 200px;
    }

    .btn2{
        display: block;
        width: fit-content;
        color:white;
        padding: 9px 9px;
        margin:auto;
        font-size: 2.0rem;
        box-shadow:2px 2px 2px 2px rgba(7, 22, 92, 0.774);
        cursor: pointer;
        background-color: purple;
        width:30%;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 100px;
        left: 50px;
    }

    .pp{
        display: block;
        width: fit-content;
        color:black;
        padding: 9px 9px;
        margin:auto;
        font-size: 2.0rem;
        box-shadow:2px 2px 2px 2px rgba(7, 22, 92, 0.774);
       
        background-color: #ECAF0B;
        width:40%;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 50px;
        left: 100px;
    }


        
        .wrapper-main{
    
        width: 100%;
        padding: 100px 0px 100px 0px;
               
        background-color: whitesmoke;
        position: absolute;
        top: 300px;
     
        }

        .navbar {
            background-color: #05185B ;
            
            position: absolute;
            top:0px;
            right: -11px;
            
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
      
    </style>
    

</head>
<body>
    <div class="wrapper-main">
        <button type="btn" class="btn2" onclick = "window.location.href='parent-login.php';"> PDF</button>
        <button type="btn" class="btn3" onclick = "window.location.href='tutor-login.php';"> VIDEO</button>
    </div>
    <nav class="navbar">
                    <ul>
                        <li><a href="#" class="nvh">Home</a></li>
                        <li><a href="#" class="nva">About</a></li>
                        <li><a href="#" class="nvs">Service</a></li>
                        
                            <p class="pp"> Reasources DASHBOARD</p>
                     
                        <li class="logo-align">
                            <a href="#"><img src="img/s-logoii.JPG" class="img-size" ></a>
                            <ul>
                                <li><a href="#" font-color="blue">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Online Courses</a></li>
                                <li><a href="#">Tutoring Service</a></li>
                                <li><a href="#">Learning Resources</a></li>
                                <li><a href="#">Learning Community</a></li>
                                <li><a href="#">FAQ</a></li>

                            </ul>

                                   
                              
                        </li>

       
        
       
    </div>
</body>
    </html>
    