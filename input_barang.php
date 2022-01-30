<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into barang (id_barang,nama,kategori_id,satuan_id)values(
'".$_POST['id_barang']."',
'".$_POST['nama']."',
'".$_POST['kategori_id']."',
'".$_POST['satuan_id']."')");

if($query_input){
header('location:view_barang.php');
}else{
}
}
include('header.php');
?>
<h4>Input Barang </h4>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php');