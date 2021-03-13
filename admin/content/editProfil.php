<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM admin_login WHERE id ='$id'");
$row = $edit->fetch_assoc();
?>
<div class="fm-wrapper">
<h5>Edit Profil</h5>
<form class="fm_wisata" method="POST">
	<label>Username:</label>
	<input type="text" name="user" class="input-field" value="<?php echo $row['username'];?>" required>
	<label>Password:</label>
	<input type="text" name="pass" class="input-field" value="<?php echo $row['password'];?>" required>
	<button type="submit" name="simpan" class="btn-create"><i class="fa fa-plus"></i> Simpan</button>
</form>
</div>
<?php
if(isset($_POST['simpan'])){
$user= $_POST['user'];
$pass= $_POST['pass'];

$res = $kdb->query("UPDATE admin_login SET username = '$user', password = '$pass' WHERE admin_login.id = '$id'");
        if($res){
                echo    "<script>alert('Profil berhasil diupdate!');document.location.href='index.php';</script>";
        } else{
                echo "<script>alert('Gagal mengupdate profil!');document.location.href='index.php?page=ubah';</script>";
        }
}
?>
