<?php 
    require "config.php";
    $id = $_GET["MaSV"];
    $query = "DELETE FROM sinhvien1 WHERE MaSV =$id";
    connect($query);
    header("location:List_News.php")
?>