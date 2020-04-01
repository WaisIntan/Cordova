<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 $q=mysqli_query($conn,"INSERT INTO warungku (nama ,jumlah, harga) VALUES ('$nama','$jumlah','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }