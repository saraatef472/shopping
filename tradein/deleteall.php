<?php
include('../user/connect.php');
// if(!empty($_SESSION['userID'])){
//   $id = $_SESSION['userID'];
//   $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 0";
//   $result = mysqli_query($conn,$sql);
//   if($result->num_rows>0){
//       while ($row = mysqli_fetch_array($result)) {

//       }}else{
//           header("Location:../index.php");
//       }
 
// }else{
//   header("Location:../index.php");
  
// }
//start
    $sql = "DELETE FROM `products`";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location:products.php");
      } else {
        echo "Error deleting record: " . $conn->error;

      }

