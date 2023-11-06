<?php
include '././koneksi.php';
$no=1;
$dataCari	= isset($_POST['txtCari']) ? $_POST['txtCari'] : '';
?>
<h3>Data Penerbit</h3>
<hr>
<a href="index.php?content=tambah_penerbit">Tambah Data</a>

<div style="text-align: right;margin-bottom: 5px">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
		<b>Nama Penerbit:</b>
		<input name="txtCari" type="text" value="<?php echo $dataCari; ?>" size="40" maxlength="100" />
		<input name="btnCari" type="submit" value="Cari" />
	</form>
</div>

<table width="100%" align="center" border="1" cellpadding="5">
		<th bgcolor="grey">Id Penerbit</th>
		<th bgcolor="grey">NAMA</th>
		<th bgcolor="grey">ALAMAT</th>
		<th bgcolor="grey">KOTA</th>
		<th bgcolor="grey">TELEPON</th>
		<th bgcolor="grey">TOOLS</th>
	</tr>
	<?php
	if(isset($_POST['btnCari'])){
		$data_penerbit = mysqli_query($koneksi,"SELECT * FROM tbl_penerbit WHERE nama LIKE '%$dataCari%' ORDER BY nama");
	}else{
		$data_penerbit = mysqli_query($koneksi,"SELECT * FROM tbl_penerbit");
	}
		while ($row = mysqli_fetch_array($data_penerbit)) {
	?>
	<tr>
		<td><?php echo $row['id_penerbit']?></td>
		<td><?php echo $row['nama']?></td>
		<td><?php echo $row['alamat']?></td>
		<td><?php echo $row['kota']?></td>
		<td><?php echo $row['telepon']?></td>
		<td>
			<a href="index.php?content=edit_penerbit&id=<?php echo $row['id_penerbit']?>">Edit</a>
			<a href="content/admin/hapus_penerbit.php?id=<?php echo $row['id_penerbit']?>">Hapus</a>
		</td>
	</tr>
	<?php 
		}
		?>
</table>