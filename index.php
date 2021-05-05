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
    
  </head>
  <body onmousedown="return false" onselectstart="return false">
     
       
    <?php include('header.php') ?>
    <div class="container-fluid"> 
        <section>
            <div class="row">
                <div class="col-12 p-0">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" style="height:90vh;background-image:url(images/banner12.jpg);background-size:cover;">
                            
                            <div class="position-absolute banner_one w-75">
                               <div class="row">
                                   <div class="col-8 ">
                                    <span class="j1">
                                        Welcome to
                                    </span><br>
                                    <span class="j2">THE BEST</span><br>
                                    <span class="j3">HOROSCOPE</span>
                                  <p class="d-none d-md-block text-dark">
                                    The starry vault of heaven is in truth <br>
                                    the open book of cosmic projection
                                  </p>
                                   </div>
                               </div>
                            </div>
                          </div>
                          
                          
                         
                          
                          
                          <!-- <div class="carousel-item">
                           <img src="images/banner.png" class="d-block w-100 position-relative" alt="banner image future 123 website">
                            <div class="position-absolute banner_one w-50">
                               <div class="row">
                                   <div class="col-4">
                                    <h1 class="banner_heading">
                                        The <br>
                                        Jyotirvigyan <br>
                                        Astrological <br>
                                        Institute
                                    </h1>
                                    <p class="d-none d-md-block">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                   </div>
                               </div>
                            </div>
                          </div> -->
                          
                                             <?php
  $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
   $query=mysqli_query($con,"select * from jam");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $image=$row['image'];
       $id=$row['id'];
       ?>
                          
                          
                          <div class="carousel-item"  style="height:90vh;background-image:url(images/<?php echo $image ;?>);background-size:cover;">
                           
                            <div class="position-absolute banner_one w-50 ">
                               <div class="row">
                                   <div class="col-10 ">
                                    <h1 class="banner_heading"><?php echo $title ;?></h1>
                                       <div style="height:116px;overflow:hidden;">
                                    <p class="d-none d-md-block text-dark">
                                       <?php echo $content ;?>
                                       </div>
                                       <div>
                                           <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#hta<?php echo $id ;?>">Read more</button>
                                       </div>
    
                                       
                                    </p>
                                   </div>
                               </div>
                            </div>
                          </div>
                          
                            <?php }?>
                        
                        </div>
                        <a class="carousel-control-prev" style="width:50px;margin:auto;background:#6E4C1E;height:50px;" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next"  style="width:50px;margin:auto;background:#6E4C1E;height:50px;" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </section>

<section>
    <div class="row pt-5" style="background-image: url(images/back1.png);background-size: cover;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-0 pb-md-5 text-white">
                        <p class="para1">
                            We deal entirely with scientific astrology as developed in the west, and we also adopt the best principles of hindu astrology as amended by modern research. We invite the educated public to test and receive the benefites of this practical science.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">


                        <?php
  $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
   $query=mysqli_query($con,"select * from jam");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $image=$row['image'];
       $id=$row['id'];
       ?>
                        
                            <div class="testimonial mx-auto" >
                                <div class="pic" style="background-image: url(images/<?php echo $image ;?>);background-size: cover;">
                                   
                                </div>
                                <div class="px-2 py-0"  style="height: 200px;overflow: hidden;">
                                <h2 class="description">
                              Horoscope of The Month
                                </h2>
                              <?php echo $content ;?>
                              
                            </div>
                            
                               <p class="readmore"><a href="#" style="color: #6E4C1E;" data-toggle="modal" data-target="#hta<?php echo $id ;?>" > Read More</a></p>
                            </div>
                            <?php }?>


                                <div class="testimonial mx-auto">
                                <div class="pic" style="background-image: url(images/test3.png);background-size: cover;">
                                   
                                </div>
                                <div style="height: 200px;overflow: hidden;">
                                <h2 class="description">
                                   Recent Articles
                                </h2>
                               <p class="des2">I am worried about my husband. He loves books, he loves nature, he loves music and he loves everyone. I am so possessive about him. Sometimes I feel that there is other woman in his life., and i love him. Tell me what to do. Everytime he talks to someone i am in pain. Is this the love, when i will be fine astrologically? I think my love is not pure not complete otherwise this would not have happened and these days i am away from him. what do i do
Blessings.,

