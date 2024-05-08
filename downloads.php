<?php 
include 'filesLogic.php';
//include('tutor-function.php');


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Fullname</th>
    <th>Resume</th>
    <th>Size (in MB)</th>
    <th>Downloads</th>
    <th>Action</th>

    <th>Image</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['userid']; ?></td>
      <td><?php echo $file['fullname']; ?></td>
      <td><?php echo $file['filename']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      
      <td> <a download href="files{$row['file']}">Download this file</a></td>

      <td>
        <?php
      	//$sql = "select imagedata from tbl_gallery  WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
        $sql = "SELECT imgdata FROM tutor_data";
        // WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";		
        // change this id as per your need
        $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        ?>
        <html>
        <body>
          <div class="container text-center">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imgdata']).'"/>'; ?>
          </div>
          
        </body>
        </html>
      
      
      
      
      </td>
    </tr>
  <?php endforeach;?>

</tbody>


					

</table>

</body>
</html>