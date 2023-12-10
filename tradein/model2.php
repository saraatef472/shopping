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
.btn-primary {
   color: #000;
    background-color: #ffa41c;
    border-color: #ffa41c;
    font-size: 1.125rem;
    padding:4%;

    border-radius: 4px;
    text-transform:none!important;
}
.btn-primary:hover{
   color: #FFFFFF!important;
    background-color: #ffb23e!important ;
    border-color: #ffa41c!important;
    font-size: 1.125rem;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    padding:4%;
    border-radius: 4px;


}
.li{
    display:flex;
}
.li>div{
    width:18%;
    padding:2%;
    margin:3%;
    color:#000;


}
.no{
    opacity: 0.3;
}
.act{
    color:#000;
    font-weight:480 !important ;
}
.act2{
    color:#0B2154 !important ;
    font-weight: 500;
}
.li>svg{
    margin-top:6%;
    margin-left:14%;
    margin-bottom:6%


}
h6{
    width:30%;
    margin-top: 7%;
    margin-left:45% !important
}
.shapes>a{
    width:22%;
    margin:2%;
    height:100px;
}
.shape{
   border: 1px solid #d5d9d9!important;
   padding:3%;
   border-radius: 6px;
}
.shape>p{
  color:#000;
  padding:4%;
  margin-left:2%
}
.shapes{
    display:flex;

}
.imm{
    width:90%;

}
.row{
    width:100%;
    background-color: white;
    margin-bottom: 7%;

}
.row2{
    width:100%;
}
.leftt>a{
   color: #007185;
}
.leftt>p{
    color:#000;
    font-size:18px;
    margin-top:7%
}
#bt{
    margin-top:11%;

}
#iconm,#iconm2,#iconm3,#iconm4,#iconm5,#iconm6,#iconm7,#iconm8,#iconm9,#iconm10{
display:none;
float: right;
}
#iconp,#iconp1,#iconp2,#iconp3,#iconp4,#iconp5,#iconp6,#iconp7,#iconp8,#iconp9,#iconp10{
    float: right;
}
#myDIV,#myDIV2,#myDIV3,#myDIV4,#myDIV5,#myDIV6,#myDIV7,#myDIV8,#myDIV9,#myDIV10{
    display:none;
    background-color: rgba(245,245,247,255);

    font-family: "Amazon Ember", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
font-size:16px; padding:5%;
    color:#000
}
.card-title{
    border:none !important;
}
@media (max-width: 600px){
.b3-sm {
    font-size: 1rem;
    letter-spacing: 0;
}
.onee,.twoo,.three{
    font-size:14px;
}
}
.b1, .b2, .b3, .b4 {
    color: #0f1111;
}@media (min-width: 1000px) and (max-width: 2000px){
#up{
    width: 45%;

}
.row{
    display:flex;
    width:100%;
    background-color: white;

}
.left{
    width:40%;
    padding:1%

}
.right{
    width:50%;
}
.num{
    font-weight: 900;
    margin-right:4%;
    font-size: 36px;
    color:black !important;
}
.left>p{
    color:black;

}
.left>h3{
    font-size: 37px !important;
    font-weight: 680;
 color: #000;
 margin-top:7%;
 margin-bottom:7%;
}
.right>h3{
    font-size: 41px !important;
    font-weight: 680;
 color: #000;
 margin-left:5%;
 margin-top:7%;
 margin-bottom:7%;
}
.rightt{
width:50%;
margin-left:10%;

}

.rightt>button{
    border:none !important;
    font-size:25px;
width:100%;
margin-top:4%;
font-weight: 500;   background-color: rgba(245,245,247,255);


}
.card-title{
    border:none !important;
}
.all{
            margin:2%;
            padding:5%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:35%;
            float:left;
        }
        

        .all:hover{
            box-shadow: 0 6px 17px rgb(0 0 0 / 0.9);
            /* padding:1%; */
        }