I will not mention your name here, and astrology has nothing to do with your question. It is good that you understand that your love is not complete, not pure as it should be. This shows that you are aware of yourself. It means that you can go more deep and you can explore yourself. and by exploring yourself you will discover yourself and you can make your love more deep more undconditional. I want your love to expand. </p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#rart">
                               <p class="readmore">Read More</p></a>
                            </div>
                 





                            <div class="testimonial mx-auto">
                                <div class="pic" style="background-image: url(images/test2.png);background-size: cover;">
                                   
                                </div>
                                <div style="height: 200px;overflow: hidden;">
                                <h2 class="description">
                                    Dreams & Meaning
                                </h2>
                               <p class="des2">Through dreams one can predict what is going to happen in the future.
                                Get your dreams interpreted by Pandit Manish Sharma ...</p>
                            </div>
                            <a href="dreaming.html">
                               <p class="readmore">Read More</p></a>
                            </div>
             
                           
             
                           

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row" style="background: #F7EEDA;">
        <div class="col-12 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4  d-flex align-items-center">
                        <h1 class="head2">
                            Working <br>
                            Astrologers
                        </h1>
                       
                    </div>
                    <div class="col-1 d-none d-md-block">
                        <img src="images/vr1.png" width="20px">
                    </div>
                    <div class="col-12 col-md-3">
                        <h6 class="head3">
                            Founder
                        </h6>
                        <p class="para3">
                            Late. P. Moolchand Sharma
                            M.C.B.A (London)
                        </p>

                        <hr class="hr1">
                        <h6 class="head3">Scientific Astrologer & Palmist</h6>
                        <p class="para3">
                            (Member of Indian Institute of 
Astrology and Occultism)
                        </p>
                    </div>


                    <div class="col-12 col-md-3">
                       <br>
                        <p class="para3">
                            P. Rameshchandra 
                            Sharma (M.A.)
                        </p>

                        <hr class="hr1">
                       
                        <p class="para3">
                            P. Manish Sharma
                            <br>
                            PHD. in Astrology | LLB Hons | M.B.A (Marketing) | M.A (English) | B.Sc (Maths)
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="row" style="background: url(images/back3.png);background-size: cover;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h1 class="head4">Monthly Predictions of Sun Signs</h1>
                        <h4 style="color:#6E4C1E;">Your basic nature according to your sun sign</h4>
                        <span><img src="images/hr1.png" class="hr2"></span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4 col-md-2 "><img src="images/ic-1.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-2.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-3.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-4.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-5.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-6.png" width="100%"></div>
                </div>
                <div class="row mt-4">
                    <div class="col-4 col-md-2 "><img src="images/ic-7.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-8.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-9.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-10.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-11.png" width="100%"></div>
                    <div class="col-4 col-md-2"><img src="images/ic-12.png" width="100%"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row py-5" style="background: #F7EEDA;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center col-md-4  mt-4">
                        <div class="card py-4">
                            <h3 class="head5">Get Your 
                                Paid Vedic <br>
                                Astrological 
                                Predictions</h3>
                                <a href="#" data-toggle="modal" data-target="#ask2">
                                <button type="button" class="btn btn-secon mt-2">Click Here</button></a>
                        </div>
                    </div>
                    <div class="col-12 text-center col-md-4  mt-4">
                        <div class="card py-4 h-100">
                            <h3 class="head5">Get Your 
                                Paid<br> Palmistry 
                                Predictions</h3>
                                 <a  href="#" data-toggle="modal" data-target="#ask2">
                                <button type="button" class="btn btn-secon mt-2">Click Here</button></a>
                        </div>
                    </div>
                    <div class="col-12 text-center col-md-4  mt-4">
                        <div class="card py-4 h-100">
                            <h3 class="head5">Get Match 
                                Making for<br> 
                                Marriage</h3>
                                 <a  href="#" data-toggle="modal" data-target="#ask2">
                                <button type="button" class="btn btn-secon mt-2">Click Here</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center col-md-4  mt-4">
                        <div class="card py-4">
                            <h3 class="head5">Get Your Paid 
                                Numerological <br>
                                Predictions</h3>
                                 <a  href="#" data-toggle="modal" data-target="#ask2">
                                <button type="button" class="btn btn-secon mt-2">Click Here</button></a>
                        </div>
                    </div>
                    <div class="col-12 text-center col-md-4  mt-4">
                        <div class="card py-4 h-100">
                            <h3 class="head5">Get your 
                                Tarot Card <br>
                                Reading</h3>
                                 <a  href="#" data-toggle="modal" data-target="#ask2">
                                <button type="button" class="btn btn-secon mt-2">Click Here</button></a>
                        </div>
                    </div>
                    <div class="col-12 text-center col-md-4  mt-4">
                        <div class="card py-4 h-100 ">
                            <h3 class="head5">Get Face 
                                Reading & know 
                                Predictions without 
                                any basic details</h3>
                                 <a  href="#" data-toggle="modal" data-target="#ask2">
                                <button type="button" class="btn btn-secon mt-2">Click Here</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row py-5" style="background: url(images/back4.png);background-size: cover;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5 text-center">
                        <h1 class="head6">Our Services</h1>
                        <img src="images/hr2.png" class="hr2">
                    </div>

                    <div class="col-12 mt-5">
                        <div id="testimonial-slider2" class="owl-carousel">
                            <div class="testimonial2 mx-auto position-relative pt-5 ">
                                <div class="pic2 position-absolute">
                                   <img src="images/c1.png" width="100%">
                                </div>
                                <h2 class="description2 text-center pt-5">
                                    Career<br>
                                   <button type="button" class="btn btn-secon mt-4"  data-toggle="modal" data-target="#ask2">Know yours now!</button>
                                </h2>
                               
                              
                            </div>
                            
                            
                            <div class="testimonial2 mx-auto position-relative pt-5 text-center">
                                <div class="pic2 position-absolute">
                                   <img src="images/k2.png" width="100%">
                                </div>
                                <h2 class="description2 text-center pt-5">
                                    Kundli Predictions<br>
                                    <button type="button" class="btn btn-secon mt-4"  data-toggle="modal" data-target="#ask2">Know yours now!</button>
                                </h2>
                               
                              
                            </div>
             
                           
             
                            <div class="testimonial2 mx-auto position-relative pt-5 ">
                                <div class="pic2 position-absolute">
                                   <img src="images/c3.png" width="100%">
                                </div>
                                <h2 class="description2 text-center pt-5">
                                    Name Analysis<br>
                                    <button type="button" class="btn btn-secon mt-4"  data-toggle="modal" data-target="#ask2">Know yours now!</button>
                                </h2>
                               
                              
                            </div>

                            <div class="testimonial2 mx-auto position-relative pt-5 ">
                                <div class="pic2 position-absolute">
                                   <img src="images/c2.png" width="100%">
                                </div>
                                <h2 class="description2 text-center pt-5">
                                    Face Reading<br>
                                   <button type="button" class="btn btn-secon mt-4"  data-toggle="modal" data-target="#ask2">Know yours now!</button>
                                </h2>
                               
                              
                            </div>
                        </div>
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
                <div class="row my-5 py-5">
                    <div class="col-12 col-md-4">
                        <img src="images/pan1.png" width="100%">
                    </div>
                    <div class="col-12 col-md-8">
                        <h1 class="head7">Pandit Manish Sharma</h1>
                       <p><b>PHD. in Astrology | LLB Hons | M.B.A (Marketing) | M.A (English) | B.Sc (Maths)</b></p>
                          <p><b>(Member of Indian Institute of 
                                Astrology and Occultism)</b></p>
                        <p class="para6">
                            Pandit Manish Sharma is a world-renowned Astrologer from Mhow, India. He was born into a traditional Hindu family of illustrious astrologers where the practice of Astrology has been passed from father to son for centuries. The Sharma family have been keepers of that knowledge for many generations, and , as is the custom, Manish began to receive training from his father while still a young boy. Because the application of Astrological principals is deeply embedded in the customs and rituals of village life, education in the subject was as much a way of life as a focus of study.
                        </p>
                        <p>
                            Thus Manish, like many before him, learned Astrology both as a science involving mathematics and the application of numerous laws and principles, as well as a style of thinking which holds tantamount the premise that all life is sacred and connected to an organic whole.
                        </p>
                        <a href="about.html">
                        <p class="readmore"><b>Read More ....</b></p></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
  <?php include('footer.php') ?>;


    </div>
    

