<?php
include '././koneksi.php';
$id_buku = $_GET['id'];
$data_buku = mysqli_query($koneksi, "SELECT * FROM tbl_buku  WHERE id_buku='$id_buku'");
$row = mysqli_fetch_array($data_buku);
?>
<h3>Edit Data Buku</h3>
<hr>
<form action="content/home/edit_buku_act.php" method="post">
	<table>
		<tr>
			<td>Id Buku</td>
			<td>:</td>
			<td>
				<input type="text" name="id_buku" value="<?php echo $row['id_buku'] ?>">
			</td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<input type="text" name="kategori" value="<?php echo $row['kategori'] ?>">
			</td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_buku" value="<?php echo $row['nama_buku'] ?>">
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>
				<input type="number" name="harga" value="<?php echo $row['harga'] ?>">
			</td>
		</tr>
		
		<tr>
			<td>Stok</td>
			<td>:</td>
			<td>
				<input type="number" name="stok" value="<?php echo $row['stok'] ?>">
			</td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td>:</td>
			<td>
				<input type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>">
			</td>
		</tr>
		
			<td colspan="2">
				<button type="submit">&#128190; Simpan</button>
			</td>
			<td>
				<button type="reset">&#128465; Hapus</button>
			</td>
		</tr>
	</table>
</form>