<?php
include('../user/connect.php');
// $name = "";
// $description= "";
// $price = "";
// $image = "";
// $category = "";
// $id = 0;
// $update = false;
// if(!empty($_SESSION['id'])){
//     $id = $_SESSION['id'];
//     $result = mysqli_query($conn, "SELECT * FROM products WHERE id =$id");
//     $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:login.php");
// }
$now = date("Y-m-d");

if (isset($_POST['submit'])) {

    // $filename = $_FILES["image"]["name"];
    // $tempname = $_FILES["image"]["tmp_name"];
    // $folder = "./image/" . $filename;

    $brand = $_POST['brand'];
    $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : '/images/noimage.jpg';
    $price = $_POST['price'];
    $color = $_POST['color'];
    $image = $_POST['image'];
    $type = $_POST['type'];
    $status= $_POST['status'];
    $year= $_POST['year'];
    $description= $_POST['description'];




    mysqli_query($conn, "INSERT INTO `products`(`brand`, `price`, `color`, `type`, `status`, `years`,`description`,`image`) VALUES ('$brand','$price','$color','$type','$status','$year','$description','$file')");

    // header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title><?php echo $title ?> </title>
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
            margin:5%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:80%;
            float:left;
        }

        .all:hover{
            box-shadow: 0 6px 17px rgb(0 0 0 / 0.9);
            /* padding:1%; */
        }


.images>img{
height:300px;
width:20%;
margin:2%
}

        .card{
            height:800px !important;
        }
        .card-img-top{
height:200px;
width:90%;
        }
        /* #totalprice2{
            display:none;
        } */
      .all:hover .card-img-top{
width:20%;
margin:2%
        }
        .price2 , .pricedel{
            visibility: hidden;
        }

    </style>
</head>
<body>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><img src="<?php echo $logosrc ?>" style="width:41%;height:70px"><?php echo $title ?> </h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="products.php" class="nav-item nav-link">Admin Panel</a>

                    <a href="proj.php" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="used.php" class="dropdown-item">used</a>
                            <a href="new.php" class="dropdown-item">New</a>
                            <a href="filter.php" class="dropdown-item">price</a>
                            <a href="manual.php" class="dropdown-item">Accessories</a>
                            <a href="auto.php" class="dropdown-item">Mobiles</a>
                            <a href="brand.php" class="dropdown-item">Brand</a>

                        </div>
                    </div>
                    <a href="tradein.php" class="nav-item nav-link">trade_in </a>
                    <a href="settings.php" class="nav-item nav-link">Settings</a>

                    <a href="logout.php" class="nav-item nav-link">LOG Out</a>

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
                    </div>
                </div>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button></form>
            </div>
        </nav>
        <!-- Navbar End -->


<!-- <br> -->
<div class="alll" >
<?php
 $id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $id");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
<form action="../cart/cartdetails.php?id=<?php echo $row['id']; ?>" method="post">

<div class="card"id="card" style="width:100%">
<div class="images" style="display:flex">
<?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
<?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '"/>'?><br>
<?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '"/>'?>

</div>
<div class="card-body">
    <h2 class="card-title"><?php echo $row['brand'];?></h2>
    <p class="card-text"> <h5>DESC:</h5>&nbsp;&nbsp;<?php echo $row['description']?></p><br>
 <h5> Price</h5>   <p class="card-text price" id="price"><?php echo $row['price']?></p>
 <div class="p" style="display:flex">
    <p class="card-text price2" id="price2"><?php echo $row['price_with_maintance']?></p>
    <p class="card-text price2" id="pricedel"><?php echo $row['price_with_delivery']?></p>
    </div>
    <h5><span>total:</span></h5>
    <div class="totalprice" id="totalprice2"> &nbsp;&nbsp;$</div>

    <a href="proj.php"  class="btn btn-primary" name="details">BACK</a>

    <input type="button" class="btn btn-outline-primary" value="price with Maintance only" id="main" onclick="maintance()"/>
    <input type="button" class="btn btn-outline-primary" value="price with Delivery only" id="del" onclick="delivery()"/>
    <input type="button" class="btn btn-outline-primary" value="price with Maintance $ Delivery" id="mad" onclick="maindel()"/>


    <a href="card.php?id=<?php echo $row['id']; ?>"  class="btn btn-primary" name="details">ADD TO CART</a>



  </div>
</div>

    </form>
    </div>
    <?php }} ?>

    </div>

    <!-- </form> -->



    <script>
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#ffeaa7");
});


function maintance(){

  var x =document.getElementById("price");
  var z =document.getElementById("price2");
  var y =document.getElementById("totalprice2");
  var m =document.getElementById("main")
  let float = parseFloat(x.innerHTML);
  let float2 = parseFloat(z.innerHTML);
  w = float + float2;
  if (y.innerHTML != w){
    y.innerHTML = w;
    m.setAttribute("value", "price without maintance");
   }else{
    y.innerHTML = float;
    m.setAttribute("value", "price with maintance only");

   }

 }

function delivery(){
var x =document.getElementById("price");
var z =document.getElementById("pricedel");
var y =document.getElementById("totalprice2");
var m =document.getElementById("delivery")
let float = parseFloat(x.innerHTML);
let float2 = parseFloat(z.innerHTML);
w = float + float2;
if (y.innerHTML != w){
  y.innerHTML = w;
  m.setAttribute("value", "price without Delivery");
}else{
  y.innerHTML = float;
  m.setAttribute("value", "price with delivery only");

 }

}

function maindel(){
var x =document.getElementById("price");
var xx =document.getElementById("price2");
var z =document.getElementById("pricedel");
var y =document.getElementById("totalprice2");
var m =document.getElementById("mad")
let float = parseFloat(x.innerHTML);
let float2 = parseFloat(z.innerHTML);
let float3 = parseFloat(xx.innerHTML);

w = float + float2 +float3;
if (y.innerHTML != w){
  y.innerHTML = w;
  m.setAttribute("value", "price without maintance & delivery");
}else{
  y.innerHTML = float;
  m.setAttribute("value", "price with maintance & delivery");

 }

}

    </script>

</body>
</html>
