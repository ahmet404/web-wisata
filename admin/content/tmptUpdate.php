<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM tb_wisata WHERE id_tempat='$id'");
$row = $edit->fetch_assoc();
?>

<div class="fm-wrapper">
<h5>Edit Lokasi</h5>
<form class="fm_wisata" method="POST">	
	<label>Nama Wisata:</label>
	<input type="text" name="nm_wisata" class="input-field" value="<?php echo $row['nama_wisata'];?>" required>
	<label>Alamat:</label>
	<input type="text" name="alamat" class="input-field" value="<?php echo $row['alamat'];?>" required>
	<label>Jarak (km):</label>
	<input type="number" name="jarak" class="input-field" value="<?php echo $row['jarak'];?>" required>
	<button type="submit" name="edit" class="btn-create"><i class="fa fa-edit"></i> Update</button>
</form>
</div>
<?php
if(isset($_POST['edit'])){
$nama = $_POST['nm_wisata'];
$alamat= $_POST['alamat'];
$jarak= $_POST['jarak'];
$res = $kdb->query("UPDATE tb_wisata SET nama_wisata = '$nama', alamat = '$alamat', jarak = '$jarak' WHERE tb_wisata.id_tempat = '$id'"); 
        if($res){
                echo    "<script>alert('Data berhasil diupdate!');document.location.href='index.php?page=tempat';</script>";
        } else{
                echo "<script>alert('Gagal mengupdate data!');document.location.href='index.php?page=tempat';</script>";
        }
}
?>
