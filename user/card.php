<?php
include('connect.php');


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
};


if ( isset($_GET['prodid']) ){
    $prodid = $_GET['prodid'];
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


$sql ="SELECT  * FROM card, products WHERE products.id = card.product_id";

$results = mysqli_query($conn,$sql);

$data = $results->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gouina</title>
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
    width: 80%;
    height: 30px;
    outline: none;
    border: none;
    background: #bdc3c7;
    margin: 4px 0;
    border-radius: 4px;
    padding: 4px;
    color: #fff;

}
.submit{
    background: #2c3e50;
}
.submit:hover{
    background-color: #3498db;
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
border:1px grey;
width:90%;
background-color:#7f8c8d;

}

table {
    width: 100%;
    text-align: center;
    margin: 10px 0;
    border-radius: 102px solid grey;
    box-shadow:5px  10px 10px #222;
    border-collapse: collapse;
    padding: 25%;
    padding-top: 20%;
    text-align: left;
    margin-bottom: 4%;
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
    width: 100%;
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
.card-img-top{
    height:100px
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
            width:42%;
            float:left;
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

}
@media (min-width:700px) and (max-width: 1000px) {
    .all{
            margin:4%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:41%;
            float:left;
        }
}
@media (min-width:1000px) and (max-width: 3000px) {
    .all{
            margin:1%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:23%;
            float:left;
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
                        <a href="auto.php" class="dropdown-item">Mobiles</a>
                        <a href="device.php.php" class="dropdown-item">trade-in</a>
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
<div class="crud">

<form action="addprod.php?id=<?= $data['id']?>" method="POST" enctype="multipart/form-data">
<?php
$sql ="SELECT * FROM card LEFT JOIN  products ON card.product_id = products.id" ;
$result = mysqli_query($conn, $sql)?>

            <div class="head">
            <h2>card:</h2>
          <a href="removeallcart.php" class="btn btn-secondary" name="edit" >Delete All</a>


        </div>
<table class="table">
<thead>
    <tr>
      <th scope="col">product_id</th>
      <th scope="col">brand</th>
      <th scope="col">total price</th>
      <th scope="col">quantity</th>
      <th scope="col">color</th>
      <th scope="col">description</th>
      <th scope="col">type</th>
      <th scope="col">status</th>
      <th scope="col">image</th>



    </tr>
  </thead>
    <tbody
>

    <?php

    if($result->num_rows>0){
        $cardid= $row['card_id'];
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row['product_id']; ?></td>

            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['total_price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['status']; ?></td>


            <td>
            <?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
            </td>




            <td>
<div class="btn-group"><a href="removefromcart.php?cardid=<?php echo $row['card_id']; ?>" class="btn btn-secondary" name="edit" >remove</a></div>
            </td>



        </tr>





        </tbody>
    <?php }} ?>

    </table>
    <br>
    <div id="sumtotal"><h4> your total price is :
        <?php

    $sql2 = "SELECT SUM(total_price)  as total FROM card WHERE 1";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
    $sum = $row['total'];
    echo $sum;
      ?></div>
      <br>

<!-- <div class="btn-group"><a href="index2.php?sum=<?php echo $sum?>&userid=<?php echo $id?>&cardid=<?php echo $cardid?>" class="btn btn-secondary" name="edit" >pay with card</a></div> -->
<div class="btn-group"><a href="#" class="btn btn-secondary" name="edit" >pay with card</a></div>


    <!-- </form> -->

</form>
</div>



    <script>

        //table
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#ffeaa7");
});


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
