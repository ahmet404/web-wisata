<section class="main-content">	
	<a class="add" href='index.php?page=tempat&act=create'><i class='fa fa-plus'></i> Tambah</a>
	<table>
		<tr>
			<th>No</th>
			<th>Nama Wisata</th>
			<th>Alamat</th>
			<th>Jarak (km)</th>
			<th colspan="2">Opsi</th>
		</tr>
		<?php
		$i = 1;
		$sql = $kdb->query("SELECT * FROM tb_wisata");
		while($row = $sql->fetch_assoc()){
		echo "<tr>
						<td>".$i."</td>
						<td>".$row['nama_wisata']."</td>
						<td>".$row['alamat']."</td>
						<td>".$row['jarak']."</td>
						<td><a href='index.php?page=tempat&act=update&id=".$row['id_tempat']."'><i class='up fa fa-pencil-square-o'></i></a></td>
						<td><a onclick=\"return confirm('Yakin ingin menghapus ?')\" href='index.php?page=tempat&act=delete&id=".$row['id_tempat']."'><i class='del fa fa-trash'></i></a></td>
					</tr>";
		$i++;
		}?>
	</table>
</section>
