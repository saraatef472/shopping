<?php
include('../user/connect.php');
$searchErr = '';
$products_details='';
if(isset($_POST['submit']))
{

    $search = $_POST['search'];

    $sql = "select * from products where brand like '%$search%' or brand like '%$search%' or color or status like '%$search%'  or  description like '%$search%'";
    // $stmt = $con->prepare("select * from products where name like '%$search%' or category like '%$search%'");

        $result = $conn->query($sql);

}

?>



<html>
<head>
<head>
<meta charset="utf-8">
    <title> <?php echo $title ?> </title>
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

.table-responsive {
    overflow: initial;

}


@media only screen and (max-width: 1000px) {

    .crud {
        width: 100%
    }
    td {
        width: 10%;
        font-size: 10px;
        height: 100px
    }
    th {
        width: 10%;
        font-size: 10px;


   }
   .td{
    width: 5%;
        font-size: 5px;
        height: 100px
   }
   #btnn{
    width:0.5%;
    font-size:10px
   }
   #btnn a{
    /* width:0.8%; */
    font-size:8px
   }


}

@media screen and (min-width:1000px) and (max-width:1300px) {
    td {
        width: 17%;
        font-size: 15px;
        height: 100px
    }
    th {
        width: 10%;
        font-size: 15px;


   }
   .td{
    width: 5%;
        font-size: 9px;
        height: 100px
   }
   #btnn{
    width:0.5%;
    font-size:10px
   }
   #btnn a{
    /* width:0.8%; */
    font-size:8px
   }

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
                    <a href="tradein.php" class="nav-item nav-link">trade_in </a>
                    <a href="settings.php" class="nav-item nav-link">Settings</a>

                    <a href="logout.php" class="nav-item nav-link">LOG Out</a>


                </div>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button></form>
            </div>
        </nav>
        <!-- Navbar End -->


	<div class="container">

	<h3><u>Search Result</u></h3><br/>
	<div class="table-responsive">
	  <table class="table">
	    <thead>
        <tr>
<th>brand</th>
<th>price</th>
<!-- <th>price</th> -->
<th>color</th>
<th>type</th>
<th> status</th>
<th> years</th>
<th> description</th>
<th> image</th>
<th>Edit</th>
    </tr>
	    </thead>
	    <tbody>
            <?php
        if ($result->num_rows > 0){
        while($row = $result->fetch_assoc() ){

        ?>

		    	 	<tr>

                         <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['years']; ?></td>
            <td><?php echo $row['description']; ?></td>

            <td><?php  echo '<image style = "width:90px;" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
</td>
            <td>
<div class="btn-group" id="btnn"><a href="../cartdetails.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" name="delete" >Details</a></div>
            </td>
		    	 	</tr>


<?php  }
        } else {
           ?><h5><?php echo "no result with this name";}?> </h5>
	     </tbody>
	  </table>
	</div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
