<?php
    $id =$_GET['id'];
    $sql = "DELETE FROM khachhang where MaKH = $id";
    $query = mysqli_query($db,$sql);

    header('location: index.php?page_layout=selectkh');
?>