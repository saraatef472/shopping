<?php
include('connect.php');


if (isset($_GET['sum']) && isset($_GET['userid']) && isset($_GET['cardid'])){
 $sum = $_GET['sum'];
 $id = $_GET['userid'];

$sql ="SELECT  * FROM users WHERE users.userID = $id";

$result = mysqli_query($conn, $sql);

}

if($result->num_rows>0){
    while ($row = mysqli_fetch_array($result)) {
$username = $row['username'];
$fname = $row['firstName'];
$lname = $row['lastName'];
    ?>




<?php }}
require_once 'Paytabs.php';
$plugin = new Paytabs();
$request_url = 'payment/request';
   $data =   [
    "tran_type"=> "sale",
    "tran_class"=> "ecom",
    "cart_id"=> "1212",
    "cart_currency"=> "EGP",
    "cart_amount"=> $sum,
    "cart_description"=> "Description of the items/services",
    "paypage_lang"=> "en",
    "customer_details"=> [
        "name"=> "$fname $lname",
        "email"=> "$username",
        "phone"=> "0522222222",
        "street1"=> "address street",
        "city"=> "dubai",
        "state"=> "du",
        "country"=> "AE",
        "zip"=> "12345"
    ],
    "shipping_details"=> [
        "name"=> "name1 last1",
        "email"=> "email1@domain.com",
        "phone"=> "971555555555",
        "street1"=> "street2",
        "city"=> "dubai",
        "state"=> "dubai",
        "country"=> "AE",
        "zip"=> "54321"
    ],
    "callback"=> "http://localhost/laptop/user/Result.php",
    "return"=> "http://localhost/laptop/user/Result.php"
]
;
$page = $plugin->send_api_request($request_url, $data);
   print_r(  $page );
header('Location:' . $page['redirect_url']); /* Redirect browser */
exit();
 ?>
