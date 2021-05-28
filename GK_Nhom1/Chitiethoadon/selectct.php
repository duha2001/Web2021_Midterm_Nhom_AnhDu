<?php
   $sql = "SELECT * FROM chitiethoadon " ;
   
   $query = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../datatable/dataTable.bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2> Danh Sách Hóa Đơn</h2>
        </div>
        <div class="panel-body">
            <table  class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Khách Hàng</th>
                        <th>Mã Hàng Hóa</th>
                        <th>Số Lượng</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1 ;
                        while($row = mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['MaHD']; ?></td>
                        <td><?php echo $row['MaHH']; ?></td>
                        <td><?php echo $row['SoLuong']; ?></td>
                        <td>
                    
                            <td><a onClick="return Del('<?php echo $row['MaCTHD']; ?>')" href="index.php?page_layout=deletect&id=<?php echo $row['MaCTHD'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confim("Ban Co Chac Chan Muon Xoa: " + name + "?");
    }
</script>
</body>
</html>
