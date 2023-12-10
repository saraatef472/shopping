<?php
include('../user/connect.php');

if (isset($_POST['add'])) {

    $file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));




    $brand = $_POST['brand'];
   $color = $_POST['color'];
    $price = $_POST['totalprice2'];
    $pricedel = $_POST['pricedel'];
    $pricemain = $_POST['pricemain'];

    $description = $_POST['description'];
    $type= $_POST['type'];
    $status = $_POST['status'];

//     $creadedOn = $_POST['createOn'];
    $now = date("Y/m/d");
        //  mysqli_query($conn, "INSERT INTO users (name, email,createdOn) VALUES ('$name', '$email')");
        $sql = "INSERT INTO `products`(`brand`, `price`, `price_with_delivery`, `price_with_maintance`, `color`,`description`,`type`, `status`,`image`,`image2`,`image3`) VALUES ('$brand','$price','$pricedel','$pricemain','$color','$description','$type','$status','$file','$file2','$file3')";



 if($conn->query($sql) === TRUE ){
        echo "added successfully to products table";
        // $query = "INSERT INTO `products`(`image`) VALUES ('$file')";
        // if(mysqli_query($conn,$query)){
        //     echo "<script> alert('inserted image successfully') </script>";
        // }else{
        //     echo "error";
        // }

        header("Location:products.php");
 }else{

        echo "error adding to products table";

 }
}else{
    echo "no submitted ";
}
?>

