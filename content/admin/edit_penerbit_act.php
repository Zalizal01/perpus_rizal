<?php
include '../../koneksi.php';
$id_penerbit = $_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];

$edit = mysqli_query($koneksi,"UPDATE tbl_penerbit SET id_penerbit='$id_penerbit',nama='$nama',alamat='$alamat',kota='$kota',telepon='$telepon' WHERE id_penerbit='$id_penerbit'");
if (!$edit) {
	echo "SINTAK ERROR".mysqli_error($koneksi);
}else{
	echo "<script>alert('Data Berhasil Dirubah');window.location.href='../../index.php?content=admin'</script>";
}
?>