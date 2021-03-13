<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:../login.php');
}
require "../kdb.php";
$page = isset($_GET['page']) ? $_GET['page'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';

$sql = $kdb->query("SELECT * FROM admin_login");
$row = $sql->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title>DASHBOARD - Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="assets/img/favicon.png">
		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>   
	</head>

	<body>
		<div id="dashboard" class="dashboard">
			<header>
				<a href="#" class="logo">
					<h1>WEB WISATA</h1>
				</a>
				<div class="toolbar">
					<i class="fa fa-bars" id="bar" onclick="dropSide()"></i>
					<h1>WEB WISATA</h1>
					<div onclick="dropDown()" class="user-out">
						<img src="assets/img/admin.png">
						<i class="fa fa-caret-down"></i>
						<div id="drop-content" class="drop-content">
						<a href="index.php?page=ubah&id=<?php echo $row['id'];?>">Edit Profil</a>
							<a onclick="return confirm('Apakah anda yakin ingin keluar?');" href="../logout.php">Logout</a>
						</div>
					</div>
				</div>	
			</header>
			
			<aside id="sidebar" class="sidebar">
					<h5>ADMINISTRATOR</h5>
					<ul>
						<p>MAIN NAVIGATION</p>
						<li <?php if($page == ""){echo "class='active'";} else{echo "class=''";}?>>
							<a href="index.php">
								<i class="fa fa-dashboard fa-fw"></i> Dashboard
							</a>
						</li>
						<li <?php if($page=="tempat"){echo "class='active'";} else{echo "class=''";}?>>
							<a href="index.php?page=tempat">
								<i class="fa fa-user fa-fw"></i> Tempat Wisata 
							</a>
						</li>
					</ul>
			</aside>
			<main>
				<?php
				$a = "Dashboard";
				switch($page){
					case "tempat" : $a = "Tempat Wisata";break;
					default: $a = "Dashboard";break;
				}
				?>
				<section class="main-header">
					<b><?php echo $a;?></b>
					<?php
					include "assets/function/format_hari_tanggal.php";
					$date = date('Y-m-d');
					if($page == ""){
									echo "<span><m><i class='fa fa-calendar'></i>&nbsp; " .format_hari_tanggal($date)."</m>&nbsp;&nbsp; <n id='jamServer'> " .date('H:i:s')."</n></span>";
					}else{
					?>
					<ul>
						<li><i class="fa fa-dashboard"></i>&nbsp;<a href="index.php">Home</a></li>
						<li>&nbsp;<?php echo $a;?></li>
					</ul>
					<?php }?>
				</section>
				<hr style="border:0;height:1px;background:#333;">
				<?php
								if(isset($page)){
								if($page == "tempat"){
												if($act == "create"){
																include "content/tmptCreate.php";
												}elseif($act == "update"){
																include "content/tmptUpdate.php";
												}elseif($act == "delete"){
																include "content/tmptDelete.php";
												}else{
																include "content/tempat.php";
												}
								}elseif($page == "ubah"){
										  include "content/editProfil.php";
								}else{
												include "content/dashboard.php";
								}
				}else{
								include "content/dashboard.php";
				}
				?>
			</main>
			<footer>
				<span>&copy; 2020 ANNISA RAHMA. All Rights Reserved.</span>
			</footer>
		</div>
		<script type="text/javascript" src="assets/js/jamServer.js"></script>
		<script type="text/javascript" src="assets/js/function.js"></script>
	</body>
</html>