.form >a {
    width:30%
}
.card-title{
    color:black;
    font-weight: 100 !important;
    font-size: 1rem;
}
        .card-img-top{
height:100px;
width:100%;
        }
      .all:hover .card-img-top{
width:100%
        }

}
@media screen and (min-width: 1370px) {
    .all2{
    width:80% ;
    margin-left:10%;
    margin-top:4%;
}
.row{
    display:flex;
    width:100%;
    background-color: white;

}
.row2{
    display:flex;
    width:100%;
   background-color: rgba(245,245,247,255);
   padding:7%;

}
.leftt>h3{
    font-weight: 700;
color:#0f1111;
font-size:50px
}
.leftt{
    width:40%
}

}

@media screen and (max-width:1000px) {
       .card-img-top{
    height: 100px;
    width: 100%;
}
.card-img-top{
    height: 100px;
    width: 100%;
}
.card-img-top>img{
    
    width: 100%;
     border-radius:30px;
}
.all{
    display:inline-flex;
        width: 32%;
        margin:1%;
         border: 1px solid #d5d9d9!important;
        border-radius: 10px;
        padding:5%;
}
.form{
    width:100%;
 
}
.form>a{
    width:100%;
   
}
.form>a>h5{
     color: black;
   font-size:15px;
   font-weight:50;
}
.alll{
    width:80%;
    margin-left:10%;
}

.left{
    width:70%;
    padding:5%
}

.num{
    font-weight: 700;
    margin-right:4%;
    font-size: 29px;
    color:black !important;
}
.left>p{
    color:black;

}
.left>h3{
    font-size: 27px !important;
    font-weight: 680;
 color: #000;
 margin-top:7%;
 margin-bottom:7%;
}
.right>h3{
    font-size: 43px !important;
    font-weight: 680;
 color: #0f1111;
 width:90%;
 padding-left:14%;
 /* margin-top:1%; */
}

.li>div{
    width:9%;
    margin:3%;
    color:#000;


}
.no{
    opacity: 0.3;
    font-weight:580 !important ;

}
.act{
    color:#000;
    font-weight:580 !important ;
}
.li>svg{
    margin-top:6%;
    margin-left:14%;
    margin-bottom:6%


}
.li{
    padding-left:10%;

}
h6{
    width:30%;
    margin-top: 7%;
    margin-left:45% !important
}
.shapes>a{
    width:22%;
    margin:2%;
    height:100px;
}
.shape{
   border: 1px solid #d5d9d9!important;
   padding:3%;
   border-radius: 6px;
}
.shape>p{
  color:#000;
  padding:4%;
  margin-left:2%
}
.shapes{
    display:flex;
    width:80%;
    margin-left:10%

}
.imm{
    width:90%;

}
.row2{
    padding-top:7%;
    width:100%;
   background-color: rgba(245,245,247,255);
}
.leftt{
    width:50%;
    margin-left:25%
}
.rightt{
    width:100%
}
.rightt>button{
    border:none !important;
    font-size:20px;
width:100%;
margin-top:4%;
font-weight: 500;
left: 150px;

 background-color: rgba(245,245,247,255);


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
<div class="all2" >
<div class="w" style="background-color:rgba(242,242,242,255)">
<div id="up" style="padding-top:7%;padding-left:6%">
<p style="font-size:45px;color:black;font-weight:600;width:100%"> A Smarter Way to upgrade! </p>
<p class="b1 b2-xl b3-sm pb-xl-6 pb-4">Trade-in your devices at the best price and get Amazon.ae Gift Card</p>
<a href=""id = "bt" class="btn btn-primary " onMouseOver="this.style.background.color='#ffb23e'" >Trade-in your device</a>
</div>

</div>
<div id="down">
<img src="img/sarsar.JPG" style="width:100%">
</div>

<!-- second section -->
<div class="row">
<div class="left">
<h3>How It Works </h3>
 <p style="display:flex"> <span class="num">1</span> Provide device details and get a price quote</p>
 <p style="display:flex"> <span class="num">2</span> Book a home pick-up and get your device evaluated</p>
 <p style="display:flex"> <span class="num">3</span> Opt for a certified data wipe service</p>
 <p style="display:flex"> <span class="num">4</span> Get an Amazon.ae Gift Card at your doorstep

</p>

</div>

<div class="right" id="right">
<h3>Trade-in your old device </h3>
<div class="li">
<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.8687 13.3813L11.1187 4.63125C10.9963 4.50889 10.8404 4.42556 10.6707 4.39181C10.501 4.35805 10.325 4.37539 10.1651 4.44162C10.0053 4.50785 9.8686 4.62 9.77246 4.76389C9.67632 4.90779 9.625 5.07696 9.625 5.25001V22.75C9.625 22.9231 9.67632 23.0922 9.77247 23.2361C9.86861 23.38 10.0053 23.4922 10.1651 23.5584C10.325 23.6246 10.501 23.642 10.6707 23.6082C10.8404 23.5745 10.9963 23.4911 11.1187 23.3688L19.8687 14.6188C19.95 14.5375 20.0144 14.4411 20.0584 14.3349C20.1024 14.2287 20.125 14.1149 20.125 14C20.125 13.8851 20.1024 13.7713 20.0584 13.6651C20.0144 13.559 19.95 13.4625 19.8687 13.3813Z" fill="#1F0A54"></path></svg>
<div class="onee act2"><a href="device2.php">Select device</a></div>
<div class="twoo act"><a>Device details</a></div>
<div class="three no"><a>Collection method</a></div>
                </div>

<h6>Select model</h6>

<div class="alll">
<BR>
<?php
if (isset($_GET['device']) && isset($_GET['brand'])) {

    $device = $_GET['device'];
    $brand = $_GET['brand'];

}
$result = mysqli_query($conn, "SELECT DISTINCT brand, device,image2,model  FROM `trade_in` WHERE device = '$device' AND brand ='$brand' ");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
<form action="../cart/cartdetails.php" class="form" method="post">


<a href="subseries2.php?device=<?php echo $device?>&brand=<?php echo $brand?>&model=<?php echo $row['model']?>&#right" name="details">

<h5 class="card-title"><?php echo $row['model'];?></h5>

</a>
    </form>
    </div>
    <?php }} ?>

    </div>

