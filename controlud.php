<?php 
    $id = $_POST["MaSV"];
    require 'config.php';
    $HOTen = $_POST["Hoten"];
    $GioiTinh = $_POST["GioiTinh"];
    $QueQuan = $_POST["QueQuan"];
    $query = "UPDATE sinhvien1 SET HOTen='$HOTen', GioiTinh='$GioiTinh' , QueQuan='$QueQuan'  WHERE MaSV= '$id'";
    connect($query);
    header("location:List_News.php");
?>