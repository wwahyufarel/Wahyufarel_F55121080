<?php
include "koneksi_tugas.php";
$sql=mysqli_query($koneksi,"select * from barang where Kode_barang='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Tambah barang </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode barang</td>
            <td><input type="text" name="kode_barang" value="<?php echo $data['Kode_barang']; ?>"> </td>
        </tr>
        <tr>
            <td> Nama barang </td>
            <td> <input type="text" name="Nama_barang"  value="<?php echo $data['Nama_barang']; ?>"></td>
        </tr>
        <tr>
            <td> Harga barang </td>
            <td> <input type="text" name="Harga_barang"  value="<?php echo $data['Harga_barang']; ?>"> </td>
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
    mysqli_query($koneksi, "update barang set
    nama_barang = '$_POST[Nama_barang]',
    harga_barang = '$_POST[Harga_barang]'
    where kode_barang = '$_GET[kode]");

    echo "Data barang telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='data_barang.php'>";
}
?>