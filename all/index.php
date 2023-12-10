<?PHP
include('../user/connect.php');
// if(!empty($_SESSION['userID'])){
//     $id = $_SESSION['userID'];
//     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
//     // $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:../index.php");
// }
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 0";
    $sql2 = "SELECT * FROM users WHERE userID = $id AND groupid = 1";
    $sql3 = "SELECT * FROM users WHERE userID = $id AND groupid = 3";

    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$sql2);
    $result3 = mysqli_query($conn,$sql3);

    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
            header("Location:../adminn  /index.php");
        }
//user page
}elseif($result2->num_rows>0){
    while ($row = mysqli_fetch_array($result2)) {
        header("Location:../user/index.php");
    }
}
//employ page
elseif($result3->num_rows>0){
    while ($row = mysqli_fetch_array($result3)) {
    header("Location:../employ/index.php");
}
}
else{
    header("Location:../index.php");
}

}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo $title?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <!--<link href="lib/animate/animate.min.css" rel="stylesheet">-->
     
        <!--<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />-->

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
         <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/style2.css" rel="stylesheet">
        <style>
            nav {
  color: black;
  min-width: 100%;
}

nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative;
}

nav ul li {
  display: inline-block;
  float: none;
  white-space: nowrap;
}
.ul:hover >li{
    display:block;
}
.ul:hover >ul>li{
    display:block;
}

nav a {
  display: block;
  padding: 0 10px;
  color: black;
  font-size: 20px;
  line-height: 30px;
  text-decoration: none;
}

nav a:hover {
  color: #FFF;
  background-color: #CCC;
  transition: all .3s ease;
}

nav ul ul {
  display: none;
  position: absolute;
  top: 80%;
}

nav ul li:hover>ul {
  display: inherit;
  transition: all .3s ease;
}
/*nav ul ul li {*/
/* display: list-item;*/
/*}*/
        </style>
    </head>

    <body>
        <!-- Spinner Start -->
        <!--<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">-->
        <!--    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">-->
        <!--        <span class="sr-only">Loading...</span>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Spinner End -->





       <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="<?php echo $logosrc ?>" style="width:41%;height:70px"><?php echo $title ?></h2>
        </a>
        <div class="navv" style="width:60%">
      <nav style="background-color:white;width:70%;margin:1%">
  <ul>
    <li><a href="index.php">Home</a></li>
      <li><a href="device.php">trade-in</a></li>

    </li>
    <li>
      
    <a href="#">Products</a>
  
      <ul style="background-color:white;border:2px solid grey;">
      <?php $result = mysqli_query($conn, "SELECT  DISTINCT category FROM `products` ");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <li ><a href="seeall2.php?name=<?php echo $row['category']?>"><?php echo $row['category']?></a>
          <ul style="background-color:white;border:2px solid grey;margin-left:5%" >
            <?php
            $cat = $row['category'];
            $result8 = mysqli_query($conn, "SELECT *  FROM `products` where category = '$cat'");
          if($result8->num_rows>0){
        while ($data = $result8->fetch_assoc()) {

        ?>
            <!-- <li><a href="perfusion.html">Perfusion</a></li> -->
            <li><a href="seeall2.php?name=<?php echo $data['brand']?>"><?php echo $data['brand']?></a></li>
            <?php }}?>
            <!-- <li><a href="ecmo.html">ECMO</a></li>
            <li><a href="tavr.html">TAVR</a></li> -->
          </ul>
        </li>
        <?php }} ?>
        <!-- <li><a href="bloodmanagement.html">Blood Management</a>
          <ul>
            <li><a href="autotransfusion.html">Autotransfusion</a></li>
            <li><a href="plateletgel.html">Platelet Gel</a></li>
          </ul>
        </li> -->
      </ul>
    
    </li>
    <li class="ul"><a href="device.php">branches</a>
      <ul class="ul">
        <li class="li"><a href="emirate.php">Emirates</a></li>
        <li class="li"><a href="makram.php">Nasr City</a></li>
      </ul>
    </li>
   
  </ul>
   
</nav>

            
    
</div>
          
           <form class="form-inline my-2 my-lg-0" action="search.php" method="post" >

