<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from transaksi");

include('header.php');
?>
</br>
<a href="input_transaksi.php" class="btn btn-primary">Tambah Transaksi</a>
<a href="index.php" class="btn btn-danger">logout</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Nama Transaksi</td>
        <td>Tanggal Transaksi</td>
        <td>Harga</td>
        <td>QTY</td>
        <td>Diskon</td>
        <td colspsn="2"> Action</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['nama_transaksi'];?></td>
        <td><?php echo $tampil['tgl_transaksi'];?></td>
        <td><?php echo $tampil['harga'];?></td>
        <td><?php echo $tampil['qty'];?></td>
        <td><?php echo $tampil['diskon'];?></td>
        <td><a href="edit_transaksi.php?id_transaksi-<?php echo $tampil['id_transaksi'];?>">edit</a></td>
        <td><a href="hapus_transaksi.php?id_transaksi-<?php echo $tampil['id_transaksi'];?>">hapus</a></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');
?>