<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_pend'];
	}

	$tanggal = date("Y");
	$tgl = date("d/m/y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
	<link rel="stylesheet" href="../dist/css/adminlte.min.css">

</head>

<body>

	<table class="table table-borderless">
		<thead>
			<tr>
				<th class="text-center">
					<img src="../dist/img/logo_50_kota.png" alt="Logo 50 Kota" class="img-fluid" width="100px">
				</th>
				<th class="text-center">
					<h5 class="text-center" style="margin-bottom: 0;">PEMERINTAH KABUPATEN LIMA PULUH KOTA</h5>
					<h5 class="text-center" style="margin-bottom: 0;">KECAMATAN SITUJUAH LIMO NAGARI</h5>
					<h2 class="text-center" style="margin-bottom: 0;">NAGARI SITUJUAH BANDA DALAM</h2>
					<b>Jl. Khatib Sulaiman Km. 9, Situjuah Banda Dalam, Telp. (0752) 796547, Kode Pos 26263</b>
				</th>
			</tr>
		</thead>
	</table>

	<hr style="border: .1px solid #000;">
		<?php
			$sql_tampil = "select * from tb_pdd
			where status='Pindah' and id_pend ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>

	<center>
		<h4>
			<u>SURAT KETARANGAN PINDAH</u>
		</h4>
		<h4>No Surat :
			070/ <?php echo $data['id_pend']; ?>/PEM/
			<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Nagari Situjuah Banda Dalam, Kecamatan Situjuah Banda Dalam, Kabupaten Maju jaya, dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>/
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<p>Telah benar-benar Pindah dari Nagari Situjuah Banda Dalam, Kecamatan Situjuah Banda Dalam, Kabupuaten Situjuah Banda Dalam.</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagai mana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<table class="table table-borderless">
		<tr>
			<td width="65%"></td>
			<td class="text-center">
				Situjuah Banda Dalam,
				<?php echo $tgl; ?>
				<br> KEPALA NAGARI SITUJUAH BANDA DALAM
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>(....................................................)
			</td>
		</tr>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>