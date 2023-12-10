<?php
include('../user/connect.php');
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 3";
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

// include('../layout/slidebar.php');
// if(!empty($_SESSION['id'])){
//     $id = $_SESSION['id'];
//     $result = mysqli_query($conn, "SELECT * FROM products WHERE id =$id");
//     $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:../register/login.php");
// }


$sql ="SELECT * FROM `products`WHERE 1";
$results = mysqli_query($conn,$sql);

$data = $results->fetch_assoc();

// $update = false;
// if (isset($_POST['submit'])) {
//     // $filename = $_FILES["image"]["name"];
//     // $tempname = $_FILES["image"]["tmp_name"];
//     // $folder = "./image/" . $filename;
//     $name = $_POST['name'];
//     $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : '/images/noimage.jpg';
//     $description = $_POST['description'];
//     $price = $_POST['price'];
//     $category = $_POST['category'];
//     $image = $_POST['image'];
//     $createdOn = $_POST['createdOn'];
//     mysqli_query($conn, "INSERT INTO `products`(`name`, `description`, `price`, `category`, `image`, `createOn`) VALUES (`$name`, `$description`, `$price`, `$category`, `'$image'`, `$now`)");
//     // header('location: index.php');
// }
// $sql = "SELECT * FROM products, cat WHERE cat.id = $id ";
// $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?> </title>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
body {
    /* background-color: #ffeaa7; */
    /* color: #fff; */
    font-family: system-ui;
}

.new{
    width: 60%;
    margin: auto;
}

h2{
    text-align: center;
    text-transform: uppercase;
    margin: 30px 0px;
}

input {
    width:50%;height:30px;font-size:17px;border: raduis 5px;
    margin:1%

}
.submit{
    /* background: #2c3e50; */
}
.submit:hover{
    background-color:#89CFF0;
    color:white
}
.crud {
    width: 95%;
    margin: auto;
}
#total{
    color:grey
}
#total::before {
    content: 'total:';
}

input:focus {
outline: none;
/* background-color: #222; */
/* border:1px grey; */
/* width:90%; */
border:solid 2px #89CFF0;
/* background-color:#7f8c8d; */

}

table {
    width: 40%;
    text-align: center;
    /* margin: 5px 0; */
    /* border-radius: 102px solid grey; */
    box-shadow:5px  10px 10px #222;
    border-collapse: collapse;
    padding: 1%;
    padding-top: 10%;
    text-align: left;
    margin-bottom: 2%;
    font-size: 13px;
}

table th {
    text-transform: uppercase;

}
thead{
    border:1px grey;
    box-shadow: 2px 1px grey;
}

h2{
text-shadow: 2px 1px grey;
}

