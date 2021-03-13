<?php 
include error_reporting(0);
?>
<form class="search" style="float:left;" action="" method="GET" autocomplete="off">
    <span style="display:block;color:#666;">Dari</span>
    <input type="text" name="asal" value="Kampus 2 STMIK Pelita Nusantara" disabled><br>
	 <span style="display:block;color:#666;">Ke</span>
    <input type="text" name="tujuan" onkeyup="this.value = this.value.toLowerCase()"><br><br>
    <button type="submit" ><i class="fa fa-search"></i> Cari</button>
<?php
$default = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509754.70767741493!2d98.42689817634272!3d3.480622491832761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303147303ffd6655%3A0x3039d80b220cb10!2sDeli%20Serdang%20Regency%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1607748003518!5m2!1sen!2sid";
$museum = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7964.309589197656!2d98.86691647236319!3d3.551770697919975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x303148619328435d%3A0xf1eda21878bba7dc!2sKampus%202%20STMIK%20Pelita%20Nusantara%2C%20Jalan%20Lintas%20Sumatera%2C%20Tanjung%20Garbus%20Satu%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5542593!2d98.87900309999999!4m5!1s0x3031486ee1aff5a3%3A0x53053f37fc0b166b!2sMuseum%20Deli%20Serdang%2C%20Petapahan%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5522766999999997!2d98.86638169999999!5e0!3m2!1sen!2sid!4v1607746241869!5m2!1sen!2sid";
$tb = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d13394.301103568234!2d98.86322756764672!3d3.55298779445321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x303148619328435d%3A0xf1eda21878bba7dc!2sKampus%202%20STMIK%20Pelita%20Nusantara%2C%20Jalan%20Lintas%20Sumatera%2C%20Tanjung%20Garbus%20Satu%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5542593!2d98.87900309999999!4m5!1s0x30313dbe6d8de983%3A0x223540e117689e5d!2sTaman%20buah%20lubuk%20pakam%2C%20Sumbul%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5509073!2d98.8631723!5e0!3m2!1sen!2sid!4v1607746106482!5m2!1sen!2sid";
$jtc = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63717.965057296205!2d98.85162522561292!3d3.5008676201982185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x303148619328435d%3A0xf1eda21878bba7dc!2sKampus%202%20STMIK%20Pelita%20Nusantara%2C%20Jalan%20Lintas%20Sumatera%2C%20Tanjung%20Garbus%20Satu%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5542593!2d98.87900309999999!4m5!1s0x303140d557e4c4ad%3A0x5f03504df44ed680!2sJaharun%20Tourism%20City%20Center%2C%20Jalan%20Besar%20Petumbukan%2C%20Desa%20Jaharun%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.4471616999999997!2d98.8762153!5e0!3m2!1sen!2sid!4v1607751173654!5m2!1sen!2sid";
$dl = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d254900.9867684542!2d98.66584300533101!3d3.392154138015958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x303148619328435d%3A0xf1eda21878bba7dc!2sKampus%202%20STMIK%20Pelita%20Nusantara%2C%20Jalan%20Lintas%20Sumatera%2C%20Tanjung%20Garbus%20Satu%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5542593!2d98.87900309999999!4m5!1s0x303111c2f4040335%3A0x88b06d1f0960d1fb!2sDANAU%20LINTING%2C%20Jalan%20Simpang%20Gunung%20Manumpak%20A%2C%20Sibunga%20Bunga%20Hilir%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.2295471!2d98.7257647!5e0!3m2!1sen!2sid!4v1607746608371!5m2!1sen!2sid";
$ps = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d254890.63642241326!2d98.71958315531276!3d3.431180408273428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x303148619328435d%3A0xf1eda21878bba7dc!2sKampus%202%20STMIK%20Pelita%20Nusantara%2C%20Jalan%20Lintas%20Sumatera%2C%20Tanjung%20Garbus%20Satu%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5542593!2d98.87900309999999!4m5!1s0x303114985e6dd57b%3A0x9d716555cca8f69c!2sPantai%20Salju%2C%20Mabar%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.3072923!2d98.812741!5e0!3m2!1sen!2sid!4v1607746644980!5m2!1sen!2sid";
$kr = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15928.59700714698!2d98.85978156965997!3d3.553055325178131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x303148619328435d%3A0xf1eda21878bba7dc!2sKampus%202%20STMIK%20Pelita%20Nusantara%2C%20Jalan%20Lintas%20Sumatera%2C%20Tanjung%20Garbus%20Satu%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5542593!2d98.87900309999999!4m5!1s0x3031498908d5be55%3A0xb838a8ea59dcb66b!2sKolam%20Renang%20Deli%20Serdang%2C%20Jalan%20Negara%2C%20Petapahan%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!3m2!1d3.5530459!2d98.86570689999999!5e0!3m2!1sen!2sid!4v1607746541050!5m2!1sen!2sid";

$lokasi = array('museum','museum deli serdang','taman buah lubuk pakam', 'taman buah','jaharun center','jaharun tourism center','danau linting','pantai salju','kolam renang','kolam renang lubuk pakam','kolam renang deli serdang');
$to = $_GET['tujuan'];
if(!isset($to) || empty($to)){
	$url = $default;
}elseif($to == 'museum' || $to == 'museum deli serdang'){
	$url = $museum;
}elseif($to == 'taman buah lubuk pakam' || $to == 'taman buah'){
	$url = $tb;
}elseif($to == 'jaharun center' || $to == 'jaharun tourism center'){
	$url = $jtc;
}elseif($to == 'danau linting'){
	$url = $dl;
}elseif($to == 'pantai salju'){
	$url = $ps;
}elseif($to == 'kolam renang' || $to == 'kolam renang lubuk pakam' || $to == 'kolam renang deli serdang'){
	$url = $kr;
} elseif($to != $lokasi[0] || $to != $lokasi[1] || $to != $lokasi[2] || $to != $lokasi[3] || $to != $lokasi[4] || $to != $lokasi[5] || $to != $lokasi[6] || $to != $lokasi[7] || $to != $lokasi[8] || $to != $lokasi[9] || $to != $lokasi[10]){
	echo "<script>alert('Lokasi tidak ditemukan!');document.location.href='index.php';</script>";
}else{
	$url = $default;
}
?>

</form>
<iframe src="<?php echo $url;?>" height="500" frameborder="0" style="border:0;float:right;width:76%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
