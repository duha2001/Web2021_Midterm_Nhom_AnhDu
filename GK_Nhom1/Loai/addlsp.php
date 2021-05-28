<?php
    $sql_loai = "SELECT * FROM loai";
    $query_brand = mysqli_query($db,$sql_loai);

    if(isset($_POST['sbm'])){
        $tensanpham=$_POST['tensanpham'];
        $motasp=$_POST['motasp'];

        $sql = "INSERT INTO loai (TenLoai,Mota)
        VALUES('$tensanpham','$motasp')";

        $query = mysqli_query($db,$sql);
        header('location: index.php?page_layout=selectlsp');
    }
    
?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Thêm Loại Sản Phẩm</h2>
        </div>
        <div class="panel-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Loại Sản Phẩm</label>
                    <input type="text" name="tensanpham" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="motasp" class="form-control" required>
                </div>

                <button name="sbm" class="btn btn-primary" type="submit">Thêm
                </button>
            </form>
        </div>
    </div>
</div>