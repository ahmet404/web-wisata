<div class="near">
	<input type="text" value="Kampus 2 STMIK Pelita Nusantara" disabled/><br>
	<button onclick="document.getElementById('data').style.visibility = 'visible'
document.getElementById('data').style.transition = '2s'">Cari Wisata Terdekat</button>
</div>
<table class="dataku" id="data">
	<tr>
		<th>No</th>
		<th>Nama Tempat Wisata</th>
		<th>Jarak</th>
		<th>Longitude</th>
		<th>Latitude</th>
		<th>Hasil</th>
		<th>Lihat</th>
	</tr>

<?php
require "kdb.php";
$i = 1;
$a = "index.php?tujuan=taman+buah";
$sql = $kdb->query("SELECT * FROM tb_wisata ORDER BY jarak ASC");
while($row = $sql->fetch_assoc()){
echo "<tr>
		<td>".$i."</td>
		<td>".$row['nama_wisata']."</td>
		<td>".$row['jarak']."</td>
		<td>".$row['longitude']."</td>
		<td>".$row['latitude']."</td>
		<td>".$row['hasil']."</td>
		<td><a style='font-size:10px;text-align:left;' href=".$a.">View Maps</a></td>
	</tr>";
	$i++;
	if($i == 1){
					$a = "index.php?tujuan=taman+buah";
	} elseif($i == 2){
					$a = "index.php?tujuan=museum+deli+serdang";
	} elseif($i == 3){
					$a = "index.php?tujuan=kolam+renang";
	} elseif($i == 4){
					$a = "index.php?tujuan=jaharun+center";
	} elseif($i == 5){
					$a = "index.php?tujuan=pantai+salju";
	} elseif($i == 6){
					$a = "index.php?tujuan=danau+linting";
	}
	}?>

</table>
