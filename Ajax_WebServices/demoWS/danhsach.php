<?php
require "dbCon.php";

$qr = "SELECT * FROM NhanVien";

$ds = mysqli_query($con, $qr);

$mang = array();

while($row = mysqli_fetch_array($ds)){
  array_push($mang, new NhanVien(
    $row["id"], $row["HoTen"], $row["NamSinh"]
  ));
}

echo json_encode($mang);

?>
