<?php
    $id =$_GET['id'];
    $sql = "DELETE FROM hanghoa where MaHH = $id";
    $query = mysqli_query($db,$sql);

    header('location: index.php?page_layout=selectsp');
?>