</div>
</div>
<!-- end second section -->

</div>

<!-- section three  -->
<div class="row2">
<div class="leftt">
<h3>FAQs </h3>
<p> Can’t find the answer you are looking for?</p>
<a href="">contact us</a><br>
<a href=""id = "bt" class="btn btn-primary " onMouseOver="this.style.background.color='#ffb23e'" >Trade-in your device <span class="ps-2">
<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.9104 7.29382L0.498047 14L3.89703 7.00014L0.498047 0L14.498 7.00014L13.9104 7.29382ZM12.9877 7.00014L2.01684 1.5145L6.86266 3.9375L12.9877 7.00014Z" fill="white"></path>
</svg>
</span></a>

</div>

<div class="rightt">
<button onclick="myFunction()">How does this work?<span id="iconp">&#8853;</span> <span id="iconm">&#8854;</span>
<div id="myDIV">

– Visit amazon.northladder.net and select the device you want to trade-in to get quotes.
<br>
– Schedule a free home pick-up of your old device to make the process more convenient for you.
<br>
– Complete the trade-in process and receive an Amazon.ae Gift Card, which you can use to shop for anything on Amazon from the comfort of your own home.
</div>


<button onclick="myFunction2()">What about my data?<span id="iconp2">&#8853;</span> <span id="iconm2">&#8854;</span>
<div id="myDIV2">

We understand data privacy is a genuine concern. We recommend that you do a factory reset before handing over the device.<br>
We could also erase data on your phone and tablet for free, using internationally approved software (used by leading brands in the USA and Europe). The data erasure will be done in your presence and takes an average of 2 to 3 minutes. Once completed we will instantly send you a data wipe certificate as proof of data erasure.<br>
</div>



<button onclick="myFunction3()">How is the data wipe done?<span id="iconp3">&#8853;</span> <span id="iconm3">&#8854;</span></button>
<div id="myDIV3">


