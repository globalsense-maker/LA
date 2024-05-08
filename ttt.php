 <?php 
 include('database_connect.php'); 
 include('functions.php');
 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>tutor-biodata</title>
	<link rel="stylesheet" href="css/source.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        body{
            background-image: url("img/ht-img5.jpg");
            background-size: cover;
        }
        .img{
            width: 25%;
            position: relative;
            right: -250px;
            
        }

        .btn{
                padding: 10px;
                width: 30%;
                background-color: green;
                font-weight: bolder;
                font-size: 1.em;
                font-family: Georgia, 'Times New Roman', Times, serif;
                cursor: pointer;
                color: white;
                border-radius: 5px;
                position: relative;
                left:10px;
                bottom: -10px;

            }

            @media screen and (max-width: 800px) {
            .body,  .img, .btn {
            width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
            }
        }
      </style>

	
</head>
<body>
							
			

                       
		<form class="login-form" action="payment.php" method="post">
                    
                     
                    <table id="customers">
                                       
                    
                        <?php 
                        global $row; 
                        
                        $sqlt = "SELECT imgdata FROM tutor_data where userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
                               
                                $result = mysqli_query($conn, $sqlt) or die('Error ' . mysqli_error($conn));
                                $row = mysqli_fetch_array($result);
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imgdata']).'"/>'; 
                    
                        
                        ?>
                    <p><font size="5"><font color="red"><p align="center">Professional Instructor<?php 
                    global $row; $keyword;




                    $sqlty = "SELECT subject FROM tutor_data where userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
                    
                            $result = mysqli_query($conn, $sqlty) or die('Error ' . mysqli_error($conn));
                            $row = mysqli_fetch_array($result);
                    
                    ?>  
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

                            $sql = mysqli_query($conn, "SELECT * FROM `tutor_data` WHERE `subject` LIKE '%$keyword%'");  
                                                                    
                                  
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
                                       
                    
                     <p><font color="green">_______________________<button class="btn" onclick = "window.location.href='payment.php';" >Pay Now</button> _____________</p></font>
              
                    <p><font size="6"><font color="purple"><p align="center">Reliable Parent      </p>
                    <img src="img/small-image.avif" class="img"></img>
                    
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

                            $sql = mysqli_query($conn, "SELECT * FROM `parent_data` where userid='".$_SESSION['user']['id']."'ORDER BY userid DESC");
                    
                                  
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