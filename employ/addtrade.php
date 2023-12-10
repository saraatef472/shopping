<?php
include('../user/connect.php');
if (isset($_POST['add'])) {

    if ('image2' != '') {
        $file = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));

    }else{
        $file = '';
    }




    // $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));




    $brand = $_POST['brand'];
   $device = $_POST['device'];
   $model = $_POST['model'];
   $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $storage = $_POST['storage'];
    $subseries = $_POST['subseries'];
    $flawless_price = $_POST['flawless_price'];
    $flawless_description = $_POST['flawless_description'];
    $good_price = $_POST['good_price'];
    $good_description = $_POST['good_description'];
    $avg_price = $_POST['avg_price'];
    $avg_description = $_POST['avg_decription'];
    $broken_but_working = $_POST['broken_but_working'];
    $broken_desc = $_POST['broken_but_working_desc'];


//     $creadedOn = $_POST['createOn'];
    $now = date("Y/m/d");
        //  mysqli_query($conn, "INSERT INTO users (name, email,createdOn) VALUES ('$name', '$email')");
        $sql = "INSERT INTO `trade_in`( `device`, `brand`, `model`, `processor`, `ram`, `storage`, `subseries`, `image2`, `flawless_price`, `flawless_desc`, `good_price`, `good_desc`, `average_price`, `avg_desc`, `broken_but_working`, `broken_desc`) VALUES ('$device','$brand','$model','$processor','$ram','$storage','$subseries','$file','$flawless_price','$flawless_description','$good_price','$good_description','$avg_price','$avg_description','$broken_but_working','$broken_desc')";



 if($conn->query($sql) === TRUE ){
        echo "added successfully to products table";
        // $query = "INSERT INTO `products`(`image`) VALUES ('$file')";
        // if(mysqli_query($conn,$query)){
        //     echo "<script> alert('inserted image successfully') </script>";
        // }else{
        //     echo "error";
        // }

        header("Location:tradein.php");
 }else{

        echo "error adding to products table".$sql;

 }
}else{
    echo "no submitted ";
}
?>

