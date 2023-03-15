<h3> Tambah barang </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode barang</td>
            <td><input type="text" name="kode_barang"> </td>
        </tr>
        <tr>
            <td> Nama barang </td>
            <td> <input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td> Harga barang </td>
            <td> <input type="text" name="harga_barang"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi_tugas.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into barang set
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]'");

    echo "Data barang baru tersimpan";
}
?>