<?php
require_once('connect.php');
if(!empty($_SESSION['userID'])){
    $userid = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $userid AND groupid = 1";
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

if (isset($_POST['addd'])) {
  $id = $_GET['id'];


  // $file2 =' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';
$sql = "SELECT * FROM `products` WHERE id = $id AND image <> ''";
    $result = $conn->query($sql);
if($result->num_rows != 1){
    die("its not id in database");
}
$data = $result->fetch_assoc();
$file =' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($data['image']) . '"/>';

$file3 = $data['image'];
//$file2 = ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($file) . '"/>';
// echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($file) . '"/>';
//$file2 = addslashes(file_get_contents($_FILES["data:image/jpeg;base64,' . base64_encode($file3]) . '"]["tmp_name"]));
$quantity = $_POST['quantity'];
//$im = $_POST['<image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'];
    $brand = $data['brand'];
$color = $data['color'];
    $price = $_POST['total2'];
    $description = $data['description'];
    $type= $data['type'];
    $status = $data['status'];
    $now= date("Y-m-d H:i:s");
//     $creadedOn = $_POST['createOn'];
    $now = date("Y/m/d");
        //  mysqli_query($conn, "INSERT INTO users (name, email,createdOn) VALUES ('$name', '$email')");
     $sql = "INSERT INTO `card`(`userID`,`product_id`, `brand`, `total_price`, `quantity`, `color`,`description`,`type`, `status`,`order_time`) VALUES ('$userid','$id','$brand','$price','$quantity','$color','$description','$type','$status','$now')";



 if($conn->query($sql) === TRUE ){
        echo "added successfully to products table  ";
        ;
        // $query = "INSERT INTO `products`(`image`) VALUES ('$file')";
        // if(mysqli_query($conn,$query)){
        //     echo "<script> alert('inserted image successfully') </script>";
        // }else{
        //     echo "error";
        // }
 header("Location:card.php?prodid=$id");

 }else{

        echo "error adding to products table"."   ".$id."is id".$userid."is userid" .$brand.$status.$quantity;

 }
}else{
    echo "no submitted ".$id."is id".$userid."is userid".$brand.$status.$quantity;
}
?>

