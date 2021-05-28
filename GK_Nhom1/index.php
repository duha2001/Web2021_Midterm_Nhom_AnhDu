<?php
    require_once './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="./bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./datatable/jquery.dataTables.min.js">
    <link rel="stylesheet" href="./datatable/dataTable.bootstrap.min.css">
    <link rel="stylesheet" href="./js/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="./js/jquery.min.js">
    <title>Giua Ki</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'selectlsp':
                    require_once './Loai/selectlsp.php';
                    break;
				case 'updatelsp':
					require_once './Loai/updatelsp.php';
					break;
				case 'deletelsp':
					require_once './Loai/deletelsp.php';
					break;
				case 'addlsp':
					require_once './Loai/addlsp.php';
					break;
				// sản phẩm
                case 'selectsp':
                    require_once './SanPham/selectsp.php';
                    break;
				case 'updatesp':
					require_once './SanPham/updatesp.php';
					break;
				case 'deletesp':
					require_once './SanPham/deletesp.php';
					break;
				case 'addsp':
					require_once './SanPham/addsp.php';
					break;
					// khách hàng
                case 'selectkh':
                    require_once './KhachHang/selectkh.php';
                    break;
				case 'updatekh':
					require_once './KhachHang/updatekh.php';
					break;
				case 'addkh':
					require_once './KhachHang/addkh.php';
					break;
				case 'deletekh':
					require_once './KhachHang/deletekh.php';
					break;
				// hóa đơn
				case 'selecthd':
					require_once './HoaDon/selecthd.php';
					break;
				case 'updatehd':
					require_once './HoaDon/updatehd.php';
					break;
				case 'addhd':
					require_once './HoaDon/addhd.php';
					break;
				case 'deletehd':
					require_once './HoaDon/deletehd.php';
					break;
                default:
                    require_once './Loai/selectlsp.php';
                    break;
			//chi tiet
				case 'selectct':
					require_once './Chitiethoadon/selectct.php';
					break;
				case 'updatect':
					require_once './Chitiethoadon/updatect.php';
					break;
				case 'addct':
					require_once './Chitiethoadon/addct.php';
					break;
				case 'deletect':
					require_once './Chitiethoadon/deletect.php';
					break;
				} 
        }else{
            require_once './Loai/selectlsp.php';
        }
    ?>
</body>
</html>