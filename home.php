<?php 
include('functions.php');
include_once 'db_connect.php';



if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");
}
?>






<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
	<link rel="stylesheet" href="css/home.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  	<style>
            body{
                background-image: url('img/ht-img5.jpg');
                background-repeat:repeat;
                background-size: contain;
                
            }
            .log{
                position: absolute;
                left: 30px;
                bottom: 500px;
                font-size: medium;
                font-weight: bolder;
                text-decoration: none;

            }
            .img-size{
                width:35%;
                position: absolute;
                left: 1050px;
                bottom:100px;
            }
            .error{
                position: relative;
                top: -300px;
            }

            .username{
                position: relative;
                top: -300px;
            }

            .dash-design{
                width:10%;
                padding: 5%;
                position: absolute;
                bottom: 250px;
                left:1280px;
                background-color: rgb(2, 44, 2);
                border-radius: 150px;
                height: 5%;
            }





            .btn{
                background-color: rgb(29, 3, 90);
                padding: 11px;
                width: 8%;
                border-radius:8px;
                border: 0px;
                position: absolute;
                bottom: 200px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1100px;
                text-shadow:  2px 2px 2px black;
                cursor: pointer;
            }

            .btn2{
                background-color: black;
                padding: 11px;
                width: 8%;
                border-radius:8px;
                border: 0px;

                position: absolute;
                bottom: 200px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1300px;
                
                cursor: pointer;
            }

            .btn3{
                background-color: rgb(165, 11, 11);
                padding: 11px;
                width: 8%;
                border-radius:8px;
                border: 0px;

                position: absolute;
                bottom: 200px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1500px;
                
                cursor: pointer;
            }


            .btn4{
                background-color: rgb(18, 184, 206);
                padding: 11px;
                width: 8%;
                border-radius:8px;
                border: 0px;

                position: absolute;
                bottom: 140px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1100px;
                
                cursor: pointer;
            }

            .btn5{
                background-color: rgb(167, 12, 133);
                padding: 11px;
                width: 8%;
                border-radius:8px;
                border: 0px;

                position: absolute;
                bottom: 140px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1300px;
                
                cursor: pointer;
            }


            .btn6{
                background-color: rgb(18, 206, 103);
                padding: 11px;
                width: 8%;
                border-radius:8px;
                border: 0px;

                position: absolute;
                bottom: 140px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1500px;
                
                cursor: pointer;
            }
            .img-sizee{
                position: absolute;
                bottom: 420px;
                left:1280px;

            }
            .form-footer{
                position: absolute;
                left: -200px;
                bottom: 50px;
                background-color: red;
                padding:10px;
                border-radius: 5px;
            }
        </style>
        
	</head>

<body>

                       
                       
							
		
            <img src="img/mmm-img1.JPG" class="img-size">
                    
              
                    
				

                    <button type="btn" class="dash-design"> <div class="das">Dashboard</div></button>

                    <button class="btn" onclick = "window.location.href='get-a-tutor.php';"> Key-in-Data</button>
                    <button  class="btn2" onclick = "window.location.href='calculator.php';"> Calculator</button>
                    <button  class="btn3" onclick = "window.location.href='view_tutor.php';"> View Tutor</button>


                    <button class="btn4" onclick = "window.location.href='learning-resources.php';"> Resources</button>
                    <button  class="btn5" onclick = "window.location.href='get-a-tutor.php';"> Community</button>
                    <button  class="btn6" onclick = "window.location.href='get-a-tutor.php';"> Online</button>

						<!-- notification message -->


                        <form class="img-sizee" method="POST">

                            



                                <?php  if (isset($_SESSION['user'])) : $username?>
                                    <h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']; ?></h1></font></p>
                                <?php endif ?>
                                
                                <div class="form-footer">
                                   <a style="text-decoration:none"; href="parent-login.php"><font color="white"><b>LogOUT</b></a>
                                </div>



                        </form>
					
            </img>		
                    
                       
		


</body>
</html>