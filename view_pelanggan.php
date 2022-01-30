<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from pelanggan");

include('header.php');
?>
</br> 
<a href="input_pelanggan.php" class="btn btn-primary">Tambah Pelanggan</a>
<a href="index.php" class="btn btn-danger">logout</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Nama Pelanggan</td>
        <td>No Telepon</td>
        <td>Status</td>
        <td colspsn="2"> Action</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['nama_pelanggan'];?></td>
        <td><?php echo $tampil['no_tlp'];?></td>
        <td><?php echo $tampil['status'];?></td>
        <td><a href="edit_pelanggan.php?id_pelanggan-<?php echo $tampil['id_pelanggan'];?>">edit</a></td>
        <td><a href="hapus_pelanggan.php?id_pelanggan-<?php echo $tampil['id_pelanggan'];?>">hapus</a></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');
?>