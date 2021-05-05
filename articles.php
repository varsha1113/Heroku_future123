<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <title>Future 123</title>
    <style>
    .main_pagination{display:flex;
        justify-content: center;
    }
     .pagination{ display:flex;
        justify-content: space-around;
    margin-top:20px;
   background-color:#DEB65E;
   border-radius:10px;
   width:50%;
   padding:6px;
   box-shadow: 2px 2px 10px #575656;
    
   }
   .pagination a {color:#ffffff;
    text-decoration: none;
     
   }
    .pagination a span{
        font-size:1rem; 
        }  
    </style>
  </head>
  <body onmousedown="return false" onselectstart="return false">
     <?php include('header.php')?>
    <div class="container-fluid">
      
<section>
    <div class="row" style="background: url(images/back1.png);">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center py-5">
                        <h2 class="ab_1"> Articles</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row py-5">
        <div class="col-12">
            <div class="container">
                <div class="row">
                       <div class="col-md-6 mt-4">
                           <div class="col-md-12 mt-4 text-center">
                         <h3>English Articles</h3>
                     </div>
                 <?php
            if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;          
  $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
  if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        $total_pages_sql = "SELECT COUNT(*) FROM jam2";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $sql = "SELECT * FROM jam2 LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql);
   //$query=mysqli_query($con,"select * from jam2");
   while($row=mysqli_fetch_array($res_data)){
       $title=$row['title'];
       $content=$row['content'];
       $id=$row['id'];
       $image=$row['image'];
 ?>
             <div class="col-12 mt-4">
                       <div class="card shadow" style="background: #fff;border-radius: 10px;">
                           
                           <div class="art_head p-2"><h5> <?php echo $title ;?> </h5></div>
                           <div style="height:50px;overflow:hidden;">
                           <p><?php echo $content;?></p></div>
                            <a href="#" data-toggle="modal" data-target="#ar<?php echo $id ;?>">
                           <div class="p-3"><h5 style="color: #6E4C1E;"><b>click here to read this article</b></h5></div></a>
                       </div>
                   </div>
                   <?php }?>
    <!------ English Pagination---------->
    <div class="main_pagination">
     <ul class="pagination">
        <li><a href="?pageno=1"><span>&#171</span>First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><span>&#8249</span>Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next<span>&#8250</span></a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last<span>&#187</span></a></li>
     </ul>
   </div>
                  </div>  
<!----------------------Hindi Pagination-------------------------------->
                  <div class=" col-md-6 mt-4">
                           <div class="col-md-12 mt-4 text-center">
                         <h3>Hindi Articles</h3>
                     </div>

                     <?php
                if (isset($_GET['pagenoQ'])) {
                $pageno = $_GET['pagenoQ'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 3;
            $offset = ($pageno-1) * $no_of_records_per_page;          
      $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
      if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                die();
            }
            $total_pages_sql = "SELECT COUNT(*) FROM Hindiarticle";
            $result = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);
            $sql1 = "SELECT * FROM Hindiarticle LIMIT $offset, $no_of_records_per_page";
            $res_data1 = mysqli_query($con,$sql1);
  $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
//    $query=mysqli_query($con,"select * from Hindiarticle");
   while($row=mysqli_fetch_array($res_data1)){
       $title=$row['title'];
       $content=$row['content'];
       $id=$row['id'];
       $image=$row['image'];
 ?>
           <div class="col-12  mt-4">
                       <div class="card shadow" style="background: #fff;border-radius: 10px;">
                           
                           <div class="art_head p-2"><h5> <?php echo $title ;?> </h5></div>
                           <div style="height:50px;overflow:hidden;">
                           <p><?php echo $content;?></p></div>
                            <a href="#" data-toggle="modal" data-target="#arh<?php echo $id ;?>">
                           <div class="p-3"><h5 style="color: #6E4C1E;"><b>click here to read this article</b></h5></div></a>
                       </div>
                   </div>
                        <?php }?>
     <div class="main_pagination">
       <ul class="pagination">
         <li><a href="?pagenoQ=1"><span>&#171</span>First</a></li>
         <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pagenoQ=".($pageno - 1); } ?>"><span>&#8249</span>Prev</a>
         </li>
         <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pagenoQ=".($pageno + 1); } ?>">Next<span>&#8250</span></a>
         </li>
         <li><a href="?pagenoQ=<?php echo $total_pages; ?>">Last<span>&#187</span></a></li>
      </ul>
    </div> 
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------------English model----------------------------->
<?php
   $query=mysqli_query($con,"select * from jam2");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $id=$row['id'];
       $image=$row['image'];
?>
<div class="modal fade" id="ar<?php echo $id ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
         <img src="images/<?php echo $image ;?>" width="500px" class="d-block mx-auto"><br>
        <h2 class="description" style="color: #000;">
                                <?php echo $title ;?>
                                </h2>
                               <p class="des2" style="white-space: pre-wrap; "><?php echo $content ;?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<!-----------------hindi model----------------------------->
<?php
   $query=mysqli_query($con,"select * from Hindiarticle");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $id=$row['id'];
       $image=$row['image'];
       ?>
<div class="modal fade" id="arh<?php echo $id ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
         <img src="images/<?php echo $image ;?>" width="500px" class="d-block mx-auto"><br>
        <h2 class="description" style="color: #000;">
                                <?php echo $title ;?>
                                </h2>
                               <p class="des2" style="white-space: pre-wrap; "><?php echo $content ;?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<section>
    <div class="row" style="background: #6E4C1E;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white pt-2">
                       <h4>For Donation - <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white"> Click Here </a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row py-5">
        <div class="col-12">
            <div class="container">
<div class="row">
    <div class="col-12 col-md-3 text-center brd">
        <img src="images/logo.png" width="250px">
    </div>
    <div class="col-12 col-md-5 brd pt-2">
        <h3 class="head8">
            The Jyotirvigyan 
Astrological Institute
        </h3>
    </div>
    <div class="col-12 col-md-4  ">
        <i class="fa fa-home" aria-hidden="true" style="color: #6E4C1E;"></i><b style="color: #6E4C1E;">Address</b>
        <p class="para7">106/B, Industry House, 
            A.B. Road, Indore, M.P., India</p>
          
            <p class="para7">+91 - 982 608 3575</p>
          
            <p class="para7">manish_rsharma@hotmail.com</p>
    </div>
</div>
            </div>
        </div>
    </div>
</section>
 </div>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="images/qr_code.jpg" width="100%">
       <p>Domestic users scan here to pay</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?flowlogging_id=4e0ae256398ec&mfid=1606719040172_4e0ae256398ec#/checkout/openButton" class="text-dark" >
          <p>Foreign users click here to pay <img src="images/paypal.png" width="90px"></p></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
     
   <script>
        $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:3,
            itemsDesktop:[1199,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            itemsMobile:[600,1],
            pagination:true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            autoPlay:true
        });
    });
   </script>
   <script>
    $(document).ready(function(){
    $("#testimonial-slider2").owlCarousel({
        items:3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[600,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
  </body>
</html>