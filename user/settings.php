<?php
include 'connect.php';
// if(!empty($_SESSION['userID'])){
//     $id = $_SESSION['userID'];
//     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
//     // $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:../index.php");
// }
// if(!empty($_SESSION['id'])){
//     $id = $_SESSION['id'];
//     $result = mysqli_query($conn, "SELECT * FROM users WHERE groupid = 1");
//     $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:login.php");
// }
// $name = "";
// $description= "";
// $update = false;
$now = date("Y-m-d");
// if(!isset($_GET['id'])){
//     die("itsont provided");
// }
// $id = $_GET['id'];
$sql = "SELECT * FROM users WHERE groupid = 1";
$result = $conn->query($sql);
if($result->num_rows != 1){
    die("its not id in database");
}
$data = $result->fetch_assoc();
// print_r($data);

// if (isset($_POST['edit'])) {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     $createdOn = $_POST['createdOn'];
//     // $id = $row['id'];

//     mysqli_query($conn, "INSERT INTO `cat`(`name`, `description`, `createOn`) VALUES ('$name', '$description','$now')");
//     $_SESSION['message'] = "saved";
//     // header('location: index.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <title>Category</title>
    <style>
body {
    /* background-color: #222; */
    /* color: #fff; */
    font-family: system-ui;
}

.new{
    width: 80%;
    margin: auto;
}

h2{
    text-align: center;
    text-transform: uppercase;
    margin: 30px 0px;
}

input {
    width: 60%;
    height: 30px;
    outline: none;
    border: none;
    background: #ccc;
    margin: 4px 0;
    border-radius: 4px;
    padding: 4px;
    color: black;

}
.submit{
    width:20%;
    margin-left:40%;
}
.submit:hover{
    background-color:blue;
    color:white
}
.crud {
    width: 80%;
    margin: auto;
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
<!-- add new category form -->

<?php $results = mysqli_query($conn, "SELECT * FROM `users`"); ?>

<form action="updateadmin.php?id=<?= $data['userID'] ?>" method="POST" style="margin-bottom:20%;"  enctype="multipart/form-data">
<div class="new" >
   <h2>Edit Profile</h2>
   <?php
    if($results->num_rows>0){

        ?>
        <label for=""><h4>User Name</h4></label>
   <input type="text" name="username" value="<?= $data['username'] ?>"autocomplete="off" ><br>
   <label for=""><h4>First Name</h4></label>
   <input type="text" name="fname" value="<?= $data['firstName'] ?>" ><br>
   <label for=""><h4>Last Name</h4></label>
   <input type="text" name="lname" value="<?= $data['lastName'] ?>"><br>
   <label for=""><h4> New Password &nbsp;</h4></label>
   <input type="text" name="password"autocomplete="new-password">
   <input type="submit" name ="update" value="Update" class="submit">

</div>
<?php } ?>

    </div>



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
