<?php
include_once 'dbconnect.php';

global $id;  $keyword;
$keyword = $_POST['keyword'];
$keyword2 = $_POST['keyword2'];
//$keyword3 = $_POST['keyword3'];


                        
$sql= "SELECT * FROM `tbl_files` WHERE `subject` LIKE  '%$keyword%' AND  `programme`LIKE  '%$keyword2%'";
// AND  `programme` LIKE  '%$keyword3%'";
// AND  `year` LIKE  '%$keyword3%'"; 
// fetch files
//$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);

if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];
    $programme = $_FILES['programme']['name'];
    $subject = $_FILES['subject']['name'];
    $year = $_FILES['year']['name'];
   
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            global $con;
            $sql = 'select max(id) as id from tbl_files';
            $result=mysqli_query($con, $sql);
            if (($result) >0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
                $programme = ($row['programme']+1) . '-' . $programme;
                $subject = ($row['subject']+1) . '-' . $subject;
                $year = ($row['year']+1) . '-' . $year;
            
            }
           else 
                $filename = '1' . '-' . $filename;
                
                $programme = '1' . '-' . $programme;
                $subject = '1' . '-' . $subject;
                $year = '1' . '-' . $year;
             
            $path = 'uploads/';
             $programme = $_POST['programme'];
            $subject = $_POST['subject'];
            $year = $_POST['year'];
           
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(programme, subject, year,filename, created) VALUES('$programme','$subject','$year','$filename', '$created')";
            mysqli_query($con, $sql);
            header("Location: file-upload.php?st=success");
        }
        else
        {
            header("Location: file-upload.php?st=error");
        }
    }
    else
        header("Location: file-upload.php");
}
?>