<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Thành viên được cập nhập thành công';
		}
		else{
			$_SESSION['error'] = 'Đã xảy ra lỗi khi cập nhập thành viên';
		}
	}
	else{
		$_SESSION['error'] = 'Chọn thành viên để chỉnh sửa';
	}

	header('location: index.php');

?>