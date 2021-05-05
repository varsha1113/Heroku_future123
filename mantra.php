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
    <title>Future 123 | Mantra Sadhana</title>
    <style>
   
    </style>
  </head>
  <body onmousedown="return false" onselectstart="return false">
    <?php include('header.php')?>;
    <div class="container-fluid">
      
        

       <section>
              <div class="row" style="background: url(images/back1.png);">
                 <div class="col-12">
            <div class="container">
                  <div class="row">
                          <div class="col-12 text-center py-5">
                               <h2 class="ab_1">मंत्र साधना</h2>
                             </div>
                          </div>
                      </div>
                    </div>
                 </div>
              </section>


       
        
<section>
    <div class="row py-5">

            <div class="container">
                <div class="row">
                    <!---------Mantra------------->
                     
                    <div class="col-12 mt-4 text-center">
                       <h1>मंत्र साधना</h1>
                       </div>
                   </div>
                
                <div class="row">
                 <?php
  $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
   $query=mysqli_query($con,"select * from mantra");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $id=$row['id'];
       $image=$row['image'];

       ?>
       

                    <div class="col-md-6  mt-4">
                       <div class="card shadow" style="background: #fff;border-radius: 10px;">
                           
                           <div class="art_head p-2"><h5> <?php echo $title ;?> </h5></div>
                           <div style="height:50px;overflow:hidden;" class="p-2">
                           <p><?php echo $content;?></p></div>
                            <a href="#" data-toggle="modal" data-target="#arch<?php echo $id ;?>">
                           <div class="p-3"><h5 style="color: #6E4C1E;"><b>click here to read this article</b></h5></div></a>
                       </div>
                   </div>
 

                   <?php }?>
                    </div>
                 </div>

                    </div>
                    
                   


                    
                        
                   

              
            </div>
        </div>
    </div>
</section>




<?php
   $query=mysqli_query($con,"select * from mantra");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $id=$row['id'];
       $image=$row['image'];

       ?>


<div class="modal fade" id="arch<?php echo $id ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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






 
 <?php include('footer.php')?>;


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