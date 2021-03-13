<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM tb_wisata WHERE id_tempat= '$id'");
if($del){
	header('location:index.php?page=tempat');
}
?>
