<?php
include('../user/connect.php');


// if(!empty($_SESSION['userID'])){
//     $id = $_SESSION['userID'];
//     $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 1";
//     $result = mysqli_query($conn,$sql);
//     if($result->num_rows>0){
//         while ($row = mysqli_fetch_array($result)) {
//      // echo "yes";
//         }}else{
//             header("Location:../index.php");
//         }
//     // $row = mysqli_fetch_array($result);
//    //  header("location:index.php");
//    // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0";

// }else{
//     header("Location:../index.php");
//     // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0"."WRONG LOCATION";
// }
$now = date("Y-m-d");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>gouniasoft cars</title>
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
            height:300px !important;
        }
        .card-img-top{
height:200px;
width:90%;
        }
      .all:hover .card-img-top{
width:100%
        }
        .bxc-grid__column.bxc-grid__column--3-of-12{
            width:30%
        }
        .bxc-grid__mp-gutter-layout .bxc-grid__column{
            position: relative;
    box-sizing: border-box;
    display: inline-block;


    min-height: 1px;

        }
        .ss{
            width:35%;
            margin:2%
        }
        .a-divider-inner {
            width:80%;
            margin-left:10%;
    border-top: 2px solid #BBBFBF;
    display: block;
    height: 44px;
    margin-bottom: -18px;
    z-index: 0;
}
.aa{
    width:80%;
    margin-left:10%;
}
body {

    font-family: Arial,sans-serif;
}
h1 {
    font-weight: 400;
    font-size: 28px;
    line-height: 36px;
    text-align: center!important;
}

/* h2 {
    font-weight: 700;
    font-size: 24px;
    line-height: 32px;
    text-align: center!important;
} */
.bb{
    width:100% !important;
}
.cc{
    width:95%;
 margin-left:3% !important;
}
.bxc-grid__column.bxc-grid__column--12-of-12 {
    width: 100%;
}


.bxc-grid__column.bxc-grid__column--12-of-12 {
    width: 100%;
}
.dd{
    padding-left:6%
}
.immm{
    width:42% !important;
}

.backtop{
    margin-bottom: 40px;
    background-color: #37475A;
}
#myBtn{
width:100%;
background-color: #37475A;
}
.span{
    display: block;
    text-align: center;
    color: #111;
    padding: 19px 0;
    line-height: 15px;
    font-size: 15px;
    color:aliceblue
}
@media screen and (max-width:2000px) {
.imm2{
       width:100%;
       /* height:200px */
    }

}
@media screen and (max-width:800px) {
.aa{
    width:100%;
    margin-left:0px
}
.ss{
            width:25%;
            /* padding:2%; */

        }
        h4{
            font-size:13px
        }
        .h2{
            font-size:13px
        }
        .card-img-top{
    height: 100px;
    width: 100%;
}
.card-img-top>img{
    
    width: 100%;
}
.all{
    display:inline-flex;
        width: 22%;
}
.form{
    width:100%;
}
.form>a{
    width:100%;
}

}
@media screen and (max-width:1000px) {
       .card-img-top{
    height: 100px;
    width: 100%;
}
.card-img-top>img{
    
    width: 100%;
}
.all{
    display:inline-flex;
        width: 22%;
}
.form{
    width:100%;
}
.form>a{
    width:100%;
}

}
    </style>
</head>
<body>

       <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="<?php echo $logosrc ?>" style="width:41%;height:70px"><?php echo $title ?></h2>
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
                    </div>                   <a href="../tradein/device.php" class="nav-item nav-link">trade_in</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="used.php" class="dropdown-item">used</a>
                        <a href="new.php" class="dropdown-item">New</a>
                        <a href="filter.php" class="dropdown-item">price</a>
                        <a href="manual.php" class="dropdown-item">Accessories</a>
                        <a href="auto.php" class="dropdown-item">Mobiles</a>
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
                    </div>
                <a href="../adminn/index2.php" class="nav-item nav-link">login</a>
            </div>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="submit">Search</button></form>
</div>
    </nav>
    <!-- Navbar End -->

<!-- <br> -->

