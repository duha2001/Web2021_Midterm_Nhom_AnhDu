<?php
$id = $_GET['id'];
    $sql_loai = "SELECT * FROM khachhang";
    $query_brand = mysqli_query($db,$sql_loai);

    $sql_update = "SELECT * FROM khachhang where MaKH = $id";

    $query_up = mysqli_query($db,$sql_update);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['HoTen'];
        $giasp = $_POST['DienThoai'];
        $quantity = $_POST['Email'];
        $id_loaisp = $_POST['MaKH'];

        $sql = "UPDATE khachhang SET HoTen='$tensanpham',DienThoai='$giasp',Email='$quantity'WHERE MaKH=$id_loaisp ";

        $query = mysqli_query($db,$sql);
        header('location: index.php?page_layout=selectkh');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa THông Tin Khách Hàng</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Khách Hàng</label>
                    <input type="text" name="tensanpham" class="form-control" required value="<?php echo $row_up['HoTen'];?>">
                </div>
                <div class="form-group">
                    <label for="">Điện Thoại</label>
                    <input type="number" name="giasp" class="form-control" required value="<?php echo $row_up['DienThoai'];?>">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="quantity" class="form-control" required value="<?php echo $row_up['Email'];?>">
                </div>

                <button name="sbm" class="btn btn-primary" type="submit">Sửa
                </button>
            </form>
        </div>
    </div>
</div>