<?php 
include '../../koneksi.php';
$id_buku = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM tbl_buku WHERE id_buku='$id_buku'");
if (!$hapus) {
	echo "QUERY ERROR".mysqli_error($koneksi);
} else {
	echo "<script>alert('Data Berhasil Dihapus');window.location.href='../../index.php?content=home'</script>";
}
?>