@media only screen and (max-width: 600px) {
  table{
    width: 30%;
    text-align: center;
    margin: 10px 0;
    border-radius: 102px solid grey;
    box-shadow:5px  10px 10px #222;
    border-collapse: collapse;
    /* padding: 25%; */
    padding-top: 2%;
    text-align: left;
    margin-bottom: 4%;
  }
}
body {
  margin: 0;
  font-family: "Lato", sans-serif;
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
  background-color: #04AA6D;
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
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

    </style>
</head>
<body>


<div class="sidebar">
<h2 class="m-0 text-primary" style="margin-bottom:30px"><img src="<?php echo $logosrc ?>" style="width:99%;height:70px;"><?php echo $title?> </h2>
<a href="admin.php"><i class="fa fa-dashboard" style="font-size:20px"> Dashboard</i></a>
  <a  href="proj.php">Products</a>

  <a href="settings.php">settings</a>

  <a href="tradein.php" class="nav-item nav-link">Trade In</a>

  <a href="logout.php" class="nav-item nav-link">LOG Out</a>
</div>

<div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <!-- <h2 class="m-0 text-primary"><img src="img/al.jpeg"style="width:41%;height:70px">Gouniasoft</h2> -->
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">

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


<div class="one">

<h2><a href="settings.php">Settings</a></h2>

<!-- add new category form -->
<form action="addtrade.php?id=<?= $data['id']?>" method="POST" enctype="multipart/form-data">
<div class="new" >
   <h2>Add New  product in Trade in</h2>
   <label for="device">device</label>
   <select style="width:60%;height:30px;font-size:17px;border: raduis 5px;" name="device" id="devices">
  <option value="laptop" name="device">Laptop</option>
  <option value="mobile" name="device">Mobile Phone</option>
  <option value="tablet" name="device">Tablet</option>
  <option value="smartwatch" name="device">Smartwatch</option>
</select>
<br><br>
  <label for="">brand</label>
   <input type="text" name="brand" value="brand" ><br>
   <label for="">model</label>
   <input type="text" name="model" value="model" ><br>
   <label for="">processor</label>
   <input type="text" name="processor" value="processor" ><br>
   <label for="">ram</label>
   <input type="text" name="ram" value="ram" ><br>
   <label for="">storage</label>
   <input type="text" name="storage" value="storage" ><br>
   <label for="">subseries</label>
   <input type="text" name="subseries" value="subseries" ><br>


   <input type="file" id="image2" name="image2" value="image2" placeholder="image"><br>
   <label for="">flawless_price</label>
   <input type="number" name="flawless_price" value="flawless_price" > <br>  <!-- <input type="file" id="image4" name="image4" value="image4" placeholder="image"> -->
   <label for="">flawless_description</label>
   <input type="text" name="flawless_description" value="flawless_description" > <br>

   <label for="">good_price</label>
   <input type="number" name="good_price" value="good_price" > <br>
   <label for="">good_desc</label>
   <input type="text" name="good_description" value="good_description" > <br>
   <label for="">avg_price</label>
   <input type="number" name="avg_price" value="avg_price" > <br>
   <label for="">avg_decription</label>
   <input type="text" name="avg_decription" value="avg_decription" > <br>
   <label for="">broken_but_working price</label>
   <input type="number" name="broken_but_working" value="broken_but_working" > <br>
   <label for="">broken_but_working_desc</label>
   <input type="text" name="broken_but_working_desc" value="broken_but_working_desc" > <br>

   <input type="submit" name ="add" value="submit" class="submit">

</div>
</form>


</div>

<!-- end one -->



<div class="two">

<div class="new">
<form action="deleteall.php" method="post">
<input id="submit" type="submit" name="deleteall" value="Delete All" class="submit">  </form>
</div>

</div>
<!-- end two -->

<div class="three">


<br><br>
<div class="crud">

<?php $result = mysqli_query($conn, "SELECT * FROM `trade_in`"); ?>

            <div class="head">
            <h2>trade_in Products:</h2>


        </div>
<table class="table">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">device</th>
      <th scope="col">brand</th>
      <th scope="col">model</th>
      <th scope="col">processor</th>

      <th scope="col">ram</th>
      <th scope="col">storage</th>
      <th scope="col">subseries</th>
      <th scope="col">brand image</th>
      <th scope="col">flawless pricee</th>
      <th scope="col">flawless description</th>

      <th scope="col">good price</th>
      <th scope="col">good description</th>
      <th scope="col">avg price</th>
      <th scope="col">avg description</th>
      <th scope="col">broken but working price</th>
      <th scope="col">broken description</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
    <tbody
>

    <?php
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['device']; ?></td>
            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['processor']; ?></td>
            <td><?php echo $row['ram']; ?></td>
            <td><?php echo $row['storage']; ?></td>
            <td><?php echo $row['subseries']; ?></td>



            <td>
           <?php  echo ' <image style = "width:90px;" src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '"/>'?>
            </td>

            <td><?php echo $row['flawless_price']; ?></td>
            <td><?php echo $row['flawless_desc']; ?></td>
            <td><?php echo $row['good_price']; ?></td>
            <td><?php echo $row['good_desc']; ?></td>
            <td><?php echo $row['average_price']; ?></td>
            <td><?php echo $row['avg_desc']; ?></td>
            <td><?php echo $row['broken_but_working']; ?></td>
            <td><?php echo $row['broken_desc']; ?></td>






            <td>
<div class="btn-group"><a href="edittrade.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" name="edit" >Edit</a></div>
            </td>

            <td>
<div class="btn-group"><a href="deletetrade.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" name="delete" >delete</a></div>
            </td>

        </tr>





        </tbody>
    <?php }} ?>

    </table>

</div>
<!-- end three -->


</div>


<!-- <script src="../js/script.js">


    </script> -->
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
