<?php 
	if(isset($_GET['submit'])){
		$nama = $_GET['nama'];
		$tempat = $_GET['tempat'];
		$tanggal = $_GET['tanggal'];
		$jk = $_GET['jenis_kelamin'];
		$agama = $_GET['agama'];
	}

	echo "Nama anda adalah : $nama <br> Tempat lahir anda adalah : $tempat <br> Tanggal lahir anda adalah : $tanggal <br> Jenis kelamin anda adalah : $jk <br> Agama anda adalah : $agama <br> ";
	//echo "Nama anda adalah : " . $nama . " <br> Password anda adalah : " . $pass;
 ?>