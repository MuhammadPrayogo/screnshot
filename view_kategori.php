<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from kategori");

include('header.php');
?>
</br>
<a href="input_kategori.php" class="btn btn-primary">Tambah Kategori</a>
<a href="index.php" class="btn btn-danger">logout</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Id Kategori</td>
        <td>Nama</td>
        <td colspsn="2"> Action</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_kategori'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><a href="edit_kategori.php?id_kategori-<?php echo $tampil['id_kategori'];?>">edit</a></td>
        <td><a href="hapus_kategori.php?id_katagori-<?php echo $tampil['id_kategori'];?>">hapus</a></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');
?>