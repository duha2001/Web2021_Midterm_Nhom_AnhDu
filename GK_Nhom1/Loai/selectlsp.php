<?php
   $sql = "SELECT * FROM loai " ;
   $query = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet"type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="./bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./datatable/jquery.dataTables.min.js">
    <link rel="stylesheet" href="./datatable/dataTable.bootstrap.min.css">
    <link rel="stylesheet" href="./js/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="./js/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <script src="./js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./datatable/jquery.dataTables.min.js"></script>
    <script src="./datatable/dataTable.bootstrap.min.js"></script>
</head>
<body>
    <div class ="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Quản Lý Sản Phẩm</h2>
            </div>
            <div class="panel-body">
            <a href="index.php?page_layout=addlsp" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> THÊM</a>
                <table class="table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Mô Tả Sản Phẩm</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1 ;
                            while($row = mysqli_fetch_assoc($query)){?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['TenLoai']; ?></td>
                            <td><?php echo $row['Mota']; ?></td>
                            <td>
                            <a href="index.php?page_layout=updatelsp&id=<?php echo $row['MaLoai']; ?>">Update</a>
                                </td>
                            <td><a onClick="return Del('<?php echo $row['TenLoai']; ?>')" href="index.php?page_layout=deletelsp&id=<?php echo $row['MaLoai'];?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="index.php?page_layout=selectkh" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> KHÁCH HÀNG </a>
                <a href="index.php?page_layout=selecthd" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> HÓA ĐƠN </a>
                <a href="index.php?page_layout=selectct" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> CHI TIẾT HÓA ĐƠN</a>
                <a href="index.php?page_layout=selectsp" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> SẢN PHẨM</a>
            </div>
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