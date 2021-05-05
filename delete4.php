<?php

$con = mysqli_connect("localhost","future","hta123","i6834132_wp1");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete  from aarti where id = '$id'"); // delete query

if($del)
{
    echo '<script type="text/javascript">alert(" DELETE SUCCESSFULLY ");</script>';	
    mysqli_close($con); // Close connection
    header("location:admin-4.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>


