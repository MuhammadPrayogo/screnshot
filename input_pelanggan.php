<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into pelanggan (id_pelanggan,nama_pelanggan,no_tlp,status)values(
'".$_POST['id_pelanggan']."',
'".$_POST['nama_pelanggan']."',
'".$_POST['no_tlp']."',
'".$_POST['status']."')");

if($query_input){
header('location:view_pelanggan.php');
}else{
}
}
include('header.php');
?>
<h4>Input Pelanggan </h4>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Pelanggan</td>
		<td><input type="text" name="nama_pelanggan" class="form-control"></td>
	</tr>
    <tr>
		<td>No Telepon</td>
		<td><input type="text" name="no_tlp" class="form-control"></td>
	</tr>
    <tr>
		<td>Status</td>
		<td><input type="text" name="status" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php');
?>