<div >
<a href="#">
<img src="img/tradeinn.jpg"style="width:100%">
</a>
</div>
<div class="bxc-grid__text a-text-center   bxc-grid__text--light" style="margin-top:20px;">
    <h3 style="text-align: center!important;">How it works</h3>
</div>
<!-- next step -->
<div class="bxc-grid__row  aa bxc-grid__row--light  " style="display:inline-flex">

                <div class="bxc-grid__column ss bxc-grid__column--3-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-5_row2-col1" data-csa-c-id="e4gr34-372zo6-t421lu-3l8aow" data-cel-widget="acsux-widgets_content-grid_merchandised-search-5_row2-col1">

<div class="bxc-grid__text a-text-center cardd  bxc-grid__text--light">
    <p><img class="imm2"src="https://m.media-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/1144824_UK_TradeIn_01.jpg" alt="Number1"></p>
<h4>Step 1 : <a href="device2.php?#right">Visit the amazon.macfix portal </a> to initiate the trade-in process</h4>
<br>
<p class="h2"><em>*You will leave the Amazon.ae website and will be redirected to an external website</em></p></div>
<!-- #region -->
</div>
</div>
    <div class="bxc-grid__column  ss bxc-grid__column--3-of-12   bxc-grid__column--light">

            <div  style="display:flex" class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-5_row2-col2" data-csa-c-id="tej9cr-pvlshc-e2egp7-ord17x" data-cel-widget="acsux-widgets_content-grid_merchandised-search-5_row2-col2">

<div class="bxc-grid__text a-text-center cardd  bxc-grid__text--light">
    <p><img class="imm2"src="https://m.media-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/1144824_UK_TradeIn_02.jpg" alt="Number2"></p>
<h4>Step 2: Provide your device details and receive a price quote based on the condition of the device</h4></div>


</div>
</div>
    <div class="bxc-grid__column ss  bxc-grid__column--3-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-5_row2-col3" data-csa-c-id="t0qkg5-b24g18-f51drn-1qz9dc" data-cel-widget="acsux-widgets_content-grid_merchandised-search-5_row2-col3">

<div class="bxc-grid__text a-text-center cardd  bxc-grid__text--light">
    <p><img class="imm2"src="https://m.media-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/1144824_UK_TradeIn_03.jpg" alt="Number3"></p>
<h4>Step 3: Schedule a free home pick-up and get your device evaluated</h4></div>


</div>
</div>
    <div class="bxc-grid__column   ss bxc-grid__column--3-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-5_row2-col4" data-csa-c-id="395z0p-oz3zv5-6tct4d-cb915t" data-cel-widget="acsux-widgets_content-grid_merchandised-search-5_row2-col4">

<div class="bxc-grid__text a-text-center cardd  bxc-grid__text--light">
    <p><img class="imm2"src="https://m.media-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/1144824_UK_TradeIn_04.jpg" alt="Number4"></p>
<h4>Step 4: Get Amazon.ae gift card</h4></div>


</div>
</div>
    </div>
<!-- end next step -->

<!-- third step -->
<div class="bxc-grid__row   bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-5_row3-col1" data-csa-c-id="ohsdln-qid9k8-j3xf23-j4dao2" data-cel-widget="acsux-widgets_content-grid_merchandised-search-5_row3-col1">
<div class="bxc-grid__divider">

    <div class="a-divider a-divider-section">
                <div class="a-divider-inner">

                </div>
            </div>
        </div>


</div>
</div>
    </div>
<!-- end third step -->

<!-- devices -->
<div class="bb">
<div class="bb celwidget pf_rd_p-a4435369-e020-4a56-b481-52c1a3b94b7a pf_rd_r-HKATK357YF28V786G1N4 " cel_widget_id="f9dc1c4f-ec57-42da-877a-995f4c09ab8a" data-csa-op-log-render="" data-csa-c-content-id="amzn1.sym.a4435369-e020-4a56-b481-52c1a3b94b7a" data-csa-c-slot-id="DsUnknown-4" data-csa-c-type="widget" data-csa-c-painter="raw:__EU_leo-widget_1.0" data-csa-c-id="7vw8gv-l1bmjz-x6hhs1-qjvhvd" data-cel-widget="f9dc1c4f-ec57-42da-877a-995f4c09ab8a">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/61wm2WQpqYL.css?AUIClients/ACSWidgetAssets-contentGrid">
<div class="acsUxWidget">
    <div id="contentGrid_630537" class="acswidget acswidget-content-grid celwidget AE bxw-content-grid bxw-content-grid--ember bxc-grid--padding bxc-grid__n-bottom-layout  bxc-grid--light bxc-grid__ls-font-layout" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6" data-is-mobile="false" data-csa-c-id="4t0zuc-s6cv2u-hve26u-wd0qea" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6">
