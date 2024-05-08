<?php 
 include('database_connect.php'); 
 include_once('uploads.php'); 

 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>learning-resources</title>
	<link rel="stylesheet" href="css/source-product.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
       body{
            
            background-image: url("img/lear1.jpg");
            background-repeat: no-repeat;
            background-size: contain;
        }


        .btn {
            background: rgb(48, 155, 226);
            border: 0px;
            color: rgb(17, 17, 17);
            left: 1000px;
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

        .search-box {
            background: rgb(231, 203, 203);
            border: 1px solid #ddd;
            color: rgb(17, 17, 17);
            width:25%;
            position: absolute;
            position: absolute;
            bottom: 700px;
            padding: 10px;
            
    
        }

        .img{
            width: 25%;
            position: relative;
            right: -250px;
            
        }

        .form-footer{
                position: absolute;
                left: 1170px;
                bottom: 740px;
                background-color: red;
                padding:5px;
                border-radius: 5px;
            }
      </style>

	
</head>
<body>
							
			

                       
		<form action="uploads.php" action="learning-resources.php" method="post">
                    
                     
            <table id="customers">
                        
                    <div class="form-footer">
                        <a style="text-decoration:none"; href="home.php"><font color="white"><b>LogOUT</b></a>
                    </div>
                   
                    <img src="img/small-image.avif" class="img"></img>
                    <strong><font size="5"><font color="red"><p align="center">Search For Resources </a></strong></p>
                    
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>Programme</th>
                        <th>Subject</th>
                        <th>Year</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                
                
                <tbody>
                    

                <?php
                 global $id;$keyword;
               // $keyword = $_POST['keyword'];
                
                
                $sql =  "SELECT * FROM `tbl_files`";
                // WHERE `subject` LIKE '%$keyword%'";  
                                
                $result = mysqli_query($conn,$sql);
                
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><?php echo $row['programme']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['year']; ?></td>

                    <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>

                </tbody>
            </table>


                
                          
			        
                <br>
                        <input type="text" class="search-box" placeholder="Search subject..." name="keyword" required="required" value="<?php  echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
                        <button class="btn" name="search" value="search"> Search</button>
                    </br>
                    
                                       
                   
        </form>


                    
							
						
						

</body>
</html>