<?php 
    require 'config.php';
    $Name = $_POST["Hoten"];
    $GioiTinh = $_POST["GioiTinh"];
    $QueQuan = $_POST["QueQuan"];
    $query = "INSERT INTO sinhvien1 (HOTen,GioiTinh,QueQuan) VALUES ('$Name','$GioiTinh','$QueQuan')";
    connect($query);
    header("location:List_News.php");
?>