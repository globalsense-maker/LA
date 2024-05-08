<?php 
include('tutor-function.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
    <link rel="stylesheet" href="css/loginn.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
    
    body{
                background-image: url("img/calc4.png");
                background-repeat: no-repeat;
                background-size: cover;
               
            
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
                bottom: 210px;
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
                bottom: 160px;
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
                bottom: 110px;
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
                bottom: 60px;
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
                bottom: 10px;
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
            background-image: url('img/myc.jpg');
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

            .cal{
                position: absolute;
                bottom: 500px;
                font-size: 1.4em;
                font-weight: bolder;
                color:yellow;
                border-color: #0A0434;
                border-radius: 10px;
                text-shadow: 2px 2px #000000;
                font-family: Georgia, 'Times New Roman', Times, serif;
                left:70px;
                
            
            }

          
            
            .selectone1{
                padding: 10px;
                width: 45%;
                position: absolute;
                left:100px;
                bottom:450px;
                background-color: red;
                border-radius: 2px;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 0.7em;
                color:white;
                border-radius: 10px;
                
            }
            .selectone{
                padding: 10px;
                width: 45%;
                position: absolute;
                left:100px;
                bottom:400px;
                background-color: black;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 0.7em;
                color:white;
                border-radius: 10px;

            }

            .selectone2{
                padding: 10px;
                width: 45%;
                position: absolute;
                left:100px;
                bottom:350px;
                background-color: green;
                border-radius: 2px;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 1.0em;
                color:white;
                border-radius: 10px;
                
            }
            .love{
                position:absolute;
                left:10px;
                bottom:300px;
                color: yellow;
                font-family: 'Times New Roman';
                font-weight: bolder;
                font-size:x-large;
            }
            .myuser{
                position: absolute;
                left:150px;
                top: 10px;
            }
            .myuser2{
                position: absolute;
                left:100px;
                bottom: 400px;
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
<div class="linear-container">
<p class="cal"> Calculate Tutor Fee</p>

<form method="POST">
    <div >
        <select class="selectone" name="cars">
            <option selected disabled>Select exam</option>
            <option value="7000"> IGCSE</option>
            <option value="7000"> CHECKPOINT</option>
            <option value="12000"> A-LEVEL</option>
            <option value="7000"> OTHERS</option>
        </select>
    </div>
    <input class="selectone2" type="submit"name="submit" value="calculate"/>

    <select class="selectone1" type="text" class="f-status" name="first"  placeholder=" status"  required="required">
                    <option value="None">Select Hour/week/month</option>
                        <option value="1">1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option>
                        <option >9</option>
                        <option >10</option>                           
                        <option >11</option>
                        <option >12</option>
                        <option >13</option>
                        <option >14</option>
                        <option >15</option>
                        <option >16</option>
                        <option >17</option>
                        <option >18</option>
                        <option >19</option>
                        <option >20</option>
                        <option >21</option>
                        <option >22</option>
                        <option >23</option>
                        <option >24</option>
                        <option >25</option>
                        <option >26</option>
                        <option >27</option>
                        <option >28</option>
                        <option >29</option>
                        <option >30</option>
                        <option >31</option>
                        <option >32</option>
                        <option >33</option>
                        <option >34</option>
                        <option >35</option>
                        <option >36</option>
                        <option >37</option>
                        <option >38</option>
                        <option >39</option>
                        <option >40</option>
                    
        </select>

</form>
    <div class="love">
        <?php
            if (isset($_POST['submit'])){
                $fullname = $_POST['first'];
                $getcar=$_POST['cars'];
                $ans=$fullname * $getcar;
                //echo  'The amount is:<br>'.'NGN'.$ans;
                echo  'Amount to Pay:<br>'.'NGN'.(number_format($ans,2));
            }
        ?>
    </div>
 
</img>
            <div class=" myuser2">
               <?php if (isset($_SESSION['success'])) : 
                
               
                ?>
                    <div class="error success" >
                        <strong> <font color="green" size="5"><?php echo $_SESSION['success']; unset($_SESSION['success']);?></h3></p></a></strong>
                    </div>
                <?php endif ?>
            </div>


                
                <div class="myuser">
                    <?php  if (isset($_SESSION['user'])) : $username?>
                            <h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']; ?></h1></font></p>
                        <?php endif ?>
                
               </div>    


</div>
    



</body>
</html>
