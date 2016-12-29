<?php
	require_once('../config.php');		
	require_once('../CrudAble.php');

	$id = $_GET['id'];
	$delete = CrudAble::delete($id);

	if ($delete == true) {
		header('location:../index.php');
	}else{
		echo "Gagal hapus";
	}
?>