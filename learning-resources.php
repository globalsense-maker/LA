<?php 
include('tutor-function.php');
include('database_connect.php'); 

 include_once 'uploads.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>learning resources</title>
    <link rel="stylesheet" href="css/lr.css">
   
    
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


    <form class="login-form" action="learning-resources.php" method="post">
                    
                     
                    <table id="customers">
                        
                    <div class="form-footer">
                        <a style="text-decoration:none"; href="home.php"><font color="white"><div class="log">LogOUT</div></a>
                    </div>
                   
                    
                    
                    <tr>
                        <th>id</th>
                        <th>Programme</th>
                        <th>Subject</th>
                        <th>Year</th>
                        <th>filename</th>
                        <th>View</th>
                        <th>Download</th>
                        
                      
                    </tr>
                   

                    <?php
				        if(isset($_POST['search'])){
                        

                            global $id;
                            $keyword = $_POST['keyword'];
                            $keyword2 = $_POST['keyword2'];
                          //  $keyword3 = $_POST['keyword3'];
                      
                        
                        

                        }      
                            
                        $i = "";
                    
                        while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                        
                                
                                    <td><?php echo $i++; ?></td>
                                    
                                    <td><?php echo $row['programme']; ?></td>
                                    <td><?php echo $row['subject']; ?></td> 
                                    <td><?php echo $row['year']; ?></td>  
                                    <td><?php echo $row['filename']; ?></td>                                           
                                    <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                                    <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        
                 

                      
                </table>
                
                        
			        
               
                <select type="text"class="search-box" placeholder="Search subject..." name="keyword" required="required" value=<?php  echo isset($_POST['keyword'])?:'' ?>>
                    <option> Select Subject</option>
                    <option> ICT</option>
                    <option> physics</option>
                    <option> chemistry</option>
                    <option> Biology</option>
              
                </select>


                <select type="text"class="search-boxx" placeholder="Search programme" name="keyword2" required="required" value=<?php  echo isset($_POST['keyword2'])?: '' ?>>
                    <option> Select Exam</option>
                    <option> IGCSE</option>
                    <option> A-level</option>
                    <option>CheckPoint </option>
                    <option> WAEC</option>
              
                </select>
                        
                      
                        <button class="btn-search" name="search" value="search"> Search</button>
                  
                    
                 
                                      
                   
        </form>

            
				
                
           

   
</body>
</html>
