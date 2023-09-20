<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php 
    require_once "config.php";
    $productId = $_GET["MaSV"];
    $query = "SELECT * FROM sinhvien1 WHERE MaSV=$productId";
    $product = getOne($query);
?>
<form action="controlud.php" method="POST" enctype="multipart/form-data" class="w-[500px] m-auto">
        <input type="text" name="MaSV" id="" value="<?php echo $productId?>"  class="w-full border mt-8">
        <input type="text" name="Hoten" placeholder="Product Name" class="w-full border mt-8">
        <input type="text" name="GioiTinh" placeholder="Product Price" class="w-full border mt-8">
        <input type="text" name="QueQuan" placeholder="deal" class="w-full border mt-8">
        <button class="w-full bg-green-700 text-white mt-8">update</button>
    </form>
</body>
</html>