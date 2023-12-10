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
// $name = "";
// $description= "";
// $update = false;
$now = date("Y-m-d");
if(!isset($_GET['id'])){
    die("itsont provided");
}
$id = $_GET['id'];
$sql = "SELECT * FROM trade_in WHERE id = '$id'";
$result = $conn->query($sql);
if($result->num_rows != 1){
    die("its not id in database");
}
$data = $result->fetch_assoc();
// print_r($data);

// if (isset($_POST['edit'])) {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     $createdOn = $_POST['createdOn'];
//     // $id = $row['id'];

//     mysqli_query($conn, "INSERT INTO `cat`(`name`, `description`, `createOn`) VALUES ('$name', '$description','$now')");
//     $_SESSION['message'] = "saved";
//     // header('location: index.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gouina</title>
    <style>
body {
    /* background-color: #222; */
    /* color: #fff; */
    font-family: system-ui;
}

.new{
    width: 80%;
    margin: auto;
}

h2{
    text-align: center;
    text-transform: uppercase;
    margin: 30px 0px;
}

input {
    width:50%;height:30px;font-size:17px;border: raduis 5px;
    margin:1%

}
.submit{
    /* background: #2c3e50; */
}
.submit:hover{
    background-color:#89CFF0;
    color:white
}
.crud {
    width: 80%;
    margin: auto;
}

input:focus {
    outline: none;
/* background-color: #222; */
/* border:1px grey; */
/* width:90%; */
border:solid 2px #89CFF0;
/* background-color:#7f8c8d; */


}

table {
    width: 100%;
    text-align: center;
    margin: 10px 0;
    border-radius: 102px solid grey;
    box-shadow: 2px 10px #222;
    border-collapse: collapse;
    padding: 25px;
    padding-top: 400x;
    text-align: left;
}

table th {
    text-transform: uppercase;
}
.allof{
    padding:3%;
    width:50%;
    margin-left:25%
}

    </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<!-- add new category form -->
<div class="allof">
<form action="updatetrade.php?id=<?= $data['id']?>" method="POST" enctype="multipart/form-data">
<div class="new" >
   <h2>EDIT product</h2>
   <label for="device">device</label>
   <select style="width:60%;height:30px;font-size:17px;border: raduis 5px;" name="device" id="devices">
  <option value="laptop" name="device">Laptop</option>
  <option value="mobile" name="device">Mobile Phone</option>
  <option value="tablet" name="device">Tablet</option>
  <option value="smartwatch" name="device">Smartwatch</option>
</select>
<br><br>
  <label for="">brand</label>
   <input type="text" name="brand" value="<?php echo $data['brand'];?> " ><br>
   <label for="">model</label>
   <input type="text" name="model" value="<?= $data['model'];?>"><br>
   <label for="">processor</label>
   <input type="text" name="processor" value="<?= $data['processor'];?>" ><br>
   <label for="">ram</label>
   <input type="text" name="ram" value="<?= $data['ram'];?>" ><br>
   <label for="">storage</label>
   <input type="text" name="storage" value="<?= $data['storage'];?>" ><br>
   <label for="">subseries</label>
   <input type="text" name="subseries" value="<?= $data['subseries'];?>" ><br>


   <input type="file" id="image2" name="image2" value="image2" placeholder="image"><br>
   <label for="">flawless_price</label>
   <input type="number" name="flawless_price" value="<?= $data['flawless_price'];?>" > <br>  <!-- <input type="file" id="image4" name="image4" value="image4" placeholder="image"> -->
   <label for="">flawless_description</label>
   <input type="text" name="flawless_description" value="<?= $data['flawless_desc'];?>" > <br>

   <label for="">good_price</label>
   <input type="number" name="good_price" value="<?= $data['good_price'];?>" > <br>
   <label for="">good_desc</label>
   <input type="text" name="good_description" value="<?= $data['good_desc'];?>"> <br>
   <label for="">avg_price</label>
   <input type="number" name="avg_price" value="<?= $data['average_price'];?>"> <br>
   <label for="">avg_decription</label>
   <input type="text" name="avg_decription" value="<?= $data['avg_desc'];?>"> <br>
   <label for="">broken_but_working price</label>
   <input type="number" name="broken_but_working" value="<?= $data['broken_but_working'];?>" > <br>
   <label for="">broken_but_working_desc</label>
   <input type="text" name="broken_but_working_desc" value="<?= $data['broken_desc'];?>" > <br>

   <input type="submit" name ="update" value="update" class="submit">

</div>
</form>


</div>
</body>
</html>
