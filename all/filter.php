<?php
include('../user/connect.php');
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
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
       * {
    box-sizing: border-box;
}

        .head{
            width:30%;
            background-color: lightgray;
            margin-left:35%;
            text-align: center;
            color:grey;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);

        }
        .all{
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:20%;
            float:left;
        }

        .all:hover{
            box-shadow: 0 6px 17px rgb(0 0 0 / 0.9);
            /* padding:1%; */
        }

        .card{
            height:400px !important;
        }
        .card-img-top{
height:200px;
width:90%;
        }
      .all:hover .card-img-top{
width:100%
        }
        .formm{
            padding:2%
        }
input{
    margin-bottom:3%
}
@media (min-width:500px) and (max-width:700px){

.all{
        margin:1%;
        padding:1%;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        border-radius: 5px;
        width:43%;
        float:left;
    }
}
@media (min-width:300px) and (max-width:500px){

.all{
    margin:5%;
    padding:1%;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    border-radius: 5px;
    width:70%;
    float:left;
}
}

@media (min-width:700px) and (max-width:900px){

.all{
    margin:2%;
    padding:1%;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    border-radius: 5px;
    width:29%;
    float:left;
}
}
    </style>
    </head>

    <body>
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        Spinner End -->



  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="<?php echo $logosrc ?>"style="width:41%;height:70px"><?php echo $title?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
      <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">products</a>
                        <div class="dropdown-menu fade-up m-0">
                        <?php $result = mysqli_query($conn, "SELECT DISTINCT brand FROM products;");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
        ?>
    <a href="seeall2.php?name=<?php echo $row['brand']?>" class="dropdown-item" name="details"><?php echo $row['brand']?></a>                    
                        <?php }} ?>
                        </div>
                    </div>                  <a href="../tradein/device.php" class="nav-item nav-link">trade_in</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="used.php" class="dropdown-item">used</a>
                        <a href="new.php" class="dropdown-item">New</a>
                        <a href="filter.php" class="dropdown-item">price</a>
                        <a href="manual.php" class="dropdown-item">Accessories</a>
                        <a href="mobile.php" class="dropdown-item">Mobiles</a>
                        <a href="brand.php" class="dropdown-item">brand</a>
                      
                    </div>
                </div>
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Branches</a>
                        <div class="dropdown-menu fade-up m-0">
                        <a href="techmall.php" class="dropdown-item">Technology Mall <span style="font-size:11px">(Nasr city)</span></a>
                        <a href="makram.php" class="dropdown-item">Makram Ebeid <span style="font-size:11px">(Nasr city)</span></a>
                        <a href="emirates.php" class="dropdown-item">Emirates <span style="font-size:11px">(main branch)</span></a>
                        <a href="turkey.php" class="dropdown-item">Turkey</a>
                        <a href="london.php" class="dropdown-item">London</a>
                        <a href="greece.php" class="dropdown-item">Greece</a>

                        </div>
                    </div>                      <a href="../adminn/index2.php" class="nav-item nav-link">login</a>
            </div>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="submit">Search</button></form>
</div>
    </nav>
    <!-- Navbar End -->


<form action="" method="GET" class="formm">
    <div class="row">
  <div class="col-md-4">
    <label for="exampleInputEmail1">Filter By Price</label>
    <input type="number" class="form-control" name="startfrom"  value="<?php if(isset($_GET['startfrom'])){echo $_GET['startfrom']; }else{echo "10";}?>" placeholder="minimum">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="col-md-4">
    <label for="exampleInputPassword1">maximum</label>
    <input type="number" name="endat" value="<?php if(isset($_GET['endat'])){echo $_GET['endat']; }else{echo "20";}?>" class="form-control"  placeholder="max">
  </div>
  <button type="submit" class="btn btn-primary px-4">Submit</button>
  </div>
</form>
<div class="alll">
<?php
if(isset($_GET['startfrom']) && $_GET['endat']){
$startfrom = $_GET['startfrom'];
$endat = $_GET['endat'];
$sql ="SELECT * FROM `products` WHERE price BETWEEN $startfrom AND $endat";

}else{
    $sql ="SELECT * FROM `products`";

}
$result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
<form action="../cart/cartdetails.php?id=<?php echo $row['id']; ?>" method="post">

<div class="card"id="card" >
<?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['brand'];?></h5>
    <p class="card-text"><?php echo $row['description']?></p>
    <a href="#" class="btn btn-primary" name="details">Details</a>
  </div>
</div>

    </form>
    </div>
    <?php }} ?>

    </div>

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
    </body>
    </html>
