<?php
    
    $id = $_GET['id'];

    $sql_update = "SELECT * FROM loai where MaLoai = $id";

    $query_up = mysqli_query($db,$sql_update);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['tensanpham'];
        $motasp = $_POST['motasp'];
        $id_loaisp=$_POST['id_loaisp'];
        $sql = "UPDATE loai SET TenLoai='$tensanpham', Mota='$motasp' WHERE Maloai='$sql_update'";
        

        $query = mysqli_query($db,$sql);
        
        header('location: index.php?page_layout=selectlsp');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Loại Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Loại Sản Phẩm</label>
                    <input type="text" name="tensanpham" class="form-control" required value="<?php echo $row_up['TenLoai'];?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="motasp" class="form-control" required value="<?php echo $row_up['Mota'];?>">
                </div>

                <button name="sbm" class="btn btn-primary" type="submit">Sửa
                </button>
            </form>
        </div>
    </div>
</div>