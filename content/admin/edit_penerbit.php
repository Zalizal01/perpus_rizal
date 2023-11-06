<?php
include '././koneksi.php';
$id_penerbit = $_GET['id'];
$data_penerbit = mysqli_query($koneksi, "SELECT * FROM tbl_penerbit  WHERE id_penerbit='$id_penerbit'");
$row = mysqli_fetch_array($data_penerbit);
?>
<h3>Edit Data Penerbit</h3>
<hr>
<form action="content/admin/edit_penerbit_act.php" method="post">
	<table>
	<tr>
			<td>Id Penerbit</td>
			<td>:</td>
			<td>
				<input type="text" name="id_penerbit" value="<?php echo $row['id_penerbit'] ?>">
			</td>
		</tr>
		<tr>
			<td>Nama Penerbit</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" value="<?php echo $row['nama'] ?>">
			</td>
		</tr>
		<tr>
			<td>Alamat Penerbit</td>
			<td>:</td>
			<td>
				<textarea name="alamat" required><?php echo $row['alamat'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Kota Penerbit</td>
			<td>:</td>
			<td>
				<input type="text" name="kota" value="<?php echo $row['kota'] ?>">
			</td>
		</tr>
		
		<tr>
			<td>Nomor Telp Penerbit</td>
			<td>:</td>
			<td>
				<input type="number" name="telepon" value="<?php echo $row['telepon'] ?>">
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