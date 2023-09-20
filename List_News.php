
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach tin tuc</title>
</head>
<body>

    <h1> Danh sach sinh viên </h1>
    <table border = "1px">
        <tr>
            <th>Mã Sinh Viên </th>
            <th>Họ và tên </th>
            <th>giới tính</th>
            <th>quê quán</th>
            <th colspan = "2" align = "center">Thao tác</th>
        </tr>
        <?php
               require "config.php";
                $user = "SELECT * FROM sinhvien1";
        
            $productList = getAll($user);               
            ?>
            
                <?php foreach($productList as $tt):?>
        <tr>
            <td>
            <?php echo $tt['MaSV'] ?>
            </td>
            <td>
            <?php echo $tt['HOTen'] ?>
            </td>
            <td>
            <?php echo $tt['GioiTinh'] ?>
            </td>
            <td>
            <?php echo $tt['QueQuan'] ?>
            </td>
            <td>
            <a href="udate.php?MaSV=<?php echo $tt["MaSV"]?>"><button class="border-[1px] rounded w-[60px] bg-[#1E74A4] text-[white]">Update</button></a>        
            </td>
            <td>
            <a href="xoa.php?MaSV=<?php echo $tt["MaSV"]?>"><button onclick="return confirm('Bạn có chắc muốn xóa')" class="xoa">Xóa</button></a>
            </td>
        </tr>
      <?php endforeach?>
    </table>
    
</body>
</html>