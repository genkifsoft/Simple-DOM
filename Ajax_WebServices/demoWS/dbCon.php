<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "DemoWebService");
mysqli_query($con, "SET NAMES 'utf8'");

class NhanVien{
  public $ID;
  public $HOTEN;
  public $NAMSINH;
  function NhanVien($id, $hoten, $namsinh){
    $this->ID = $id;
    $this->HOTEN = $hoten;
    $this->NAMSINH = $namsinh;
  }
}

?>
