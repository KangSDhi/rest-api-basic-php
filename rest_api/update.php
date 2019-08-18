<?php

require_once ('connection.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if (!$id || !$nama || !$alamat) {
  echo json_encode(array('message'=>'required field is empty.'));
} else {

  $query = mysqli_query($CON, "UPDATE siswas SET nama='$nama', alamat='$alamat', updated_at=NOW() WHERE id='$id'");

  if ($query) {
    echo json_encode(array('message'=>'student data successfully updated.'));
  } else {
    echo json_encode(array('message'=>'student data failed to updated.'));
  }

}


 ?>
