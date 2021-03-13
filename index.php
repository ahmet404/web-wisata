<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>METODE HARVESINE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
				<div id="menunav">
  					<div class="section">
  						<a href="index.php" id="logo" target="_blank">WISATA DELI SERDANG</a>
  						<label for="toggle-1" class="toggle-menu"/>
  							<ul>
    							<li></li>
    							<li></li>
    							<li></li>
  							</ul>
 						 </label>
 						 <input type="checkbox" id="toggle-1">
 						 <nav>
							<ul>
      					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
								<li><a href="index.php?page=nearby"><i class="fa fa-map-marker"></i>Nearby</a></li>
								<li><a href="index.php?page=data"><i class="fa  fa-map"></i>Tempat Wisata</a></li>
						    </ul>
						  </nav>	
					  </div>
				</div>
			<main>
				<?php
				if(isset($page)){
						  if($page == "data"){
									 include "page/data.php";
							} elseif($page == "nearby"){
											include "page/nearby.php";
							} elseif($page == "maps"){
									 include "page/maps.php";
						  } else{
									 include "page/form.php";
						  }
				} else{
						  include "page/form.php";
				}
				?>
			</main>
			<footer>
				<p>Copyright &copy;2020 ANNISA RAMADANI</p>
				<p>STMIK PELITA NUSANTARA</p>
			</footer>
		</div>
	</body>
</html>
