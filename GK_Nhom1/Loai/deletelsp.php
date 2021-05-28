<?php
    $id =$_GET['id'];
    $sql = "DELETE FROM loai where MaLoai = $id";
    $query = mysqli_query($db,$sql);

    header('location: index.php?page_layout=selectlsp');
?>