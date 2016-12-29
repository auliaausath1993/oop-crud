<?php 
	require_once('../config.php');
	require_once('../CrudAble.php');

	$id		= $_POST['id'];
	$nama 	= $_POST['nama'];
	$email 	= $_POST['email'];
	$alamat = $_POST['alamat'];

	if (!empty($nama) && !empty($email) && !empty($alamat)) {
		$edit = CrudAble::update($id, $nama, $email, $alamat);
		if ($edit == true) {
			header('location:../index.php');
		}else{
			echo "Gagal Update";
		}
	}else{
		echo "Form tidak boleh kosong";
	}
?>