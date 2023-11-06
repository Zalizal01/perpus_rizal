<?php
include '././koneksi.php';

$dataCari = isset($_GET['txtCari']) ? $_GET['txtCari'] : '';

if(isset($_GET['btnCari'])){
    $data_penerbit = mysqli_query($koneksi,"SELECT * FROM tbl_penerbit WHERE nama LIKE '%$dataCari%' ORDER BY nama");
}else{
    $data_penerbit = mysqli_query($koneksi,"SELECT * FROM tbl_penerbit");
}
?>

<h3>Data Penerbit</h3>
<hr>

<table width="100%" align="center" border="1" cellpadding="5">
    <tr>
        <th bgcolor="grey">Id Penerbit</th>
        <th bgcolor="grey">NAMA</th>
        <th bgcolor="grey">ALAMAT</th>
        <th bgcolor="grey">KOTA</th>
        <th bgcolor="grey">TELEPON</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($data_penerbit)) {
    ?>
    <tr>
        <td><?php echo $row['id_penerbit']?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['kota']?></td>
        <td><?php echo $row['telepon']?></td>
    </tr>
    <?php 
    }
    ?>
<script>
	window.print();
</script>
</table>