<div class="bxc-grid__container bxc-grid__container bxc-grid__mp-gutter-layout" data-cel-widget="osa_browse_banner_2">
  <div class="bxc-grid__row  cc bxc-grid__row--light  ">
                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">
            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6_row1-col1" data-csa-c-id="2fshvb-hj25c8-knkop2-553yz3" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6_row1-col1">
<div class="bxc-grid__text a-text-center   bxc-grid__text--light">
    <h1>Trade-in your old device</h1></div>
</div>
</div>
    </div>
    <div class="bxc-grid__row cc  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--3-of-12   bxc-grid__column--light ">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6_row2-col1" data-csa-c-id="aautxi-5th4ft-4k9ku4-6cqali" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6_row2-col1">

<div class="bxc-grid__image bxc-grid-halign bxc-grid-halign--center  bxc-grid__image--light ">
    <img class="imm2"src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/nav_mobiles.jpg" alt="mobiles">

<div class="bxc-grid__text a-text-center bxc-grid-overlay--background  bxc-grid__text--light">
    <h2 class="h2">Mobile</h2></div><div class="bxc-grid-overlay">
                <a class="bxc-grid-overlay__link" href="device2.php?device=mobile">
                            <span class="bxc-grid-valign bxc-grid-valign--bottom"></span></a>
                </div></div>

</div>
</div>
    <div class="bxc-grid__column  bxc-grid__column--3-of-12   bxc-grid__column--light cardd">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6_row2-col2" data-csa-c-id="kx5lyd-gquzet-ojzdy6-h370i6" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6_row2-col2">
<div class="bxc-grid__image bxc-grid-halign bxc-grid-halign--center  bxc-grid__image--light" >
    <img class="imm2" src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/nav_laptops.jpg" alt="laptops">

<div class="bxc-grid__text a-text-center bxc-grid-overlay--background  bxc-grid__text--light">
    <h2 class="h2">Laptop</h2></div><div class="bxc-grid-overlay">
                <a class="bxc-grid-overlay__link" href="device2.php?device=laptop">
                            <span class="bxc-grid-valign bxc-grid-valign--bottom"></span></a>
                </div></div>

</div>
</div>
    <div class="bxc-grid__column  bxc-grid__column--3-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6_row2-col3" data-csa-c-id="a785ml-tje23d-uzwaip-1pp05j" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6_row2-col3">

<div class="bxc-grid__image bxc-grid-halign bxc-grid-halign--center  bxc-grid__image--light">
    <img class="imm2"src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/nav_tablet.jpg" alt="tablets">

<div class="bxc-grid__text a-text-center bxc-grid-overlay--background  bxc-grid__text--light">
    <h2 class="h2">Tablet</h2></div><div class="bxc-grid-overlay">
                <a class="bxc-grid-overlay__link" href="device2.php?device=tablet">
                            <span class="bxc-grid-valign bxc-grid-valign--bottom"></span></a>
                </div></div>

</div>
</div>
    <div class="bxc-grid__column  bxc-grid__column--3-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6_row2-col4" data-csa-c-id="gaqco8-jghgr0-q15lqc-9honlh" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6_row2-col4">

<div class="bxc-grid__image bxc-grid-halign bxc-grid-halign--center  bxc-grid__image--light">
    <img class="imm2"src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/nav_smartwatch.jpg" alt="smartwatches">

<div class="bxc-grid__text a-text-center bxc-grid-overlay--background  bxc-grid__text--light">
    <h2 class="h2">Smartwatch</h2></div><div class="bxc-grid-overlay">
                <a class="bxc-grid-overlay__link" href="device2.php?device=smartwatch">
                            <span class="bxc-grid-valign bxc-grid-valign--bottom"></span></a>
                </div></div>

