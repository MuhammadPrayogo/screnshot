<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into transaksi (id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan)values(
'".$_POST['id_transaksi']."',
'".$_POST['nama_transaksi']."',
'".$_POST['tgl_transaksi']."',
'".$_POST['harga']."',
'".$_POST['qty']."',
'".$_POST['id_barang']."',
'".$_POST['diskon']."',
'".$_POST['id_pelanggan']."')");

if($query_input){
header('location:view_transaksi.php');
}else{
}
}
include('header.php');
?>
<h4>Input Transaksi </h4>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Transaksi</td>
		<td><input type="text" name="nama_transaksi" class="form-control"></td>
	</tr>
    <tr>
		<td>Tanggal Transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control"></td>
	</tr>
    <tr>
		<td>Harga</td>
		<td><input type="text" name="harga" class="form-control"></td>
	</tr>
    <tr>
		<td>QTY</td>
		<td><input type="text" name="qty" class="form-control"></td>
	</tr>
    <tr>
		<td>Diskon</td>
		<td><input type="text" name="diskon" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php');
?>