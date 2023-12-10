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

if(isset($_GET['id']) && isset($_POST['update'])){
    // $image = $_POST['image'];
    if ('image1' != '') {
        $file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));

    }

    if ('image2' != '') {
        $file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));

    }

    // if(isset($_POST['image2'])):$file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));endif;
    // if(isset($_POST['image3'])):$file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));endif;


    if ('image3' != '') {
        $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));

    }
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $pricemain = $_POST['pricemain'];
    $pricedel = $_POST['pricedel'];
    $description = $_POST['description'];
    $type= $_POST['type'];
    $status = $_POST['status'];
    $id = $_GET['id'];

    // $createdOn = $_POST['createOn'];
    $now = date("Y-m-d");
    $sql = "UPDATE `products` SET `brand`='$brand',`price`='$price',`price_with_delivery`='$pricedel',`price_with_maintance`='$pricemain',`color`='$color',`description`='$description',`type`='$type',`status`='$status',`image`='$file',`image3`='$file2',`image2`='$file3' WHERE id = $id
    ";
if($conn->query($sql) === TRUE ){
    echo "Updated successfully to products".$id;
    header("Location:admin.php");
}else{
    echo "error adding to products table" ;
}

}else{
    echo "invaild";
}

?>
