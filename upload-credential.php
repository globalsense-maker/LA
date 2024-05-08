<?php

//include_once('filesLogic.php');
// include('tutor-function.php');
include('functions.php');
include_once ('database_connect.php');


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");

}

?>



<!DOCTYPE html>
<html lang="en">



  <head>
    
    <link rel="stylesheet" href="style.css">
    <title>Upload credentials</title>
    <style>
         body{
                background-image: url("img/fine-bird.jpg");
                background-repeat: repeat;
                background-size:cover;
           
               
            }


           

    form {
        width: 60%;
        margin: 100px auto;
        padding: 30px;
        border: 1px solid #555;
        background-color: whitesmoke;
        position: absolute;
        left: 100px;
        top: 10px;
        height: 400px;
        }
        input {
        width: 100%;
        border: 1px solid #f1e1e1;
        display: block;
        padding: 5px 10px;
        }

        button {
        border: none;
        padding: 10px;
        border-radius: 5px;
        background-color: #04031B;
        color: #f1e1e1;
        font-weight: bolder;
        }
        .btnn {
        border: none;
        padding: 10px;
        border-radius: 5px;
        background-color: red;
        color: #f1e1e1;
        font-weight: bolder;
        }
        .button2 {
        border: none;
        padding: 12px;
        border-radius: 5px;
        background-color: #081A50;
        width: 25%;
        position: absolute;
        bottom: 30px;
        color: #f1e1e1;
        font-weight: bolder;
        }


        table {
        width: 60%;
        border-collapse: collapse;
        margin: 100px auto;
        }
        th,
        td {
        height: 50px;
        vertical-align: center;
        border: 1px solid black;
        }

        .img{
            width: 50rem;
            position: absolute;
            bottom: 100px;
            height: 70%;
            left: 100px; 
        }
        .upp{
            color: red;
            position: 100px;
            font-size:small;
            font-weight: bolder;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .form-footer{
                position: absolute;
                left: 30px;
                bottom: 400px;
                background-color: darkred;
                padding:10px;
                border-radius: 5px;
            }
        .coo{
            color: red;
            font-size: medium;
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
    background-color: #04022B;
    position: absolute;
    top:0px;
    right: 0px;
    width: 100%;
    padding: 10px 0px 0px 0px;
    margin: 0 auto;
    border: 0px solid rgba(7, 22, 92, 0.774);
    
    
}

.btn {
            background: rgb(48, 155, 226);
            border: 0px;
            color: rgb(17, 17, 17);
            left: 100px;
            width:8%;
            position: absolute;
            bottom: 700px;
            font-weight: bolder;
            font-size: 15px;
            font-family: Georgia;
            padding:10px;
            border-radius: 5px;
            box-shadow:2px 2px 2px 2px black;
            cursor: pointer;
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


  
            <?php

                    error_reporting(0);

                    $msg = "";

                    // If upload button is clicked ...
                    if (isset($_POST['upload'])) {

                        $filename = $_FILES["uploadfile"]["name"];
                        $tempname = $_FILES["uploadfile"]["tmp_name"];
                        $folder = "./uploads/" . $filename;

                        $conn = mysqli_connect("localhost", "root", "", "la-database");


                        $sql = "UPDATE `tutor_data` SET imgdata ='$filename' WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";								
                                     
                        mysqli_query($conn, $sql);
                      
                        if (move_uploaded_file($tempname, $folder)) {
                            echo "<h3> Image uploaded successfully!</h3>";
                        } else {
                            echo "<h3> Failed to upload image!</h3>";
                        }







                        // // Get all the submitted data from the form
                        // //$sql = "INSERT INTO tutor_data (filename) VALUES ('$filename')";
                        // $sql = "UPDATE `tutor_data` SET filename='$filename' WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
                    

                        // // Execute query
                        // //mysqli_query($conn, $sql);

                        // // Now let's move the uploaded image into the folder: image
                      
                    }




                // $query = " select * from tutor_data ";
                // $result = mysqli_query($conn, $query);

                // while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- <img src="./image/<//?php echo $data['filename']; ?>">

                <?php
                  //  }
                ?> -->
              


            <div class="form">
     
       <!-- end logged in user information -->

        
            <div id="content">
                
                <form method="POST" action="" enctype="multipart/form-data">

                <?php
                    
                    if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <strong> <font color="green" size="5"><?php echo $_SESSION['success']; unset($_SESSION['success']);?></h3></p></a></strong>
                        </div>
                    <?php endif ?>

                    <!-- logged in user information -->

                        <?php  if (isset($_SESSION['user'])) : $username?>
                        <h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']." " ."".$_SESSION['user']['division']; ?></h1></font></p>


                                <span>
                                    
                            
                                        <a href="tutor-dashboard.php"><font size="3"><b>LogOUT</b></a>
                                        

                                
                                </span>

                            <?php endif ?>
                    <p><font color="red"><b> Upload Professional Pix</p></b></font>
                    <div class="form-group">
                        <input class="form-control" type="file" name="uploadfile" value="" />
                        <button type="submit" name="upload"> UPLOAD</button>
                    </div>
                        <p>____________________________________________________________________________________</p>
                    
                        <h3><font color="black">Upload Credentials</font></h3>
                        <input type="file" name="myfile" class="coo"> <br>
                        <button type="submit" class="btnn" name="save" >UPLOAD</button>
                        
                </form>


                <?php
                
                
                ?>
                
            </div>
           
            

            
            
</body>
</html>