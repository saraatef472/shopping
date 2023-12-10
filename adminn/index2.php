<?php
include('../user/connect.php');
// if(!empty($_SESSION['userID']) && !empty($_SESSION['groupid'])){
//     $id = $_SESSION['userID'];
//     $gb=$_SESSION['groupid']
// ;    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");  // $row = mysqli_fetch_array($result);
//    header("location:index.php");
//    //echo $id.$gb;
// }else{
//     echo "no";
// }

//check if user coming from Http request post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedpass = sha1($password);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    // $_SESSION['id'] = $row['id'];
    if ($_POST['submit']) {
        if (mysqli_num_rows($result) > 0) {

            if ($hashedpass == $row['password']) {
              $_SESSION['userID'] = $row['userID'];
                $_SESSION['username'] = $row['username'];
                if ($row['groupid'] == 0) {
                    header("location:../adminn/index.php");
                    // echo "admin";
                } else if ($row['groupid'] == 1) {
                    header("location:../user/index.php");
                  //  echo "user";
                } else if ($row['groupid'] == 3) {
                  header("location:../employ/index.php");
                   echo"employyy";
                }
            } else {
              echo '<script language="javascript">';
              echo 'alert("wrong Password")';
              echo '</script>';

            }

        } else {
          echo '<script language="javascript">';
          echo 'alert("user is not registered")';
          echo '</script>';


        }

    }
}
//if count > 0 means there is a user with this username $pass
// if($count > 0){
// $_SESSION['username'] = $username; //set username to the session
//     header('location:home.php'); // redirect to home page
//     exit();

// }
// }

?>

<!-- <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h3 class="h333">Login</h3>
<input type="text" class="form-control" name="user" placeholder="User Name" autocomplete="off">
<input type="password" class="form-control" name="pass"  placeholder="Password" autocomplete="new-password">
<input  class="btn btn-primary btn-block "id="sub" type="submit" name="submit" value="Submit">
<br>
<h3>New user: <a class="a"href="register.php">sign up</a></h3>
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title><?php echo $title?> </title>
    <style>
        .all{

  margin-left: 40%;
  margin-top:5%;
  width: 30%;
  height: 200px;
  border-radius: 2px solid grey;

}
.login{

  font-size: 35px;

}
label,.form-check{
    color:#0d6efd;
    font-size: 35px;
}
p {
  /* Center horizontally*/
 /* // text-align: center; */
}
        </style>
</head>
<body>


<div class="all">
<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="user" placeholder="User Name" autocomplete="off">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass"  placeholder="Password" autocomplete="new-password">
  </div>

  <button type="submit" class="btn btn-primary" id="sub" type="submit" name="submit" value="Submit">Submit</button>
</form>
<div class="form-group form-check">
  <label >New user?</label>
  <a class="a"href="../adminn/register.php">sign up</a>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
