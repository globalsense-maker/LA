<?php
include("database.php");
?>
<form action="" method="post">
<select name="courseName">
    <option value="">Select Course</option>
    <?php 
    $query ="SELECT id, courseName FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['courseName'];
        $id =$optionData['id'];
    ?>
    <option value="<?php echo $id; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<input type="submit" name="submit">
</form>
<?php
include("display-data.php");
?>