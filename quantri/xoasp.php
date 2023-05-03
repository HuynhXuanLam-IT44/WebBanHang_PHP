<?php
	session_start();
	include_once('ketnoi.php');
	if(isset($_SESSION['tk'])){
		$id_sp = $_GET['id_sp'];
		$sql = "DELETE FROM sanpham WHERE id_sp = $id_sp";
		$query = mysql_query($sql);
		header('location:quantri.php?page_layout=danhsachsp');
	}else{
		header('location:index.php');
	}
?>