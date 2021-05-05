<?php
$con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
if (isset($_POST['submit'])) {
    $title=$_POST['title'];
    $content=$_POST['content'];
    
    $image_name=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($temp, "images/$image_name");
    $query=mysqli_query($con, "insert into tantra(title,content,image)values('$title','$content','$image_name')");
    if ($query) {
        echo '<script type="text/javascript">alert(" FILE UPLOADED ");</script>';
        mysqli_close($con); // Close connection
        header("location:admin-6.php"); // redirects to all records page
        exit;
    }else{
        echo "file not uploaded";
    }

    
}
?>