<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="submit">Search</button></form>
    </nav>
    <!-- Navbar End -->

      
        <!-- Carousel Start -->
        <div class="caro" style="width:80%;margin-left:10%;margin-top:2%">
        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>


  </div>
  <?php $result = mysqli_query($conn, "SELECT * FROM `ads`ORDER BY ID DESC LIMIT 1"); ?>

  <?php
    if($result->num_rows>0){
      $row = mysqli_fetch_array($result)
        ?>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php  echo ' <image style = "width:100%;height:400px" src="data:image/jpeg;base64,' . base64_encode($row['image1']) . '"/>'?>
    </div>
    <div class="carousel-item">
    <?php  echo ' <image style = "width:100%;height:400px" src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '"/>'?>
    </div>
    <div class="carousel-item">
    <?php  echo ' <image style = "width:100%;height:400px" src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '"/>'?>
    </div>
    <div class="carousel-item">
    <?php  echo ' <image style = "width:100%;height:400px" src="data:image/jpeg;base64,' . base64_encode($row['image4']) . '"/>'?>
    </div>  <div class="carousel-item">
    <?php  echo ' <image style = "width:100%;height:400px" src="data:image/jpeg;base64,' . base64_encode($row['image5']) . '"/>'?>
    </div>  <div class="carousel-item">
    <?php  echo ' <image style = "width:100%;height:400px" src="data:image/jpeg;base64,' . base64_encode($row['image6']) . '"/>'?>
    </div>
  </div>
  <?php } ?>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
        <!-- Carousel End -->



        <!-- Testimonial Start -->
     <?php
                
                 $result3 = mysqli_query($conn, "SELECT DISTINCT category FROM products");
    if($result3->num_rows>0){
        while ($row = mysqli_fetch_array($result3)) {

        ?>
        <!--<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">-->
        <br> <br>
            <div class="container">
                <div class="text-center">
                <a href="seeall2.php?name=<?php echo $row['category']?>">    <h1 class="mb-5"><?php echo $row['category']?></h1></a>
                </div>
                <div class="owl-carousel">
                <?php
                 $search =  $row['category'];
                 $result2 = mysqli_query($conn, "SELECT * FROM `products` WHERE brand like '%$search%' or description like '%$search%' or type like '%$search%'or category like '%$search%'");
      if($result2->num_rows>0){
          while ($row = mysqli_fetch_array($result2)) {

        ?>
        <div class="item">
        <a href="details.php?id=<?php echo $row['id'] ?>" style="background-color:white;width:100%;border:none"class="btn btn-primary" name="details">
                    <!--<div class="testimonial-item text-center">-->
                    <?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>

                        <!-- <img alt="noimg" class="bg-light  p-2 mx-auto mb-3" src="img/iphone.jpg"> -->
                        <h5 class="mb-0" style="width:50%;"><?php echo $row['brand'];?></h5>

                    <!--</div>-->
                    </a>
                    </div>
                    <?php }} ?>
              
                </div>
            </div>
        <!--</div>-->
         <br> <br>
        <?php }} ?>
        <!-- Testimonial End -->






        <!-- Booking Start -->
        <!--<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">-->
        <!--    <div class="container">-->
        <!--        <div class="row gx-5">-->
        <!--            <div class="col-lg-6 py-5">-->
        <!--                <div class="py-5">-->
        <!--                    <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>-->
        <!--                    <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt-->
        <!--                        lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <br><br>
                            <div class="col-lg-6" style="width:100%">
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Book For A Service</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

        <!-- Booking End -->


 <!-- Fact Start -->
        <div class="container-fluid fact bg-dark my-5 py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">17</h2>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">2599</h2>
                        <p class="text-white mb-0">Expert Technicians</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">7665</h2>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-desktop fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">12278</h2>
                        <p class="text-white mb-0">Compleate Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Address</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Opening Hours</h4>
                        <h6 class="text-light">Monday - Friday:</h6>
                        <p class="mb-4">09.00 AM - 09.00 PM</p>
                        <h6 class="text-light">Saturday - Sunday:</h6>
                        <p class="mb-0">09.00 AM - 12.00 PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Services</h4>
                        <a class="btn btn-link" href="">Diagnostic Test</a>
                        <a class="btn btn-link" href="">Engine Servicing</a>
                        <a class="btn btn-link" href="">Tires Replacement</a>
                        <a class="btn btn-link" href="">Oil Changing</a>
                        <a class="btn btn-link" href="">Vacuam Cleaning</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="../adminn/index2.php">Admin</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
          <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/owlcarousel/script2.js"></script>


    </body>

    </html>
