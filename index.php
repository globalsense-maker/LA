<html>
    <head>
        <title>Welcome</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/son.css">
 
        
        <style>
        body{
            background-image: url("img/ayemiii11.JPG");
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            width:100%;
        }
        .btn3{
        display: block;
        width: fit-content;
        color:white;
        padding: 9px 9px;
        margin:auto;
        font-size: 1.0rem;
        box-shadow:2px 2px 2px 2px rgba(7, 22, 92, 0.774);
        cursor: pointer;
        background-color: red;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 100px;
        left: 200px;
    }

    .btn2{
        display: block;
        width: fit-content;
        color:white;
        padding: 9px 9px;
        margin:auto;
        font-size: 1.0rem;
        box-shadow:2px 2px 2px 2px rgba(7, 22, 92, 0.774);
        cursor: pointer;
        background-color: purple;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 100px;
        left: 50px;
    }


        
        .wrapper-main{
    
        width: 100%;
        padding: 100px 0px 100px 0px;
        margin: 0 auto;        
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
        .move{
            position: absolute;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            left:10px;
            top:150px;
            color:blue;
        }

        .move2{
            position: absolute;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 30px;
            left:10px;
            bottom:150px;
            color:#FA2E05;
            text-shadow: 2px 2px #F5F5ED;
        }
        .btn{
        display: block;
        width: fit-content;
        color:white;
        padding: 9px 9px;
        margin:auto;
        font-size: 1.0rem;
        box-shadow:2px 2px 2px 2px rgba(7, 22, 92, 0.774);
        cursor: pointer;
        background-color: purple;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 400px;
        left: 50px;
        width:40%;
    }
    .k{
        text-shadow: 2px 2px #F5F5ED;
    }
      
    </style>
    

</head>
<body>
    <nav class="navbar">
                    <ul>
                        <li><a href="#" class="nvh">Home</a></li>
                        <li><a href="#" class="nva">About</a></li>
                        <li><a href="#" class="nvs">Service</a></li>
                        
                            
                     
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
</nav>
                
             <div class="move">
                <div class="move2">Learners Anchor?</div>
               <p class="k">An educational platform that offers a wide range of online courses, 
               <br>tutoring services, learning resources, and <br>community engagement opportunities.</br></p>
             </div>  
               
               <button type="btn" class="btn" onclick = "window.location.href='pg2.php';"> BEGIN</button>
   
</body>
    </html>
    