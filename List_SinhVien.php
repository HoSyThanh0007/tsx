<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   
<form action="ThemSV.php" method="POST" enctype="multipart/form-data" class="w-[500px] m-auto">
        <input type="text" name="Hoten" placeholder="Product Name" class="w-full border mt-8">
        <input type="text" name="GioiTinh" placeholder="Product Price" class="w-full border mt-8">
        <input type="text" name="QueQuan" placeholder="deal" class="w-full border mt-8">
        <button class='thanh'>Add New</button>
    </form>
</body>
</html>