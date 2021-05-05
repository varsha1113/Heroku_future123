
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <style>
        html , body{background-image: url(images/admin-back.jpg);background-size: cover;}
       textarea{height: 250px;}
       table{width: 500px;border: 1px solid black;background-color: #fff;margin: auto;}
       td{padding: 5px;border:1px solid black;}
       .sidebar{width: 250px; background-color: #6E4C1E;height: 105%;position: absolute;}
       .con-pnl{width: 100%;float: left;padding-left: 270px;}
  




    </style>
  </head>
  <body>
   <div class="container-fluid">
   <div class="row p-3" style="background-color:#DEB65E;">
       <div class="col-6">
        <img src="images/logo.png" width="150px">
       </div>
       <div class="col-6 ">
       <a href="logout.php" style="text-decoration: none;">
       <button type="button" name="logout" class="btn d-block  text-white  btn-sm mt-3  " style="background-color: #6E4C1E;margin-left:auto;"><i class="fa fa-power-off mr-2" aria-hidden="true"></i> &nbsp; Logout</button></a>
       </div>
   </div>
 <section>
     <div class="row" style="position: relative;">
         <div class="sidebar"  >
             <div class="row">
                 <div class="col-12 pt-4 text-center">
                    
                         <img src="images/pan1.png" style="border-radius: 100%;width:160px;display:block;margin:auto;">
                         <label class="text-white mt-2"><b>P.Manish Sharma</b></label>
                     
                 </div>
             </div>
             <div class="row">
             <div class="col-12">
             <a href="admin.php">
             <button type="button" class="btn btn-secondary w-100 mt-4">Home</button><br></a>
             <a href="admin-1.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">English Articles</button><br></a>
               <a href="admin-11.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Hindi Articles</button><br></a>
             <a href="admin-2.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Gallery</button><br></a>
              <a href="admin-3.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Chaleesa</button><br></a>
             <a href="admin-4.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Aarti Sangrah</button><br></a>
             <a href="admin-5.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Mantra Sadhana</button><br></a>
             <a href="admin-6.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Tantra Sadhana</button><br></a>
             <a href="admin-7.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Yantra</button><br></a>
              <a href="admin-8.php">
             <button type="button" class="btn btn-secondary w-100 mt-3">Achook Upay</button><br></a>
             </div>
             </div>
         </div>
         <div class="con-pnl">
             <div class="container pt-5">
                 <div class="row">
                     <div class="col-12">

                     




<div class="row">
       <div class="col-12  p-2 mb-4" style="background-color: #DEB65E;">
       <h6 class="text-light"> For Articles</h6>
       <div class="card p-3">
            <form method="post" action="article-a.php" enctype="multipart/form-data">
                <input type="file" name="image"><br>
                <textarea class="w-100 mt-2" name="title" style="height: 30px;"></textarea><br>
                <textarea class="w-100 mt-2" name="content" placeholder="paragraph here"></textarea><br>
                <button type="submit" name="submit" class="btn btn-outline-secondary mt-2">Upload</button>
                </form>
        </div>
       </div>

       <div class="col-12 p-2 mb-4" style="background-color: #DEB65E;">
       <h6 class="text-light"> Articles List</h6>
           <div class="card p-3" style="height: 265px;overflow-y:auto;">
 
<table>
<?php

$con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
   $query=mysqli_query($con,"select * from jam2");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $image=$row['image'];
       $id=$row['id'];
       ?>
       <tr>
            <td style="width: 30px;"><?php echo $id ;?></td>
          
           <td ><div style="width: 100%;height:60px;overflow:hidden;"><?php echo $title ;?></div></td>
           <td style="width: 70px;"><a href="delete2.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
       </tr>
       <?php }?>
   </table>
  
           </div>
       </div>
   </div>














 </section>
   

</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
</script>
  </body>
</html>

   
   
     