</div>
</div>
    </div>
    <div class="bxc-grid__row  cc bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-6_row3-col1" data-csa-c-id="nf58ba-3f3or1-c0l3iy-pdxse0" data-cel-widget="acsux-widgets_content-grid_merchandised-search-6_row3-col1">
<div class="bxc-grid__divider">

    <div class="a-divider a-divider-section">
                <div class="a-divider-inner"></div>
            </div>
        </div>


</div>
</div>
    </div>
    </div>


<!-- <script type="text/javascript">if (typeof uex == 'function') uex('ld', 'acsux-widgets_content-grid_merchandised-search-6', {wb: 1});  // timestamp page-loaded + send the metrics</script> -->
<!-- <script type="text/javascript">if (typeof uet == 'function') uet('be', 'acsux-widgets_content-grid_merchandised-search-6', {wb: 1});  // timestamp body-end</script> -->
</div>
</div>




</div>

                      </div>
<!-- end devices -->

<!-- fourth -->
<div class="bxc-grid__container bxc-grid__container  bxc-grid__mp-gutter-layout" data-cel-widget="osa_browse_banner_3">
   <div class="bxc-grid__row   bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row1-col1" data-csa-c-id="vbld67-jy07at-95rmln-k7mp98" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row1-col1">

<div class="bxc-grid__text a-text-center   bxc-grid__text--light">
    <h2 style="text-align: center!important; font-weight:bold;color:black">Frequently Asked Questions</h2></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row2-col1" data-csa-c-id="tu2fs-8l3tjq-j3vfwu-3jvg6l" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row2-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <h3 style="font-weight:700;letter-spacing: 1px;">1. How does this work?</h3></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row3-col1" data-csa-c-id="gx1r6x-tunsmu-2dekzj-87l8u6" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row3-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
<p style="color:black"><strong style="font-weight:800;color:black;letter-spacing: 1px;">Step 1:</strong> <a href="/gp/redirect.html/ref=s9_acss_bw_cg_primegc_md1_w?location=https://amazon.northladder.net/ae-en/&amp;token=BEB2B9396DCFAE96304AB84DCC4AE99832BFEDD1&amp;source=standards&amp;pf_rd_m=A2KKU8J8O8784X&amp;pf_rd_s=merchandised-search-8&amp;pf_rd_r=XZXZQ73E94W8DBP9NKW3&amp;pf_rd_t=101&amp;pf_rd_p=a5c7bff4-85d5-4253-9a08-e7374479733c&amp;pf_rd_i=66377163031">Visit thr amazon.macfix portal to initiate the trade in process</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row4-col1" data-csa-c-id="82v5kf-jxnb75-4vi26w-dixzqr" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row4-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
<p style="color:black"><strong style="font-weight:800;color:black;letter-spacing: 1px;">Step 2:</strong> Provide your device details and receive a price quote based on the condition of the device</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row5-col1" data-csa-c-id="s7zdze-mkscga-wk7vd0-ntuep1" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row5-col1">

<div class="bxc-grid__image  bxc-grid__image--light">
    <img class="immm" src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/final_step2_web.jpg" alt="step"></div>

</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row6-col1" data-csa-c-id="fpbvaq-bnqb9s-geruc3-7qpbe4" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row6-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
<p style="color:black"><strong style="font-weight:800;color:black;letter-spacing: 1px;">Step 3:</strong> Schedule a free home pick-up by selecting the city and adding address and pickup date</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row7-col1" data-csa-c-id="nizy1l-cy3emc-yof18u-n0vi81" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row7-col1">

<div class="bxc-grid__image   bxc-grid__image--light">
    <img class="immm" src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/final_step3_web.jpg" alt="step"></div>

