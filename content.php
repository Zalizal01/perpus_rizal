<?php
if (isset($_GET['content'])) {
	if ($_GET['content'] == 'home') {
		include 'content/home/buku.php';
	} elseif ($_GET['content'] == "tambah_buku") {
		include 'content/home/tambah_buku.php';
	} elseif ($_GET['content'] == "edit_buku") {
		include 'content/home/edit_buku.php';

	} elseif ($_GET['content'] == "admin") {
		include 'content/admin/penerbit.php';
	} elseif ($_GET['content'] == "tambah_penerbit") {
		include 'content/admin/tambah_penerbit.php';
	} elseif ($_GET['content'] == "edit_penerbit") {
		include 'content/admin/edit_penerbit.php'; 

	} elseif ($_GET['content'] == "pengadaan") {
		include 'content/pengadaan/laporan.php';
	} elseif ($_GET['content'] == "cetak_buku") {
		include 'content/pengadaan/cetak_buku.php';
	} elseif ($_GET['content'] == "cetak_penerbit") {
		include 'content/pengadaan/cetak_penerbit.php'; 

	}
	else {
		echo "MODUL BELUM DIBIKIN";
	}
}
?>