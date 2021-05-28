<?php
$id = $_GET['id'];
    $sql_loai = "SELECT * FROM khachhang";
    $query_brand = mysqli_query($db,$sql_loai);

    $sql_update = "SELECT * FROM hoadon where MaHD = $id";

    $query_up = mysqli_query($db,$sql_update);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['MaKH'];
        $giasp = $_POST['NgayLapHD'];
        $id_loaisp = $_POST['MaHD'];
        $quantity = $_POST['TongTien'];
        $sql = "UPDATE hoadon SET MaKH='$tensanpham',NgayLapHD='$giasp',TongTien='$quantity'WHERE MaKH=$id_loaisp ";

        $query = mysqli_query($db,$sql);
        header('location: index.php?page_layout=selecthd');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Hóa Đơn</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Hóa Đơn</label>
                    <input type="text" name="tensanpham" class="form-control" required value="<?php echo $row_up['MaKH'];?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày Lập Đơn</label>
                    <input type="date" name="giasp" class="form-control" required value="<?php echo $row_up['NgayLapHD'];?>">
                </div>

                <div class="form-group">
                    <label for="">Số Lượng</label>
                    <input type="number" name="quantity" class="form-control" required value="<?php echo $row_up['TongTien'];?>">
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Sửa
                </button>
            </form>
        </div>
    </div>
</div>