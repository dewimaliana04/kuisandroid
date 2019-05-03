<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];

	$query = "UPDATE tb_laptop SET nama = '$nama',kode ='$nama',kategori = '$kategori' WHERE id='$id'";

	$exeQuery = mysqli_query($konek,$query);

	echo ($exeQuery) ? json_encode(array('kode'=>1,'pesan' => 'data berhasil update')) :
	json_encode(array('kode' =>2,'pesan'=>'data gagal diupdate'));
}

else

{
	echo json_encode(array('kode'=>101,'pesan'=>'request tidak valid'));
}

?>