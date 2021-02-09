<?php  

include 'koneksi.php';

$id = $_POST['id_pembayaran'];
$no = $_POST['no_transaksi'];

$hasil = mysqli_query($koneksi, "UPDATE tb_pembayaran SET no_transaksi='$no' WHERE id_pembayaran='$id' ");
mysqli_query($koneksi, $hasil);

echo "<script>
		alert('Terimakasih telah melakukan transaksi bersama kami, tunggu setelah petugas mengkonfirmasi transaksi anda');
		document.location='bayarspp.php';
	</script>";



?>