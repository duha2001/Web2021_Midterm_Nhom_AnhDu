<?php
   $sql = "SELECT * FROM hanghoa" ;
   
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
            <h2> Danh Sách Sản Phẩm</h2>
        </div>
        <div class="panel-body">
            <table  class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Sản Phẩm</th>
                        <th>Hình Ảnh Sản Phẩm</th>
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
                        <td><?php echo $row['TenHH']; ?></td>
                        <td><?php echo $row['DonGia']; ?></td>
                        <td>
                            <img src="img/<?php echo $row['Hinh']; ?>" style="width: 100px;">

                        </td>
                        <td>
                        <a href="index.php?page_layout=updatesp&id=<?php echo $row['MaHH']; ?>"> Update</a>
                            </td>
                        <td><a onClick="return Del('<?php echo $row['TenHH']; ?>')" href="index.php?page_layout=delete&id=<?php echo $row['MaHH'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="index.php?page_layout=addsp" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> THÊM</a>
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
