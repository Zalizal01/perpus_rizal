<?php 
include '../../koneksi.php';
$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];
$simpan = mysqli_query($koneksi,"INSERT INTO tbl_buku (id_buku,kategori,nama_buku,harga,stok,penerbit) VALUES ('$id_buku','$kategori','$nama_buku','$harga','$stok','$penerbit')");
if (!$simpan) {
	echo "SINTAK ERROR:".mysqli_error($koneksi);
}else{
	echo "<script>alert('Data Berhasil Disimpan');window.location.href='../../index.php?content=home'</script>";
}