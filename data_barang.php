<h3> Data barang</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode barang</th>
        <th>Nama barang</th>
        <th>Harga barang</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php

include "koneksi_tugas.php";
$no=1;
$ambildata = mysqli_query($koneksi, "select * from barang");{
while ($tampil = mysqli_fetch_array($ambildata))
    echo "
    <tr>
        <td>$no</td>
        <td>$tampil[Kode_barang]</td>
        <td>$tampil[Nama_barang]</td>
        <td>$tampil[Harga_barang]</td>
        <td><a href='?kode=$tampil[Kode_barang]'> Hapus </a></td>
        <td><a href='barang_ubah.php?kode=$tampil[Kode_barang]'> Ubah </a></td>
    </tr>";

    $no++;

}
?>
</table>

<?php
if(isset($_GET['kode'])){

mysqli_query($koneksi,"delete from barang where Kode_barang='$_GET[kode]'");

echo "Data telah terhapus";
echo "<meta http-equiv=refresh content=2;URL='data_barang.php'>";

}

?>