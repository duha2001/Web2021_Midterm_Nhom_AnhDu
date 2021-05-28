<?php
    $sql_loai = "SELECT * FROM hanghoa";
    $query_brand = mysqli_query($db,$sql_loai);

    if(isset($_POST['sbm'])){
        $tensanpham = $_POST['tensanpham'];
        $giasp = $_POST['giasp'];
        //$hinhanh = $_ILES['hinhanh']['name'];
        //$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $id_loaisp = $_POST['id_loaisp'];
        $permited=array('jpg','jpeg','png','gif');
        $file_name=$_FILES['hinhanh']['name'];
        $file_size=$_FILES['hinhanh']['size'];
        $file_temp=$_FILES['hinhanh']['tmp_name'];

        $div=explode('.',$file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
        $uploaded_image="img/".$unique_image;
        move_uploaded_file($file_temp,$uploaded_image);
        $sql = "INSERT INTO hanghoa (TenHH,DonGia,Hinh,MaHH)
        VALUES('$tensanpham','$giasp','$$unique_image','$id_loaisp')";

        $query = mysqli_query($db,$sql); 

        
        header('location: index.php?page_layout=selectsp');
    }
?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="panel-body">
            <form method="POST" enctype="mulitipart/form-data">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="tensanpham" class="form-control" required>
                </div>


                <div class="form-group">
                    <label for="">Giá Sản Phẩm</label>
                    <input type="number" name="giasp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh Sản Phẩm</label> <br>
                    <input type="file" name="hinhanh" >
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Thêm
                </button>
            </form>
        </div>
    </div>
</div>