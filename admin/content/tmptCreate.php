<div class="fm-wrapper">
<h5>Tambah Lokasi</h5>
<form class="fm_wisata" method="POST">	
	<label>Nama Wisata:</label>
	<input type="text" name="nm_wisata" class="input-field" required>
	<label>Alamat:</label>
	<input type="text" name="alamat" class="input-field" required>
	<label>Jarak (km):</label>
	<input type="text" name="jarak" class="input-field" required>
	<button type="submit" name="simpan" class="btn-create"><i class="fa fa-plus"></i> Simpan</button>
</form>
</div>
<?php
if(isset($_POST['simpan'])){
$nama = $_POST['nm_wisata'];
$alamat= $_POST['alamat'];
$jarak= $_POST['jarak'];

$res = $kdb->query("INSERT INTO `tb_wisata` (`id_tempat`, `nama_wisata`, `alamat`, `jarak`) VALUES (NULL, '$nama', '$alamat', '$jarak')");
        if($res){
                echo    "<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?page=tempat';</script>";
        } else{
                echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?page=tempat';</script>";
        }
}
?>
