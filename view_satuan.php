<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from satuan");

include('header.php');
?>
</br>
<a href="input_satuan.php" class="btn btn-primary">Tambah Satuan</a>
<a href="index.php" class="btn btn-danger">logout</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Id Satuan</td>
        <td>Nama</td>
        <td colspsn="2"> Action</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_satuan'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><a href="edit_satuan.php?id_satuan-<?php echo $tampil['id_satuan'];?>">edit</a></td>
        <td><a href="hapus_satuan.php?id_satuan-<?php echo $tampil['id_satuan'];?>">hapus</a></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');
?>