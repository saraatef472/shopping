<?php
include('connect.php');
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
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 1";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
     // echo "yes";
        }}else{
            header("Location:../index.php");
        }
    // $row = mysqli_fetch_array($result);
   //  header("location:index.php");
   // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0";

}else{
    header("Location:../index.php");
    // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0"."WRONG LOCATION";
}
$now = date("Y-m-d");
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 1";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
     // echo "yes";
        }}else{
            header("Location:../index.php");
        }
    // $row = mysqli_fetch_array($result);
   //  header("location:index.php");
   // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0";

}else{
    header("Location:../index.php");
    // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0"."WRONG LOCATION";
}

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
    <title> <?php echo $title;?></title>
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
            height:900px !important;
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

        .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #f1f1f1;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}



div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
  .all{
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:92%;
            float:left;
        }
.images>img{
    width:29% !important
}


}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .all{
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:90%;
            float:left;
        }
        .images>img{
    width:29% !important
}


}

@media (min-width:700px) and (max-width: 3000px) {
    .images>img{
    width:29% !important
}
.images>img:hover{
width:33% !important;
}
}
    </style>
</head>
<body>

<div class="sidebar">
<a href="index.php">
<h2 class="m-0 text-primary" style="margin-bottom:30px"><img src="<?php echo $logosrc?>" style="width:99%;height:70px;"> <?php echo $title;?></h2>
</a>
<br>
<form class="form-inline my-2 my-lg-0"style="display:flex" action="search.php" method="post">
<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button></form>

  <a href="proj.php">Products</a>
  <a href="settings.php">settings</a>

  <a href="card.php" class="nav-item nav-link">card</a>

  <a href="logout.php" class="nav-item nav-link">LOG Out</a>
  <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="used.php" class="dropdown-item">Used</a>
                        <a href="new.php" class="dropdown-item">New</a>
                        <a href="filter.php" class="dropdown-item">Price</a>
                        <a href="brand.php" class="dropdown-item">brand</a>
                        <a href="manual.php" class="dropdown-item">Accessories</a>
                        <a href="device.php.php" class="dropdown-item">trade-in</a>
                        <a href="brand.php" class="dropdown-item">Offers</a>
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
                    </div>
</div>
 <!-- sidebar end -->



 <div class="content">

<!-- <br> -->
<div class="alll" >
<?php
 $id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $id");
 //' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';

    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
<form action="addcard.php?id=<?php echo $row['id'];?>" method="post">

<div class="card"id="card" >
<div class="images" style="display:flex">

<?php if($row['image']  != ""):echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';endif; ?>


<?php if($row['image2']  != ""):echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '"/>';endif; ?>



<?php if($row['image3']  != ""):echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '"/>';endif; ?>

</div>
<div class="card-body">
    <h2 class="card-title"><?php echo $row['brand'];?></h2>
    <p class="card-text"> <h5>DESC:</h5>&nbsp;&nbsp;<?php echo $row['description']?></p>
  <h5> Price</h5>   <p class="card-text price" id="price"><?php echo $row['price']?></p>

     Quantity :<input type="number" name="quantity" min="1" id="quantity" value="1">
     <input type="button" value="change" onclick="change()">

    <h5><span>total:</span>
   <p id="totall" style="color:red;font-size:15px"></p>
</h5>
    <div class="totalprice" name="totalprice" id="totalprice2"></div>
    <input type="number" style ="visibility:hidden"name="total2" id="total2" value="5"> <br>

    <a href="proj.php"  class="btn btn-primary" name="details">BACK</a>

    <input type="button" class="btn btn-outline-primary" value="price with Maintance only" id="main" onclick="maintance()"/>
    <input type="button" class="btn btn-outline-primary" value="price with Delivery only" id="del" onclick="delivery()"/>
    <input type="button" class="btn btn-outline-primary" value="price with Maintance $ Delivery" id="mad" onclick="maindel()"/>

