<?php
require "dbCon.php";

$hoten = $_POST["hoten"];
$namsinh = $_POST["namsinh"];

$qr = "INSERT INTO NhanVien VALUES(null, '$hoten', '$namsinh')";

if( mysqli_query($con, $qr) ){
  echo '{"kq":"1"}';
}else{
  echo '{"kq":"0"}';
}

?>
