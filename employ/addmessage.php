<?php
include('../user/connect.php');
if (isset($_POST['addmessage']) && $_GET['id'] && $_GET['firstname']&& $_GET['lastname'] ) {



    // if(isset($_POST['image2'])):$file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));endif;
    // if(isset($_POST['image3'])):$file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));endif;


    // if ('image3' != '') {
    //     $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));

    // }



    $id = $_GET['id'];
    $username = $_GET['username'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];

   $subject = $_POST['subject'];
   $message = $_POST['message'];


//     $creadedOn = $_POST['createOn'];
    $now = date("Y/m/d");
        //  mysqli_query($conn, "INSERT INTO users (name, email,createdOn) VALUES ('$name', '$email')");
        $sql = "INSERT INTO `mails`( `user_id`, `first_name`,  `last_name`, `user_email`, `subject`,`message_desc`,`sent_on`) VALUES ('$id','$firstname','$lastname','$username','$subject','$message','$now')";



 if($conn->query($sql) === TRUE ){
        // echo "added successfully to products table";
        // $query = "INSERT INTO `products`(`image`) VALUES ('$file')";
        // if(mysqli_query($conn,$query)){
        //     echo "<script> alert('inserted image successfully') </script>";
        // }else{
        //     echo "error";
        // }
        header("location:index.php");

        echo '<script language="javascript">';
        echo 'alert("message is sent")';
        echo '</script>';
}else{

        echo "error adding to products table".$sql;

 }
}else{
    echo "no submitted ";
}
?>

