<?php
include_once 'dbconnect.php';
include_once 'uploads.php';

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload table</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

    <style>
     body{
            background-image: url('img/learning.JPG');
            background-repeat:repeat;
            background-size: contain;

        }
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
    </style>
</head>
<body>


        
        <form  class="login-form" action="learning-resources.php" method="post">
            <table id="customers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                $i = 1;
               
                while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                   
                          
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['filename']; ?></td>                                              
                            <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                            <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            

        </form>
                    <br>
                        <input type="text" class="search-box" placeholder="Search subject..." name="keyword" required="required" value="<?php  echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
                        <button class="btn-search" name="search" value="search"> Search</button>
                    </br>
   
</body>
</html>