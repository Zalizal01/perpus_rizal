<?php
include '././koneksi.php';

$dataCari = isset($_GET['txtCari']) ? $_GET['txtCari'] : '';

if(isset($_GET['btnCari'])){
    $data_buku = mysqli_query($koneksi,"SELECT * FROM tbl_buku WHERE nama_buku LIKE '%$dataCari%' ORDER BY nama_buku");
}else{
    $data_buku = mysqli_query($koneksi,"SELECT * FROM tbl_buku");
}
?>

<h3>Data buku</h3>
<hr>

<table width="100%" align="center" border="1" cellpadding="5">
    <tr>
		<th bgcolor="grey">Id Buku</th>
		<th bgcolor="grey">Kategori</th>
		<th bgcolor="grey">Nama Buku</th>
		<th bgcolor="grey">Harga</th>
		<th bgcolor="grey">Stok</th>
		<th bgcolor="grey">Penerbit</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($data_buku)) {
    ?>
    <tr>
		<td><?php echo $row['id_buku']?></td>
		<td><?php echo $row['kategori']?></td>
		<td><?php echo $row['nama_buku']?></td>
		<td><?php echo $row['harga']?></td>
		<td><?php echo $row['stok']?></td>
		<td><?php echo $row['penerbit']?></td>
    </tr>
    <?php 
    }
    ?>
<script>
	window.print();
</script>
</table>
