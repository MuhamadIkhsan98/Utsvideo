<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kodehlm=$_POST['kodehlm'];
 $namahlm=$_POST['namahlm'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `helm` (`kodehlm`,`namahlm`,`harga`) VALUES ('$kodehlm','$namahlm','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>