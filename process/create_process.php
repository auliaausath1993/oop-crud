<?php 
	require_once('../config.php');
	require_once('../CrudAble.php');

	$nama 	= $_POST['nama'];
	$email 	= $_POST['email'];
	$alamat = $_POST['alamat'];

	if (!empty($nama) && !empty($email) && !empty($alamat)) {
		$create = CrudAble::create($nama,$email,$alamat);
		if ($create == true) {
			header('location:../index.php');
		}else{
			echo "Gagal Tambah Data";
		}
	}else{
		echo "Form tidak boleh kosong";
	}
?>