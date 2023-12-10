<?php
include('../user/connect.php');
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 0";
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

    // if(isset($_POST['image2'])):$file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));endif;
    // if(isset($_POST['image3'])):$file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));endif;
$uid = $_GET['id'];

    if ('image2' != '') {
        $file = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));

    }

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

    // $createdOn = $_POST['createOn'];
    $now = date("Y-m-d");
    $sql = "UPDATE `trade_in` SET `device`='$device',`brand`='$brand',`model`='$model',`processor`='$processor',`ram`='$ram',`storage`='$storage',`subseries`='$subseries',`image2`='$file',`flawless_price`='$flawless_price',`flawless_desc`='$flawless_description',`good_price`='$good_price',`good_desc`='$good_description',`average_price`='$avg_price',`avg_desc`='$avg_description',`broken_but_working`='$broken_but_working',`broken_desc`='$broken_desc' WHERE id = $uid
    ";
if($conn->query($sql) === TRUE ){
    echo "Updated successfully to products".$uid;
    header("Location:tradein.php");
}else{
    echo "error adding to products table" ;
}

}else{
    echo "invaild";
}

?>
