<?php
$id = $_GET['id'];
    $sql_loai = "SELECT * FROM loai";
    $query_brand = mysqli_query($db,$sql_loai);

    $sql_update = "SELECT * FROM hanghoa where MaHH = $id";

    $query_up = mysqli_query($db,$sql_update);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['TenHH'];
        $giasp = $_POST['DonGia'];
        if($_FILES['Hinh']['name'] == ''){
            $hinhanh = $row_up['Hinh'];
        }else{
            $hinhanh = $row_up['Hinh'];
            // $hinhanh = $_FILES['hinhanh']['name'];
            // $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
            // move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);
        }
        $sql = "UPDATE hanghoa SET TenHH='$tensanpham',DonGia='$giasp',Hinh='$hinhanh'";

        $query = mysqli_query($db,$sql);
        header('location: index.php?page_layout=selectsp');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="tensanpham" class="form-control" required value="<?php echo $row_up['TenHH'];?>">
                </div>

                <div class="form-group">
                    <label for="">Giá Sản Phẩm</label>
                    <input type="number" name="giasp" class="form-control" required value="<?php echo $row_up['DonGia'];?>">
                </div>

                <div class="form-group">
                    <label for="">Ảnh Sản Phẩm</label> <br>
                    <input type="file" name="hinhanh" >
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Sửa
                </button>
            </form>
        </div>
    </div>
</div>