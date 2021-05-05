<?php
$uname="future123";
$pwd="admin@123";

session_start();

if(isset($_SESSION['uname'])){
    echo "<script>location.href='admin.php'</script>";
   
}else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='admin.php'</script>";
    }
    else{

        echo "<script>alert('username or password incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}


?>