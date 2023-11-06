<h3>Tambah Data Buku</h3>
<hr>
<form action="content/home/simpan_buku.php" method="post">
	<table>
		<tr>
			<td>Id Buku</td>
			<td>:</td>
			<td>
				<input type="text" name="id_buku" placeholder="Input ID Buku" required>
			</td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<input type="text" name="kategori" placeholder="Input Kategori" required>
			</td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_buku" placeholder="Input Nama Buku" required>
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>
				<input type="number" name="harga" placeholder="Input Harga" required>
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>:</td>
			<td>
				<input type="number" name="stok" placeholder="Input Stok" required>
			</td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td>:</td>
			<td>
				<input type="text" name="penerbit" placeholder="Input penerbit" required>
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