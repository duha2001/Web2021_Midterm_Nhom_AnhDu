<?php
    $sql_loai = "SELECT * FROM khachhang";
    $query_brand = mysqli_query($db,$sql_loai);

    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['HoTen'];
        $giasp = $_POST['DienThoai'];
        $quantity = $_POST['Email'];

        $sql = "INSERT INTO khachhang(HoTen,DienThoai,Email)
        VALUES('$tensanpham','$giasp','$quantity' )";

        $query = mysqli_query($db,$sql);
        header('location: index.php?page_layout=selectkh');
    }
?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Thêm Khách Hàng</h2>
        </div>
        <div class="panel-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Khách Hàng</label>
                    <input type="text" name="tensanpham" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Điện Thoại</label>
                    <input type="number" name="giasp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="quantity" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Thêm
                </button>
            </form>
        </div>
    </div>
</div>