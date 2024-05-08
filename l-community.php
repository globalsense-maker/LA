<?php 
include('tutor-function.php');
include('database_connect.php'); 

 include_once 'uploads.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>learning resources</title>
   
    
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
    
    body, html {
    height: 100%;
  }
  
  * {
    box-sizing: border-box;
  }
  
  
  
  .wrap {
      width: 100%;
      height: 110%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #e7b14c88;
      background-repeat: no;
  
  }.login-form{
      width: 800px;
      margin: 0 auto;
      border: 1px solid #f8f8fa;
      padding: 5rem;
      background: #d1d1dd;
      position: absolute;
      top:60px;
  }
  .form-input{
      background: whitesmoke;
      border: 1px solid #eeeeee;
      padding: 12px;
      width: 100%;
  }
  
  
  
  .form-group{
      margin-bottom: 1rem;
      
      
  }
  .form-button{
      background: green;
      border: 1px solid #ddd;
      color: #ffffff;
      padding: 10px;
      width: 100%;
      text-transform: uppercase;
  }
  
  .form-group2{
      margin-bottom: 1rem;
      
  }
  .form-button3{
    background: rgb(48, 155, 226);
    border: 1px solid #ddd;
    color: rgb(180, 144, 24);
    margin-right: 20px;
    padding: 10px;
      
  }

  .btn {
    background: rgb(48, 155, 226);
    border: 1px solid #ddd;
    color: rgb(17, 17, 17);
    left: -50px;
    width:10%;
    padding: 10px;
    position: absolute;
    bottom: 120px;
    
    
  }
  
  
  .container{
      background-color: rgb(104, 10, 10);
      text-align: center;
      margin-bottom : 2rem;
      line-height: 0.5
  }
  
  /* Set a style for the submit button */
  
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
    margin-bottom: 100px;
    position: relative;
   
  }
  
  #customers td, #customers th {
    border: 0px solid;
    padding: 8px;
  }
  
 
  
  #customers th {
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 8px;
    padding-right:8px;
    text-align: left;
    background-color: blue;
    color: white;
  }
  
  
  
        body{
            background-image: url('img/learning.JPG');
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
    
  .form-footer{
      position: absolute;
      bottom:800px;
      left:100px;
      
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

        .login-form{
        width: 200%;
        border: 1px solid #f8f8fa;
        padding: 3rem;
        background: #d1d1dd;
        position: absolute;
        
        left:10px;
       }
       .btn-search {
            background: rgb(48, 155, 226);
            border: 0px;
            color: rgb(17, 17, 17);
            left: 100px;
            width:45%;
            position: absolute;
            bottom: 100px;
            font-weight: bolder;
            font-size: 15px;
            font-family: Georgia;
            padding:10px;
            border-radius: 5px;
            box-shadow:2px 2px 2px 2px black;
            cursor: pointer;
        }

        .search-box {
            font-family: 'Arial Narrow Bold';
            background: rgb(231, 203, 203);
            border: 1px solid #ddd;
            color: rgb(17, 17, 17);
            width:45%;
            position: absolute;
            left:100px;
            bottom: 150px;
            padding: 10px;
            
            
    
        }

        .img{
            width: 10%;
            position: relative;
            right: -100px;
            
        }

        .form-footer{
                position: absolute;
                left: 100px;
                bottom: 900px;
                background-color: red;
                padding:5px;
                border-radius: 5px;
            }
            .s{
                position: absolute;
                bottom: 300px;
                left:100px;
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


    <form class="login-form" action="learning-resources.php" method="post">
                    
                     
                    <table id="customers">
                        
                    <div class="form-footer">
                        <a style="text-decoration:none"; href="home.php"><font color="white"><div class="log">LogOUT</div></a>
                    </div>
                   
                    
                    
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                        
                      
                    </tr>
                   

                    <?php
				        if(isset($_POST['search'])){
                        

                            global $id;
                            $keyword = $_POST['keyword'];

                              
                            $ppp = "SELECT * FROM `tbl_files` WHERE `subject` LIKE '%$keyword%'"; 
                            // WHERE userid='".$_SESSION['user']['id']."' ORDER BY userid DESC";                     
                            
                            //$result = $conn->query($ppp);
                            if($result = mysqli_query($db, $ppp)){

                                if (mysqli_num_rows($result) > 0) {
                                    
                                

                                        while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                            
                                                    echo "<td>" .$row['id'] . "</td>";                
                                                    echo "<td>" .$row['programme'] . "</td>";
                                                    echo "<td>" .$row['year'] . "</td>";
                                                    echo "<td>" .$row['filename'] . "</td>";
                                                   
                                                
                                                
                                                echo "</tr>";
                            
                                    
                                
                                    }
                        
                                }    
                    } else {
                        echo "0 results";
                    }
                    
                       }
                        mysqli_close($db);
                    ?>

                      
                </table>
                
                        
			        
                <br>
                        <input type="text" class="search-box" placeholder="Search subject..." name="keyword" required="required" value="<?php  echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
                        <button class="btn-search" name="search" value="search"> Search</button>
                    </br>
                    
                 
                                      
                   
        </form>

            
				
                
           

   
</body>
</html>
