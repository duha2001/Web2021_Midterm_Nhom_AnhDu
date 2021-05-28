<?php
    $sql_loai = "SELECT * FROM hoadon";
    $query_brand = mysqli_query($db,$sql_loai);

    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['MaHD'];
        $giasp = $_POST['NgayLapHD'];
        $quantity = $_POST['MaKH'];
        $motasp = $_POST['TongTien'];

        $sql = "INSERT INTO hoadon (NgayLapHD,MaKH,TongTien)
        VALUES('$giasp','$quantity','$motasp' )";

        $query = mysqli_query($db,$sql);
        header('location: index.php?page_layout=selecthd');
    }
?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Thêm Hóa Đơn</h2>
        </div>
        <div class="panel-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Ngày Lập Đơn</label>
                    <input type="date" name="giasp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Khách Hàng</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Tổng Tiền</label>
                    <input type="number" name="motasp" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Thêm
                </button>
            </form>
        </div>
    </div>
</div>