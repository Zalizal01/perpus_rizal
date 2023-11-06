<?php
include '../../koneksi.php';
$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$edit = mysqli_query($koneksi,"UPDATE tbl_buku SET id_buku='$id_buku',kategori='$kategori',nama_buku='$nama_buku',harga='$harga',stok='$stok',penerbit='$penerbit' WHERE id_buku='$id_buku'");
if (!$edit) {
	echo "SINTAK ERROR".mysqli_error($koneksi);
}else{
	echo "<script>alert('Data Berhasil Dirubah');window.location.href='../../index.php?content=home'</script>";
}
?>