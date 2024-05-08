 <?php 
 include('database_connect.php'); 
 include('functions.php');



 if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");
}
 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>Get Job</title>
	<link rel="stylesheet" href="css/tb.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      	
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

    
		  
	
						<!-- notification message -->
						<?php if (isset($_SESSION['success'])) : ?>
							<div class="error success" >
								<strong> <font color="green" size="5"><?php echo $_SESSION['success']; unset($_SESSION['success']);?></h3></p></a></strong>
							</div>
						<?php endif ?>

						<!-- logged in user information -->

							<?php  if (isset($_SESSION['user'])) : $username?>
							<h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']." " ."".$_SESSION['user']['division']; ?></h1></font></p>

									<span> <a href="admin_login.php"><font size="3"><b>LogOUT</b></a><font color="black">_________<a href="tutor-dashboard.php"><font size="3"><b> View Status At Glance</b></a></span>

								<?php endif ?>
                       
		<form class="login-form" action="payment.php" method="post">
                    
                     
                    <table id="customers">
                                       
                    
                       
                     
                    </p>
                    
                    <tr>
                        <th>Name</th>
                        <th>Qualification</th>
                        <th>State</th>
                        <th>Class Type</th>
                     
                        
                    </tr>

                    <?php
				        
                        global $keyword;

                            // global $id;
                            // $keyword = $_POST['keyword'];

                            $sql = mysqli_query($conn, "SELECT * FROM `tutor_data` WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC");  
                                                                    
                                  
                                while($row = mysqli_fetch_array($sql)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['fullname'] . "</td>";
                                        echo "<td>" . $row['qualification'] . "</td>";
                                        echo "<td>" . $row['state'] . "</td>";
                                        echo "<td>" . $row['class_type'] . "</td>";
                                       // echo "<td>"  .'<img src="data:image/jpeg;base64,'.base64_encode($row['imgdata']).'"/>'. "</td>";
                                        //echo "<td>" .<a href="tutor-biodata.php">Preferred. "</td>";
                                       
                                    echo "</tr>";
                                 }        
           
			        ?>
                    
                      
                        







        <form  action="tutor-biodata.php" method="post">
                    
                     
                    <table id="customers">
                                       
                    
                     <p><font color="green">_______________________<button class="bttttn" onclick = "window.location.href='payment.php';">Pay Now</button> _____________</p></font>
              
                    
                    
                    <tr>
                        <th>Learner's Name</th>
                        <th>Relationship</th>
                        <th>Exam on Focus</th>
                        <th>Programme</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        
                     
                        
                    </tr>

                    <?php
				        
                        global $keyword;

                            // global $id;
                            // $keyword = $_POST['keyword'];

                            //$sql = mysqli_query($conn, "SELECT * FROM `parent_data` where userid='".$_SESSION['user']['id']."'ORDER BY userid DESC");
                            $sql = mysqli_query($conn, "SELECT * FROM `parent_data` WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC"); 
                                  
                                while($row = mysqli_fetch_array($sql)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['fullname'] . "</td>";
                                        echo "<td>" . $row['relationship'] . "</td>";
                                        echo "<td>" . $row['exam_board'] . "</td>";
                                        echo "<td>" . $row['programme'] . "</td>";
                                        echo "<td>" . $row['course'] . "</td>";
                                        echo "<td>" . $row['start_date'] . "</td>";
                                        
                                       // echo "<td>"  .'<img src="data:image/jpeg;base64,'.base64_encode($row['imgdata']).'"/>'. "</td>";
                                        //echo "<td>" .<a href="tutor-biodata.php">Preferred. "</td>";
                                       
                                    echo "</tr>";
                                 }        
        
                              
                        
                               
                               
                        
                                 mysqli_close($conn);  
                        
			        ?>
                    
                      
                </table>
              
        </form>
                    
							
						
						

</body>
</html>