<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_siswa = $_POST['id_siswa'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'koneksi.php';

    $sql = "UPDATE siswa SET username='$username',password='$password' WHERE id_siswa='$id_siswa'";

    if(mysqli_query($con, $sql)) {

          $result["success"] = "1";
          $result["message"] = "success";

          echo json_encode($result);
          mysqli_close($conn);
      }
  }

else{

   $result["success"] = "0";
   $result["message"] = "error!";
   echo json_encode($result);

   mysqli_close($conn);
}

?>