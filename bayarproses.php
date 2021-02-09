<?php  
session_start();
	include 'koneksi.php';
	$nisn = $_POST['nisn'];
	$nis = $_POST['nis'];
	$tgl = date('d');
	$bln = date('m');
	$thn = date('y');
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$jml_bayar = $_POST['nominal'];
	$id_spp = $_SESSION['id_spp'];
	$mtd_bayar = $_POST['metode'];

	

	if ($_SESSION['nama']=='') {
	 	echo "<script>
				alert('Gagal melakukan transaksi');
				document.location='loginuser.php';
	 		</script>";
	 } 

	 else {
	 	if ($jml_bayar>=1200000) {
	 		$status = "Lunas";
	 	}

	 	else{
	 		$status = "Belum Lunas";
	 	}

	 	$byr = mysqli_query($koneksi, "INSERT INTO tb_pembayaran (nama, nisn, nis, email, telp, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar, status, metode_bayar ) VALUES ('$nama', '$nisn', '$nis', '$email', '$telp', '$tgl', '$bln', '$thn', '$id_spp', '$jml_bayar', '$status', '$mtd_bayar') ");
	 }
			

	 if ($byr) {
	 	echo "<script>
	 		alert('Silahkan Konfirmasi Disini'); 
	 		document.location='bayarkonfirmasi.php';</script>";
	 	
	 }

	 else {
	 	echo "<script>alert('Gagal melakukan pembayaran, silahkan coba lagi'); window.history.back();</script>";
	 }

?>