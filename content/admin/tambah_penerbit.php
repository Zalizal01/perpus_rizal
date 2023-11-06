<h3>Tambah Data Penerbit</h3>
<hr>
<form action="content/admin/simpan_penerbit.php" method="post">
	<table>
		<tr>
			<td>ID Penerbit</td>
			<td>:</td>
			<td>
				<input type="text" name="id_penerbit" placeholder="Input ID Penerbit" required>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" placeholder="Input Nama Penerbit" required>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea name="alamat" required></textarea>
			</td>
		</tr>
		<tr>
			<td>Kota</td>
			<td>:</td>
			<td>
				<input type="text" name="kota" placeholder="Input Kota Penerbit" required>
			</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td>
				<input type="number" name="telepon" placeholder="Input Nomor Telfon Penerbit" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit">&#128190; Simpan</button>
			</td>
			<td>
				<button type="reset">&#128465; Hapus</button>
			</td>
		</tr>
	</table>
</form>