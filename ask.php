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
   input::placeholder{color: rgb(32, 32, 32) !important;}
   .btn-brown{background-color:#6e4c1e;color: #fff;font-family: 'Montserrat', sans-serif;font-weight: 600;padding: 10px 15px;border:1px solid #6E4C1E;width: 200px;margin: auto;}
.btn-brown:hover{background-color: #fff !important;color: #DEB65E !important;border:1px solid #6E4C1E;}
input[type=text]{border:1px solid #DEB65E;outline: #DEB65E;}
textarea{border:1px solid #DEB65E;outline: #DEB65E;}
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
                        <h2 class="ab_1">Ask a Question</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


       
        
<section>
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row py-5">
                    <!-- <div class="col-12">
                     <h3 class="head8">
                         Why the study of Astrology 
                         should be encouraged?
                     </h3>
                     <button type="button" class="btn btn-primary mt-2">Because</button>
                    </div> -->
                    <div class="col-12 col-md-8 mx-auto mt-4  ">
                       <div class="card shadow-lg pb-4 text-center" style="background: #fff;">
                           <div class="app_head text-center py-3"><h3><b>Got a Question</b></h3></div>
                                    <br>
                                       <p><b>Chat with us- Optin Monster team is 
                            here to help you boost you conversions.</b></p>
                        <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                           
                           <input type="text" placeholder="Name" class="mx-1 mx-md-5 mt-3 p-2 w-75" name="name"><br><br>
                           
                           <input type="text" placeholder="Your Email Address" class="mx-1 mx-md-5 p-2 w-75" name="email"><br><br>
                          
                           
                          
                          
                           <textarea name="question" placeholder="Type Your Question Here" class="mx-1 mx-md-5 p-2 w-75"></textarea><br>

                          <button type="submit" name="submit" class="btn btn-brown mt-2">Submit</button>
                        </form>
 
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>

<?php
    if(isset($_POST['submit']))
    {
    $name =  $_POST['name']  ;
   
    $email =  $_POST['email']; 
    
     $question =  $_POST['question'];
   
    
    $to = "manish_rsharma@hotmail.com";
    $subject = "Ask Question";
    $txt = "
    Name: $name  
    Email: $email  
    Question: $question";
    
    mail($to,$subject,$txt);
    }
    ?>
    <?php
    if(isset($_POST['submit'])) {
        if (mail ($to, $subject, $txt)) {
            echo '<script>alert("Thank You \nYour Question Sent Successfully");</script>';
        }else{
            echo '<p></p>';
        }
    }
?>

 <?php include('footer.php')?>

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