</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row8-col1" data-csa-c-id="sd8prl-784gbo-qz4gmz-6q3o3s" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row8-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
<p style="color:black"><strong style="font-weight:800;color:black;letter-spacing: 1px;">Step 4:</strong> Receive an email and Whatsapp/SMS confirmation</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row9-col1" data-csa-c-id="mc9mj8-293b7l-ks4cey-o97g2y" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row9-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <p style="color:black"><strong style="font-weight:800;color:black;letter-spacing: 1px;">Step 5:</strong> Your device will be evaluated and you will get an Amazon.ae gift card</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row10-col1" data-csa-c-id="4lubru-j0ajnq-e533rj-pqeugc" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row10-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <h3 style="color:#111">2. What items can I trade-in?</h3>
<p style="color:#111">– Mobile phones<br>
– Laptops<br>
– Tablets<br>
– Smartwatches<br>
For any of these devices, you can go through the above process and receive a price quote based on the device condition.</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  " style="color:#111">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row11-col1" data-csa-c-id="xjwyzw-16q475-rorxs0-gq811m" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row11-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <h4 style="color:#111">3. Must the device have been purchased on Amazon?</h4>
<p style="color:#111">No, any device, whether purchased on Amazon or via any other retailer, may be exchanged.</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row12-col1" data-csa-c-id="mb8li7-t3d5vb-fnuake-ujdf9e" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row12-col1">

<div style="color:#111" class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <h3 style="color:#111">4. Do I need to include accessories to trade-in my device?</h3>
<p>For mobile phones and tablets, we do not require any accessories. However, for laptops and smartwatches, the charger is mandatory.</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row13-col1" data-csa-c-id="xwt3rs-j3qun5-b6gdv3-qx2yuc" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row13-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <h3  style="color:#111">5. How will I get paid?</h3>
<p style="color:#111">Once your device is assessed for the condition and you agree on the price, you will receive the Amazon.ae gift card at your shared mobile number (verification by an OTP).</p></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row14-col1" data-csa-c-id="cu8chd-msk5dm-ogcbbc-b1k6e3" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row14-col1">

<div class="bxc-grid__text a-text-center   bxc-grid__text--light">
    <h2 style="color:#111">Amazon Terms and Conditions</h2></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row15-col1" data-csa-c-id="mzp0m4-wzfd9z-whbkv3-yjqp6q" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row15-col1">

<div class="bxc-grid__text a-text-left   bxc-grid__text--light">
    <ul>
<li>This offer is promoted by NorthLadder and therefore Amazon has no responsibility or control over it.  <br></li>
<li>The offer is subject to the NorthLadder terms and conditions, available here. Amazon is not responsible for transactions occurring on third party websites. <br></li>
<li>The offer is subject to availability and can be withdrawn or modified without notice. <br></li>
<li>The offer does not include cash alternatives. <br></li>
<li>The general conditions of use and sale of Amazon apply. <br></li>
<li>For more details, you can contact NorthLadder at the following email address: support@northladder.com <br></li>
<li>Support is available Monday to Friday, 9am to 6pm. You will receive a response within 24 hours.</li>
</ul></div>


</div>
</div>
    </div>
    <div class="bxc-grid__row  dd  bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row16-col1" data-csa-c-id="vww0za-13t72y-cxxgho-xxqe4y" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row16-col1">
<div class="bxc-grid__divider">

    <div class="a-divider a-divider-section">
                <div class="a-divider-inner"></div>
            </div>
        </div>


</div>
</div>
    </div>
    <div class="bxc-grid__row   bxc-grid__row--light  ">

                <div class="bxc-grid__column  bxc-grid__column--12-of-12   bxc-grid__column--light">

            <div class="bxc-grid__content   bxc-grid__content--light  celwidget" cel_widget_id="acsux-widgets_content-grid_merchandised-search-8_row17-col1" data-csa-c-id="opjnxt-2k325n-p2shkc-r1bqu5" data-cel-widget="acsux-widgets_content-grid_merchandised-search-8_row17-col1">

<div class="bxc-grid__image   bxc-grid__image--light">
    <img style="width:100%"src="https://images-eu.ssl-images-amazon.com/images/G/39/electronics/store/kamja/Event/2023/Exchange/1144824_UK_TradeIn_21.jpg" alt="exchange"></div>

</div>
</div>
    </div>

<!-- end fourth -->

 <!-- back to top -->

  <div class="navFooterBackToTop backtop">
  <button onclick="topFunction()" id="myBtn" title="Go to top">
  <span class="navFooterBackToTopText span">
    Back to top
  </span>
  </button>
  </div>

<!-- end back to top -->

    <script>
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#ffeaa7");
});


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>


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
