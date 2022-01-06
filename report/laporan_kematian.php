<?php
include "../inc/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
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
	<center>
		<hr / size="2px" color="black">
		<br>
		<h3>DAFTAR KEMATIAN
		</h3>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>TANGGAL KEMATIAN</th>
					<th>SEBAB</th>
				</tr>
			</thead>
			<tbody>
				<?php

            $no=1;
			$sql_tampil = "SELECT p.id_pend, p.nik, p.nama, m.tgl_mendu, m.sebab, m.id_mendu from 
			tb_mendu m inner join tb_pdd p on p.id_pend=m.id_pdd";
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $data['nik']; ?>
					</td>
					<td>
						<?php echo $data['nama']; ?>
					</td>
					<td>
						<?php echo $data['tgl_mendu']; ?>
					</td>
					<td>
						<?php echo $data['sebab']; ?>
					</td>
				</tr>
				<?php
            $no++;
            }
        ?>
			</tbody>
		</table>
	</center>

	<script>
		window.print();
	</script>
</body>

</html>