<?php
include('../user/connect.php');
// if(!empty($_SESSION['userID'])){
//     $id = $_SESSION['userID'];
//     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
//     // $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:index.php");
// }

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM `mails`
    WHERE `id`= '$id'
    ";

    if($conn->query($sql) === TRUE ){
       // echo "Updated successfully to products datab";
        header("Location:../adminn/mails.php");
 }else{
        echo "error adding to products table".$sql;
 }

}else{
    echo "invaild";
}

?>