We provide data wipe for both Android and iOS following the below method:<br><br>
<strong>Android Erasure</strong>
<br><br>
High Level (3 Times) – DoD 5220.22-M – Overwrite the data with a value, then with the inverse of that value, then with a random value, verifying the write after each step. The first two wipes theoretically pull the magnetic field fully in one direction, then fully in the other, eliminating any residue of the original value. Data is overwritten in 1st pass with 0’s, 2nd pass with 1’s, and the last pass with random segments for data sanitization.
<br><br><br>
<strong>IOS Erasure</strong>
<br><br>
The defaulted Erasure for iOS is Secure Cryptographic Erase. The data on the device is encrypted by default, a new AES-256 encrypted file system is added and the old encryption keys are permanently removed during the erasure process. Once the device Secure Erase is completed we can regain the connection to the device and update the Erasure status. This encrypted file system replacement makes the recovering of old data impossible.
<br>


</div>


<button onclick="myFunction4()">How do I know I am getting a good price?<span id="iconp4">&#8853;</span> <span id="iconm4">&#8854;</span>
<div id="myDIV4">

Our competitive prices are based on bids placed by dealers from across the country. As such, when dealers compete to buy your device, what you get will be the highest quote on the platform.
</div>


<button onclick="myFunction5()">Can the agent refuse to take my device?<span id="iconp5">&#8853;</span> <span id="iconm5">&#8854;</span>
<div id="myDIV5">


We accept devices that power on and are in working condition. Our condition descriptions are clearly stated to help you make the proper selection. We give you complete price-range visibility to make it easier, which means no surprises. The price you see is the price you get. It’s fast, easy, and no haggling! Based on the final condition given by the agent, you can choose to accept or refuse to trade your device. The last call is in your hand. </div>

<button onclick="myFunction6()">What are the documents required for the deal?6<span id="iconp6">&#8853;</span> <span id="iconm6">&#8854;</span>
<div id="myDIV6">


You can use any of the following in original (no copies or photos):<br>
– Emirates ID
<br>
– Driving license
</div>



<button onclick="myFunction7()">What items can I trade-in?<span id="iconp7">&#8853;</span> <span id="iconm7">&#8854;</span>
<div id="myDIV7">



– Mobile phones
<br>
– Laptops
<br>
– Tablets
<br>
– Smartwatches
<br>
<br>
For any of these devices, you can go through the assessment and receive an immediate price quote based on the device condition from our highest bidder. We accept devices that at least switch on. But we don’t accept devices that are counterfeit or jailbroken.
<br>


</div>


<button onclick="myFunction8()">What does the condition of my device mean?<span id="iconp8">&#8853;</span> <span id="iconm8">&#8854;</span>
<div id="myDIV8">
There are four different grades that determine the condition of your phone or device: Good, Average, and Below Average. These grades are based on the appearance and functionality of your device. It is important to accurately understand the condition and features of your phone or device to ensure a smooth and efficient process, as the condition of the device will affect the offered price.
</div>


<button onclick="myFunction9()">What do you do with my device?<span id="iconp9">&#8853;</span> <span id="iconm9">&#8854;</span>
<div id="myDIV9">
Your devices are sold to dealers across the UAE who repair them and sell them to customers, thus extending the life span of the device and promoting a sustainable and circular economy. For your safety we now provide FREE internationally approved, military-grade data wipe service along with a digital data wipe certificate.
</div>

<button onclick="myFunction10()">Do I need to include accessories to trade in my device?<span id="iconp10">&#8853;</span> <span id="iconm10">&#8854;</span>
<div id="myDIV10">
For mobile phones and tablets, we do not require any accessories. However, for laptops and smartwatches, the charger is mandatory.
</div>


</div>

</div>


<!-- end sec three -->

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
var link = document.getElementById("btnn");
  link.setAttribute("rel","stylesheet");





//   button 1 function
  function myFunction() {
    var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");
  var p1 = document.getElementById("iconp");
  var p2 = document.getElementById("iconp2");
  var p3 = document.getElementById("iconp3");
  var p4 = document.getElementById("iconp4");
  var m1 = document.getElementById("iconm");
//   var m2 = document.getElementById("iconm2");
//   var m3 = document.getElementById("iconm3");
//   var m4 = document.getElementById("iconm4");


  if (x.style.display === "none") {
    x.style.display = "block";
    x2.style.display = "none";
    x4.style.display = "none";
    x6.style.display = "none";
    x5.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";
    x3.style.display = "none";
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
  //  p4.style.display = "none";
    m1.style.display = "inline-flex";

  } else {
    x.style.display = "none";
    m1.style.display = "none";
    p1.style.display = "inline-flex";
  }
}

