<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kodehlm=$_POST['kodehlm'];
 $namahlm=$_POST['namahlm'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `helm` SET `kodehlm`='$kodehlm',`namahlm`='$namahlm',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>