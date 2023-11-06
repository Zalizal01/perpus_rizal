<?php 
include '../../koneksi.php';
$id_penerbit = $_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
$simpan = mysqli_query($koneksi,"INSERT INTO tbl_penerbit (id_penerbit,nama,alamat,kota,telepon) VALUES ('$id_penerbit','$nama','$alamat','$kota','$telepon')");
if (!$simpan) {
	echo "SINTAK ERROR:".mysqli_error($koneksi);
}else{
	echo "<script>alert('Data Berhasil Disimpan');window.location.href='../../index.php?content=admin'</script>";
}