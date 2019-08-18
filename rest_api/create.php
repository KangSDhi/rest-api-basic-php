<?php
require_once('connection.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
//$created_at = CURDATE();
//$updated_at = $_POST['updated_at'];

if (!$id || !$nama || !$alamat) {
  echo json_encode(array('message'=>'required field is empty.'));
}else {
  $query = mysqli_query($CON, "INSERT INTO siswas VALUES ('$id', '$nama', '$alamat', NOW(), NOW())");

  if ($query) {
    echo json_encode(array('message'=>'student data successfully added.'));
  }else {
    echo json_encode(array('message'=>'student data failed to add.'));
  }
}

 ?>
