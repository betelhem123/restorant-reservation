<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">

</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>chanoly noodles</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/01.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>Chanoly Smoothie and Noodles house has been serving fresh foods and drinks since 2012 GC and with an open Chinese style kitchen and chefs with the motive of delivering healthy Asian Chinese meals with the local touch and international mojitos and smoothies with the local fusion. Our restaurant is well-known for its freshly house-made different types of Chinese noodles, sizzling, mixed vegetables.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>menu<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/4.jpg" class="img-fluid">
              <img src="img/5.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/6.jpg" class="img-fluid">
              <img src="img/7.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/8.jpg" class="img-fluid">
               <img src="img/9.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/13.jpg" class="img-fluid">
               <img src="img/3.jpg" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>BOOK US<br><br></h3>
    <img  src="img/1.webp" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.5730996944303!2d38.849009414160534!3d9.011370091747562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b9bad378af5af%3A0x47adc21e78c29a9b!2sChanoly%20Noodles!5e0!3m2!1sen!2set!4v1659854740275!5m2!1sen!2set" width="600" height="450"  style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
    
  
                                       
          

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>