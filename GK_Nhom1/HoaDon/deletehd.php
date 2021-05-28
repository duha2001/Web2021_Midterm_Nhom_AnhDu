<?php
    $id =$_GET['id'];
    $sql = "DELETE FROM hoadon where MaHD = $id";
    $query = mysqli_query($db,$sql);

    header('location: index.php?page_layout=selecthd');
?>