// button 2 function
    function myFunction2() {
        var x = document.getElementById("myDIV");

  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");
  var y = document.getElementById("iconp2");
  var z = document.getElementById("iconm2");


  if (x2.style.display === "none") {
    x.style.display = "none";
    x2.style.display = "block";
    x3.style.display = "none";
    x4.style.display = "none";
    x6.style.display = "none";
    x5.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";

    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x2.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}

// button 3 function
function myFunction3() {
        var x = document.getElementById("myDIV");

  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");
  var y = document.getElementById("iconp3");
  var z = document.getElementById("iconm3");


  if (x3.style.display === "none") {
    x.style.display = "none";
    x3.style.display = "block";
    x2.style.display = "none";
    x4.style.display = "none";
    x6.style.display = "none";
    x5.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";
    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x3.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}


// button 4 function
function myFunction4() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");
  var y = document.getElementById("iconp4");
  var z = document.getElementById("iconm4");


  if (x4.style.display === "none") {
    x.style.display = "none";
    x4.style.display = "block";
    x2.style.display = "none";
    x3.style.display = "none";
    x6.style.display = "none";
    x5.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";
    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x4.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}


// button 5 function
function myFunction5() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");
  var y = document.getElementById("iconp5");
  var z = document.getElementById("iconm5");


  if (x5.style.display === "none") {
    x.style.display = "none";
    x5.style.display = "block";
    x2.style.display = "none";
    x4.style.display = "none";
    x6.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";
    x3.style.display = "none";

    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x5.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}


// button 6 function
function myFunction6() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");
  var y = document.getElementById("iconp6");
  var z = document.getElementById("iconm6");


  if (x6.style.display === "none") {
    x.style.display = "none";
    x6.style.display = "block";
    x2.style.display = "none";
    x3.style.display = "none";
    x5.style.display = "none";
    x4.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";
    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x6.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}

// button 7 function
function myFunction7() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");

  var y = document.getElementById("iconp7");
  var z = document.getElementById("iconm7");


  if (x7.style.display === "none") {
    x.style.display = "none";
    x7.style.display = "block";
    x2.style.display = "none";
    x3.style.display = "none";
    x5.style.display = "none";
    x4.style.display = "none";
    x6.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";

    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x7.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}

// button 8 function
function myFunction8() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");

  var y = document.getElementById("iconp8");
  var z = document.getElementById("iconm8");


  if (x8.style.display === "none") {
    x.style.display = "none";
    x8.style.display = "block";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    x5.style.display = "none";
    x6.style.display = "none";
    x7.style.display = "none";
    x9.style.display = "none";
    x10.style.display = "none";
    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x8.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}

// button 9 function
function myFunction9() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");

  var y = document.getElementById("iconp9");
  var z = document.getElementById("iconm9");


  if (x9.style.display === "none") {
    x.style.display = "none";
    x9.style.display = "block";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    x5.style.display = "none";
    x6.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x10.style.display = "none";

    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x9.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
  }
}


// button 10 function
function myFunction10() {
   var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var x5 = document.getElementById("myDIV5");
  var x6 = document.getElementById("myDIV6");
  var x7 = document.getElementById("myDIV7");
  var x8 = document.getElementById("myDIV8");
  var x9 = document.getElementById("myDIV9");
  var x10 = document.getElementById("myDIV10");

  var y = document.getElementById("iconp10");
  var z = document.getElementById("iconm10");


  if (x10.style.display === "none") {
    x.style.display = "none";
    x10.style.display = "block";
    x2.style.display = "none";
    x3.style.display = "none";
        x4.style.display = "none";

    x5.style.display = "none";
    x6.style.display = "none";
    x7.style.display = "none";
    x8.style.display = "none";
    x9.style.display = "none";

    y.style.display = "none";
    z.style.display = "inline-flex";


  } else {
    x10.style.display = "none";
    z.style.display = "none";
    y.style.display = "inline-flex";
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
