<?php
include_once 'dbconnect.php';


// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Files Upload</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <style>

body, html {
    height: 100%;
  }
  
  * {
    box-sizing: border-box;
  }
    body{
            background-image: url('img/upload5.JPG');
            background-repeat:no-repeat;
            background-size: cover;
        }
 .mycontainer{
    background-color: whitesmoke;
    padding:10px;
    border-start-end-radius: 5px;
    width: 50%;
    height: 50%;
    position: absolute;
    left: 130px;
    bottom:150px;

 }
 .mcc{
    padding: 5px;
    background-color: pink;
    position: absolute;
    left:10px;
    border-radius: 5px;
    border: 0px;
    bottom: 250px;
    width:80%;
    

 }

 .mcc1{
    padding: 10px;
    background-color: red;
    position: absolute;
    left:10px;
    border-radius: 5px;
    border: 0px;
    bottom: 150px;
    color:white;
    font-size: medium;
    font-family: Georgia;

 }

 .mcc2{
    padding: 10px;
    background-color: black;
    position: absolute;
    left:10px;
    border-radius: 5px;
    border: 0px;
    bottom: 200px;
    color: white;
    font-size: medium;
    font-family: Georgia;

 }

 .mcc3{
    padding: 10px;
    background-color: #05347A;
    position: absolute;
    left:10px;
    border-radius: 5px;
    border: 0px;
    bottom: 100px;
    color:white;
    font-size: medium;
    font-family: Georgia;

 }

 .upload-btn{
    padding: 10px;
    background-color: #159506;
    position: absolute;
    left:10px;
    border-radius: 5px;
    border: 0px;
    bottom: 50px;
    color:white;
    width:80%;
    font-size: medium;
    font-family: Georgia;

 }

</style>

</head>
<body>

    <div class="mycontainer">
       <b> Select File to Upload:</b> 
       
        <form action="uploads.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file1" class="mcc"/>
                <select type="text" name="programme"class="mcc1">
                    <option>Select Programme</option>
                    <option>A-level</option>
                    <option>IGCSE</option>
                    <option>WAEC</option>
                    <option>CheckPoint</option>
                </select>
                
          
                    <select type="text" name="subject"  class="mcc2">
                    <option>Select Subject</option>
                    <option>ICT</option>
                    <option>chemistry</option>
                    <option>physics</option>
                    <option>biology</option>
                    <option>mathematics</option>
                    <option>account</option>
                    <option>lit english</option>
                    <option>english</option>
                    <option>government</option>
                </select>
            
                <select type="text" name="year"  class="mcc3"/>
                    <option>Select year</option>
                    <option>2010</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                </select>

                
                <input type="submit" name="submit" value="UPLOAD" class="upload-btn"/>
            
            <?php if(isset($_GET['st'])) { ?>
                
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>



        </div>


    </div>        
</form>
        


    </div>
    
        
        

    
    
</body>
</html>