<!--
    <a href="addcard.php?id=<?php echo $row['id']; ?>"  class="btn btn-primary" name="addd">ADD TO CART</a> -->
<input class="btn btn-primary" type="submit" name="addd" value='ADD to Cart'><i class=" fa fa-shopping-cart" style="font-size:25px;color:dark-grey" aria-hidden="true"></i>
<p class="card-text price2" id="price2"><?php echo $row['price_with_maintance']?></p>


<p class="card-text price2" id="pricedel"><?php echo $row['price_with_delivery']?></p>


  </div>
</div>

    </form>
    </div>
    <?php }} ?>

    </div>

    <!-- </form> -->
 </div>


    <script>
//     $(document).ready(function()
// {
//     $("tr:even").css("background-color", "#ffeaa7");
// });
var q = document.getElementById("quantity").value;
var y =document.getElementById("totalprice2");
var x =document.getElementById("price");
var total2 = document.getElementById("total2");
let aa = parseFloat(x.innerHTML);

let all = aa * q;

if (y.innerHTML.trim() == "") {
   y.innerHTML= all;
   total2.setAttribute("value",all);
}else{
    y.innerhtml = "hey";
}


function change(){
    var q = document.getElementById("quantity").value;
var y =document.getElementById("totalprice2");
var x =document.getElementById("price");
var total2 = document.getElementById("total2");

let aa = parseFloat(x.innerHTML);
let all = aa * q;


   y.innerHTML= all;
   total2.setAttribute("value",all);


}
function maintance(){

  var x =document.getElementById("price");
  var z =document.getElementById("price2");
  var y =document.getElementById("totalprice2");
  var m =document.getElementById("main");
  var q = document.getElementById("quantity").value;
  var tot = document.getElementById("totall");
  let float = parseFloat(x.innerHTML);
  let float2 = parseFloat(z.innerHTML);
  //let float4 = parseFloat(q.innerHTML);
  w = (float + float2) *q;
  if (y.innerHTML != w){
    y.innerHTML = w ;
    total2.setAttribute("value",w);
    m.setAttribute("value", "price without maintance");
    tot.innerHTML= "price with maintance only:";
   }else{
    y.innerHTML = float * q;
    total2.setAttribute("value",float * q);
    m.setAttribute("value", "price with maintance only");
    tot.innerHTML= "price without maintance :";

   }

 }

function delivery(){
var x =document.getElementById("price");
var z =document.getElementById("pricedel");
var y =document.getElementById("totalprice2");
var m =document.getElementById("del");
var q = document.getElementById("quantity").value;
var tot = document.getElementById("totall");
let float = parseFloat(x.innerHTML);
let float2 = parseFloat(z.innerHTML);
w = (float + float2)*q;
if (y.innerHTML != w){
  y.innerHTML = w;
  total2.setAttribute("value",w);
  m.setAttribute("value", "price with Delivery only");
  tot.innerHTML= "price without delivery";
}else{
  y.innerHTML = float * q;
  total2.setAttribute("value",float * q);
  m.setAttribute("value", "price without delivery");
  tot.innerHTML= "price with delivery only";

 }

}

function maindel(){
var x =document.getElementById("price");
var xx =document.getElementById("price2");
var z =document.getElementById("pricedel");
var y =document.getElementById("totalprice2");
var m =document.getElementById("mad");
var tot = document.getElementById("totall");
var q = document.getElementById("quantity").value;
let float = parseFloat(x.innerHTML);
let float2 = parseFloat(z.innerHTML);
let float3 = parseFloat(xx.innerHTML);

w = float + float2 +float3;
if (y.innerHTML != w){
  y.innerHTML = w;
  total2.setAttribute("value",w);
  m.setAttribute("value", "price with maintance & delivery");
  tot.innerHTML= "price without maintance&delivery";
}else{
  y.innerHTML = float * q;
  total2.setAttribute("value",float * q);
  m.setAttribute("value", "price without maintance & delivery");
  tot.innerHTML= "price with maintance& delivery";

 }
}

    </script>


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
