<h2>Selamat Datang Admin</h2>
<section class="main-content">
	<div class="kotak">
		<div class="kotak1"> 
			<i class="fa fa-map"></i>
				<span>
				<?php
				$sql= $kdb->query("SELECT count(*) as total from tb_wisata");
				$row = $sql->fetch_assoc();
				echo $row['total'];
				?>
				</span>
           <p>Lokasi</p>
		</div>
	</div>
</section>
