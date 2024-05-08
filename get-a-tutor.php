<?php 
include('tutor-function.php');
include_once 'database_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutor Dashboard</title>
    <link rel="stylesheet" href="css/loginn.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
        body{
            background-image: url('img/pt2.jpg');
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
    background-color: #3F0C03;
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

  .container{
                background-color:  #e5f5f2 ;
                padding-bottom: 10em;
                align-content: center;
                
                position:absolute;
                width:90%;
                height:120%;
                left:10px;
                bottom:-300px;
                border-radius: 0px;
                border-radius: 5px;
            }

            input,
        input::placeholder {
        font: 0.6rem Georgia;
        text-align: center;
        }

        input,
        input::placeholder {
        font: 0.6rem Georgia;
        text-align: left;
        }
       
            .cw{
                font-size: 0.8em;
                font-family: Georgia;
                font-weight: bolder;
                color: green;
                position: relative;
                left:10px;
                bottom: -10px;
            }
            .cw1{
                font-size: 0.6em;
                font-family: Georgia;
                font-weight: bolder;
                color: red;
                position: relative;
                left:10px;
                bottom: -25px;
            }
            .tx{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -40px;
                left: 1px;
                font-size: medium;
                font-weight: bolder;
                
            }

            .tx1{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -50px;
                left: 1px;
                font-size: medium;
                font-weight: bolder;
                
            }
            .drop{
                color:grey;
            }


            .tx2{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -60px;
                left: 1px;
                font-size: medium;
                font-weight: bolder;
                
            }
            .tx3{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -70px;
                left: 1px;
                font-weight: lighter;
                font-size: small;
                
                
            }
            .tx4{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -90px;
                left: 1px;
                font-size: medium;
                font-weight: lighter;
                
            }
            .sd{
                position: relative;
                margin-right: 100px;
                color: red;
                font-size: 10px;
                bottom: -20px;
                font-size: medium;
                font-weight: lighter;
            }

            .tx5{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -60px;
                left: 1px;
                font-weight: lighter;
                font-size: small;
    
                
            }

            .tx6{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -70px;
                left: 1px;
                font-size: small;
                font-weight: lighter;
                
            }

            .tx7{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -80px;
                left: 1px;
                font-size: small;
                font-weight: lighter;
                
            }

            .tx8{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -90px;
                left: 1px;
                font-size: small;
                font-weight: lighter;
                
            }

            .tx9{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -100px;
                left: 1px;
                font-size: small;
                font-weight: lighter;
                
            }

            .tx10{
                padding:10px;
                background-color: #E5E8E8;
                width: 90%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -110px;
                left: 1px;
                font-size: small;
                font-weight: lighter;
                
            }

            .btn{
                background-color: green;
                padding: 8px;
                width: 45%;
                border-radius:10px;
                position: relative;
                bottom: -100px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:1px;
                box-shadow:2px 2px 2px 2px black;
                cursor: pointer;
            }

            .bttn{
                background-color: #06c49f;
                padding: 8px;
                width: 25%;
                border-radius:10px;
                position: absolute;
                top:655px;
                color: white;
                font-weight: bolder;
                font-size: 15px;
                font-family: Georgia;
                left:10px;
                box-shadow:2px 2px 2px 2px black;
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

    </nav>





           
   <form  class="container" action="get-a-tutor.php" method="post">

            

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <strong> <font color="green" size="5"><?php echo $_SESSION['success']; unset($_SESSION['success']);?></h3></p></a></strong>
            </div>
        <?php endif ?>

        

            <?php  if (isset($_SESSION['user'])) : $username?>
                <h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']; ?></h1></font></p>
            <?php endif ?>


            <?php
            
            if(isset($_POST['submit_btn']))
            //$kkk=$_SESSION['user'];
            { 
                
                                    
                
                $fullname = $_POST['fullname'];
                $email = $_POST['email']; 
                $phone_no = $_POST['phone_no']; 
                $class_type = $_POST['class_type']; 
                $start_date = $_POST['start_date'];
                $relationship = $_POST['relationship'];
                $about_us = $_POST['about_us']; 
                $hour_wk = $_POST['hour_wk'];
                $exam_board = $_POST['exam_board']; 
                $programme = $_POST['programme']; 
                $course = $_POST['course'];  



                $query = "INSERT INTO `parent_data` (userid,fullname,email,phone_no,class_type,start_date,relationship, about_us,hour_wk,exam_board,programme,course) VALUES ('".$_SESSION['user']['id']."', '$fullname','$email','$phone_no','$class_type','$start_date','$relationship','$about_us' ,'$hour_wk','$exam_board','$programme','$course')";
                if (mysqli_query($conn, $query)) {
                    //echo " Step1 succeed proceed to step2";
                    

                    //echo "<div style='background-color:red;'><p style='color:white; height:20px'>"."recorded number</p></div>"."<br>";
                echo "<p style='background-color:#0A9191; color:white; border-radius:5px; solid black; width:150px;  height:40px; bottom:20px; '>"."  STEP 1 SUCCEED <br>";

                    
                } else {
                    echo "Error: " . $query . ":-" . mysqli_error($conn);
                }



                mysqli_close($conn);
                

            }    
                
            
            ?>




         <p class="cw">Schedule your online or physical classes now!</p>
         <p class="cw1">Get started with us (online or in your home)</p>
         
         
         <input text="text" placeholder="Enter Fullname" required="enter fullname" class="tx" name="fullname"></input>
         
         <input text="text" placeholder="Enter Email" required="Your Email Required" class="tx1" name="email"></input>
         
         <input text="text" placeholder="Enter Phone No" required="Tel Phone required" class="tx2" name="phone_no"></input>
         
         <select class="tx3"  required="class type required" name="class_type">
             <option>Class-type</option>
             <option>Online Classes</option>
             <option>Physical Classes</option>
         </select>

         <input type="date" required="Tel Phone required" class="tx4"  name="start_date"><p class="sd">Lesson Should Start...</p></input>
         
         <select class="tx5"  required="relationship reqired" name="relationship">
             <option>Relationship with Learner</option>
             <option>I Am the Learner</option>
             <option>Parent of the Learner</option>
             <option>Family Member</option>
         </select>

         <select class="tx6"  required="reqired" name="about_us">
             <option>How did you hear about us?</option>
             <option>Vanguard Post</option>
             <option>tutor Referral</option>
             <option>affliate website</option>
             <option>Facebook</option>
             <option>Client Refferal</option>
             <option>Instagram</option>
             <option>School Event</option>
             <option>sms from Learner's Anchor</option>
             <option>Whatapp</option>
             <option>Naija.com</option>
             
         </select>


         <select class="tx7"  required="class type required" name="hour_wk">
                    <option>Select Hours/week</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>

        </select>

        <select class="tx8"  required="relationship reqired" name="exam_board">
                    <option>Select Exam Board</option>
                    <option>CIE</option>
                    <option>OCR</option>
                    <option>IB</option>
                    <option>EdExcel</option>
                    <option>GCE</option>
                    <option>WAEC</option>
                    <option>NECO</option>
                    <option>OTHERS</option>

        </select>

        <select class="tx9"  required="select programme" name="programme">
                    <option>Select Programme</option>
                    <option>A-level</option>
                    <option>IGCSE</option>
                    <option>CheckPoint</option>
                    <option>O-Level</option>
                    <option>University Tutoring</option>
                    <option>Assignment</option>
                    <option>Project/Term papers</option>
                    <option>Others</option>
                                                    
        </select>

        <select class="tx10"  required="select course" name="course">
                    <option>Select course/subject</option>
                    <option>ICT</option>
                    <option>Computing</option>
                    <option>Data Processing/Analystic</option>
                    <option>Computer Science</option>
                    <option>Chemistry</option>
                    <option>Industrial Chemistry</option>
                    <option>Mechatronics</option>
                    <option>Physics</option>
                    <option>Biology</option>
                    <option>English</option>
                    <option>Literature</option>
                    <option>Mathematics(pure)</option>
                    <option>Mathematics(advance)</option>
                    <option>Mechanics</option>
                    <option>Accounting</option>
                    <option>Agric</option>
                    <option>Geography</option>
                    <option>Others</option>
                                                    
        </select>

         <button type="btn" class="btn" name="submit_btn">SUBMIT</button>
         
     
     </div>

</form>
				
              
           

   
</body>
</html>