<?php
  $con = mysqli_connect("localhost","future","hta123","i6834132_wp1");
   $query=mysqli_query($con,"select * from jam");
   while($row=mysqli_fetch_array($query)){
       $title=$row['title'];
       $content=$row['content'];
       $image=$row['image'];
       $id=$row['id'];
       ?>


<div class="modal fade" id="hta<?php echo $id ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <img src="images/<?php echo $image ;?>" width="100%;" class="d-block mx-auto"><br>
       
        <h2 class="description">
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






<div class="modal fade" id="rart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
          <img src="images/test3.png" width="100%">
      <h2 class="description">
                               Recent Article
                                </h2>
                                
        <p class="des2">
  I am worried about my husband. He loves books, he loves nature, he loves music and he loves everyone. I am so possessive about him. Sometimes I feel that there is other woman in his life., and i love him. Tell me what to do. Everytime he talks to someone i am in pain. Is this the love, when i will be fine astrologically? I think my love is not pure not complete otherwise this would not have happened and these days i am away from him. what do i do
Blessings.<br>

I will not mention your name here, and astrology has nothing to do with your question. It is good that you understand that your love is not complete, not pure as it should be. This shows that you are aware of yourself. It means that you can go more deep and you can explore yourself. and by exploring yourself you will discover yourself and you can make your love more deep more undconditional. I want your love to expand. 
     </p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




  <div class="modal fade" id="ask2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
          <div class="row">
       <div class="col-12  mx-auto mt-4  ">
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
    
        if (mail ($to, $subject, $txt)) {
            echo '<script>alert("Thank You \nYour Question Sent Successfully");</script>';
        }else{
            echo '<p></p>';
        }
    
    ?>
  
 </div>
                       </div>
                    </div>
                 </div>
                 
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       
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