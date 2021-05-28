<?php
    $id =$_GET['id'];
    $sql = "DELETE FROM chitiethoadon where MaCTHD = $id";
    $query = mysqli_query($db,$sql);

    header('location: index.php?page_layout=selectct');
?>